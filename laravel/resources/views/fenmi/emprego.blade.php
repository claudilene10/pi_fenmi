<!-- Importando o template via blade -->
@extends('fenmi/_template_frontend_fenmi')
<!-- Main -->
  @section('area_de_conteudo')



<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Fenmi - Empregos</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/emprego.css');}}">
</head>
<body>
  
  <main class="emprego-section">
    <div class="container">
     

      <nav class="emprego-filtros" aria-label="Filtros de tipo de contratação">
        <button class="filtro-btn active" data-tipo="todos" aria-pressed="true">Todos</button>
        <button class="filtro-btn" data-tipo="clt" aria-pressed="false">CLT</button>
        <button class="filtro-btn" data-tipo="pj" aria-pressed="false">PJ</button>
        <button class="filtro-btn" data-tipo="freela" aria-pressed="false">Freelancer</button>
      </nav>

      <div class="vagas-grid" role="list">
        <article class="vaga-card" data-tipo="clt" role="listitem" tabindex="0" aria-label="Vaga para Assistente Administrativo CLT em São Paulo">
          <h3>Assistente Administrativo</h3>
          <div class="vaga-meta">
            <span class="regime clt">CLT</span>
            <span class="local">São Paulo, SP</span>
          </div>
          <p>Auxiliar nas rotinas administrativas, financeiro e atendimento ao cliente com foco em organização e eficiência.</p>
          <button class="btn primary" aria-label="Candidatar-se para Assistente Administrativo CLT">Candidatar-se</button>
        </article>

        <article class="vaga-card" data-tipo="pj" role="listitem" tabindex="0" aria-label="Vaga para Desenvolvedor Front-End PJ remoto">
          <h3>Desenvolvedor Front-End</h3>
          <div class="vaga-meta">
            <span class="regime pj">PJ</span>
            <span class="local">Remoto</span>
          </div>
          <p>Projeto de 12 meses para desenvolvimento e manutenção de aplicações web modernas usando React e boas práticas de código.</p>
          <button class="btn primary" aria-label="Candidatar-se para Desenvolvedor Front-End PJ">Candidatar-se</button>
        </article>

        <article class="vaga-card" data-tipo="freela" role="listitem" tabindex="0" aria-label="Vaga para Designer Gráfico Freelancer remoto">
          <h3>Designer Gráfico</h3>
          <div class="vaga-meta">
            <span class="regime freela">Freelancer</span>
            <span class="local">Remoto</span>
          </div>
          <p>Desenvolvimento de artes digitais para redes sociais, identidade visual e campanhas de marketing com entrega rápida.</p>
          <button class="btn primary" aria-label="Candidatar-se para Designer Gráfico Freelancer">Candidatar-se</button>
        </article>

        <article class="vaga-card" data-tipo="clt" role="listitem" tabindex="0" aria-label="Vaga para Analista de Marketing CLT em Rio de Janeiro">
          <h3>Analista de Marketing</h3>
          <div class="vaga-meta">
            <span class="regime clt">CLT</span>
            <span class="local">Rio de Janeiro, RJ</span>
          </div>
          <p>Planejamento e execução de campanhas, análise de métricas e coordenação com equipes internas para crescimento da marca.</p>
          <button class="btn primary" aria-label="Candidatar-se para Analista de Marketing CLT">Candidatar-se</button>
        </article>
      </div>
    </div>
  </main>


  <script>
  // Seleciona todos os botões de filtro
  const filtroBtns = document.querySelectorAll('.filtro-btn');
  // Seleciona todas as vagas
  const vagas = document.querySelectorAll('.vaga-card');

  // Função para filtrar as vagas
  function filtrarVagas(tipo) {
    vagas.forEach(vaga => {
      const vagaTipo = vaga.getAttribute('data-tipo');
      if (tipo === 'todos' || vagaTipo === tipo) {
        vaga.style.display = 'flex'; // Mostra vaga
      } else {
        vaga.style.display = 'none'; // Esconde vaga
      }
    });
  }

  // Adiciona evento de clique em cada botão de filtro
  filtroBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const tipo = btn.getAttribute('data-tipo');

      // Remove a classe active de todos os botões
      filtroBtns.forEach(b => {
        b.classList.remove('active');
        b.setAttribute('aria-pressed', 'false');
      });

      // Adiciona a classe active no botão clicado
      btn.classList.add('active');
      btn.setAttribute('aria-pressed', 'true');

      // Filtra as vagas com base no tipo
      filtrarVagas(tipo);
    });
  });

  // Opcional: filtragem inicial para "todos"
  filtrarVagas('todos');
</script>

</body>
</html>
@endsection