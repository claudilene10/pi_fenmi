// Logout Profissional
const logoutBtnProf = document.getElementById("logout-btn-prof");
const modalProf = document.getElementById("confirm-modal-prof");
const confirmLogoutProf = document.getElementById("confirm-logout-prof");
const cancelLogoutProf = document.getElementById("cancel-logout-prof");
const logoutFormProf = document.getElementById("logout-form-prof");

// Abrir modal
logoutBtnProf?.addEventListener("click", (e) => {
  e.preventDefault();
  if (modalProf) modalProf.style.display = "flex";
});

// Cancelar logout
cancelLogoutProf?.addEventListener("click", () => {
  if (modalProf) modalProf.style.display = "none";
});

// Confirmar logout
confirmLogoutProf?.addEventListener("click", () => {
  if (logoutFormProf) logoutFormProf.submit();
});
