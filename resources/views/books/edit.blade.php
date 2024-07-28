@extends('master')
@section('title', "Modification d'un livre")


@section('content')
<h1>Ajout d'un livre</h1>
<form action="{{route('books.update', $book->id)}}" method="POST" class="border border-danger border-4 rounded-4 p-3">
    @csrf
    @method('PUT')
    <div>
        <label for="authors">Authors</label>
        <select name="author" id="author">
            @foreach ($authors as $author)
                <option value="{{$author->id}}" {{($author->id == $book->author_id) ? 'selected' : ''}}>
                    {{$author->name}} </option>

            @endforeach
        </select>

    </div>
    <div>
        <label for="title">Title:</label>
        <input id="title" name="title" class="form-control border border-info" type="text" required value={{$book->title}}>
    </div>

    <div>
        <label for="isbn">ISBN</label>
        <input id="isbn" name="isbn" class="form-control border border-info" type="text" required value="{{$book->isbn}}">
    </div>

    <div>
        <label for="published_year">Published Year</label>
        <input id="published_year" name="published_year" class="form-control border border-info" type="text" required value="{{$book->published_year}}">
    </div>

    <div>
        <button type="submit" class="btn btn-primary mb-2 mt-4">Envoyer</button>
    </div>



</form>


@endsection

