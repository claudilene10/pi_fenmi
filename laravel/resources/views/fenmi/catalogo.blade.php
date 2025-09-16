<!-- Importando o template via blade -->
@extends('fenmi/_template_frontend_fenmi')
<!-- Main -->
  @section('area_de_conteudo')



<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Catálogo de Serviços</title>
 
  <!-- Fonte -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css_sampaio/catalogo.css">
 
</head>
<body>
 
 
 
  <section class="hero">
    <div class="wrap">
      <h1>Escolha o serviço ideal</h1>
      <p>Compare avaliações, preços e prazo. Solicite em poucos cliques.</p>
 
      <div class="searchbar">
        <input type="text" placeholder="Busque por serviço, ex.: ar-condicionado, limpeza, elétrica…"/>
        <button>Buscar</button>
      </div>
 
      <div class="filters">
        <div class="chip">Ar-condicionado <i>• 8</i></div>
        <div class="chip">Limpeza <i>• 12</i></div>
        <div class="chip">Elétrica <i>• 6</i></div>
        <div class="chip">Pintura <i>• 9</i></div>
        <div class="chip">Tecnologia <i>• 7</i></div>
        <div class="chip">Pets <i>• 4</i></div>
        <div class="chip">Jardinagem <i>• 5</i></div>
 
        <div class="sort">
          <label for="sort">Ordenar:</label>
          <select id="sort">
            <option value="relevante">Mais relevantes</option>
            <option value="avaliacao">Melhor avaliação</option>
            <option value="preco">Menor preço</option>
            <option value="recentes">Mais recentes</option>
          </select>
        </div>
      </div>
    </div>
  </section>
 
  
 
<main class="wrap">
 
 
  <div class="grid">
    <div class="card-servico">
      <img src="images_sampaio/limpeza.jpg.jpg" alt="Limpeza">
      <h3>Limpeza</h3>
      <p>Equipe ágil e de confiança para sua casa sempre impecável.</p>
    
      <div class="rating">
        ★★★★☆ <span>4.9</span>
      </div>
      <div class="jobs">+ de 45 serviços realizados</div>
      <div class="preco">R$ 120,00</div>
    
      <button  class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
    </div>
    
    <div class="card-servico">
      <img src="images_sampaio/eletrica.jpg.jpg" alt="Elétrica">
      <h3>Elétrica</h3>
      <p>Troca de disjuntores, tomadas, quadro e resolução de curto-circuitos.</p>
     
      <div class="rating">
        ★★★★☆ <span>4.9</span>
      </div>
      <div class="jobs">+ de 45 serviços realizados</div>
      <div class="preco">R$ 150,00</div>
 
      <button  class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
    </div>
 
    <div class="card-servico">
      <img src="images_sampaio/pintura.jpg" alt="Pintura">
      <h3>Pintura</h3>
      <p>Deixe seu ambiente renovado e bonito.</p>
      <div class="rating">
        ★★★★☆ <span>4.9</span>
      </div>
      <div class="jobs">+ de 45 serviços realizados</div>
      <div class="preco">R$ 200,00</div>
      <button  class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
    </div>
 
    <div class="card-servico">
      <img src="images_sampaio/manutencao.pc.jpg" alt="Manutenção de Computadores">
      <h3>Manutenção de Computadores</h3>
      <p>Formatação, upgrade de peças e remoção de vírus.</p>
      <div class="rating">
        ★★★★☆ <span>4.9</span>
      </div>
      <div class="jobs">+ de 45 serviços realizados</div>
      <div class="preco">R$ 100,00</div>
      <button class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
    </div>
   
    <div class="card-servico">
      <img src="images_sampaio/Assistência Técnica.jpg" alt="Assistência Técnica em TI">
      <h3>Assistência Técnica</h3>
      <p>Configuração de redes, instalação de softwares e suporte remoto.</p>
      <div class="rating">
        ★★★★☆ <span>4.9</span>
      </div>
      <div class="jobs">+ de 45 serviços realizados</div>
      <div class="preco">R$ 130,00</div>
      <button class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
    </div>
 
    <div class="card-servico">
      <img src="images_sampaio/jardinagem.jpg" alt="Jardinagem">
      <h3>Jardinagem</h3>
      <p>Cuidado completo com seu jardim e plantas.</p>
      <div class="rating">
        ★★★★☆ <span>4.9</span>
      </div>
      <div class="jobs">+ de 45 serviços realizados</div>
      <div class="preco">R$ 110,00</div>
      <button  class="solicitar" onclick="window.location.href='#'">
      <a href="{{ route('solicitacao') }}"></a>  
      Solicitar</button>
    </div>
 
    <div class="card-servico">
      <img src="images_sampaio/pets.jpg" alt="Pets">
      <h3>Pets</h3>
      <p>Serviços especializados para cuidar dos seus animais.</p>
      <div class="rating">
        ★★★★☆ <span>4.9</span>
      </div>
      <div class="jobs">+ de 45 serviços realizados</div>
      <div class="preco">R$ 90,00</div>
      <button  class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
    </div>
 
    <div class="card-servico">
      <img src="images_sampaio/ar-condicionado.jpg" alt="Ar-condicionado">
      <h3>Ar-condicionado</h3>
      <p>Instalação, manutenção e limpeza de aparelhos.</p>
      <div class="rating">
        ★★★★☆ <span>4.9</span>
      </div>
      <div class="jobs">+ de 45 serviços realizados</div>
      <div class="preco">R$ 180,00</div>
      <button  class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
    </div>
 
    <div class="card-servico">
      <img src="images_sampaio/mudanca.jpg" alt="Mudança">
      <h3>Mudança</h3>
      <p>Serviço de transporte de móveis com segurança.</p>
      <div class="rating">
        ★★★★☆ <span>4.9</span>
      </div>
      <div class="jobs">+ de 45 serviços realizados</div>
      <div class="preco">R$ 250,00</div>
      <button  class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
    </div>
 
    <div class="card-servico">
      <img src="images_sampaio/automovel.jpg" alt="Serviços Automotivos">
      <h3>Serviços Automotivos</h3>
      <p>Manutenção e reparos de veículos.</p>
      <div class="rating">
        ★★★★☆ <span>4.9</span>
      </div>
      <div class="jobs">+ de 45 serviços realizados</div>
      <div class="preco">R$ 220,00</div>
      <button class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
    </div>
 
 
  <div class="card-servico">
    <img src="images_sampaio/design.jpg" alt="Design Gráfico">
    <h3>Design Gráfico</h3>
    <p>Criação de logos, artes e materiais visuais.</p>
    <div class="rating">
      ★★★★☆ <span>4.9</span>
    </div>
    <div class="jobs">+ de 45 serviços realizados</div>
    <div class="preco">R$ 150,00</div>
    <button class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
  </div>
 
  <div class="card-servico">
    <img src="images_sampaio/saude.jpg" alt="Cuidados com a Saúde">
    <h3>Cuidados com a Saúde</h3>
    <p>Serviços de enfermagem, fisioterapia e bem-estar.</p>
    <div class="rating">
      ★★★★☆ <span>4.9</span>
    </div>
    <div class="jobs">+ de 45 serviços realizados</div>
    <div class="preco">R$ 140,00</div>
    <button class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
  </div>
 
  <div class="card-servico">
    <img src="images_sampaio/construção.jpg" alt="Construção e Reformas">
    <h3>Construção e Reformas</h3>
    <p>Profissionais para obras, reparos e reformas.</p>
    <div class="rating">
      ★★★★☆ <span>4.9</span>
    </div>
    <div class="jobs">+ de 45 serviços realizados</div>
    <div class="preco">R$ 300,00</div>
    <button class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
  </div>
 
  <div class="card-servico">
    <img src="images_sampaio/Captura de tela 2025-09-09 114343.png" alt="Organizer">
    <h3>Personal Organizer</h3>
    <p>Organização de armários, closets e ambientes para otimizar espaço e tempo.</p>
    <div class="rating">
      ★★★★☆ <span>4.9</span>
    </div>
    <div class="jobs">+ de 45 serviços realizados</div>
    <div class="preco">R$ 160,00</div>
    <button class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
  </div>
 
  <div class="card-servico">
    <img src="images_sampaio/pexels-katerina-holmes-5905841.jpg" alt="Organizer">
    <h3>Aulas Particulares</h3>
    <p>Organização de armários, closets e ambientes para otimizar espaço e tempo.</p>
    <div class="rating">
      ★★★★☆ <span>4.9</span>
    </div>
    <div class="jobs">+ de 45 serviços realizados</div>
    <div class="preco">R$ 100,00</div>
    <button class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
  </div>
 
  <div class="card-servico">
    <img src="images_sampaio/eventos.jpg" alt="Organização de Eventos">
    <h3>Organização de Eventos</h3>
    <p>Planejamento e execução de festas e reuniões.</p>
    <div class="rating">
    ★★★★☆ <span>4.9</span>
  </div>
  <div class="jobs">+ de 45 serviços realizados</div>
  <div class="preco">R$ 400,00</div>
    <button  class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
  </div>
 
 
<div class="card-servico">
  <img src="images_sampaio/seguranca.jpg" alt="Segurança">
  <h3>Segurança</h3>
  <p>Instalação de câmeras e sistemas de monitoramento.</p>
  <div class="rating">
    ★★★★☆ <span>4.9</span>
  </div>
  <div class="jobs">+ de 45 serviços realizados</div>
  <div class="preco">R$ 350,00</div>
    <button  class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
  </div>

 <div class="card-servico">
  <img src="images_sampaio/entrega.jpg" alt="Serviços de Entrega">
  <h3>Serviços de Entrega</h3>
  <p>Transporte rápido de produtos e encomendas.</p>
  <div class="rating">
    ★★★★☆ <span>4.9</span>
  </div>
  <div class="jobs">+ de 45 serviços realizados</div>
  <div class="preco">R$ 80,00</div>
 
    <button  class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
  </div>
 
 
<div class="card-servico">
  <img src="images_sampaio/gastronomia.jpg" alt="Gastronomia">
  <h3>Gastronomia</h3>
  <p>Buffets, chefs particulares e encomendas especiais.</p>
  <div class="rating">
    ★★★★☆ <span>4.9</span>
  </div>
  <div class="jobs">+ de 45 serviços realizados</div>
  <div class="preco">R$ 250,00</div>
 
    <button  class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
  </div>
 
<div class="card-servico">
  <img src="images_sampaio/carpintaria.png" alt="Carpintaria">
  <h3>Carpintaria</h3>
  <p>Móveis sob medida, consertos e restaurações em madeira.</p>
  <div class="rating">
    ★★★★☆ <span>4.9</span>
   </div>
    <div class="jobs">+ de 45 serviços realizados</div>
    <div class="preco">R$ 200,00</div>
      <button  class="solicitar" onclick="window.location.href='{{ route('solicitacao') }}'">Solicitar</button>
    </div>
 
  </div>
  </div>
  </div>
  <script src="js/catalogo.js">
  
  </script>
   
</main>

 

</body>
</html>

@endsection