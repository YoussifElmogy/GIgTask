@extends('layout.page')
@section('content')

@if(is_countable( $query) && count( $query)>0)
<ul class="list-group listp">
    @foreach( $query as  $q)

    <li class="list-group-item listb " >{{$q->name}}</li>
@endforeach

</ul>

@endif

@endsection