<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Loja de Pedidos</title>
  <link rel="stylesheet" href="aceitos.css" />
</head>
<body>
  <!--  CABEÇALHO  -->
  <header>
    <h1>Loja de Pedidos</h1>
  </header>

 
  

  <!-- LISTA DE CARDS  -->
  <main>
    <div class="cards" >
      <!-- Card 1 (URGENTE) -->
      <div class="card ">
        <span class="badge " style="background:#58ccf8;">aceito</span>
        <h3>Bem-Estar • Personal Trainer</h3>
        <small>Vitoria S.</small>

        <div class="meta">
          <!-- Ícone localização -->
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 6-9 13-9 13S3 16 3 10a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>Serviço presencial</span>
        </div>

        <div class="meta">
          <!-- Ícone alerta -->
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          <span>Serviço urgente</span>
        </div>

        <div class="progress"><span style="width: 25%"></span></div>

        <div class="card-footer">
          <small>1 / 4</small>
          <button class="unlock-btn">ver mais</button>
        </div>
      </div>

      <!-- Card 2 (NÃO urgente) -->
      <div class="card">
        <span class="badge" style="background:#58ccf8;">aceito</span>
        <h3>Bem-Estar • Personal Trainer</h3>
        <small>Joana V.</small>
        <div class="meta">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 6-9 13-9 13S3 16 3 10a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>Serviço prsencial</span>
        </div>
        <div class="progress"><span style="width: 0%"></span></div>
        <div class="card-footer">
          <small>0 / 4</small>
          <button class="unlock-btn">ver mais</button>
        </div>
      </div>

      <!-- Card 3 (URGENTE) -->
      <div class="card  urgente-card">
        <span class="badge" style="background:#58ccf8;">aceito</span>
        <h3> casa • eletricista</h3>
        <small>Ana Vitoria </small>
        <div class="meta">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 6-9 13-9 13S3 16 3 10a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>Serviço Online</span>
        </div>
        <div class="progress"><span style="width: 50%"></span></div>
        <div class="card-footer">
          <small>2 / 4</small>
          <button class="unlock-btn">ver mais</button>
        </div>
      </div>

      <!-- Card 4 (NÃO urgente) -->
      <div class="card" >
        <span class="badge" style="background:#58ccf8;">aceito</span>
        <h3>apartamento • encanadora</h3>
        <small>Sofia S.</small>
        <div class="meta">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 6-9 13-9 13S3 16 3 10a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          <span>Serviço presencial</span>
        </div>
        <div class="progress"><span style="width: 0%"></span></div>
        <div class="card-footer">
          <small>0 / 4</small>
          <button class="unlock-btn">ver mais</button>
        </div>
      </div>

        <!-- Card 5(urgente) -->
    <div class="card urgente-card " >
      <span class="badge" style="background:#58ccf8;">aceito</span>
      <h3>Casa • Encanadora</h3>
      <small>Taina M.</small>
      <div class="meta">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 10c0 6-9 13-9 13S3 16 3 10a9 9 0 1 1 18 0z"/>
          <circle cx="12" cy="10" r="3"/>
        </svg>
        <span>Presencial</span>
      </div>
      <div class="progress"><span style="width: 75%"></span></div>
      <div class="card-footer">
        <small>3 / 4</small>
        <button class="unlock-btn"> ver mais </button>
      </div>
    </div>


 

     <!-- Card 7  -->
     <div class="card">
      <span class="badge" style="background:#58ccf8;">aceito</span>
      <h3>Tecnologia • Suporte TI</h3>
      <small>Karla V.</small>
      <div class="meta">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 10c0 6-9 13-9 13S3 16 3 10a9 9 0 1 1 18 0z"/>
          <circle cx="12" cy="10" r="3"/>
        </svg>
        <span>Serviço Online</span>
      </div>
      <div class="progress"><span style="width: 10%"></span></div>
      <div class="card-footer">
        <small>1 / 10</small>
        <button class="unlock-btn">ver mais</button>
      </div>
    </div>

     <!-- Card 7 (NÃO urgente) -->
     <div class="card">
        <span class="badge" style="background:#58ccf8;">aceito</span>
        <h3> cuidadora  • baby sister</h3>
        <small>Laura V.</small>
        <div class="meta">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 10c0 6-9 13-9 13S3 16 3 10a9 9 0 1 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
          <span>Serviço presencial</span>
        </div>
        <div class="progress"><span style="width: 10%"></span></div>
        <div class="card-footer">
          <small>1 / 10</small>
          <button class="unlock-btn">ver mais</button>
        </div>
      </div>
  
  
  
  </div>
</main>

  <!-- ===== BARRA DE NAVEGAÇÃO INFERIOR ===== -->
  <footer>
    <nav>
      <a href="lojaPedidos.html" >
        <!-- ícone pedidos-->
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16v16H4z"/><path d="M4 9h16"/></svg>
        <span>Pedidos</span>
      </a>
      <a href="aceitos.html" class="active">
        <!-- ícone aceitos-->
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
        <span>Aceitos</span>
      </a>
      <a href="realizqados.html">
        <!-- ícone realizados-->
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        <span>Realizados</span>
      </a>
      <a href="#">
        <!-- ícone conta-->
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-3-3.87"/><path d="M4 21v-2a4 4 0 0 1 3-3.87"/><circle cx="12" cy="7" r="4"/></svg>
        <span>Minha Conta</span>
      </a>
    </nav>
  </footer>

  <link rel="stylesheet" href="lojaPedidos.js">
</body>
</html>