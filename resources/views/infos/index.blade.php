
@extends('layout.master')

@section('content')

    @include('infos.guides')
    @foreach ($infos as $info)
        <x-card
            :title="$info->title"
            :author="$info->author"
            :date="$info->date"
            :body="$info->body"
            :id="$info->id"
            :classification_id="$info->classification_id"
            :classifications="$classifications"
        />
    @endforeach

    <a href="/infos/create">Agregar Noticia</a>

    <style>
        
    .column {
    float: left;
    width: 8%;
    }

    </style>
@endsection


