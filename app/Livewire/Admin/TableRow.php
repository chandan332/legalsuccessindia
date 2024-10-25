<?php

namespace App\Livewire\Admin;

use App\Models\Client;
use Livewire\Component;

class TableRow extends Component
{
    public $index;
    public $client;
    public $status;

    public function delete(Client $client)
    {
        $client->delete();
    }

    public function changeStatus(Client $client)
    {
        $client->status = !$client->status;
        $client->save();
    }

    public function render()
    {
        return view('livewire.admin.table-row');
    }
}
