<body style="background-image:url(https://image.freepik.com/vector-gratis/grupo-hombre_1284-12615.jpg)">
@extends('layouts.app')
@section('content')
<div class="container ">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

</div>
@endif

<a href="{{ url('trabajo/create') }}" class="btn btn-primary"> Nuevo Trabajos</a>
<br/>
<br/>
<table class="table table-light">

   <thead class="thead-light">
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Empresa</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Acciones</th>
      </tr>
    </thead>

    <tbody>
    @foreach($trabajos as $trabajo )
     <tr>
       <td>{{ $trabajo->id }}</td>
       <td>{{ $trabajo->Nombre }}</td>
       <td>{{ $trabajo->Empresa }}</td>
       <td>{{ $trabajo->Email }}</td>
       <td>{{ $trabajo->Telefono }}</td>
       <td> 
       
       <a href="{{ url('/trabajo/'.$trabajo->id.'/edit') }}" class="btn btn-warning">
            Editar
       </a>
        | 
       
      <form action="{{ url('/trabajo/'.$trabajo->id ) }}"class="d-inline" method="post">
      @csrf
      {{ method_field('DELETE') }}
      <input class="btn btn-danger" type="submit" onclick="return confirm ('¿Quieres borrar?')"
        value="Borrar">

      </form>
       
       </td>
    </tr>
    @endforeach
    </tbody>

</table>
{!! $trabajos->links()!!}
</div>
@endsection
</body>