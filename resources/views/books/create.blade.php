@extends('master')
@section('title', "Création d'un Livre")


@section('content')
<h1>Création d'un Livre</h1>


<div class="container">
    <form action="{{route('books.store')}}" method="POST" class="border border-danger border-4 rounded-4 p-3">
        @csrf
        <!-- Pour gérer les erreurs soulevés par les règles de validation du formulaire -->
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        ({{$error}})
                    </li>
                @endforeach
            </ul>
        @endif

        <div>
            <label for="author">Author</label>
            <select name="author" class="form-select" id="author">
                @foreach ($authors as $author)
                    <option value="{{$author->id}}" {{($author->id == old('author')) ? 'selected' : ''}}> {{$author->name}}
                    </option>
                @endforeach
            </select>

        </div>

        <!-- La fonction hold() permet de faire revenir les infos entrés dans le formulaire en cas d'erreurs -->
        <div class="form-group">
            <label for="title">Title:</label>
            <input id="title" name="title" class="form-control border border-info" type="text" required value="{{old('title')}}">

        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input id="isbn" name="isbn" class="form-control border border-info" type="text" required value="{{old('isbn')}}">
        </div>


        <div class="form-group">
            <label for="published_year">Published year</label>
            <input id="published_year" class="form-control border border-info" name="published_year" type="text" required value="{{old('published_year')}}">
        </div>

        <div>
            <button class="btn btn-primary mb-2 mt-4" type="submit">Envoyer</button>
        </div>

    </form>

</div>

<div class="mt-4">
    <h3>
        Can't find the author in the list? <a href="../../authors/create">Just add him</a>
    </h3>
</div>

@endsection
