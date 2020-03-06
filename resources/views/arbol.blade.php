@extends('tema')


@section('Titulo','Arbol Familiar')
@section('contenido')
  <h4>Abuelos Paternos</h4>
    <br>
@foreach ($Apaterno as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
  

  <h4>Abuelos Maternos</h4>
    <br>
@foreach ($Amaterno as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach

<h4>Padres</h4>
    <br>
@foreach ($padres as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach

<h4>Hijos</h4>
    <br>
@foreach ($hijos as $nom)
<li>{{$nom['nombre']}}</li>
@endforeach
  
  @endsection