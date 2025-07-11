<div>

    <livewire:page-header subtitle="Here's a list of your book reviews:">

    {{-- Search --}}

    <input
        type="text"
        wire:model.live.debounce.300ms="term"
        placeholder="Search for Books..."
        class="search input"
    >

    <ul class="list">
        @foreach($books as $book)
            <li wire:key="{{ $book->id }}">
                <button
                    wire:click="delete({{ $book->id }})" class="ml-5">
                    Delete
                </button>
                <a href="{{ route('book.update', $book->id) }}">
                    <button type="button">Update</button>
                </a>
                <h3>{{ $book->title }}</h3>
                <h4>{{ $book->author }}</h4>
                <h4>{{ $book->category->name }}</h4>
                <p>Rating: {{ $book->rating }}/10</p>
            </li>
        @endforeach
    </ul>

    <div class="mt-4">
        {{ $books->links() }}
    </div>
</div>
