@extends('layout.layout')
@section('content')
<div class="mb-3">
    <div id="container">
        <form name="formAdicionarObjeto">
            <input id="_token" type="hidden" name="" value="{{csrf_token()}}">
            <div class="mb-3">
              <label class="form-label">Objeto</label>
              <input type="text" class="form-control" id="objeto" name="objeto">              
            </div>
            <div class="mb-3">
              <label for=" " class="form-label">Status</label>
              <input type="text" class="form-control" id="status" name="status">
            </div>
            <button type="button" class="btn btn-primary" id="btn-teste">Submit</button>
          </form>
          <hr>
          <table class="table">
            <thead>
              <tr class="">
                <th scope="col">#</th>
                <th scope="col">Objeto</th>
                <th scope="col">Status</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($processos as $processo)
                    <tr id="tr-processo-{{$processo->id}}">
                        <td>{{$processo->id}}</td>
                        <td>{{$processo->objeto}}</td>
                        <td>{{$processo->status}}</td>
                        <td>
                            <button class="btn btn-danger" onclick="abrirAlertParaExcluirProcesso({{$processo->id}})">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection