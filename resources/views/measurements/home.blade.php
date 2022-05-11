@extends('layouts/main')

@section('container')

<!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-md">
          <a class="navbar-brand"><h1>Página Inicial</h1></a>
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

@endsection