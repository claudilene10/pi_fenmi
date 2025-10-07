document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('perfilForm')
  const btnExcluir = document.getElementById('btnExcluir')
  const modalExcluir = document.getElementById('modalExcluir')
  const cancelarExcluir = document.getElementById('cancelarExcluir')
  const confirmarExcluir = document.getElementById('confirmarExcluir')

  // Função para carregar dados do localStorage
  const carregarDados = () => {
    const dados = JSON.parse(localStorage.getItem('perfilUsuario')) || {}
    form.nome.value = dados.nome || ''
    form.email.value = dados.email || ''
    form.telefone.value = dados.telefone || ''
    form.cep.value = dados.cep || ''
    form.endereco.value = dados.endereco || ''
    form.cpf.value = dados.cpf || ''
  }

  carregarDados() // Carrega ao abrir a página

  // Salvar dados
  form.addEventListener('submit', (e) => {
    e.preventDefault()
    const dados = {
      nome: form.nome.value,
      email: form.email.value,
      telefone: form.telefone.value,
      cep: form.cep.value,
      endereco: form.endereco.value,
      cpf: form.cpf.value
    }
    localStorage.setItem('perfilUsuario', JSON.stringify(dados))
    alert('Dados salvos com sucesso!')
    window.location.href = 'perfiluser' // voltar para perfil
  })

  // Abrir modal de exclusão
  btnExcluir.addEventListener('click', () => {
    modalExcluir.style.display = 'flex'
  })

  // Cancelar exclusão
  cancelarExcluir.addEventListener('click', () => {
    modalExcluir.style.display = 'none'
  })

  // Confirmar exclusão
  confirmarExcluir.addEventListener('click', () => {
    localStorage.removeItem('perfilUsuario') // remove apenas os dados do usuário
    form.reset()
    modalExcluir.style.display = 'none'
    alert('Conta excluída!')
    window.location.href = 'perfiluser.html'
  })

  // Fechar modal clicando fora dele
  window.addEventListener('click', (e) => {
    if (e.target === modalExcluir) {
      modalExcluir.style.display = 'none'
    }
  })
})
