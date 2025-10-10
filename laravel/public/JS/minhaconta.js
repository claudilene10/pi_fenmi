
const el = (id) => document.getElementById(id);

const uploadInput   = el("upload-photo");
const profileImage  = el("profile-image");
const defaultIcon   = el("default-icon");
const actionBtn     = el("profile-action");
const actionIcon    = actionBtn ? actionBtn.querySelector("i") : null;
const perfilForm    = el("perfilForm");
const logoutBtn     = el("logout-btn");
const modal         = el("confirm-modal");

// FUNÇÕES AUXILIARES
function salvarLocal(chave, valor) {
  localStorage.setItem(chave, valor);
}
function obterLocal(chave) {
  return localStorage.getItem(chave);
}
function removerLocal(chave) {
  localStorage.removeItem(chave);
}


// FOTO DE PERFIL
function atualizarFotoPerfil(foto) {
  if (!profileImage || !defaultIcon || !actionIcon) return;

  if (foto) {
    profileImage.src = foto;
    profileImage.style.display = "block";
    defaultIcon.style.display = "none";
    actionIcon.className = "fas fa-trash";
  } else {
    profileImage.src = "";
    profileImage.style.display = "none";
    defaultIcon.style.display = "flex";
    actionIcon.className = "fas fa-camera";
  }
}

// Upload
if (uploadInput) {
  uploadInput.addEventListener("change", function () {
    const file = this.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = (e) => {
      atualizarFotoPerfil(e.target.result);
      salvarLocal("fotoPerfil", e.target.result); // 🔹 Salva no localStorage
    };
    reader.readAsDataURL(file);
  });
}

// Botão troca/remove
if (actionBtn) {
  actionBtn.addEventListener("click", () => {
    if (actionIcon.classList.contains("fa-camera")) {
      uploadInput.click();
    } else {
      removerLocal("fotoPerfil");
      atualizarFotoPerfil(null);
    }
  });
}

// PERFIL - FORMULÁRIO
const camposPerfil = [
  "nomeUsuario",
  "emailUsuario",
  "telefoneUsuario",
  "cepUsuario",
  "enderecoUsuario",
  "cpfUsuario"
];

// Salvar dados
perfilForm?.addEventListener("submit", (e) => {
  e.preventDefault();

  camposPerfil.forEach(campo => {
    const input = perfilForm[campo.replace("Usuario", "")];
    if (input) salvarLocal(campo, input.value);
  });

  alert("Dados salvos com sucesso!");
  window.location.href = "perfiluser";
});

// Carregar dados salvos
function carregarDadosSalvos() {
  camposPerfil.forEach(campo => {
    const valor = obterLocal(campo);
    const input = perfilForm ? perfilForm[campo.replace("Usuario", "")] : null;
    if (valor && input) {
      input.value = valor;
    }
  });
}

// MODAL DE LOGOUT
function abrirModal() {
  if (modal) modal.style.display = "flex";
}

function fecharModal() {
  if (modal) modal.style.display = "none";
}


function confirmarSaida() {
  fecharModal();
  document.getElementById("logout-form").submit(); // envia POST pro logout
}


document.addEventListener("DOMContentLoaded", () => {
  const logoutBtn = document.getElementById("logout-btn");
  logoutBtn?.addEventListener("click", (e) => {
    e.preventDefault();
    abrirModal();
  });
});

// INICIALIZAÇÃO
window.addEventListener("load", () => {
  const fotoSalva = obterLocal("fotoPerfil");
  if (fotoSalva) atualizarFotoPerfil(fotoSalva);

  carregarDadosSalvos();
});

// BOTÃO DE EMERGÊNCIA
function enviarEmergencia() {
  // Faz ligação para a polícia (190 no Brasil)
  window.location.href = "tel:190";
}


