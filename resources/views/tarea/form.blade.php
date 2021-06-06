
<h1>{{ $modo }}</h1>

@if(count($errors)>0)

   <div class="alert alert-danger" role="alert">
     <ul>
        @foreach($errors->all() as $error)
      <li> {{ $error }}</li>
    @endforeach
   </ul>
   </div>
    


@endif


<div class="form-group">

<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="Nombre" 
value ="{{ isset($tarea->Nombre)?$tarea->Nombre:old('Nombre') }}" id="Nombre">

</div>

<div class="form-group">
<label for="Puesto">Puesto</label>
<input type="text" class="form-control" name="Puesto" 
value ="{{ isset($tarea->Puesto)?$tarea->Puesto:old('Puesto') }}" id="Puesto">

</div>

<div class="form-group">
<label for="Funcion"> Función </label>
<input type="text" class="form-control" name="Funcion" 
value ="{{ isset($tarea->Funcion)?$tarea->Funcion:old('Funcion') }}" id="Funcion">

</div>

<div class="form-group">
<label for="Correo"> Empleado </label>
<input type="text" class="form-control" name="Empleado" 
value ="{{ isset($tarea->Empleado)?$tarea->Empleado:old('Empleado') }}" id="Empleado">
</div>

<div class="form-group">
<label for="Seccion"> Sección </label>
<input type="text" class="form-control" name="Seccion" 
value ="{{ isset($tarea->Seccion)?$tarea->Seccion:old('Seccion') }}" id="Seccion">
</div>

<div class="form-group">
<label for="trabajo_id"> Trabajo </label>
<input type="number" class="form-control" name="trabajo_id" 
value ="{{ isset($tarea->trabajo_id)?$tarea->trabajo_id:old('trabajo_id') }}" id="trabajo_id">
</div>


<input class="btn btn-success" type="submit" value="{{ $modo}} datos">

<a class="btn btn-primary" href="{{ url('tarea/') }}"> Regresar</a>

<br>
