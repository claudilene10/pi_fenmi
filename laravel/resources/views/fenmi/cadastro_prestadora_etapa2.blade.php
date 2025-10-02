<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Etapa 2</title>
  <link rel="stylesheet" href="{{ asset('css/cadastro_prestadores2.css') }}">
  

</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="images/Foto de logo fenmi.jpg" alt="Logo do site" />
    </div>

    <h2>Cadastro - Prestadora - Etapa 2</h2>

    <form action="{{ route('cadastro_prestadora_etapa2') }}" method="POST" id="etapa2Form">
      @csrf

      <label for="areaAtuacao">Área de atuação</label>
      <select id="areaAtuacao" name="areaAtuacao" required>
        <option value="">Selecione</option>
        <option value="Beleza">Beleza</option>
        <option value="Limpeza">Limpeza</option>
        <option value="Transporte">Transporte</option>
        <option value="Pets">Pets</option>
        <option value="Outros">Outros</option>
      </select>

      <label for="descricao">Descrição do serviço</label>
      <textarea id="descricao" name="descricao" placeholder="Ex: Faço maquiagem profissional para festas e eventos" required></textarea>

      <label for="historicoConducao">Histórico de condução</label>
      <textarea id="historicoConducao" name="historicoConducao" placeholder="Informe multas, acidentes, se houver"></textarea>

      <label for="formacao">Formação ou cursos</label>
      <input type="text" id="formacao" name="formacao" placeholder="Ex: Curso de direção defensiva" />

      <label for="disponibilidade">Disponibilidade de horários</label>
      <textarea id="disponibilidade" name="disponibilidade" placeholder="Ex: Segunda a sexta, manhã e tarde" required></textarea>

      <label for="tiposServico">Tipos de serviço que aceita</label>
      <textarea id="tiposServico" name="tiposServico" placeholder="Ex: Elétrica, encanadora, pintora" required></textarea>

      <label for="endereco">Endereço (cidade/bairro ou completo)</label>
      <input type="text" id="endereco" name="endereco" placeholder="Ex: São Paulo, Mooca" required />

      <label for="whatsapp">WhatsApp (opcional)</label>
      <input type="tel" id="whatsapp" name="whatsapp" placeholder="(11) 91234-5678" />

      <label for="banco">Banco</label>
      <input type="text" id="banco" name="banco" required />

      <label for="agencia">Agência</label>
      <input type="text" id="agencia" name="agencia" required />

      <label for="conta">Conta</label>
      <input type="text" id="conta" name="conta" required />

      <label for="tipoConta">Tipo de conta</label>
      <select id="tipoConta" name="tipoConta" required>
        <option value="">Selecione</option>
        <option value="Corrente">Corrente</option>
        <option value="Poupança">Poupança</option>
        <option value="Salário">Salário</option>
      </select>

      <label for="pix">Chave Pix</label>
      <input type="text" id="pix" name="pix" placeholder="CPF, telefone, e-mail ou aleatória" />

      <div class="checkbox-group">
        <input type="checkbox" id="politicaPrivacidade" name="politicaPrivacidade" required />
        <label for="politicaPrivacidade">Aceito a política de privacidade</label>
      </div>

     <div class="checkbox-group">
  <input type="hidden" name="consentimento_criminal" value="0">
  <input type="checkbox" id="consentimento_criminal" name="consentimento_criminal" value="1" required>
  <label for="consentimento_criminal">Aceito a verificação de antecedentes criminais</label>
</div>

<div class="checkbox-group">
  <input type="hidden" name="consentimento_antecedentes" value="0">
  <input type="checkbox" id="consentimento_antecedentes" name="consentimento_antecedentes" value="1" required>
  <label for="consentimento_antecedentes">Aceito a verificação de antecedentes</label>
</div>

<div class="checkbox-group">
  <input type="hidden" name="consentimento_transito" value="0">
  <input type="checkbox" id="consentimento_transito" name="consentimento_transito" value="1" required>
  <label for="consentimento_transito">Aceito a verificação de histórico de trânsito</label>
</div>

      <button type="submit">Finalizar cadastro</button>
    </form>
  </div>
 
  <!-- Modal de Sucesso -->
<div id="successModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Cadastro Finalizado!</h2>
    <p>Seu cadastro foi finalizado com sucesso e agora passará por verificação.</p>
    <button id="okBtn">OK</button>
  </div>
</div>
 




<style>
 
  body{
    font-family: 'Inter', sans-serif;
  }
  /* Estilo do modal */
  .modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.5);
   
  }
 
  .modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border-radius: 10px;
    width: 90%;
    max-width: 400px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    animation: fadeIn 0.3s;
  }
 
  .modal-content h2 {
    color: #ef2f7e;
    margin-bottom: 10px;
  }
 
  .modal-content p {
    margin-bottom: 20px;
  }
 
  .modal-content .close,
  .modal-content button {
    cursor: pointer;
  }
 
  .modal-content .close {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 24px;
    font-weight: bold;
    color: #aaa;
  }
 
  .modal-content .close:hover {
    color: #000;
  }
 
  .modal-content button {
    padding: 10px 20px;
    border: none;
    background-color: #ef2f7e;;
    color: white;
    border-radius: 5px;
    font-size: 16px;
  }
 
  .modal-content button:hover {
    background-color: #ef2f7e;;
  }
 
  @keyframes fadeIn {
    from {opacity: 0; transform: translateY(-20px);}
    to {opacity: 1; transform: translateY(0);}
  }
</style>
<script>
  const modal = document.getElementById("successModal");
  const okBtn = document.getElementById("okBtn");
  const form = document.getElementById("etapa2Form");

  form.addEventListener("submit", function(e) {
    e.preventDefault(); // impede envio para processar via JS
    const formData = new FormData(form);

    // envia via fetch para o controller
    fetch(form.action, {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
      },
      body: formData
    })
    .then(response => {
      if (response.ok) {
        modal.style.display = "block"; // mostra modal de sucesso
      } else {
        alert('Erro ao salvar cadastro');
      }
    })
    .catch(error => {
      console.error(error);
      alert('Erro na requisição');
    });
  });

  okBtn.onclick = function() {
    modal.style.display = "none";
    // redireciona pra home
    window.location.href = "{{ route('inicio') }}";
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>

    
</body>
</html>
