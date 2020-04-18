@foreach ($infos as $info)
    => <b>{{$info->title}}</b> <br>
    {{$info->date}} <br>
    {{$info->author}} <br>
    {{$info->body}} <br>

    <br>
    <br>
@endforeach