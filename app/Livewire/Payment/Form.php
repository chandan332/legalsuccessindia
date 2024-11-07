<?php

namespace App\Livewire\Payment;

use App\Models\Payment;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Form extends Component
{
    #[Validate('nullable|string|max:255')]
    public $businessName;

    #[Validate('nullable|string|max:255')]
    public $businessAddress;

    #[Validate('nullable|numeric')]
    public $businessEmployees;

    public $areaName;

    public $railwayName;

    #[Validate('required|numeric')]
    public $pinCode;

    public $LandMarkName;

    #[Validate('required')]
    public $platform;

    #[Validate('required|numeric')]
    public $fees = 1179;

    public function submit()
    {
        $values = $this->validate();
        // dd($values);
        $values['businessName'] = "No Name";
        $values['businessAddress'] = "No Address";
        $values['businessEmployees'] = 0;
        Payment::create([...$values, 'areaName' => $this->areaName, 'railwayName' => $this->railwayName, 'LandMarkName' => $this->LandMarkName]);
        $this->reset();
        $this->dispatch('process-payment', $values['fees']);
    }

    public function render()
    {
        return view('livewire.payment.form');
    }
}
