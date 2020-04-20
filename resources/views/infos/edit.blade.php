@php
    $date = now();
@endphp

<form method="POST" action="/infos/{{$info->id}}">
    @method('PUT')
    {{ csrf_field() }}
    <label for="author">Nombre Autor:</label><br>
    <input type="text" id="author" name="author" value="{{$info->author}}"><br>
    <label for="title">Título:</label><br>
    <input type="text" id="title" name="title" value="{{$info->title}}"><br><br>
    <label for="body">Cuerpo:</label><br>
    <textarea id="body" name="body">{{$info->body}}</textarea><br><br>

    <select name="classification_id" id="classification_id" size="2">
        @foreach ($classifications as $classification)
            <option value={{$classification->id}}>{{$classification->name}}</option>
        @endforeach 
    </select><br><br>

    <input id="date" name="date" type="hidden" value="{{$date}}">
    <input type="submit" value="Submit">
</form>