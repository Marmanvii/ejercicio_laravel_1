

<div class="card">
    <div class="card-header">
        <b>{{$title}}</b> <br>
    </div>

    <div class="card-body">
        {{$date}} <br>
        {{$author}} <br>
        {{$body}} <br>
        @foreach ($classifications as $classification)
            @if ($classification_id == $classification->id)
                {{$classification->name}}
            @endif
        @endforeach
    </div>

    <div class="column" >
        <form action="/infos/{{$id}}/edit" method="GET">
            <button type="submit">Editar</button>
        </form>
    </div>
    <div class="column">
        <form method="POST" action="/infos/{{$id}}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit">Eliminar</button>
        </form>
    </div>
    <div class="column">
        <form action="/classificationbyinfo/{{$classification_id}}" method="GET">
            <button type="submit">Classification</button>
        </form>
    </div>
    <div class="column">
        <form action="/tagsbyinfo/{{$id}}" method="GET">
            <button type="submit">Tags</button>
        </form>
    </div>
    <br>
    <br>
    <br>
</div>
