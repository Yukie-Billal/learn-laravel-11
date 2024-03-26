<?php

namespace App\Livewire;

use Livewire\Component;

class AddTodo extends Component
{
    public $todo = '';

    public function store() {
        dd($this->todo);
    }

    public function render()
    {
        return view('livewire.add-todo');
    }
}
