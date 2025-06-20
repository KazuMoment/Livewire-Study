<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;


class BookList extends Component
{
    use WithPagination;

    public $term = '';

    public function delete(Book $book)
    {
        $book->delete();
        $this->resetPage();
    }


    #[Title('Book List - Home')]
    public function render()
    {

        $query = Book::query();

        if($this->term){
            $query->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($this->term) . '%']);
        }

        return view('livewire.book-list', [
            'books' => $query->orderBy('created_at', 'desc')->paginate(5),
        ]);
    }
}
