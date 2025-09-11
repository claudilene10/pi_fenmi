@extends('template' )
 
@section('conteudos')

@php
var_dump($dados)
endphp
<style>
    table a i {
        color: #fff;
        margin: 0 1rem;
    }
    .table{
        width: 80%;
    }
   
</style>
<h2>cadastro Novidades</h2>
<form action="{{ route('novidades') }}" method="POST" class="d-flex ">

@csrf() {{-- Proteção contra o ataque Cross-Site Request Forgery (csrf) obrigatório --}}

<div class="form-floating mb-3 col-12 col-md-8">
  <input type="email" class="form-control " name="email" id="email" placeholder="seu@email.com " autocomplete="off" required value="seu@email.com">
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
    {{--laço de repetiçao - loop --}}
    @for( $i=0; $i < 10; $i++ )
     <tr>  
       <td>{{$i}}</td>
       <td>email@cadastro.com</td>
       <td>sim</td>
       <td>
        <a href="#" title="Editar  o resgistro"><i class="bi bi-pencil-square"></i></a>
        <a href="#" title="Apagar  o resgistro"> <i class="bi bi-trash3"></i></a>

       </td>
     </tr>
   @endfor()
 
</tbody>
 
<tfoot>
 
</tfoot>
 
</table>
 
@endsection