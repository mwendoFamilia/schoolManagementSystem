<x-header data="Users Page"/>
<h1>hello users :{{10+10}}</h1><br>
@if($name=='Silva')
    <h1>Hello {{$name}}</h1>
@elseif($name=='andrew')
    <h1>Hi there {{$name}}</h1>
@else
    <h1>Unknown user {{$name}}</h1>
@endif
{{-- <h1>{{$name[2]}}</h1> --}}
