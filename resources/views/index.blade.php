@extends('layout.layout')
@section('content')
<div class="mb-3">
    <div id="container">
        <div class="container-cadastro">
          <h3>Cadastrar Objeto</h3>
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
            <button type="button" class="btn btn-primary" id="btn-teste">Cadastrar</button>
          </form>
        </div>
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
                            <button type="button" class="btn btn-danger" onclick="abrirAlertParaExcluirProcesso({{$processo->id}})">Excluir</button>
                            <button type="button" class="btn btn-primary btnEditarObjeto" onclick="abrirAlertParaEditarProcesso({{$processo->id}})">
                              Editar
                            </button>
                              <!-- Modal -->
                            <div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edição de objeto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="mb-3">
                                      <label for="objeto" class="form-label">Objeto</label>
                                      <input type="text" class="form-control" id="inputObjetoEdit" placeholder="nome do objeto">
                                    </div>
                                    <div class="mb-3">
                                      <label for="status" class="form-label">Status</label>
                                      <input type="text" class="form-control" id="inputStatusEdit" placeholder="Estoque">
                                    </div>
                                    <div class="mb-3">
                                      <input type="hidden" class="form-control" id="inputIdEdit">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" id="btn-update-submit" class="btn btn-primary" onclick="SalvarUpdateDoProcesso()">Salvar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!--End Modal-->
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection