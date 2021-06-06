<body style="background-image:url(https://image.freepik.com/vector-gratis/grupo-hombre_1284-12615.jpg)">
  
@extends('layouts.app')
@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

</div>
@endif

<a href="{{ url('tarea/create') }}" class="btn btn-success"> Nueva Tareas</a>
<br/>
<br/>
<table class="table table-light">

   <thead class="thead-light">
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Puesto</th>
        <th>Función</th>
        <th>Empleado</th>
        <th>Sección</th>
        <th>Trabajo Id</th>
        <th>Acciones</th>
      </tr>
    </thead>

    <tbody>
    @foreach($tareas as $tarea )
     <tr>
       <td>{{ $tarea->id }}</td>
       <td>{{ $tarea->Nombre }}</td>
       <td>{{ $tarea->Puesto }}</td>
       <td>{{ $tarea->Funcion }}</td>
       <td>{{ $tarea->Empleado }}</td>
       <td>{{ $tarea->Seccion }}</td>
       <td>{{ $tarea->trabajo_id }}</td>
       <td> 
       
       <a href="{{ url('/tarea/'.$tarea->id.'/edit') }}" class="btn btn-warning">
            Editar
       </a>
        | 
       
      <form action="{{ url('/tarea/'.$tarea->id ) }}"class="d-inline" method="post">
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
{!! $tareas->links()!!}
</div>
@endsection
</body>