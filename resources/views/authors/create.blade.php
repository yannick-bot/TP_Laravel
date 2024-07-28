@extends('master')
@section('title', "Création d'un Auteur")


@section('content')
<h1>Création d'un auteur</h1>


<div class="container">
    <form action="{{route('authors.store')}}" method="POST" class="border border-danger border-4 rounded-4 p-3">
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


        <!-- La fonction hold() permet de faire revenir les infos entrés dans le formulaire en cas d'erreurs -->
        <div>
            <label for="name">Name:</label>
            <input id="name" name="name" class="form-control border border-info" type="text" required value="{{old('name')}}">

        </div>
        <div>
            <label for="biography">Biography</label>
            <textarea id="biography" name="biography" class="form-control border border-info"  required rows="10" style="height: 100%;" class="form-control"> {{old('biography')}} </textarea>
        </div>


        <div>
            <button class="btn btn-primary mb-2 mt-4" type="submit">Envoyer</button>
        </div>

    </form>
</div>


@endsection
