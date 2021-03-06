@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-12 mt-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">InΓ­cio</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Medidas cadastradas</li>  
                </ol>
              </nav>
        </div>
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h1>Medidas Cadastradas πππππΉππππ€·ββοΈπ±βππΉ</h1>
                </div>
                <div class="card-body">
                    <div class="container px-3 my-3">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Data da MediΓ§Γ£o</th>
                                <th scope="col">AΓ§Γ΅es</th> 
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($measurements as $measurement)
                              <tr>
                                <th scope="row">{{$measurement->id}}</th>
                                <td>{{$measurement->date}}</td>
                                <td>
                                    <button class="btn btn-secondary">Editar</button>
                                    <button class="btn btn-danger">Excluir</button>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>

                </div>
            </div> <!--fim do  -->
        </div> <!--fim da coluna -->
    </div> <!--fim do row -->
</div> <!--fim do cotainer -->

@endsection
