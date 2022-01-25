@extends('layout.page')
@section('content')

 <h1 class="red">User's Informations !!!</h1>

@if(is_countable($infos) && count($infos)>1)

 
   
    <table  class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">salary</th>
      <th scope="col">managerID</th>
    </tr>
  </thead>
     @foreach($infos as $info)
  <tbody>
   
    <tr>
      <th scope="row">{{$info->id}}</th>
      <td>{{$info->name}}</td>
      <td>{{$info->email}}</td>
      <td>{{$info->salary}}</td>
      <td>{{$info->manager_id}}</td>
    </tr>
  </tbody>
   @endforeach
</table>
   

    @else

    <p>no info founds!</p>

    @endif
   <a href="/showq" class="btnns"  > <button class="btn btn-primary">Submit query</button> </a>

@endsection