@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/tarea/'.$tarea->id ) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('$tarea.form',['modo'=>'Editar'])

</form>
</div>
@endsection