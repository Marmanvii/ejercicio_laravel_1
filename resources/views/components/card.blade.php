<div class="card" style="margin: 10%;">
    <div class="card-header">
        <b>{{$title}}</b> <br>
    </div>

    <div class="card-body">
        {{$date}} <br>
        {{$author}} <br>
        {{$body}} <br>
        @foreach ($classifications as $classification)
            @if ($classificationid == $classification->id)
                {{$classification->name}}
            @endif
        @endforeach
    </div>
    <div class="btn-group" role="group" aria-label="Basic example">

            <form action="/infos/{{$id}}/edit" method="GET" style="margin: 8px;">
                <button type="submit" class="btn btn-secondary">Editar</button>
            </form>
            <form method="POST" action="/infos/{{$id}}" style="margin: 8px;">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-secondary">Eliminar</button>
            </form>
            <form action="/classificationbyinfo/{{$classificationid}}" method="GET" style="margin: 8px;">
                <button type="submit" class="btn btn-secondary">Classification</button>
            </form>
            <form action="/tagsbyinfo/{{$id}}" method="GET" style="margin: 8px;">
                <button type="submit" class="btn btn-secondary">Tags</button>
            </form>
    </div>

    
    <br>
    <br>
    <br>
</div>
