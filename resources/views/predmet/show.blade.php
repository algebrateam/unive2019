@extends('adminlte::page')

@section('title', 'Unive predmet detalji')
@section('content_header')
<h1>Detalji jednog predmeta</h1>
@stop


@section('content')
<?php
//dd($predmets);
?>
<h3>{{$predmet->nazpred }}</h3>

Link na ovu stranicu:<a href='{{url("/predmets/{$predmet->id}")}}'> {{$predmet->nazpred }}</a>
<a href='{{url("/predmets/{$predmet->id}/edit")}}'><span class="label label-info">Edit</span></a>
<form action='{{url("/predmets/{$predmet->id}")}}' method='POST' style="display: inline">
  @csrf
  <input type='hidden' name='_method' value='DELETE'>
  <button type='submit' name='delete_predmet' value='delete' class="btn btn-warning btn-xs"> delete</button>
</form>
<hr>
Kratica predmeta: <span class="badge badge-info">{{$predmet->kratpred }}</span><br>
Upisano studenata: <span class="badge badge-warning">{{$predmet->upisanostud }}</span><br>
Broj <i class="far fa-clock"></i> tjedno: <span class="badge badge-success">{{$predmet->brojsatitjedno }}</span><br>
Broj rezervacija: <span class="badge badge-success">
  {{$predmet->rezervacije()->get()->count() }}</span><br>

<ul>
  @foreach ($predmet->rezervacije()->get() as $r)
  <li>
    <a href='{{url("/rezervacije/{$r->id}")}}'>
      <span class="label label-info">Dan: {{$r->oznvrstadan }} <i class="far fa-clock"></i>:{{$r->sat }}</span></a>
  </li>
  @endforeach
</ul>

@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop
