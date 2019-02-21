@extends('adminlte::page')

@section('title', 'Svi predmeti')
@section('content_header')
<h1>Predmeti</h1>
@stop


@section('content')
 @if (Session::has('message'))
	<div class="alert alert-success">{{ Session::get('message') }}
  </div>
@endif 
<h3>Lista predmeta:</h3>
{{ $predmets->links() }}
<ol start="{{ $predmets->firstItem() }}">
  @foreach ($predmets as $p)


  <li>
    <a href='{{url("/predmets/{$p->id}/edit")}}'><span class="label label-info">Edit</span></a>
    
    <form onsubmit= 'return ConfirmDelete()' id="deleteform" name="deleteform"  action='{{url("/predmets/{$p->id}")}}' method='POST' style="display: inline" class="form-delete">
      @csrf
      <input type='hidden' name='_method' value='DELETE'>
      <button type='submit' name='delete_predmet' value='delete' class="btn btn-warning btn-xs"> delete</button>
    </form>
    
    &nbsp;&nbsp;<a href='{{url("/predmets/{$p->id}")}}'> {{$p->nazpred }}</a>
  </li>

  @endforeach
</ol>
{{ $predmets->links() }}

@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
@stop

@section('js')
<script>
//onsubmit= 'return ConfirmDelete()'
  function ConfirmDelete()
  {
  var x = confirm("Siguran si da želiš obrisati predmet?");
  if (x)
    return true;
  else
    return false;
  }


</script>
<script> console.log('Hi!');</script>
@stop
