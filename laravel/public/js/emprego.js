const filtros = document.querySelectorAll('.filtro-btn');
const vagas = document.querySelectorAll('.vaga-card');

filtros.forEach((botao) => {
  botao.addEventListener('click', () => {
    filtros.forEach(btn => {
      btn.classList.remove('active');
      btn.setAttribute('aria-pressed', 'false');
    });
    botao.classList.add('active');
    botao.setAttribute('aria-pressed', 'true');

    const tipo = botao.getAttribute('data-tipo');

    vagas.forEach(vaga => {
      if (tipo === 'todos' || vaga.dataset.tipo === tipo) {
        vaga.style.display = 'flex';
        vaga.style.opacity = '0';
        setTimeout(() => vaga.style.opacity = '1', 0);
      } else {
        vaga.style.opacity = '0';
        setTimeout(() => vaga.style.display = 'none', 300);
      }
    });
  });
});
