<x-app-layout>
<h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Edit book</h1>

<form action="{{ route('books.update', $editBook->id) }}" method="post" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @csrf
    @method('put')

    <input type="text" name="title" placeholder="title goes here" value="{{ old('title', $editBook->title) }}">
    @error('title')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <input type="text" name="author" placeholder="author goes here" value="{{ old('author', $editBook->author) }}">
    @error('author')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <input type="date" name="released_at" placeholder="date goes here" value="{{ old('released_at', $editBook->released_at) }}">
    @error('released_at')
        <div style="color: red;">{{ $message }}</div>
    @enderror

    <input type="submit" value="Update" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
</form>
</x-app-layout>