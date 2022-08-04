@extends('layout.layout')
@section('content')




  <div id="container">
      <form name="formEditarObjeto">
          <div class="mb-3">
            <label class="form-label">Objeto</label>
            <input type="text" class="form-control" id="objeto" name="objeto">              
          </div>
          <div class="mb-3">
            <label for=" " class="form-label">/label>
            <input type="text" class="form-control"Status< id="status" name="status">
          </div>
          <button type="button" class="btn btn-primary" id="btn-teste">Submit</button>
        </form>
  </div>
@endsection