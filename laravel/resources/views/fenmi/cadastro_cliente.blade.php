<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro Cliente</title>
    <link rel="stylesheet" href="css/cadastroCliente.css">
</head>
<body>

  



    <div class="container">
      <div class="fenmi">
        <div class="logo">
          <img src="image/Foto de logo fenmi.jpg" alt="Logo do site" />
        </div> 
        <h2>Cadastro - Cliente</h2>
    
        <form>
          <!-- Dados Pessoais -->
          <div class="section-title">1. Dados pessoais</div>
          <label for="nome">Nome completo</label>
          <input type="text" id="nome" placeholder="Ex: Maria dos Santos" required />
    
          <label for="apelido">Apelido ou nome preferido</label>
          <input type="text" id="apelido" placeholder="Ex: Mari" />
    
          <label for="genero">Identidade de Gênero</label>
          <select id="genero" required>
            <option disabled selected>Selecione</option>
            <option>Mulher (Trans ou Cis)</option>
            <option>Homem (Trans ou Cis)</option>
            <option>Gênero Não-Binário</option>
            <option>Outro</option>
           
          </select>
    
          <label for="cpf">CPF</label>
          <input type="text" id="cpf" placeholder="000.000.000-00" />
    
          <label for="contato_emergencia">Contato de emergência</label>
          <input type="tel" id="contato_emergencia" placeholder="(11) 91234-5678" />
    
         
    
          <!--  Verificação -->
          <div class="section-title">2. Verificação de segurança</div>
          <label for="sms">Código SMS</label>
          <input type="text" id="sms" placeholder="Digite o código recebido" />
    
    
          <!--  Foto de Perfil -->
          <div class="section-title">3. Foto de perfil</div>
          <label for="foto">Envie uma foto</label>
          <input type="file" id="foto" accept="image/*" />
    
          <!-- Consentimentos -->
          <div class="section-title">4. Consentimentos</div>
          <div class="checkbox-group">
            <label><input type="checkbox" required /> Aceito os termos de segurança e comportamento</label>
            <label><input type="checkbox" required /> Concordo com o uso dos meus dados conforme a LGPD</label>
          </div>
    
          <div class="section-title">5. Recursos de acessibilidade ou inclusão</div>

          <p class="descricao-acessibilidade">
            Este app se preocupa com a sua segurança e conforto. Se você possui alguma deficiência ou necessidade especial (física, auditiva, visual ou outra), conte para a gente como podemos ajudar:
          </p>
          
          <label for="necessidades">Deseja informar alguma necessidade específica?</label>
          <textarea id="necessidades" rows="3" placeholder="Digite aqui"></textarea>
          
          <p class="mensagem-acessibilidade">
            Essas informações são usadas apenas para melhorar sua experiência e serão tratadas conforme a LGPD.
          </p>
    
          <!-- Botão de cadastro -->
          <button type="submit" class="btn">Cadastrar</button>
        </form>
    
        
    
        <!-- 7. Links úteis -->
        <div class="links-uteis">
          <a href="termosDeUso.html">Termos de Uso</a>
          <a href="privacidade.html">Política de Privacidade</a>
          <a href="termosCancelamento.html">Política de Cancelamento</a>
          <a href="#">FAQ / Ajuda</a>
        </div>
      </div>
</body>
</html>