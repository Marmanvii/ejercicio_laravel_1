<div class="card" style="margin: 5%">
    <div class="card-header">
        <b>{{$title}}</b>
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
        <br>
        <div class="btn-group" role="group" aria-label="Basic example">
            <form action="/infos/{{$id}}/edit" method="GET">
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
            <form method="POST" action="/infos/{{$id}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </form>
            <form action="/classificationbyinfo/{{$classificationid}}" method="GET">
                <button type="submit" class="btn btn-primary">Classification</button>
            </form>
            <form action="/tagsbyinfo/{{$id}}" method="GET">
                <button type="submit" class="btn btn-primary">Tags</button>
            </form>
        </div>


    </div>
</div>