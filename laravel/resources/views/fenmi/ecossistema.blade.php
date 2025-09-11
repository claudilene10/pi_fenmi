<!-- Importando o template via blade -->
@extends('fenmi/_template_frontend_fenmi')
<!-- Main -->
  @section('area_de_conteudo')



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fenmi Sustentável</title>
  <link rel="stylesheet" href="css/ecosistema.css">
</head>
<body>
  
  <section class="hero">
    <div class="hero-text">
      <h2>Fenmi sustentável <strong><span><br>Parceria Ambiental • Fenmi + ONG</span></strong></h2>
      <p class="paragrafo">
        Conectamos clientes e prestadores a <br><strong>serviços sustentáveis</strong> — do painel solar à horta vertical — e destinamos parte de cada serviço para <br>
        <strong>projetos ambientais</strong> como plantio de árvores e limpeza de rios.
     
    </div>
    <div class="hero-img">
      <img src="image/midia.png" alt="Profissional Fenmi" />
    </div>
  </section>
  <main class="wrap">

    

    <!-- COMO FUNCIONA -->
    <section id="como-funciona">
      <h2>Como a parceria funciona</h2>
      <p class="sub">Um fluxo simples para gerar impacto real e mensurável.</p>
      <div class="grid cols-3">
        <div class="etapas etapa card">
          <span class="num">1</span>
          <h3>Categorização Verde</h3>
          <p>Prestadores entram na categoria <strong>Serviços Sustentáveis</strong> após verificação e treinamento ambiental com a ONG parceira.</p>
        </div>
        <div class="etapas etapa card">
          <span class="num">2</span>
          <h3>Serviço &amp; Doação</h3>
          <p>Parte do valor de cada serviço é destinada automaticamente para <strong>projetos ambientais</strong> auditados.</p>
        </div>
        <div class="etapas etapa card">
          <span class="num">3</span>
          <h3>Impacto Transparente</h3>
          <p>Relatórios trimestrais com <strong>métricas</strong> (árvores plantadas, CO₂ evitado, resíduos desviados de aterro).</p>
        </div>
      </div>
    </section>

    <!-- SERVIÇOS -->
    <section>
      <h2>Serviços sustentáveis oferecidos</h2>
      <div class="grid cols-2">
        <div class="card item">
          <h3>Energia &amp; Água</h3>
          <ul class="bullet">
            <li>Instalação de painéis solares</li>
            <li>Sistemas de captação de água da chuva</li>
            <li>Eficiência energética residencial e comercial</li>
          </ul>
          <span class="tag">Energia limpa</span>
          <span class="tag">Economia hídrica</span>
        </div>
        <div class="card item">
          <h3>Resíduos &amp; Verde Urbano</h3>
          <ul class="bullet">
            <li>Coleta seletiva e logística reversa</li>
            <li>Compostagem doméstica e empresarial</li>
            <li>Hortas verticais e paisagismo nativo</li>
          </ul>
          <span class="tag">Zero Aterro</span>
          <span class="tag">Cidades verdes</span>
        </div>
      </div>
    </section>

    <!-- IMPACTO (valores ilustrativos, troque pelos seus) -->
    <section aria-label="indicadores de impacto">
      <h2>Impacto estimado da parceria</h2>
      <p class="sub">Números referência para o 1º ano de operação (ajuste com dados reais):</p>
      <div class="impacto">
        <div class="metric"><strong>2.500</strong>árvores plantadas</div>
        <div class="metric"><strong>180 t</strong>CO₂ evitadas</div>
        <div class="metric"><strong>120 t</strong>resíduos reciclados/compostados</div>
        <div class="metric"><strong>800</strong>famílias atendidas</div>
      </div>
    </section>

    <!-- CHAMADA -->
    <section id="contato">
      <h2>Participe da iniciativa</h2>
      <div class="grid cols-2">
        <div class="card">
          <h3>Sou prestador(a)</h3>
          <p>Cadastre-se para receber o selo <strong>Prestador Verde</strong>, acesso ao treinamento e destaque nas buscas.</p>
          <ul class="bullet">
            <li>Selo e destaque no app</li>
            <li>Treinamento gratuito com a ONG</li>
            <li>Relatório de impacto para seus clientes</li>
          </ul>
          <p class="email">
            <a href="mailto:sustentabilidade@fenmi.com?subject=Cadastro%20Prestador%20Verde">sustentabilidade@fenmi.com</a></p>
        </div>
        <div class="card">
          <h3>Sou empresa/ONG parceira</h3>
          <p>Vamos somar em projetos de <strong>arborização, água, resíduos</strong> e educação ambiental.</p>
          <ul class="bullet">
            <li>Repasse transparente por serviço</li>
            <li>Métricas auditáveis</li>
            <li>Comunicação conjunta (co-branding)</li>
          </ul>
          <p class="email">
            <a href="mailto:parcerias@fenmi.com?subject=Parceria%20Ambiental%20Fenmi">parcerias@fenmi.com</a>
          </p>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="faq" aria-label="perguntas frequentes">
      <h2>Perguntas frequentes</h2>
      <div class="grid">
        <details>
          <summary>Como a doação é calculada?</summary>
          <p>Uma porcentagem fixa (ex.: 3% a 5%) de cada serviço sustentável é destinada ao projeto ativo do trimestre.</p>
        </details>
        <details>
          <summary>Quem valida os números de impacto?</summary>
          <p>Nossa ONG parceira e uma consultoria independente verificam documentos, notas fiscais e evidências fotográficas.</p>
        </details>
        <details>
          <summary>Posso escolher o projeto que vou apoiar?</summary>
          <p>Sim. Clientes e empresas podem optar pelo projeto do trimestre ou por um fundo ambiental com carteira de iniciativas.</p>
        </details>
        <details>
          <summary>O que é necessário para ganhar o selo Prestador Verde?</summary>
          <p>Concluir o treinamento, cumprir boas práticas ambientais e manter índice de satisfação mínimo com os clientes.</p>
        </details>
      </div>
    </section>

  </main>


</body>
</html>
@endsection