<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Pagination extends Component
{
    public $currentPage;
    public $lastPage;

    public function mount($currentPage, $lastPage)
    {
        $this->currentPage = $currentPage;
        $this->lastPage = $lastPage;
    }

    public function setPage($page)
    {
        $this->currentPage = $page;
        $this->emitUp('pageChanged', $page); // Emit an event to the parent component
    }

    public function render()
    {
        return view('v2.livewire.components.pagination');
    }
}
