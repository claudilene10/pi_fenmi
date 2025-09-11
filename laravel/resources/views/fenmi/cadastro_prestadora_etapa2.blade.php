<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etapa 2</title>
    <link rel="stylesheet" href="css/cadastro_prestadores2.css">
</head>
<body>
    <div class="container">
        <h1>Etapa 2</h1>
        <p>Preferências e informações bancárias</p>
    
        <form id="etapa2Form">
          <label for="areaAtuacao">Área de atuação</label>
          <select id="areaAtuacao" required>
            <option value="">Selecione</option>
            <option value="Beleza">Beleza</option>
            <option value="Limpeza">Limpeza</option>
            <option value="Transporte">Transporte</option>
            <option value="Pets">Pets</option>
            <option value="Outros">Outros</option>
          </select>
    
          <label for="descricao">Descrição do serviço</label>
          <textarea id="descricao" placeholder="Ex: Faço maquiagem profissional para festas e eventos" required></textarea>
    
          <label for="historicoConducao">Histórico de condução</label>
          <textarea id="historicoConducao" placeholder="Informe multas, acidentes, se houver"></textarea>
    
          <label for="formacao">Formação ou cursos</label>
          <input type="text" id="formacao" placeholder="Ex: Curso de direção defensiva" />
    
          <label for="disponibilidade">Disponibilidade de horários</label>
          <textarea id="disponibilidade" placeholder="Ex: Segunda a sexta, manhã e tarde" required></textarea>
    
          <label for="tiposServico">Tipos de serviço que aceita</label>
          <textarea id="tiposServico" placeholder="Ex: Elétrica, encanadora, pintora" required></textarea>
    
          <label for="endereco">Endereço (cidade/bairro ou completo)</label>
          <input type="text" id="endereco" placeholder="Ex: São Paulo, Mooca" required />
    
          <label for="whatsapp">WhatsApp (opcional)</label>
          <input type="tel" id="whatsapp" placeholder="(11) 91234-5678" />
    
          <label for="banco">Banco</label>
          <input type="text" id="banco" required />
    
          <label for="agencia">Agência</label>
          <input type="text" id="agencia" required />
    
          <label for="conta">Conta</label>
          <input type="text" id="conta" required />
    
          <label for="tipoConta">Tipo de conta</label>
          <select id="tipoConta" required>
            <option value="">Selecione</option>
            <option value="Corrente">Corrente</option>
            <option value="Poupança">Poupança</option>
            <option value="Salário">Salário</option>
          </select>
    
          <label for="pix">Chave Pix</label>
          <input type="text" id="pix" placeholder="CPF, telefone, e-mail ou aleatória" />
    
          <div class="checkbox-group">
            <input type="checkbox" id="politicaPrivacidade" required />
            <label for="politicaPrivacidade">Aceito a política de privacidade</label>
          </div>
          
          <div class="checkbox-group">
            <input type="checkbox" id="lgpd" required />
            <label for="lgpd">Autorizo o uso dos meus dados pessoais conforme a LGPD</label>
          </div>
    
          <button type="submit">Finalizar cadastro</button>
        </form>
      </div>
    
      <script src="js/cadastro_prestadores2.js"></script>
</body>
</html>