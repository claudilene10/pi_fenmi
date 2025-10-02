<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="{{asset('CSS/cadastroNormal.css');}}">
</head>
<body>
    

    <div class="container">
        <div class="logo">
          <img src="image/Foto de logo fenmi.jpg" alt="Logo do site" />
        </div>
    
        <h2>Crie sua conta e comece agora</h2>
    
        <form action="{{ route('cadastro') }}" method="POST">
        @csrf

            <label for="nome">Nome completo:</label>
            <input type="text" id="nome" name="nome" placeholder="nome completo"  required />
      
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com"  required />
      
            <label for="telefone">Telefone (com DDD):</label>
            <input type="tel" id="telefone" name="telefone" placeholder="ex: (00) 00000-0000" required />
      
            <label for="nascimento">Data de nascimento:</label>
            <input type="date" id="nascimento" name="nascimento" required />
      
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" placeholder="Rua Exemplo, 123 - Bairro - Cidade/UF" required />
      
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha"  placeholder="Crie uma senha segura" required />
      
            <label for="senha_confirmation">Confirmar senha:</label>
            <input type="password" id="senha_confirmation" name="senha_confirmation"  placeholder="Repita sua senha" required />
      
            <div class="profile-selection">
              <label><input type="radio" name="perfil" value="oferecer" required /> Quero oferecer serviços</label>
              <label><input type="radio" name="perfil" value="contratar" /> Quero contratar serviços</label>
            </div>

            <button class="btn" type="submit">Cadastrar</button>
        </form>
        <div class="footer">
          Já tem conta? <a href="#">Entrar</a>
          <div class="terms">
            Ao se cadastrar, você concorda com nossa <a href="privacidade.html">Política de Privacidade</a> e <a href="termosDeUso.html">Termos de Uso</a>.
          </div>
        </div>
      </div>


</body>
</html>