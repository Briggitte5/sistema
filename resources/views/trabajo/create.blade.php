@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/trabajo') }}" method="post" enctype="multipart/form-data">
@csrf
@include('trabajo.form',['modo'=>'Crear'])

</form>
</div>
@endsection