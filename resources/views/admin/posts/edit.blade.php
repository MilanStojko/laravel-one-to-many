@extends('layouts.app')


@section('content')
    <h1>Aggiorna il Post</h1>

    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il nome del Post"
                value={{ old('title') ?? $post->title }}>
        </div>
        <div class="form-group">
            <label for="content">Descrizione</label>
            <textarea class="form-control" id="content" name="content" placeholder="Inserisci la descrizione del prodotto"
                value={{ old('content') ?? $post->content }}></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Aggiorna</button>
    </form>
@endsection
