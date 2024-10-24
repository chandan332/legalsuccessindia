<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review as ReviewModel;

class Customer extends Component
{
    public function render()
    {
        return view('livewire.customer',[
            'reviews' => ReviewModel::all()
        ]);
    }
}
