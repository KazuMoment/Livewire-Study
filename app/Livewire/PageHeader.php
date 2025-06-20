<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class PageHeader extends Component
{
    public $name;
    public $subtitle;

    public function mount($subtitle)
    {
        $this->subtitle = $subtitle;
        $this->name = Auth::user()->name;
    }

    public function render()
    {
        return view('livewire.page-header');
    }
}
