<!-- Importando o template via blade -->
@extends('fenmi/_template_frontend_fenmi')
<!-- Main -->
  @section('area_de_conteudo')



  <section class="hero"> <div class="hero-text"> <h2>Uma nova forma de <strong><span><br>contratar profissionais</span></strong></h2> <div class="search-bar"> <input type="text" id="searchInput" placeholder="Serviço ou especialidade"> <button onclick="buscarServicos()">Pesquisar</button> </div> <div id="resultado"></div> <!-- onde o resultado vai aparecer --> </div> <div class="hero-img"> <img src="images/couple-5963678_1920.png" alt="Profissional Fenmi" /> </div> </section>

  <section class="categories" id="categoriaContainer">
    <div class="category"><img src="images/faucet.png" alt="Hidráulico"><div> 
    <a href="{{ route('catalogo') }}" class="link-back">Serviços Hidráulicos</a>   </div></div>
    <div class="category"><img src="images/light-bulb.png" alt="Elétrico"><div>
    <a href="{{ route('catalogo') }}" class="link-back"> Serviços Elétricos</a>   </div></div>
    <div class="category"><img src="images/ar-condicionado (1).png" alt="Ar"><div>       
    <a href="{{ route('catalogo') }}" class="link-back">Ar-condicionado</a>   </div></div>
    <div class="category"><img src="images/chave-de-fenda.png" alt="Reparos"><div>   
    <a href="{{ route('catalogo') }}" class="link-back">Pequenos Reparos</a>    </div></div>
    <div class="category"><img src="images/furadeira-de-mao.png" alt="Instalações"><div>    
    <a href="{{ route('catalogo') }}" class="link-back"> Instalações</a>  </div></div>
    <div class="category"><img src="images/balde-de-tinta.png" alt="Decoração"><div> 
    <a href="{{ route('catalogo') }}" class="link-back">  Decoração</a>  </div></div>
    <div class="category"><img src="images/limpeza (1).png" alt="Limpeza"><div>
    <a href="{{ route('catalogo') }}" class="link-back">   Serviços de Limpeza</a>  </div></div>
    <div class="category"><img src="images/colher-de-pedreiro.png" alt="Piso"><div>
    <a href="{{ route('catalogo') }}" class="link-back">  Serviços de Piso</a>   </div></div>
    <div class="category"><img src="images/armario (2).png" alt="Móveis"><div>
    <a href="{{ route('catalogo') }}" class="link-back">  Montagem de Móveis</a>   </div></div>
    <div class="category"><img src="images/caminhao.png" alt="Fretes"><div>
    <a href="{{ route('catalogo') }}" class="link-back">  Fretes</a>    </div></div>
    <div class="category"><img src="images/rolo-de-pintura.png" alt="Pintura"><div>
    <a href="{{ route('catalogo') }}" class="link-back"> Pintura</a>  </div></div>
  </section>


  <section class="info-section">
    <div class="info-text">
      <h2>A Fenmi acompanha seu <span >pedido do início ao fim</span></h2>
      <br>
      <br>
      <p>Conte exatamente o que precisa, receba orçamentos detalhados, compare profissionais, converse diretamente com elas, contrate com segurança e pague tudo em um único lugar. Além disso, acompanhe cada etapa do serviço em tempo real e conte com suporte todos os dias para tirar dúvidas, resolver problemas ou ajustar o que for necessário. Com a Fenmi, você tem praticidade, transparência e segurança do começo ao fim.</p>
      <br>
      <br>
      <br>
  
      <button class="btnEntenda">
      <a href="{{ route('quemsomos') }}">Entenda como funciona</a> </button>
    </div>
  
    <div class="cards-benefits">
      <div class="card-benefit">
        
        <h4>Profissionais verificadas</h4>
      </div>
      <div class="card-benefit">
      
        <h4>Pagamento até 6x</h4>
      </div>
      <div class="card-benefit">
       
        <h4>Suporte todos os dias</h4>
      </div>
    </div>
  </section>



<section class="popular">
  <h3>Serviços populares</h3>
  <div class="carousel-container">
    <button class="carousel-btn prev">&lt;</button>
    <div class="service-grid">
      <!-- seus cards aqui -->
      <div class="service-card">
        <img src="images/eletricista.webp"width=100%">
        <h4> eletricista</h4>
        <p>⭐ 4.9 (4424 avaliações)</p>
        <p><strong>Preço médio R$ 175,00</strong></p>
      </div>
       <div class="service-card">
        <img src="images/ar-condicionado.webp" width="100%">
        <h4>Instalção de ar-condicionado</h4>
        <p>⭐ 4.9 (4424 avaliações)</p>
        <p><strong>Preço médio R$ 703,99</strong></p>
      </div>
       <div class="service-card">
        <img src="images/colocação de piso porcelanato.webp" width="100%">
        <h4>Colocação de porcelanato</h4>
        <p>⭐ 4.9 (4424 avaliações)</p>
        <p><strong>Preço médio R$ 177,87</strong></p>
      </div>
       <div class="service-card">
        <img src="images/desinstalação de ar-condicionado.webp" width="100%">
        <h4>Desinstalação de ar-condicionado</h4>
        <p>⭐ 4.8 (732 avaliações)</p>
        <p><strong>Preço médio R$355,00</strong></p>
      </div>
       <div class="service-card">
        <img src="images/higienização de colções.webp" width="100%">
        <h4>Limpeza de colchões</h4>
        <p>⭐ 4.9 (4424 avaliações)</p>
        <p><strong>Preço médio R$ 250,00</strong></p>
      </div>
       <div class="service-card">
        <img src="images/instalação de papel de parede.webp" width="100%">
        <h4>Instalação de papel de parede</h4>
        <p>⭐ 4.9 (462 avaliações)</p>
        <p><strong>Preço médio R$ 130,00</strong></p>
      </div>
       <div class="service-card">
        <img src="images/instalação de perciana e cortina.webp" width="100%">
        <h4>Instalação de rede de proteção</h4>
        <p>⭐ 4.9 (4424 avaliações)</p>
        <p><strong>Preço médio R$ 432,00</strong></p>
      </div>
       <div class="service-card">
        <img src="images/instalação de rede de proteção.webp" width="100%">
        <h4>Instalação de rede de proteção</h4>
        <p>⭐ 5.0 (799 avaliações)</p>
        <p><strong>Preço médio R$ 432,00</strong></p>
      </div>
       <div class="service-card">
        <img src="images/instalação de suporte de tv.webp" width="100%">
        <h4>Instalação de suporte de TV</h4>
        <p>⭐ 4.9 (124 avaliações)</p>
        <p><strong>Preço médio R$ 177,87</strong></p>
      </div>
       <div class="service-card">
        <img src="images/limpeza caixa d'agua.webp" width="100%">
        <h4>Limpeza de caixa d'água</h4>
        <p>⭐ 4.9 (150 avaliações)</p>
        <p><strong>Preço médio R$ 177,87</strong></p>
      </div>
      <div class="service-card">
        <img src="images/limpeza de calha.webp" width="100%">
        <h4>Serviços elétricos</h4>
        <p>⭐ 4.9 (4424 avaliações)</p>
        <p><strong>Preço médio R$ 233,00</strong></p>
      </div>
      <div class="service-card">
        <img src="images/limpeza de tapete.webp" width=100%">
        <h4>Limpeza de Tapetes</h4>
        <p>⭐ 4.9 (4424 avaliações)</p>
        <p><strong>Preço médio R$ 389,00</strong></p>
      </div>
      <div class="service-card">
        <img src="images/frete.webp" width="100%">
        <h4>Frete</h4>
        <p>⭐ 4.9 (6424 avaliações)</p>
        <p><strong>Preço médio R$ 338,00</strong></p>
      </div>
      <div class="service-card">
        <img src="images/Sanitização.webp" width="100%">
        <h4>Sanitização</h4>
        <p>⭐ 4.9 (396 avaliações)</p>
        <p><strong>Preço médio R$ 250,85</strong></p>
      </div>
      <div class="service-card">
        <img src="images/montador de moveis.webp" width="100%">
        <h4>Montador de móveis</h4>
        <p>⭐ 4.9 (4424 avaliações)</p>
        <p><strong>Receba 3 orçamentos em até 24 horas!</strong></p>
      </div>

      <!-- repita os outros cards -->
    </div>
    <button class="carousel-btn next">&gt;</button>
  </div>
  <a href="{{ route('catalogo') }}" class="link-back"> Carregar mais serviços</a>
  
</section>


<div id="serviceModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="serviceDetails"></div>
  </div>
</div>


  <section class="banner-final">
    <img src="images/9909087.webp" alt="Reforma">
    <div class="banner-text">
      <h2>Quer reformar?<br><span style="color: var(--primary);">Calma, você não precisa fazer tudo sozinha</span></h2>
      <p>Saiba como planejar e executar sua reforma. Conheça os serviços Fenmi e planeje seus custos.</p>
      <br>
      <button class="btn primary">
      <a href="{{ route('planejar_reforma') }}" class="link-back"> Quero planejar minha reforma</a>
  
      </button>
    </div>
  </section>



   <section class="hero-fenmi">
  <div class="hero-fenmi-content">
    <img src="images/camisa-removebg-preview.png" alt="Profissional Fenmi" class="hero-fenmi-img" />

    <div class="hero-fenmi-text">
      <img src="images/ChatGPT Image 20 de ago. de 2025, 11_05_11.png" alt="Logo fenmi" class="logo-fenmi" />
      <h1>0 anos conectando <br><span class="fenmi-orange">clientes e profissionais</span></h1>

      <div class="fenmi-buttons">
        <button class="fenmi-btn-primary">
        <a href="{{ route('catalogo') }}" class="link-back">  Encontrar profissionais</a>  </button>
        <button class="fenmi-btn-secondary">
        <a href="{{ route('login') }}" class=""t>Sou profissional</a>  </button>
      </div>
    </div>
  </div>
</section>

<section class="fenmi-stats">
  <div class="fenmi-stat">
    <h2>+ 000 mil</h2>
    <p class="fenmi-subtitle">usuário registrados</p>
    <p>Várias pessoas confiam na gente para encontrar profissionais qualificados e de confiança para ajudarem com seus serviços de manutenção e reforma.</p>
  </div>

  <div class="fenmi-stat">
    <h2>+ 00 mil</h2>
    <p class="fenmi-subtitle">projetos abraçados</p>
    <p>Da instalação de luminária até pintura de parede, contamos com diversos serviços de reforma e decoração para realizar o desejo dos clientes ou resolver problemas domésticos.</p>
  </div>

  <div class="fenmi-stat">
    <h2>+ 00 milhões</h2>
    <p class="fenmi-subtitle">em renda para profissionais</p>
    <p>Ajudamos a mudar a vida de muitos profissionais aumentando sua renda e dando mais condições para alcançarem seus objetivos e melhorarem a qualidade de vida.</p>
  </div>
</section>


  
  <script>
    const menuBtn = document.getElementById('menu');
    const navUl = document.querySelector('nav ul');
  
    menuBtn.addEventListener('click', () => {
      navUl.classList.toggle('show');
    });

    ublic function buscar(Request $request)
{
    $termo = $request->input('q');

    // Simulando busca em um array ou você pode fazer no DB
    $servicos = [
        'Cabeleireira',
        'Manicure',
        'Pedicure',
        'Babá',
        'Nutricionista',
        'Eletricista',
        'Pintura',
        'Reparos'
    ];

    $resultados = array_filter($servicos, function($s) use ($termo) {
        return stripos($s, $termo) !== false;
    });

    return view('resultados', ['resultados' => $resultados, 'termo' => $termo]);
}

  </script>
<script src="js/script.js"></script>
  </body>
</html>
@endsection