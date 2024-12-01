<?php

namespace App\Livewire\Payment;

use App\Models\Payment;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Form extends Component
{
    public $queryParams = [];

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
    public $fees = 999;

    public function mount()
    {
        $this->queryParams["name"] = request()->query('name', "No Name");
        $this->queryParams["phone"] = request()->query('phone', "No Phone");
    }

    public function submit()
    {
        $values = $this->validate();
        // dd($this->queryParams["name"]);
        $values['businessName'] = "No Name";
        $values['businessAddress'] = "No Address";
        $values['businessEmployees'] = 0;
        Payment::create([...$values, 'areaName' => $this->areaName, 'railwayName' => $this->railwayName, 'LandMarkName' => $this->LandMarkName]);

        return redirect()->route('payment.index', [
            "name" => $this->queryParams["name"],
            "phone" => $this->queryParams["phone"],
            "fees" => $this->fees
        ]);

        // $this->dispatch('process-payment', $values['fees']);
    }

    public function render()
    {
        return view('livewire.payment.form');
    }
}
