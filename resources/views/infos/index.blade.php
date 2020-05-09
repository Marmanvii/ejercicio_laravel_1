@extends('layout.master')

@section('content')
    <a href="/classifications">Classifications</a>
    <a href="/managers">Managers</a>
    <a href="/tags">Tags</a>

    <br>
    <br>

    @foreach ($infos as $info)
        <x-card
            :title="$info->title"
            :author="$info->author"
            :date="$info->date"
            :body="$info->body"
            :id="$info->id"
            :classificationid="$info->classification_id"
            :classifications="$classifications"
        />
    @endforeach

    <a href="/infos/create">Agregar Noticia</a>

@endsection