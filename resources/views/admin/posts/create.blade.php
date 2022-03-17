@extends('layouts.app')

@section('content')

    <h1>Crea post</h1>

    <form action="{{ route('admin.posts.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il nome del post">
        </div>
        <div class="form-group">
            <label for="content">Descrizione</label>
            <textarea class="form-control" id="content" name="content"
                placeholder="Inserisci la descrizione del prodotto"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
