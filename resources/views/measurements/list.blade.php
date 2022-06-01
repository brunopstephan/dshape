@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12 mt-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Início</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Medidas cadastradas</li>  
                </ol>
              </nav>
        </div>
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h1>Medidas Cadastradas 👌😒😍😒🌹😊😁💕🤷‍♂️🐱‍👓🌹</h1>
                </div>
                <div class="card-body">
                    <div class="container px-3 my-3">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Data da Medição</th>
                                <th scope="col">Ações</th> 
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Data</td>
                                <td>
                                    <button class="btn btn-secondary">Editar</button>
                                    <button class="btn btn-danger">Excluir</button>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Data2</td>
                                <td>
                                    <button class="btn btn-secondary">Editar</button>
                                    <button class="btn btn-danger">Excluir</button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>

                </div>
            </div> <!--fim do  -->
        </div> <!--fim da coluna -->
    </div> <!--fim do row -->
</div> <!--fim do cotainer -->

@endsection
