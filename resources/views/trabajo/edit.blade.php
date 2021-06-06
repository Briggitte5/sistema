@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/trabajo/'.$trabajo->id ) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('$trabajos.form',['modo'=>'Editar'])

</form>
</div>
@endsection