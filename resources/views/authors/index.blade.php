@foreach($authors as $author)
<div>
    <a href="{{ route("authors.edit", $author) }}">{{ $author->name }}</a>
    @foreach ($author->books as $book)
        <div>{{ $book->title }}</div>
    @endforeach
    <hr>
</div>
@endforeach
