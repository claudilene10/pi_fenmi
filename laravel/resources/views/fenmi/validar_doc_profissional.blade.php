@php
  // Aqui é o similar à tag do PHP

  $i = 1;

  # echo @$id;// jeito mais simples e errado de remover erro

  echo isset( $_GET['id'] );// jeito correto de evitar / parte do botão editar novidades
  if( isset( $_GET['id'])){
    echo "Editando o ID: ".$_GET['id'].".";
  }

@endphp



<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Envio de Documentos</title>
  <link rel="stylesheet" href="CSS/Validar_doc.css">
 
  



</head>
<body>
     <div class="container">
    <div class="botoes">
      <a href="Minha_Conta_Profissional.html" class="voltar">◀ Voltar</a>
    </div>
  <h2>Envio de Documentos</h2>
  <!-- Lista dos documentos enviados -->
  @if(isset($documentos) && $documentos->count() > 0)
    <h3>Documentos já enviados:</h3>
    @foreach($documentos as $doc)
        <div class="documento-item">
            <p><strong>ID:</strong> {{ $doc->id_documento }}</p>
            <p><strong>CPF:</strong> {{ $doc->cpf_arquivo }}</p>
            <p><strong>Status CPF:</strong> {{ $doc->status_cpf }}</p>
        </div>
    @endforeach
@endif

  <!-- ETAPA 1 - Documentos obrigatórios -->
  <div class="etapa" id="etapaDocumentos">
    <h3>📄 Documentos Obrigatórios</h3>

    <form action="{{ route('Validar') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="cpf_arquivo">CPF (PDF ou JPG até 500KB):</label>
    <input type="file" name="cpf_arquivo" accept=".pdf,.jpg,.jpeg">

    <label for="rg_arquivo">RG (PDF ou JPG até 500KB):</label>
    <input type="file" name="rg_arquivo" accept=".pdf,.jpg,.jpeg">

    <label for="comprovante_endereco">Comprovante de Endereço (PDF até 500KB):</label>
    <input type="file" name="comprovante_endereco" accept=".pdf">

    <label for="certificado_profissional">Certificado Profissional (opcional):</label>
    <input type="file" name="certificado_profissional" accept="image/*,application/pdf">

    <button onclick="enviarDocumentoCertificado()">Enviar Documento</button>

</form>


    <div id="mensagem" class="mensagem"></div>
  </div>

  <!-- ETAPA 4 - CERTIFICAÇÃO PROFISSIONAL (Opcional) -->
  <div class="etapa" id="etapa4" style="display: block;">
    <h3><span class="icone-etapa">🎓</span> Certificação Profissional (Obrigatório)</h3>

    <label for="docCertificado">Envie o certificado (PDF ou imagem até 500KB):</label>
    <input type="file" id="docCertificado" accept="image/*,application/pdf">

    <p id="statusCertificado" class="status aguardando"><strong>Status:</strong> Obrigatório</p>

    <button onclick="enviarDocumentoCertificado()">Enviar Documento</button>

    <div id="mensagemCertificado" class="mensagem"></div>
  </div>

  <script src="JS/Validar_doc_Profissional.js"></script>
  <script src="JS/dark.js"></script>

</body>
</html>
