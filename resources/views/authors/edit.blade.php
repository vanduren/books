<form action="{{ route('authors.update', $author) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $author->name }}">
    <input type="submit" value="wijzig naam">
</form>
@foreach ($author->books as $book)
<div>{{ $book->title }}</div>
@endforeach
<hr>

<form action="{{ route('add-book', $author) }}" method="POST">
    @csrf
    <select name="book_id" id="book_id">
        <option value="">-- selecteer een boek --</option>
        @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->title }}</option>
        @endforeach
    </select>
    <br>
    <input type="submit" value="voeg boek toe">
</form>
<hr>
<form action="{{ route('remove-book', $author) }}" method="POST">
    @csrf
    <select name="book_id" id="book_id">
        <option value="">-- selecteer een boek --</option>
        @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->title }}</option>
        @endforeach
    </select>
    <br>
    <input type="submit" value="verwijder boek uit auteurslijst">
</form>
