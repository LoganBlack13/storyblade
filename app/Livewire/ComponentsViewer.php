<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class ComponentsViewer extends Component
{
  public array $componentGroup = [];
  public array $items = [];
  public string $componentGroupLabel;

  public function boot(): void
  {
    $this->items = $this->componentGroup['items'];
    $this->componentGroupLabel = $this->componentGroup['label'];
  }

  public function render(): View
  {
    return view('livewire.components-viewer', [
      'items' => $this->items
    ]);
  }
}
