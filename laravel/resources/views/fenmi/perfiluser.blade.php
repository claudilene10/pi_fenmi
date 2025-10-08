<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Perfil do usuário com conquistas, avaliações e opções de compartilhamento." />
  <title>Perfil de Usuário</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" />
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('CSS/perfiluser.css');}}">
  <!-- Estilos -->
  <link rel="stylesheet" href="CSS/perfiluser.css" />
</head>
<body>
  <main>



    <!-- Seção de Perfil -->
    <div class="profile">
  <!-- Foto de Perfil -->
  <div class="profile-pic-container">
    <div class="profile-icon" id="profile-container">
      <i class="fas fa-user" id="default-icon"></i>
      <img id="profile-image" style="display:none;" alt="Foto de perfil" />
    </div>
  </div>

  <!-- Informações do Usuário Profissão-->
  <div class="profile-info">
    <h3 id="nomeUsuario">Usuário</h3>
  </div>
</div>
 </div> <!-- Fim de .profile -->

   <!-- Ações: Editar / Compartilhar -->
<div class="botoes">
  <a href="{{ route('infouser.show') }}" class="btn-editar" role="button">
    <i class="fas fa-user-pen"></i> Editar perfil
  </a>
  <button type="button" class="btn-compartilhar" id="btnCompartilhar">
    <i class="fas fa-link"></i> Copiar link
  </button>
</div>


      <!-- Menu de Compartilhamento -->
      <div class="menu-compartilhar" id="menuCompartilhar">
        <button onclick="copiarLink()">📋 Copiar link</button>
        <a href="#" target="_blank" id="btnWhatsApp">📱 WhatsApp</a>
        <a href="#" target="_blank" id="btnFacebook">📘 Facebook</a>
      </div>
    </div>

    
    <section class="conquistas">
      <div class="card">
        <div class="section">
          <h3>Meus Pedidos</h3>
          <div class="order">
            <strong>Serviço de Pintura</strong>
            Status: Concluído · R$ 450,00 · 12/08/2025
          </div>
          <div class="order">
            <strong> Eletricista</strong>
            Status: Em andamento · Orçamento solicitado · 09/09/2025
          </div>
        </div>
      </div>
    </section>


    <!-- Avaliações -->
    <section id="avaliacoes">
      <h3>Avaliações dos Profissionais</h3>
      <h3 style="color: #EF2F7E;">Nota Média: <span id="nota-media">0.0</span></h3>
    
      <div class="estrelas" id="selecao-estrelas">
        <span data-value="1">★</span>
        <span data-value="2">★</span>
        <span data-value="3">★</span>
        <span data-value="4">★</span>
        <span data-value="5">★</span>
      </div>

      <textarea id="comentario" placeholder="Escreva seu comentário..." rows="4"></textarea>
     
      <button id="enviarComentario">Enviar Avaliação</button>

      <div id="lista-comentarios"></div>
    </section>
   <!-- Navegação Inferior -->
  <nav class="nav2">
    <a href="{{ route('loja_pedidos') }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16v16H4z"/><path d="M4 9h16"/></svg><span>Pedidos</span></a>
    <a href="{{ route('pedidos_aceito') }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg><span>Aceitos</span></a>
    <a href="{{ route('realizados') }}"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg><span>Realizados</span></a>
    <a href="{{ route('minhacontacliente') }}" class="active"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-3-3.87"/><path d="M4 21v-2a4 4 0 0 1 3-3.87"/><circle cx="12" cy="7" r="4"/></svg><span>Minha Conta</span></a>
  </nav>

    <!-- Mensagem de Confirmação de Link Copiado -->
    <div id="copiado-msg">🔗 Link copiado!</div>

  </main>

  <script src="JS/perfiluser.js"></script>
  <script src="JS/dark.js"></script>
  

</body>
</html>
