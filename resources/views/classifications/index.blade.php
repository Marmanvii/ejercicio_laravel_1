<h1>Listado de Classifications</h1>
@foreach ($classifications as $classification)
    <b>Nombre: </b>{{$classification->name}}
    <br>
    <form action="/managers/{{$classification->id}}" method="GET">
        <button type="submit">Manager</button>
    </form>
    <br>
    <br>    
@endforeach