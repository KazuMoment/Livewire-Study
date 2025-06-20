<div class="create">
    <h3>Create new book</h3>

    <form wire:submit="save">
        <div class="field">
            <label>Book Title:</label>
            <input class="bg-gray-700 text-gray-300" type="text" wire:model="title">
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="field">
            <label>Book Author:</label>
            <input class="bg-gray-700 text-gray-300" type="text" wire:model="author">
            @error('author')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="field">
            <label>Book Rating:</label>
            <input class="bg-gray-700 text-gray-300" type="number" wire:model="rating">
            @error('rating')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <button>Add Book</button>
    </form>
</div>
