
document.getElementById('etapa1Form').addEventListener('submit', function(e) {
    e.preventDefault();
    // Aqui você pode salvar localStorage ou enviar ao back-end antes de ir para etapa 2
    window.location.href = "cadastro_prestadores2.html"; // redireciona para etapa 2
  });