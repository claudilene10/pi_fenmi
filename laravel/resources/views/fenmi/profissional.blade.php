<!-- Importando o template via blade -->
@extends('fenmi/_template_frontend_fenmi')
<!-- Main -->
  @section('area_de_conteudo')



<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Cadastre-se como profissional no Fenmi e receba oportunidades de serviço." />
  <title>Fenmi - Profissionais e Serviços</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="CSS/profissional.css">
  
</head>
<body>

 

  <!-- Seção Hero -->
  <section class="hero">
    <div class="hero-text">
      <h1>Conquiste clientes e faça seu negócio crescer com o <span>Fenmi</span></h1>
      <p>Cadastre-se como profissional autônomo e tenha acesso a milhares de oportunidades.</p>
      <button>Quero me cadastrar</button>
    </div>
    <img src="imagesM/mulheres.png" alt="Imagem de mulheres profissionais" style="max-height: 300px;">
  </section>

  <!-- Estatísticas -->
  <div class="stats">
    <div><strong>+ 200 mil</strong><br>clientes registrados</div>
    <div><strong>+ 95 mil</strong><br>pedidos finalizados</div>
    <div><strong>+ 19 milhões</strong><br>em renda para profissionais</div>
  </div>

  <!-- Como funciona -->
  <section class="section-blue">
    <h2>Entenda como funciona</h2>
    <p>Temos duas formas para você buscar por oportunidades de negócio.</p>
    <div class="cards">
      <div class="card">Receba milhares de pedidos de clientes.</div>
      <div class="card">Veja todos os detalhes do pedido.</div>
      <div class="card">Envie orçamentos gratuitos.</div>
      <div class="card">Execute o serviço e receba direto do cliente.</div>
    </div>
  </section>

  <!-- Etapas para se tornar profissional -->
  <section style="padding: 50px 10%;">
    <h2 style="color: #EF2F7E;">Como se tornar um profissional no Fenmi</h2>
    <div class="steps">
      <div class="card">1. Cadastro inicial</div>
      <div class="card">2. Cadastro completo</div>
      <div class="card">3. Verificação interna</div>
    </div>
  </section>

  <!-- Depoimentos de profissionais -->
  <section class="section-blue">
    <h2>Opinião de profissionais</h2>
    <div class="cards">
      <div class="card"><strong>Marta Perez</strong> - “O Fenmi entrou na minha vida...”</div>
      <div class="card"><strong>Luiza Andrade</strong> - “Graças ao Fenmi minha vida mudou...”</div>
      <div class="card"><strong>Amanda Silva</strong> - “Sou grata ao Fenmi e sua equipe...”</div>
    </div>
  </section>

 

  <script src="JS/dark.js"></script>

</body>
</html>
@endsection
