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
  <style>
    /* Variáveis */
    :root {
      --primary: #EF2F7E; /* Rosa */
      --bg-light: #f9f9f9; /* Fundo claro */
      --text-dark: #333; /* Texto escuro */
      --border: #ddd; /* Bordas */
      --btn-hover: #d62484; /* Rosa escuro para hover */
      --neutral: #444; /* Texto neutro */
      --subtitle: #666; /* Subtítulo */
    }

    /* Reset básico */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'inter', sans-serif;
    }

    body {
      background: white;
      color: var(--text-dark);
      line-height: 1.6;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }



    /* Emprego Section */
    .emprego-section {
      flex-grow: 1;
      background: #fff;
      padding: 4rem 1rem;
    }

    .container {
      max-width: 1100px;
      margin: 0 auto;
    }

    .emprego-header {
      text-align: center;
      margin-bottom: 3rem;
    }

    .emprego-header h2 {
      font-size: 2.8rem;
      color: var(--primary);
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .emprego-header p.subtitle {
      font-size: 1.1rem;
      color: var(--subtitle);
      max-width: 600px;
      margin: 0 auto;
      font-weight: 400;
    }

    /* Filtros */
    .emprego-filtros {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 3rem;
      flex-wrap: wrap;
    }

    .filtro-btn {
      padding: 0.8rem 1.6rem;
      border-radius: 25px;
      border: 2px solid var(--primary);
      background: white;
      color: var(--primary);
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 2px 8px rgb(0 0 0 / 0.05);
      min-width: 100px;
      text-align: center;
      user-select: none;
    }

    .filtro-btn:hover,
    .filtro-btn:focus {
      background: var(--primary);
      color: white;
      outline: none;
      box-shadow: 0 4px 15px rgb(239 47 126 / 0.5);
    }

    .filtro-btn.active {
      background: var(--primary);
      color: white;
      box-shadow: 0 6px 20px rgb(239 47 126 / 0.6);
      pointer-events: none;
    }

    /* Grid das vagas */
    .vagas-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 2.4rem;
    }

    /* Card da vaga */
    .vaga-card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 3px 15px rgb(0 0 0 / 0.07);
      padding: 2rem 2.4rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .vaga-card:hover,
    .vaga-card:focus {
      transform: translateY(-8px);
      box-shadow: 0 10px 30px rgb(239 47 126 / 0.3);
      outline: none;
    }

    .vaga-card h3 {
      font-weight: 700;
      color: var(--primary);
      margin-bottom: 1rem;
      font-size: 1.5rem;
      line-height: 1.3;
    }

    .vaga-meta {
      display: flex;
      gap: 1rem;
      margin-bottom: 1.5rem;
      font-size: 0.9rem;
      font-weight: 600;
      color: #555;
    }

    .vaga-meta .regime {
      padding: 0.3rem 0.8rem;
      border-radius: 20px;
      font-size: 0.85rem;
      font-weight: 700;
      color: white;
      text-transform: uppercase;
      letter-spacing: 0.03em;
    }

    .regime.clt {
      background-color: #14b8a6; /* verde */
    }

    .regime.pj {
      background-color: #ef4444; /* vermelho */
    }

    .regime.freela {
      background-color: var(--primary); /* rosa */
    }

    .vaga-meta .local {
      color: #888;
      font-weight: 500;
    }

    .vaga-card p {
      flex-grow: 1;
      color: var(--neutral);
      font-size: 1rem;
      margin-bottom: 1.8rem;
      line-height: 1.4;
    }

    /* Botão de candidatar */
    .vaga-card .btn.primary {
      align-self: flex-start;
      padding: 0.7rem 2rem;
      font-weight: 700;
      border-radius: 30px;
      background: var(--primary);
      color: white;
      border: none;
      transition: background-color 0.3s ease;
      cursor: pointer;
      box-shadow: 0 3px 10px rgb(239 47 126 / 0.6);
    }

    .vaga-card .btn.primary:hover,
    .vaga-card .btn.primary:focus {
      background-color: var(--btn-hover);
      outline: none;
      box-shadow: 0 6px 20px rgb(239 47 126 / 0.8);
    }

    /* Footer */
    footer {
    text-align: center;
    padding: 2rem 1rem;
    background: var(--bg-light);
    color: #888;
    margin-top: 2rem;
  }

    /* Responsividade */
    @media (max-width: 768px) {
      nav ul {
        gap: 1rem;
      }

      .emprego-header h2 {
        font-size: 2.2rem;
      }

      .emprego-header p.subtitle {
        font-size: 1rem;
        max-width: 90%;
      }

      .vagas-grid {
        grid-template-columns: 1fr;
      }

      .filtro-btn {
        min-width: 90px;
        padding: 0.7rem 1.4rem;
      }
    }

    @media (max-width: 480px) {
      header {
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
      }

      nav ul {
        flex-wrap: wrap;
        justify-content: center;
      }

      .actions {
        width: 100%;
        justify-content: center;
      }
    }
  </style>
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