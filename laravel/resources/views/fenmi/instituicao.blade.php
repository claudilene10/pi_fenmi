<!-- Importando o template via blade -->
@extends('fenmi/_template_frontend_fenmi')
<!-- Main -->
  @section('area_de_conteudo')




<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Fenmi - Instituição</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --primary: #EF2F7E;
      --primary-dark: #d62484;
      --bg-light: #fff;
      --text-dark: #333;
      --text-muted: #666;
      --border: #eee;
      --shadow: rgba(0, 0, 0, 0.05);
    }

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
    }


    main {
      padding: 5rem 1rem;
      background: var(--bg-light);
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    .instituicao-header {
      text-align: center;
      margin-bottom: 4rem;
    }

    .instituicao-header h2 {
      font-size: 3rem;
      color: var(--primary);
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .instituicao-header p {
      font-size: 1.2rem;
      color: var(--text-muted);
      line-height: 1.8;
    }

    .cursos-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2.5rem;
      margin-bottom: 4rem;
    }

    .curso-card {
      background: white;
      border-radius: 16px;
      box-shadow: 0 8px 30px var(--shadow);
      padding: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-top: 4px solid var(--primary);
    }

    .curso-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 45px rgba(239, 47, 126, 0.3);
    }

    .curso-card h3 {
      color: var(--primary);
      font-size: 1.6rem;
      margin-bottom: 1rem;
    }

    .curso-card p {
      flex-grow: 1;
      color: var(--text-muted);
      margin-bottom: 2rem;
      font-size: 1rem;
      line-height: 1.6;
    }

    .btn1 {
      align-self: flex-start;
      padding: 0.8rem 2rem;
      border-radius: 30px;
      background: var(--primary);
      color: var(--bg-light);
      border: none;
      font-weight: 700;
      cursor: pointer;
      font-size: 1rem;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }


    button.btn1 a {
    color: white !important; /* força a cor */
    text-decoration: none;
  }

    button.btn a:hover {
      color: #ddd !important; /* cor no hover */
    }
 

    

    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
      }

     

      .instituicao-header h2 {
        font-size: 2.5rem;
      }

      .instituicao-header p {
        font-size: 1.1rem;
      }
    }

    @media (max-width: 600px) {
      .instituicao-header h2 {
        font-size: 2.2rem;
      }

      .instituicao-header p {
        font-size: 1rem;
      }

      .cursos-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>


  <main>
    <div class="container">

      <section class="instituicao-header">
        <h2>Nossos Cursos</h2>
        <p>Todos os cursos são oferecidos por mulheres para mulheres, garantindo segurança, respeito e qualidade em cada aprendizado.</p>
      </section>

      <div class="cursos-grid">
        <div class="curso-card">
          <h3>Marketing Digital</h3>
          <p>Descubra estratégias de conteúdo, anúncios e redes sociais para crescer negócios digitais com segurança.</p>
          <button class="btn1">
          <a href="https://www.ead.senac.br/gratuito/ferramentas-de-marketing-digital/?gad_source=1&gad_campaignid=22037987264&gbraid=0AAAAACyRX5WN5newE2r7QpoLtN9aQXomv&gclid=Cj0KCQjw8p7GBhCjARIsAEhghZ2ZJgIfyaseFbx4pAnzj6GqLx4dUlzdxjfhQ9VycUWEVp8pu_oEQmgaAqL3EALw_wcB" 
   class="btn1" 
   target="_blank" 
   rel="noopener noreferrer">
   Saiba mais
</a>
       </button>
        </div>
        <div class="curso-card">
          <h3>Design Gráfico</h3>
          <p>Domine ferramentas e técnicas para criar peças gráficas impactantes para web e impressão.</p>
          <button class="btn1">
          <a href="https://www.ead.senac.br/gratuito/ferramentas-de-marketing-digital/?gad_source=1&gad_campaignid=22037987264&gbraid=0AAAAACyRX5WN5newE2r7QpoLtN9aQXomv&gclid=Cj0KCQjw8p7GBhCjARIsAEhghZ2ZJgIfyaseFbx4pAnzj6GqLx4dUlzdxjfhQ9VycUWEVp8pu_oEQmgaAqL3EALw_wcB" 
   class="btn1" 
   target="_blank" 
   rel="noopener noreferrer">Saiba mais
   
</a>  
          </button>
        </div>
        <div class="curso-card">
          <h3>Programação Web</h3>
          <p>Aprenda a criar sites responsivos e aplicações modernas com HTML, CSS, JavaScript e frameworks.</p>
          <button class="btn1">
          <a href="https://www.ead.senac.br/gratuito/ferramentas-de-marketing-digital/?gad_source=1&gad_campaignid=22037987264&gbraid=0AAAAACyRX5WN5newE2r7QpoLtN9aQXomv&gclid=Cj0KCQjw8p7GBhCjARIsAEhghZ2ZJgIfyaseFbx4pAnzj6GqLx4dUlzdxjfhQ9VycUWEVp8pu_oEQmgaAqL3EALw_wcB" 
   class="btn1" 
   target="_blank" 
   rel="noopener noreferrer">Saiba mais
   
</a>
         </button>
        </div>
        <div class="curso-card">
          <h3>Empreendedorismo</h3>
          <p>Aprenda a criar, planejar e gerenciar o seu próprio negócio de forma sustentável e lucrativa.</p>
          <button class="btn1">
          <a href="https://www.ead.senac.br/gratuito/ferramentas-de-marketing-digital/?gad_source=1&gad_campaignid=22037987264&gbraid=0AAAAACyRX5WN5newE2r7QpoLtN9aQXomv&gclid=Cj0KCQjw8p7GBhCjARIsAEhghZ2ZJgIfyaseFbx4pAnzj6GqLx4dUlzdxjfhQ9VycUWEVp8pu_oEQmgaAqL3EALw_wcB" 
   class="btn1" 
   target="_blank" 
   rel="noopener noreferrer">Saiba mais
   
</a>
          </button>
        </div>
        <div class="curso-card">
          <h3>Finanças Pessoais</h3>
          <p>Organize suas finanças, aprenda a investir e planejar sua vida financeira com segurança e liberdade.</p>
          <button class="btn1">
          <a href="https://www.ead.senac.br/gratuito/ferramentas-de-marketing-digital/?gad_source=1&gad_campaignid=22037987264&gbraid=0AAAAACyRX5WN5newE2r7QpoLtN9aQXomv&gclid=Cj0KCQjw8p7GBhCjARIsAEhghZ2ZJgIfyaseFbx4pAnzj6GqLx4dUlzdxjfhQ9VycUWEVp8pu_oEQmgaAqL3EALw_wcB" 
   class="btn1" 
   target="_blank" 
   rel="noopener noreferrer">Saiba mais
   
</a>
          
          </button>
        </div>
        <div class="curso-card">
          <h3>Maquiagem Profissional</h3>
          <p>Aprenda técnicas para se tornar uma maquiadora profissional e atender clientes com excelência.</p>
          <button class="btn1">
          <a href="https://www.ead.senac.br/gratuito/ferramentas-de-marketing-digital/?gad_source=1&gad_campaignid=22037987264&gbraid=0AAAAACyRX5WN5newE2r7QpoLtN9aQXomv&gclid=Cj0KCQjw8p7GBhCjARIsAEhghZ2ZJgIfyaseFbx4pAnzj6GqLx4dUlzdxjfhQ9VycUWEVp8pu_oEQmgaAqL3EALw_wcB" 
   class="btn1" 
   target="_blank" 
   rel="noopener noreferrer">Saiba mais
   
</a>
          </button>
        </div>
        <div class="curso-card">
          <h3>Cuidados com Idosos</h3>
          <p>Formação completa para atuar como cuidadora, garantindo saúde, segurança e carinho no dia a dia.</p>
          <button class="btn1">
          <a href="https://www.ead.senac.br/gratuito/ferramentas-de-marketing-digital/?gad_source=1&gad_campaignid=22037987264&gbraid=0AAAAACyRX5WN5newE2r7QpoLtN9aQXomv&gclid=Cj0KCQjw8p7GBhCjARIsAEhghZ2ZJgIfyaseFbx4pAnzj6GqLx4dUlzdxjfhQ9VycUWEVp8pu_oEQmgaAqL3EALw_wcB" 
   class="btn1" 
   target="_blank" 
   rel="noopener noreferrer">Saiba mais
   
</a>
          </button>
        </div>
        <div class="curso-card">
          <h3>Culinária Saudável</h3>
          <p>Descubra receitas nutritivas e práticas para seu dia a dia ou para empreender no ramo alimentício.</p>
          <button class="btn1">
          <a href="https://www.ead.senac.br/gratuito/ferramentas-de-marketing-digital/?gad_source=1&gad_campaignid=22037987264&gbraid=0AAAAACyRX5WN5newE2r7QpoLtN9aQXomv&gclid=Cj0KCQjw8p7GBhCjARIsAEhghZ2ZJgIfyaseFbx4pAnzj6GqLx4dUlzdxjfhQ9VycUWEVp8pu_oEQmgaAqL3EALw_wcB" 
   class="btn1" 
   target="_blank" 
   rel="noopener noreferrer">Saiba mais
   
</a>
          </button>
        </div>
        <div class="curso-card">
          <h3>Moda e Estilo</h3>
          <p>Aprenda consultoria de imagem, análise de cores e criação de looks que valorizam cada cliente.</p>
          <button class="btn1">
          <a href="https://www.ead.senac.br/gratuito/ferramentas-de-marketing-digital/?gad_source=1&gad_campaignid=22037987264&gbraid=0AAAAACyRX5WN5newE2r7QpoLtN9aQXomv&gclid=Cj0KCQjw8p7GBhCjARIsAEhghZ2ZJgIfyaseFbx4pAnzj6GqLx4dUlzdxjfhQ9VycUWEVp8pu_oEQmgaAqL3EALw_wcB" 
   class="btn1" 
   target="_blank" 
   rel="noopener noreferrer">Saiba mais
   
</a>
         </button>
        </div>
        <!-- Cursos "tradicionais" para homens, mas aqui oferecidos para mulheres -->
        <div class="curso-card">
          <h3>Eletricista</h3>
          <p>Capacitação completa para atuar com segurança e qualidade em serviços elétricos residenciais e comerciais.</p>
          <button class="btn1">
          <a href="https://www.ead.senac.br/gratuito/ferramentas-de-marketing-digital/?gad_source=1&gad_campaignid=22037987264&gbraid=0AAAAACyRX5WN5newE2r7QpoLtN9aQXomv&gclid=Cj0KCQjw8p7GBhCjARIsAEhghZ2ZJgIfyaseFbx4pAnzj6GqLx4dUlzdxjfhQ9VycUWEVp8pu_oEQmgaAqL3EALw_wcB" 
   class="btn1" 
   target="_blank" 
   rel="noopener noreferrer">Saiba mais
   
</a>
          </button>
        </div>
        <div class="curso-card">
          <h3>Motorista Profissional</h3>
          <p>Treinamento para motoristas mulheres que buscam atuar com segurança e profissionalismo no trânsito.</p>
          <button class="btn1">
          <a href="https://www.ead.senac.br/gratuito/ferramentas-de-marketing-digital/?gad_source=1&gad_campaignid=22037987264&gbraid=0AAAAACyRX5WN5newE2r7QpoLtN9aQXomv&gclid=Cj0KCQjw8p7GBhCjARIsAEhghZ2ZJgIfyaseFbx4pAnzj6GqLx4dUlzdxjfhQ9VycUWEVp8pu_oEQmgaAqL3EALw_wcB" 
   class="btn1" 
   target="_blank" 
   rel="noopener noreferrer">Saiba mais
   
</a>
          </button>
        </div>
        <div class="curso-card">
          <h3>Construção Civil</h3>
          <p>Curso voltado para técnicas e práticas na área da construção, desenvolvido para mulheres empreendedoras.</p>
          <button class="btn1">
          <a href="https://www.ead.senac.br/gratuito/ferramentas-de-marketing-digital/?gad_source=1&gad_campaignid=22037987264&gbraid=0AAAAACyRX5WN5newE2r7QpoLtN9aQXomv&gclid=Cj0KCQjw8p7GBhCjARIsAEhghZ2ZJgIfyaseFbx4pAnzj6GqLx4dUlzdxjfhQ9VycUWEVp8pu_oEQmgaAqL3EALw_wcB" 
   class="btn1" 
   target="_blank" 
   rel="noopener noreferrer">Saiba mais
   
</a>
          </button>
        </div>
      </div>

    </div>
  </main>



  <script>
    const menuToggle = document.querySelector(".menu-toggle");
    const navUl = document.querySelector("nav ul");

    menuToggle.addEventListener("click", () => {
      navUl.classList.toggle("show");
    });
  </script>
</body>
</html>

@endsection
