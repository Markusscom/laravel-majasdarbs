<x-app-layout>
<h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Books</h1>
<a href="/books/create" class="p-6 text-gray-900 dark:text-gray-100">Create a book</a>
<ul class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    @foreach($books as $book)
        <li class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <h2 class="p-6 text-gray-900 dark:text-gray-100">{{ $book->title }}</h2>
            <div>
                <a href="{{ route('books.show', $book->id) }}" class="p-6 text-gray-900 dark:text-gray-100">Show</a>
                <a href="{{ route('books.edit', $book->id) }}" class="p-6 text-gray-900 dark:text-gray-100">Edit</a>
            </div>
        </li>
    @endforeach
</ul>
</x-app-layout>