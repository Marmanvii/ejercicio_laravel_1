<h1>Listado de Tags</h1>
@foreach ($tags as $tag)
    <b>Descripción: </b>{{$tag->description}}
    <br>
    <br>    
@endforeach