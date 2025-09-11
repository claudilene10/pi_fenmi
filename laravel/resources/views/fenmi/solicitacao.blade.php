<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solicitação de Serviço</title>
  <link rel="stylesheet" href="css_sampaio/catalogo.css">
  <link rel="stylesheet" href="css_sampaio/solicitacao.css">
</head>

<body>
  
  <main class="solicitacao-container">
    <h1>Solicitar Serviço</h1>
    <p>Preencha as informações abaixo para solicitar o serviço escolhido.</p>

    <!-- Barra de progresso -->
    <div class="progress-bar">
      <div class="progress" id="progress"></div>
      <div class="step active">1</div>
      <div class="step">2</div>
      <div class="step">3</div>
      <div class="step">4</div>
    </div>

    <form id="solicitacaoForm">
      <!-- Etapa 1 -->
      <div class="form-step active">
        <h2>Informações do Serviço</h2>

        <label>Qual serviço você precisa?</label>
        <input type="text" name="servico" placeholder="Ex: Pintura, Limpeza, Eletricista" required>

        <label>Descrição detalhada</label>
        <textarea name="descricao" placeholder="Descreva o que precisa ser feito..." required></textarea>

        <!-- Upload de arquivos -->
        <label>Adicione fotos ou vídeos (opcional)</label>
        <input type="file" name="midia[]" accept="image/*,video/*" multiple>

        <button type="button" class="btn next-btn">Próximo</button>
      </div>

      <!-- Etapa 2 -->
      <div class="form-step">
        <h2>Endereço</h2>
        <label>CEP</label>
        <input type="text" name="cep" placeholder="00000-000" required>

        <label>Rua</label>
        <input type="text" name="rua" required>

        <label>Número</label>
        <input type="text" name="numero" required>

        <label>Bairro</label>
        <input type="text" name="bairro" required>

        <label>Cidade</label>
        <input type="text" name="cidade" required>

        <label>Estado</label>
        <input type="text" name="estado" required>

        <div class="buttons">
          <button type="button" class="btn prev-btn">Voltar</button>
          <button type="button" class="btn next-btn">Próximo</button>
        </div>
      </div>

      <!-- Etapa 3 -->
      <div class="form-step">
        <h2>Agendamento</h2>
        <label>Data</label>
        <input type="date" name="data" required>

        <label>Horário</label>
        <input type="time" name="hora" required>

        <div class="buttons">
          <button type="button" class="btn prev-btn">Voltar</button>
          <button type="button" class="btn next-btn">Próximo</button>
        </div>
      </div>

      <!-- Etapa 4 -->
      <div class="form-step">
        <h2>Seus Dados</h2>
        <label>Nome Completo</label>
        <input type="text" id="nome" name="nome" required>

        <label>Telefone</label>
        <input type="tel" id="telefone" name="telefone" required>

        <label>Email</label>
        <input type="email" id="email" name="email" required>

        <div class="buttons">
          <button type="button" class="btn prev-btn">Voltar</button>
          <button type="submit" class="btn">Finalizar</button>
        </div>
      </div>
    </form>

    <!-- Resumo do pedido -->
    <div id="resumoPedido"></div>
  </main>

  

  <script src="js/solicitacao.js"></script>
</body>

</html>
