@foreach ($infos as $info)
    <b>{{$info->title}}</b> <br>
    {{$info->date}} <br>
    {{$info->author}} <br>
    {{$info->body}} <br>
    @foreach ($classifications as $classification)
        @if ($info->classification_id == $classification->id)
            {{$classification->name}}
        @endif
    @endforeach
    <form action="/infos/{{$info->id}}/edit" method="GET">
        <button type="submit">Editar</button>
    </form>
    <br>
    <br>
@endforeach
<a href="/infos/create">Agregar</a>