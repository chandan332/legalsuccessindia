<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;
use App\Models\Review as ReviewModel;

class Review extends Component
{
    use WithFileUploads;

    #[Validate('required|string|max:255')]
    public $name = '';

    #[Validate('required|numeric|min:1|max:5')]
    public $stars = 5;

    #[Validate('nullable|image|max:1024')]
    public $photo;

    #[Validate('required|string')]
    public $message = '';

    public $open;

    public function toggle()
    {
        $this->open = !$this->open;
    }

    public function submit()
    {
        $validated = $this->validate();
        if($this->photo) {
            $validated['photo'] = $this->photo->store('uploads', 'public');
            $url = Storage::url($validated['photo']);
        } else {
            $url = '';
        }
        ReviewModel::create(['name' => $validated['name'], 'rating' => $validated['stars'], 'imagePath' => $url, 'message' => $validated['message']]);
        session()->flash('message', 'File uploaded successfully.');
        $this->reset();
    }

    public function render()
    {
        $this->open = session()->has('message');
        return view('livewire.review', ['reviews' => ReviewModel::all()]);
    }
}
