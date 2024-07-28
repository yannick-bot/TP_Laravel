@extends('master')
@section('title', "Liste des livres")

@section('content')

<form action="{{ route('books.search') }}">
    @csrf
    <div class="form-row">
        <input class="trouve" type="search" name="search" placeholder="Search for books" />
        <button type="submit">Search</button>
    </div>
</form>


<div class="container mt-4">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Published Year</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td><a href="{{asset('pdf/' . $book->pdf)}}">{{$book->title}}</a></td>
                    <td>{{$book->author->name}}</td>
                    <td>{{$book->isbn}}</td>
                    <td>{{$book->published_year}}</td>
                    <td>
                        <a href="{{route('books.edit', $book->id)}}">Modifier</a>
                    </td>
                    <td>
                        <form action="{{route('books.destroy', $book->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-warning mb-2">Supprimer</button>
                        </form>
                    </td>
                </tr>

            @endforeach


        </tbody>

    </table>

    <div>
        {{ $books->links('pagination::simple-bootstrap-4') }}
    </div>

</div>

@endsection
