<a href="/classifications">Classifications</a>
<a href="/managers">Managers</a>
<a href="/tags">Tags</a>

<br>
<br>

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
    <br>    
    <div class="column" >
        <form action="/infos/{{$info->id}}/edit" method="GET">
            <button type="submit">Editar</button>
        </form>
    </div>
    <div class="column">
        <form method="POST" action="/infos/{{$info->id}}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit">Eliminar</button>
        </form>
    </div>
    <div class="column">
        <form action="/tags/{{$info->classification_id}}" method="GET">
            <button type="submit">Tags</button>
        </form>
    </div>
    <br>
    <br>
    <br>
@endforeach

<a href="/infos/create">Agregar Noticia</a>

<style>
.column {
  float: left;
  width: 8%;
}

</style>