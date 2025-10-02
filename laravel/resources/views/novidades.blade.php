@extends('template')

@section('conteudos')

@php
  // Aqui é o similar à tag do PHP

  $i = 1;

  # echo @$id;// jeito mais simples e errado de remover erro

  echo isset( $_GET['id'] );// jeito correto de evitar / parte do botão editar novidades
  if( isset( $_GET['id'])){
    echo "Editando o ID: ".$_GET['id'].".";
  }

@endphp

<style>
  table a i {
    color: #fff;
    padding: 0 1rem;
  }

  .table 
  {
    width: 80%;
  }

  .botao{
    height: calc(3.5rem + calc(var(--bs-border-width) * 2));
  }

</style>

<div onload="" class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@if ($errors->any())
    {{ $message }}
@endif

<h2> Cadastro de Novidades </h2>

  <form action="{{ route('novidades') }}" method="POST" class="d-flex" >

    @csrf() {{-- Proteção contra ataque Cross-Site Request Forgery (csrf) obrigatório --}}

    <div class="form-floating mb-3 col-12 col-md-8 d-flex flex-column">

      <input type="email" class="form-control" name="email" id="email" placeholder="seu@email.com" autocomplete="off" required @isset ($edita) value="{{ $edita ['email'] }}" @endisset  >

      <label for="email">Seu melhor E-mail</label>

    </div>

    <button class="btn btn-dark ms-3 botao" > @if(@isset ($edita)) alterar @else  Cadastrar @endif </button>

  </form>

<div class="table-responsive" > 
  <table class="table table-dark table-striped table-hover table-bordered tabela" >
    
    <thead>
      <tr>
        <th>#</th>
        <th>E-mail Cadastrado</th>
        <th>Aceite</th>
        <th></th>
      </tr>
    </thead>

    <tbody>

    
    
    {{-- 
        Laço de repetição - Loop 
          while( $valor < $indice ){ // código }
          for( $indice; $comparacao; $incremento ){}
          foreach( $dados as $apelido){}
    --}}
    @foreach( $dados as $item )
      <tr>
        <td> {{ $i }} </td>
        <td> {{ $item['email'] }} </td>
        <td> {{ $item['opt_out'] }} </td>
        <td> 
          <a href="{{ route('novidades.editar') }}/{{ $item['id_news']}}" title="Editar o registro"><i class="bi bi-pencil-square"></i></a> 

          <a href="{{ route('novidades.apagar'), $item['id_news'] }}" title="Apagar o registro"><i class="bi bi-trash3" onclick="confirm('Tem certeza que deseja apagar este item?')"></i></a> 
        </td>
      </tr>

      @php $i++; @endphp
    @endforeach

    </tbody>

    <tfoot>
      <tr>
        <th>#</th>
        <th>E-mail Cadastrado</th>
        <th>Aceite</th>
        <th></th>
      </tr>
    </tfoot>

  </table>
</div> 

@endsection