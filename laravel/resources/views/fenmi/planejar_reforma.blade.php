<!-- Importando o template via blade -->
@extends('fenmi/_template_frontend_fenmi')
<!-- Main -->
  @section('area_de_conteudo')
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Prestadores</title>
    <link rel="stylesheet" href="css/planejar_reforma.css">

<section class="hero">
  <div class="hero-content">
    <h1>
      Sua reforma pode <br>
      <span>ser muito mais fácil</span>
    </h1>
    <p>
      Conte com os mais de 50 serviços do <strong>Fenmi</strong> para ficar apenas com a parte boa de reformar a casa.
    </p>
    <a href="#" class="btn">Contratar serviços de reforma</a>
    <a href="#" class="link">Entenda como funciona</a>
  </div>
  <div class="hero-img">
    <img src="images/couple-5963678_1920.png" alt="Profissional Fenmi">
  </div>
</section>

<section class="reformas">
        <div class="reformas-header">
          <h2><span></span> Tipos de reforma - Saiba como escolher</h2>
         
        </div>
      
        <div class="reformas-cards">
          <div class="card">
            <h3>Repaginada ou reformas em geral</h3>
            <div class="line"></div>
            <p>
              No dia que você começar a sonhar com reforma, uma dica interessante é pensar em uma repaginada sem grandes quebras. 
              Neste tipo de reforma residencial estamos considerando 
              <a href="#">troca de piso</a>, 
              <a href="#">pintura de paredes</a>, 
              reforma de telhados, adequação da parte elétrica ou 
              <a href="#">hidráulica</a>, por exemplo.
            </p>
          </div>
      
          <div class="card">
            <h3>Reforma por ambientes</h3>
            <div class="line"></div>
            <p>
              Ter um banheiro reformado ou uma cozinha repaginada aumenta seu bem-estar e qualidade de vida. 
              Se você não está pronto para uma reforma geral, que tal começar a repaginar um ambiente de cada vez? 
              Assim você mantém os gastos sob controle.
            </p>
          </div>
      
          <div class="card">
            <h3>Reforma com demolição ou ampliação</h3>
            <div class="line"></div>
            <p>
              Este é o tipo mais completo de reforma, que pode incluir altos investimentos, aprovação de órgãos públicos 
              e um projeto detalhado. Se esta for sua opção, planeje muito bem a obra e esteja preparado para imprevistos.
            </p>
          </div>
        </div>
      </section>

       
      <section class="passo-a-passo">
  <div class="passo-container">
    <div class="passo-img">
      <img src="images/duvida.png" alt="Profissionais confusos" />
    </div>

    <div class="passo-texto">
      <h2>Não sabe por onde começar?</h2>
      <p>
        Conheça nossa trilha da reforma Fenmi. Aqui você vai encontrar um passo a passo
        para organizar programas de reforma:
      </p>

      <ul class="timeline">
        <li>
          <span class="check"></span>
          <div>
            <strong>Defina o que você quer fazer</strong>
            <p>Saber o que você quer reformar e como quer que o ambiente fique é o primeiro passo para ter sucesso na sua obra.</p>
          </div>
        </li>
        <li>
          <span class="check"></span>
          <div>
            <strong>Peça orçamentos e determine prazos</strong>
            <p>Os profissionais da Fenmi ajudam a estabelecer etapas, delimitar orçamentos e estimar prazos para cada detalhe da obra.</p>
          </div>
        </li>
        <li>
          <span class="check"></span>
          <div>
            <strong>Execute a obra</strong>
            <p>Com o planejamento feito, é hora de confiar a execução da obra aos profissionais selecionados.</p>
          </div>
        </li>
        <li>
          <span class="check"></span>
          <div>
            <strong>Relaxe e aproveite</strong>
            <p>Tudo pronto? Agora você pode relaxar e aproveitar seu ambiente reformado.</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>


@endsection