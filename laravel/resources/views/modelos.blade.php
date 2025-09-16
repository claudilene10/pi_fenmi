@extends('template' )
 
@section('conteudos')

@php
 $i=1;
 $dados"";
@endphp
<style>
    table a i {
        color: #fff;
        margin: 0 1rem;
    }
    .table{
        width: 80%;
    }
   
</style>
<h2>cadastro Modelos</h2>
<form action="{{ route('novidades') }}" method="POST" class="d-flex ">

@csrf() {{-- Proteção contra o ataque Cross-Site Request Forgery (csrf) obrigatório --}}

<div class="form-floating mb-3 col-12 col-md-8">
<input type="nome" class="form-control " name="nome" id="nome" placeholder="seu nome completo" autocomplete="off" required >
  <input type="email" class="form-control " name="email" id="email" placeholder="seu@email.com " autocomplete="off" required >
  <label for="email">Seu melhor E-mail</label>
</div>

<button class="btn btn-dark ms-3 "> Cadastrar </button>

</form> 

<table class="table table-dark table-striped table-hover table-bordered ">
 <tr>
    <th>#</th>
    <th>E-mail cadastrado</th>
    <th>Aceite</th>
    <th></th>
 </tr>
<thead>
 
</thead>
 
<tbody>
    {{--laço de repetiçao - loop
        while($valor < $indice){ // codigo}
        for ($indice;$comparação;$incrementa){}
        foreach($dados as $apelidos){}
      --}}
    @foreach( $dados as $item)
     <tr>  
     <td> {{ $i }} </td>
        <td> {{$item['email']}} </td>
        <td> {{$item['opt_out']}} </td>
        <td>
        <a href="{{route('novidades.editar')}}" title="Editar  o resgistro"><i class="bi bi-pencil-square"></i></a>
        <a href="{{route('novidades.apagar')}}" title="Apagar  o resgistro"> <i class="bi bi-trash3"></i></a>

       </td>
     </tr>
     @php $i++; @endphp
   @endforeach()
 
</tbody>
 
<tfoot>
 
</tfoot>
 
</table>
 
@endsection