<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Category;

class CreateBook extends Component
{

    #[Rule('string|required|min:3|max:50')]
    public $title;

    #[Rule('string|required|min:3|max:50')]
    public $author;

    #[Rule('integer|required|min:1|max:10')]
    public $rating;

    public $category_id;
    public $categories = [];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function save()
    {

        $this->validate();

        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating,
        ]);

        $this->redirect('/book', navigate:true);
    }

    public function render()
    {
        return view('livewire.create-book');
    }
}
