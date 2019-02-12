@extends('adminlte::page')

@section('title', 'Svi predmeti')
@section('content_header')
    <h1>Predmeti</h1>
@stop


@section('content')
<?php
//dd($predmets);
?>
<h3>Lista predmeta:</h3>
<ul>
    @foreach ($predmets as $p)
    
    
    <li> <a href='{{url("/predmets/{$p->id}")}}'> {{$p->nazpred }}</a>
<a href='{{url("/predmets/{$p->id}/edit")}}'><span class="label label-info">Edit</span></a>
<form action='{{url("/predmets/{$p->id}")}}' method='POST' style="display: inline">
@csrf
<input type='hidden' name='_method' value='DELETE'>
<button type='submit' name='delete_predmet' value='delete' class="btn btn-warning"> delete</button>
</form>
</li>
    
    @endforeach
</ul>


@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
