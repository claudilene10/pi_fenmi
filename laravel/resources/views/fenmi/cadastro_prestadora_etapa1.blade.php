<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cadastro Prestadora de Serviços</title>
  <link rel="stylesheet" href="css/cadastro_prestadores.css">
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="images/Foto de logo fenmi.jpg" alt="Logo do site" />
    </div>

    <h2>Cadastro - Prestadora - Etapa 1</h2>

    <form novalidate action="{{ route('cadastro_prestadora_etapa1') }}" method="POST" id="etapa1Form" enctype="multipart/form-data">
      @csrf

      <label for="fotoPerfil">Foto de perfil</label>
      <input type="file" id="fotoPerfil" name="foto_perfil" accept="image/*" required />

      <label for="fotoFrente">Documento (Frente)</label>
      <input type="file" id="fotoFrente" name="foto_frente" accept="image/*" required />

      <label for="fotoVerso">Documento (Verso)</label>
      <input type="file" id="fotoVerso" name="foto_verso" accept="image/*" required />

      <label for="selfie">Selfie em tempo real</label>
      <input type="file" id="selfie" name="selfie" accept="image/*" required />

      <label for="cpf">CPF</label>
      <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required />

      <label for="rg">RG</label>
      <input type="text" id="rg" name="rg" placeholder="Digite seu RG" required />

      <label for="cnh">CNH</label>
      <input type="text" id="cnh" name="cnh" placeholder="Digite sua CNH (caso tenha)" />

      <label for="fichaCriminal">Ficha criminal (antecedentes)</label>
      <input type="file" id="fichaCriminal" name="ficha_criminal" accept=".pdf,image/*" required />

      <div class="checkbox-group">
        <input type="hidden" name="consentimento_criminal" value="0">
        <input type="checkbox" id="consentimentoCriminal" name="consentimento_criminal" value="1" required />
        <label for="consentimentoCriminal">Autorizo verificação criminal</label>
      </div>
      
      <div class="checkbox-group">
        <input type="hidden" name="consentimento_antecedentes" value="0">
        <input type="checkbox" id="consentimentoAntecedentes" name="consentimento_antecedentes" value="1" required />
        <label for="consentimentoAntecedentes">Autorizo verificação de antecedentes</label>
      </div>
      
      <div class="checkbox-group">
        <input type="hidden" name="consentimento_transito" value="0">
        <input type="checkbox" id="consentimentoTransito" name="consentimento_transito" value="1" required />
        <label for="consentimentoTransito">Autorizo consulta em órgãos de trânsito e bancos de dados públicos</label>
      </div>

      <label for="genero">Identidade de Gênero</label>
      <select id="genero" name="genero" required>
        <option value="">Selecione</option>
        <option value="Mulher (Trans ou Cis)">Mulher (Trans ou Cis)</option>
        <option value="Homem (Trans ou Cis)">Homem (Trans ou Cis)</option>
        <option value="Gênero Não-Binário">Gênero Não-Binário</option>
        <option value="Outros">Outros</option>
      </select>

      <label for="estadoCivil">Estado civil</label>
      <select id="estadoCivil" name="estado_civil" required>
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
