<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{
    use WithPagination;

    public function render()
    {
        $todos = Todo::paginate();

        return view('livewire.todo-list', compact('todos'));
    }

    /**
     * remove ?page= from url
     * @return array
     */
    public function getQueryString()
    {
        return [];
    }
}
