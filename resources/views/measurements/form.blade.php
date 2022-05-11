@extends('layouts/main')

@section('container')
    <!-- navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-md">
            <a class="navbar-brand"><h1>Nova Medida</h1></a>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Página Inicial</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="/measurements">Medidas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/measurements/new">Nova Medida</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>

    <!-- form -->

    <div class="container mt-3">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header bg-light"><h1>😎😋😋😊😎🥰🙄🥰😘😏😏🙄😍🤩🙄😶😚😚😊🤑🤑🥶🥶🥵Cadastrar</h1></div>
                <div class="card-body">
                    <div class="container px-3 my-3">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            
                            {{-- Peso --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="pesoKg" type="text" placeholder="Peso(Kg)" data-sb-validations="required" />
                                <label for="pesoKg">Peso(Kg)</label>
                                <div class="invalid-feedback" data-sb-feedback="pesoKg:required">Peso(Kg) é obrigatorio.</div>
                            </div>
                            
                            {{-- Altura --}}

                            <div class="form-floating mb-3">
                                <input class="form-control" id="alturaCm" type="text" placeholder="Altura(cm)" data-sb-validations="required" />
                                <label for="alturaCm">Altura(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="alturaCm:required">Altura(cm) é obrigatorio.</div>
                            
                            </div>
                            
                            {{-- Peitoral --}}

                            <div class="form-floating mb-3">
                                <input class="form-control" id="peitoralCm" type="text" placeholder="Peitoral(cm)" data-sb-validations="required" />
                                <label for="peitoralCm">Peitoral(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="peitoralCm:required">Peitoral(cm) é obrigatorio.</div>
                            </div>
                            
                            {{-- Braço Esquerdo --}}
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="bracoEsquerdoCm" type="text" placeholder="Braço Esquerdo(cm)" data-sb-validations="required" />
                                <label for="bracoEsquerdoCm">Braço Esquerdo(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="bracoEsquerdoCm:required">Braço Esquerdo(cm) é obrigatorio.</div>
                            </div>
                            
                            {{-- Braço Direito --}}
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="bracoDireitoCm" type="text" placeholder="Braço Direito(cm)" data-sb-validations="required" />
                                <label for="bracoDireitoCm">Braço Direito(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="bracoDireitoCm:required">Braço Direito(cm) é obrigatorio.</div>
                            </div>
                            
                            {{-- Abdomen --}}
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="abdomenCm" type="text" placeholder="Abdômen(cm)" data-sb-validations="required" />
                                <label for="abdomenCm">Abdômen(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="abdomenCm:required">Abdômen(cm) é obrigatorio.</div>
                            </div>
                            
                            {{-- Cintura --}}
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="cinturaCm" type="text" placeholder="Cintura(cm)" data-sb-validations="required" />
                                <label for="cinturaCm">Cintura(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="cinturaCm:required">Cintura(cm) é obrigatorio.</div>
                            </div>
                            
                            {{-- Quadril --}}
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="quadrilCm" type="text" placeholder="Quadril(cm)" data-sb-validations="required" />
                                <label for="quadrilCm">Quadril(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="quadrilCm:required">Quadril(cm) é obrigatorio.</div>
                            </div>
                            
                            {{-- Coxa Esquerda --}}
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="coxaEsquerdaCm" type="text" placeholder="Coxa Esquerda(cm)" data-sb-validations="required" />
                                <label for="coxaEsquerdaCm">Coxa Esquerda(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="coxaEsquerdaCm:required">Coxa Esquerda(cm) é obrigatorio.</div>
                            </div>
                            
                            {{-- Coxa Direita --}}
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="coxaDireitaCm" type="text" placeholder="Coxa Direita(cm)" data-sb-validations="required" />
                                <label for="coxaDireitaCm">Coxa Direita(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="coxaDireitaCm:required">Coxa Direita(cm) é obrigatorio.</div>
                            </div>
                            
                            {{-- Panturrilha Esquerda --}}
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="panturrilhaEsquerdaCm" type="text" placeholder="Panturrilha Esquerda(cm)" data-sb-validations="required" />
                                <label for="panturrilhaEsquerdaCm">Panturrilha Esquerda(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="panturrilhaEsquerdaCm:required">Panturrilha Esquerda(cm) é obrigatorio.</div>
                            </div>
                            
                            {{-- Panturrilha Direita --}}
                            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="panturrilhaDireitaCm" type="text" placeholder="Panturrilha Direita(cm)" data-sb-validations="required" />
                                <label for="panturrilhaDireitaCm">Panturrilha Direita(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="panturrilhaDireitaCm:required">Panturrilha Direita(cm) é obrigatorio.</div>
                            </div>
                        
                            {{-- botoes --}}
                        
                            <div class="d-flex ">
                                <button class="btn btn-primary btn-lg flex-fill me-2" id="submitButton" type="submit">Cadastrar</button>
                                <button class="btn btn-secondary btn-lg flex-fill ms-2" type="reset">Limpar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!--fim do  -->
        </div> <!--fim da coluna -->
    </div> <!--fim do row -->
</div> <!--fim do cotainer -->

@endsection