

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Prestadores</title>
    <link rel="stylesheet" href="css/cadastro_prestadores.css">
</head>
<body>
    
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Cadastro Prestadora de Serviços</title>
     
    </head>
    
    <body>
        <div class="container">
            <h1>Etapa 1</h1>
            <p>Verificação de identidade e dados básicos</p>
        
            <form id="etapa1Form">
              <label for="fotoPerfil">Foto de perfil</label>
              <input type="file" id="fotoPerfil" accept="image/*" required />
        
              <label for="fotoFrente">Documento (Frente)</label>
              <input type="file" id="fotoFrente" accept="image/*" required />
        
              <label for="fotoVerso">Documento (Verso)</label>
              <input type="file" id="fotoVerso" accept="image/*" required />
        
              <label for="selfie">Selfie em tempo real</label>
              <input type="file" id="selfie" accept="image/*" required />
        
              <label for="cpf">CPF</label>
              <input type="text" id="cpf" placeholder="Digite seu CPF" required />
        
              <label for="rg">RG</label>
              <input type="text" id="rg" placeholder="Digite seu RG" required />
        
              <label for="cnh">CNH</label>
              <input type="text" id="cnh" placeholder="Digite sua CNH (caso tenha)" />
        
              <label for="fichaCriminal">Ficha criminal (antecedentes)</label>
              <input type="file" id="fichaCriminal" accept=".pdf,image/*" required />
        
              <div class="checkbox-group">
                <input type="checkbox" id="consentimentoCriminal" required />
                <label for="consentimentoCriminal">Autorizo verificação criminal</label>
              </div>
              
              <div class="checkbox-group">
                <input type="checkbox" id="consentimentoAntecedentes" required />
                <label for="consentimentoAntecedentes">Autorizo verificação de antecedentes</label>
              </div>
              
              <div class="checkbox-group">
                <input type="checkbox" id="consentimentoTransito" required />
                <label for="consentimentoTransito">Autorizo consulta em órgãos de trânsito e bancos de dados públicos</label>
              </div>
        
              <label for="genero">Identidade de Gênero</label>
              <select id="genero" required>
                <option value="">Selecione</option>
                <option value="Feminino">Mulher (Trans ou Cis)</option>
                <option value="Masculino">Homem (Trans ou Cis)</option>
                <option value="Masculino">Gênero Não-Binário</option>
                <option value="Masculino">Outros</option>
              </select>
        
              <label for="estadoCivil">Estado civil</label>
              <select id="estadoCivil" required>
                <option value="">Selecione</option>
                <option value="Solteira">Solteira</option>
                <option value="Casada">Casada</option>
                <option value="Divorciada">Divorciada</option>
                <option value="Viúva">Viúva</option>
                <option value="Outro">Outro</option>
              </select>
        
            
              <button type="submit">Próxima etapa</button>
            </form>
          </div>
       
    
     
    </body>
    </html>
    


    <script src="js/cadastro_prestadores.js"></script>
</body>
</html>
