
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
value ="{{ isset($trabajo->Nombre)?$trabajo->Nombre:old('Nombre') }}" id="Nombre" >

</div>

<div class="form-group">
<label for="Empresa">Empresa</label>
<input type="text" class="form-control" name="Empresa" 
value ="{{ isset($trabajo->Empresa)?$trabajo->Empresa:old('Empresa') }}" id="Empresa">

</div>

<div class="form-group">
<label for="Email"> Correo </label>
<input type="text" class="form-control" name="Email" 
value ="{{ isset($trabajo->Email)?$trabajo->Email:old('Email') }}" id="Email" >

</div>

<div class="form-group">
<label for="Telefono"> Teléfono </label>
<input type="text" class="form-control" name="Telefono" 
value ="{{ isset($trabajo->Telefono)?$trabajo->Telefono:old('Telefono') }}" id="Telefono">
</div>


<input class="btn btn-success" type="submit" value="{{ $modo}} datos">

<a class="btn btn-primary" href="{{ url('trabajo/') }}"> Regresar</a>

<br>
