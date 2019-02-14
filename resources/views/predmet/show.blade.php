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
Broj sati tjedno: <span class="badge badge-success">{{$predmet->brojsatitjedno }}</span><br>



@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop
