
@extends('layout.page')
@section('content')
<h1>Create user</h1>
{!! Form::open(array( 'route'=>'emp.store')) !!}

<div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}

</div>
<div class="form-group">
    {{Form::label('email', 'Email')}}
    {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}

</div>
<div class="form-group">
    {{Form::label('salary', 'Salary')}}
    {{Form::text('salary','',['class'=>'form-control','placeholder'=>'Salary'])}}

</div>
<div class="form-group">
    {{Form::label('manager_id', 'Manager ID')}}
    {{Form::text('manager_id','',['class'=>'form-control','placeholder'=>'Manager id'])}}

</div>
{{Form::submit('Submit',['class'=> 'btn btn-primary'])}}


    
{!! Form::close() !!}

@endsection