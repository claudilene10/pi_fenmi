<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Meu Perfil</title>
  <link rel="stylesheet" href="{{ asset('CSS/infouser.css') }}" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <div class="form-container">
    <div class="btn-voltar">
    <a href="{{ route('minhacontacliente') }}">◀ Voltar</a>
  </div>
   <h2>Meus Dados</h2>
 
        {{-- Exibição dos dados do usuário autenticado --}}
<div class="info">
<h3 id="nomeUsuario">{{ Auth::user()->name ?? 'Usuário' }}</h3>
<p><strong>E-mail:</strong> <span id="emailUsuario">{{ Auth::user()->email ?? 'usuario@gmail.com' }}</span></p>
<p><strong>Telefone:</strong> <span id="telefoneUsuario">{{ Auth::user()->telefone ?? '(00) 00000-0000' }}</span></p>
<p><strong>Endereço:</strong> <span id="enderecoUsuario">{{ Auth::user()->endereco ?? 'Não informado' }}</span></p>
<p><strong>CPF:</strong> <span id="cpfUsuario">{{ Auth::user()->cpf ?? 'Não informado' }}</span></p>
</div>
 
   <form id="perfilForm" class="form-box" action="{{ route('infouser.update') }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $usuario->nome }}" placeholder="Nome" required />
    <input type="email" name="email" value="{{ $usuario->email }}" placeholder="E-mail" required />
    <input type="tel" name="telefone" value="{{ $usuario->telefone }}" placeholder="Telefone" />
    <input type="text" name="endereco" value="{{ $usuario->endereco }}" placeholder="Endereço" />
    <input type="text" name="cpf" value="{{ $usuario->cpf }}" placeholder="CPF" />
    <button type="submit" class="btn salvar">Salvar</button>
    
</form>

<form action="{{ route('infouser.destroy') }}" method="POST" id="excluirForm">
    @csrf
    @method('DELETE')
    <input type="hidden" name="user_id" value="{{ $usuario->id_usuario }}">
  <button type="button" id="btnExcluir" class="btn excluir">Excluir Conta</button>
</form>

  <!-- Modal de Logout -->
  <div id="confirm-modal" class="modal">
    <div class="modal-content">
      <h3>Deseja realmente sair?</h3>
      <div class="modal-botoes">
        <button id="confirm-yes" class="btn excluir">Sim, sair</button>
        <button id="confirm-no" class="btn cancelar">Cancelar</button>
      </div>
    </div>
  </div>
 
  <!-- Modal de Excluir Conta -->
  <div id="modalExcluir" class="modal">
    <div class="modal-content">
      <h2>Tem certeza que deseja excluir sua conta?</h2>
      <p>Essa ação não poderá ser desfeita.</p>
      <div class="modal-botoes">
        <button id="confirmarExcluir" class="btn excluir">Sim, excluir</button>
        <button id="cancelarExcluir" class="btn cancelar">Cancelar</button>
      </div>
    </div>
  </div>
 
  <script src="JS/infouser.js"></script>
  <script src="JS/dark.js"></script>
</body>
</html>