<?php

namespace App\Livewire;

use App\Models\Clientem;
use Livewire\Component;

class Clientes extends Component
{
    public function render()
    {
        $clientes = Clientem::get();
        return view('livewire.clientes', [
            'clientes' => $clientes
        ]);  //reder this view
    }
}
