<h1>Listado de Classifications</h1>
@foreach ($classifications as $classification)
    <b>Nombre: </b>{{$classification->name}}
    <br>
    <div class="column">
    <form action="/managerbyclassification/{{$classification->id}}" method="GET">
        <button type="submit">Manager</button>
    </form>
    </div>
    <div class="column">
        <form action="/infosbyclassification/{{$classification->id}}" method="GET">
            <button type="submit">Infos</button>
        </form>
    </div>
    <br>
    <br>    
@endforeach