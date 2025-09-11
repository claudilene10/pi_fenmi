console.log('JS carregado')

function filtrarUrgentes() {
    alert('Função filtrarUrgentes chamada');
  }


// Função para filtrar apenas os cards urgentes
function filtrarUrgentes() {
    const cards = document.querySelectorAll('.cards .card');
    cards.forEach(card => {
      if (!card.classList.contains('urgente-card')) {
        card.style.display = 'none';
      } else {
        card.style.display = 'block';
      }
    });
  }
  
  // Função para mostrar todos os cards
  function mostrarTodos() {
    const cards = document.querySelectorAll('.cards .card');
    cards.forEach(card => {
      card.style.display = 'block';
    });
  }
  
  // Função para lidar com o clique no botão "Liberar"
  function setupLiberarBtns() {
    const buttons = document.querySelectorAll('.unlock-btn');
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        alert('Pedido liberado!');
        button.disabled = true;
        button.textContent = 'Liberado';
      });
    });
  }
  
  // Configura os listeners após o carregamento do DOM
  document.addEventListener('DOMContentLoaded', () => {
    setupLiberarBtns();
  });
//

//    BOTAO DO FOOTER
document.addEventListener('DOMContentLoaded', () => {
  const navLinks = document.querySelectorAll('footer nav a');

  navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      // Se estiver navegando para outra página, deixe isso aqui comentado.
      //e.preventDefault(); // Evita ir pra outra página (útil se for SPA)

      // Remove a classe 'active' de todos os links
      navLinks.forEach(l => l.classList.remove('active'));

      // Adiciona 'active' no botão clicado
      link.classList.add('active');
    });
  });
});

