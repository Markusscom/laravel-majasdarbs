<x-layout>
<h2>{{ $singleBook->title }}</h2>
<h3>{{ $singleBook->author }}</h3>
<p>{{ $singleBook->released_at }}</p>

@if (session('status'))
    <div style="color: green;">
        {{ session('status') }}
    </div>
@endif


<a href="{{ route( 'books.index' )}}">All books</a>
</x-layout>