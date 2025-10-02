<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="CSS/login.css">
 

</head>
<body>
  <main class="container">
    <div class="login-box">
      <div class="logo">
        <img src="images/Foto de logo fenmi.jpg" alt="Logo do aplicativo">
      </div>
      <h2>Bem-vinda de volta!</h2>

 
      <form action="{{ route('login.process') }}" method="POST">
    @csrf
    <div class="input-group">
        <label for="email">E-mail ou Telefone:</label>
        <input type="text" id="email" name="email" required>
        <!-- @error('email')
    <div class="error">{{ $message }}</div>
       @enderror -->

         </div>
        <div class="input-group">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
         </div>
         @if($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
     @endif
       <button type="submit" class="btn">Entrar</button>
      </form>
      <div class="links">
      <a href="{{ route('esqueceu_senha') }}">Esqueceu a senha?</a>
        <a href="{{ route('cadastro') }}">Não tem conta? Cadastre-se</a>
      </div>
    </div>
  </main>
</body>
</html>
