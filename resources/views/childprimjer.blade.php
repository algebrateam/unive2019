
<!-- Stored in resources/views/childprimjer.blade.php -->

@extends('layouts.masterprimjer')

@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">from child WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
@endsection

@section('content')
<p>This is my body content.</p>

@isset($predmets)
@component('components.top10predmeta',['pred' => $predmets])  
@endcomponent  
@endisset


@component('components.alert',['varijabla' => 'Neka moja poruka'])
@slot('slot')
Forbidden
@endslot
<strong>Whoops!</strong> Something went wrong!
@slot('footer_komponente')
<div style="font-size: 50px"> ovo je neki sitni text ® </div>
@endslot  
@endcomponent
@endsection