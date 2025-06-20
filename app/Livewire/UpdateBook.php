<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UpdateBook extends Component
{

    public Book $book;

    #[Rule('string|required|min:3|max:50')]
    public $title;

    #[Rule('string|required|min:3|max:50')]
    public $author;

    #[Rule('integer|required|min:1|max:10')]
    public $rating;

    public function mount(Book $book)
    {
        $this->book = $book;
        $this->title = $book->title;
        $this->author = $book->author;
        $this->rating = $book->rating;
    }


    public function update()
    {
        $this->validate();

        $this->book->update([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating,
        ]);

        $this->redirect('/book', navigate:true);
    }

    public function render()
    {
        return view('livewire.update-book');
    }
}
