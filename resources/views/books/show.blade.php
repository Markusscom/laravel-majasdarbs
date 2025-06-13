<x-app-layout>
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ $singleBook->title }}</h2>
<h3 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ $singleBook->author }}</h3>
<p class="p-6 text-gray-900 dark:text-gray-100">{{ $singleBook->released_at }}</p>

@if (session('status'))
    <div style="color: green;" class="p-6 text-gray-900 dark:text-gray-100">
        {{ session('status') }}
    </div>
@endif


<a href="{{ route( 'books.index' )}}" class="p-6 text-gray-900 dark:text-gray-100">All books</a>
</x-app-layout>