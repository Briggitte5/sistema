@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/tarea') }}" method="post" enctype="multipart/form-data">
@csrf
@include('tarea.form',['modo'=>'Crear'])

</form>
</div>
@endsection