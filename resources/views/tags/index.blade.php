<h1>Listado de Tags</h1>
@foreach ($tags as $tag)
    <b>Descripción: </b>{{$tag->description}}
    <br>

    <form action="/infosbytag/{{$tag->id}}" method="GET">
        <button type="submit">Infos</button>
    </form>

    <br>    
@endforeach