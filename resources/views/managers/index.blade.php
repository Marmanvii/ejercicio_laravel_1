<h1>Listado de Managers</h1>
@foreach ($managers as $manager)
    <b>Nombre:</b> {{$manager->name}}
    <br>
    <b>Teléfono:</b> {{$manager->phone}}
    <br>
    <form action="/classifications/{{$manager->id}}" method="GET">
        <button type="submit">Classification</button>
    </form>
    <br>
    <br>  
@endforeach