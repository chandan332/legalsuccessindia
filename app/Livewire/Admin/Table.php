<?php

namespace App\Livewire\Admin;

use App\Models\Client;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Table extends Component
{
    #[Computed()]
    public function clients()
    {
        return Client::all();
    }

    public function render()
    {
        return view('livewire.admin.table');
    }
}
