@foreach(  $response as $res)
    <br>
    {{$res->name}}
@endforeach

{{--{{$response }}--}}

<form action="/data" method="post">
    @csrf
    <input type="text" name="name">
    <br>
    <button type="submit">send</button>
</form>
