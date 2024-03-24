<?php

namespace App\Livewire;

use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Livewire\Component;

class ComponentsViewer extends Component
{
  public array $componentGroup = [];
  public array $items = [];
  public string $componentGroupLabel;
  public string $currentComponent = '';

  public function boot(): void
  {
    $this->items = $this->componentGroup['items'];
    $this->currentComponent = $this->items[0];
    $this->componentGroupLabel = $this->componentGroup['label'];
  }

  public function render(): View
  {
    $bladeComponentPath = $this->getBladeComponentFilePath($this->currentComponent);
    $bladeComponentProps = $this->extractPropertiesFromBladeComponentFile($bladeComponentPath);

    return view('livewire.components-viewer', [
      'items' => $this->items,
      'props' => $bladeComponentProps
    ]);
  }

  public function changeCurrentComponent($component): void
  {
    $this->currentComponent = $component;
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
}