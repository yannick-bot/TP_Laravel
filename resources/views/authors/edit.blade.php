@extends('master')
@section('title', "Modification d'un auteur")


@section('content')
<h1>Création d'un auteur</h1>
<form action="{{route('authors.update', $author->id)}}" method="POST" class="border border-danger border-4 rounded-4 p-3">
    @csrf
    @method('PUT')

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
        <label for="name">Name:</label>
        <input id="name" name="name" class="form-control border border-info" type="text" required value={{$author->name}}>
    </div>

    <div>
        <label for="biography">Biography</label>
        <textarea id="biography" name="biography" required rows="10" style="height: 100%;" class="form-control border border-info"> {{$author->biography}} </textarea>
    </div>

    <div>
        <button type="submit" class="btn btn-primary mb-2 mt-4">Envoyer</button>
    </div>



</form>


@endsection

