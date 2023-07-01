<?php

// app/Http/Livewire/GraphComponent.php

namespace App\Http\Livewire;

use Livewire\Component;

class GraphComponent extends Component
{
    public $data = [100, 150, 200, 250, 300, 350];

    public function render()
    {
        return view('livewire.graph-component');
    }
}
