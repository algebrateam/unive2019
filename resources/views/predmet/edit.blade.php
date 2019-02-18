@extends('adminlte::page')

@section('title', 'Unive predmet uredi')
@section('content_header')
<h1>Uredi predmet</h1>
@stop


@section('content')
 @if (Session::has('error'))
	<div class="alert alert-error">{{ Session::get('error') }}
  </div>
@endif  
@if ($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<?php
dd($predmet);
?>
<form method="POST" action="/predmets">  
  @csrf
  <div class="form-group">
    <label for="kratpred">Kratica predmeta:</label>
    <input maxlength="8" type="text" name="kratpred" 
           value="{{ old('kratpred') }}"><br>
    
    <label for="nazpred"> Naziv predmeta *:</label>
    <input maxlength="60" type="text" name="nazpred"  required="true" value="{{ old('nazpred') }}"><br>
    
    <label for="siforgjed"> Šifra organizacijske jedinice:</label>
    <input min="100000" max="100020" type="number" name="siforgjed"
           value="{{ old('siforgjed') }}"><br>

    <label for="upisanostud"> Upisano studenata:</label>
    <input min="0" max="100" type="number" name="upisanostud" 
           value="{{ old('upisanostud') }}"><br>

    <label for="brojsatitjedno">Broj sati tjedno:</label>
    <input min="1" max="16" type="number" name="brojsatitjedno" 
           value="{{ old('brojsatitjedno') }}"><br>    
    

  </div>
  <div class="form-group">
    <input type="submit" name="novi_predmet_sbm" value="Dodaj novi predmet">
  </div>
</form>  

@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop
