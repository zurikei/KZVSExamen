@extends('tema')


@section('Titulo','	Contactame')
@section('contenido')
  <h1>Contactame</h1>

 <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Dirección de Correo Electronico:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Telefono</label>
    <input type="text" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Comentario</label>
    <input type="text" class="form-control" id="pwd">
  </div>
  
  <div class="checkbox">
    <label><input type="checkbox"> Recordar</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

  
  @endsection