<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fenmi - Serviços por Mulheres</title>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/ecosistema.css');}}">


  <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->
 <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <button id="menu" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></button>
    <div class="logo">
  <a href="{{ route('inicio') }}" class="active">
    <img src="images/Foto de logo fenmi.jpg" alt="fenmi">
  </a>
</div>
    <nav>
        <ul>
      <li><a href="{{ route('inicio') }}" class="active">Início</a></li>
      <li><a href="{{ route('ecossistema') }}">Ecossistema</a></li>
      <li><a href="{{ route('instituicao') }}">Instituição</a></li>
      <li><a href="{{ route('emprego') }}">Emprego</a></li>
      <li><a href="{{ route('quemsomos') }}">Quem Somos</a></li>
      <li><a href="{{ route('catalogo') }}">Serviços</a></li>
    </ul>
    </nav>
    <div class="actions">
  <a href="{{ route('profissional') }}" class="btn">Seja uma profissional</a>
  <a href="{{ route('login') }}" class="btn primary">Entrar</a>
</div>
  </header>

               <!-- conteúdo -->
                @yield('area_de_conteudo') 
				<!-- @yield('area_generico') -->

				<!-- Footer -->
                <footer>
    &copy; 2025 Fenmi - Todos os direitos reservados.
  </footer>

  </body>
</html>

