<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginForm extends Component
{
    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|min:6')]
    public $password = '';

    public function login() {
        if ($this->email == "admin@admin.com" && $this->password == "Khurshid@1997") {
            session()->put("admin", true);
            return redirect("/admin");
        }
        session()->flash("error", "Invalid Credentials");
        return redirect("/admin/login");
    }

    public function render()
    {
        return view('livewire.admin.login-form');
    }
}
