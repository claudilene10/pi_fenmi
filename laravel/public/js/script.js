
    // function buscarServicos() {
    //   const termo = document.getElementById("searchInput").value.toLowerCase();
    //   const categorias = document.querySelectorAll(".category");

    //   categorias.forEach(cat => {
    //     if (cat.textContent.toLowerCase().includes(termo)) {
    //       cat.style.display = "block";
    //     } else {
    //       cat.style.display = "none";
    //     }

        
    //   });
    // }
  
    
   // Pega elementos do DOM
const menuBtn = document.getElementById('menu');
const navUl = document.querySelector('nav ul');

menuBtn.addEventListener('click', () => {
  navUl.classList.toggle('active');
});

  const prevBtn = document.querySelector('.carousel-btn.prev');
  const nextBtn = document.querySelector('.carousel-btn.next');
  const serviceGrid = document.querySelector('.service-grid');

  // Define quanto vai deslizar por vez
  const cardWidth = 220; // largura do card + gap (ajusta se mudar no CSS)

  nextBtn.addEventListener('click', () => {
    serviceGrid.scrollBy({ left: cardWidth, behavior: 'smooth' });
  });

  prevBtn.addEventListener('click', () => {
    serviceGrid.scrollBy({ left: -cardWidth, behavior: 'smooth' });
  });

  // 🔄 Auto slide opcional (ativa se quiser)
  // setInterval(() => {
  //   serviceGrid.scrollBy({ left: cardWidth, behavior: 'smooth' });
  // }, 3000);

  const modal = document.getElementById("serviceModal");
const serviceDetails = document.getElementById("serviceDetails");
const closeBtn = document.querySelector(".close");

// Banco de dados fake dos serviços
const services = {
  1: {
    title: "Eletricista",
    desc: "Profissional qualificado para instalação, reparo e manutenção elétrica.",
    price: "R$ 175,00",
    rating: "⭐ 4.9 (4424 avaliações)",
    img: "images/eletricista.webp"
  },
  2: {
    title: "Instalação de ar-condicionado",
    desc: "Serviço completo de instalação e manutenção de ar-condicionado.",
    price: "R$ 703,99",
    rating: "⭐ 4.8 (2310 avaliações)",
    img: "images/ar-condicionado.webp"
  }
};

// Evento ao clicar no card
document.querySelectorAll(".service-card").forEach(card => {
  card.addEventListener("click", () => {
    const id = card.getAttribute("data-service");
    const service = services[id];

    serviceDetails.innerHTML = `
      <h2>${service.title}</h2>
      <img src="${service.img}" alt="${service.title}" style="width:100%; border-radius:8px; margin:1rem 0;">
      <p>${service.desc}</p>
      <p>${service.rating}</p>
      <p><strong>${service.price}</strong></p>
      <button class="hire-btn">Contratar serviço</button>
    `;

    modal.style.display = "flex";
  });
});

// Fechar modal
closeBtn.onclick = () => modal.style.display = "none";
window.onclick = (e) => { if (e.target == modal) modal.style.display = "none"; };

