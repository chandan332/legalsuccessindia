<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Resources\ClientController;

class FormController extends Controller
{
    private $clients;
    public function __construct()
    {
        $this->clients = new ClientController();
    }
    public function showForm(string $id = "license")
    {
        return view('pages.application', compact('id'));
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'state' => 'required',
            'message' => 'required'
        ]);

        $client = $this->clients->create($request->name, $request->email, $request->phone, $request->state, $request->message);
        request()->session()->put('id', $client->id);
        return redirect("/thank-you");
        // return redirect()->route("payment.index.id", ["id" => $request->id, "name" => $request->name, "phone" => $request->phone]);
    }
}
