@extends('master')
@section('title', "Liste des auteurs")

@section('content')

<form action="{{ route('authors.search') }}">
    @csrf
    <div class="form-row">
        <input class="trouve" type="search" name="search" placeholder="Search for authors" />
        <button type="submit">Search</button>
    </div>
</form>


<div class="container mt-4">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Biography</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{$author->id}}</td>
                    <td><a href="{{route('authors.booksIndex', $author->id)}}">{{$author->name}}</a></td>
                    <td>{{$author->biography}}</td>
                    <td>
                        <a href="{{route('authors.edit', $author->id)}}">Modifier</a>
                    </td>
                    <td>
                        <form action="{{route('authors.destroy', $author->id)}}" method="POST">
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
        {{ $authors->links('pagination::simple-bootstrap-4') }}
    </div>
</div>

@endsection
