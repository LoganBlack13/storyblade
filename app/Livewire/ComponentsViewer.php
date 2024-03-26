<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Livewire\Component;

class ComponentsViewer extends Component
{
  public array $componentGroup = [];
  public array $items = [];
  public string $componentGroupLabel;
  public string $currentComponent = '';
  public array $props = [];
  public array $selectedProps = [];
  public ?string $slot = null;

  public function mount(): void
  {
    $this->items = $this->componentGroup['items'];
    $this->currentComponent = $this->items[0];
    $this->componentGroupLabel = $this->componentGroup['label'];
    $bladeComponentPath = $this->getBladeComponentFilePath($this->currentComponent);
    $bladeComponentProps = $this->extractPropertiesFromBladeComponentFile($bladeComponentPath);
    $this->generateDefaultProps($bladeComponentProps);
  }

  public function render(): View
  {

    $render = Blade::render('components.'.$this->currentComponent, array_merge(['slot'=> $this->slot ?? "default"], $this->props));
    return view('livewire.components-viewer', [
      'items' => $this->items,
      'availableProps' => $this->selectedProps,
      'dynamicComponent' => $render
    ]);
  }

  public function changeCurrentComponent($component): void
  {
    $this->reset('props');
    $this->currentComponent = $component;
    $bladeComponentPath = $this->getBladeComponentFilePath($this->currentComponent);
    $bladeComponentProps = $this->extractPropertiesFromBladeComponentFile($bladeComponentPath);
    $this->generateDefaultProps($bladeComponentProps);
  }

  function extractPropertiesFromBladeComponentFile($bladeFilePath): array
  {
    $bladeContent = file_get_contents($bladeFilePath);
    $properties = [];

    // Extract $properties array from PHP code block
    preg_match('/\$properties\s*=\s*(\[.*?\]);/s', $bladeContent, $matches);

    if (!empty($matches[1])) {
      $properties = eval("return {$matches[1]};");
    }

    return $properties;
  }

  private function getBladeComponentFilePath(string $componentName): ?string
  {
    $componentName = str_replace('.', '/', $componentName);
    $componentPath = resource_path("views/components/{$componentName}.blade.php");

    if (File::exists($componentPath)) {
      return $componentPath;
    }

    return null;
  }

  private function generateDefaultProps(array $bladeComponentProps): void
  {
    $this->reset('selectedProps');
    foreach ($bladeComponentProps as $bladeComponentProp => $values){
      foreach ($values as $key => $value){
        $this->selectedProps[$bladeComponentProp][$value] = $key === 0;
        if($key === 0){
          $this->props[$bladeComponentProp] = $value;
        }
      }
    }
  }

  function clearProp(array &$prop): void
  {
    foreach ($prop as &$value) {
      if (is_array($value)) {
        $this->clearProp($value);
      }
      $value = false;
    }
  }

  public function updateProps(string $props, $value): void
  {
    $this->clearProp($this->selectedProps[$props]);
    $this->selectedProps[$props][$value] = true;
    if($value === 'false'){
      $value = false;
    }
    if($value === 'true'){
      $value = true;
    }
    $this->props[$props] = $value;
  }
}