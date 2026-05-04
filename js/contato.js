emailjs.init("IXrZaKzH1tsEl0Vh5");

document.querySelector('#contato-form').addEventListener('submit', function(e) {
  e.preventDefault();

  const btn = document.querySelector('button[type="submit"]');
  btn.textContent = 'Enviando...';
  btn.disabled = true;

    emailjs.send("service_gdrwdi1", "template_dau45py", {
    nome: document.querySelector('#nome').value,
    email: document.querySelector('#email').value,
    mensagem: document.querySelector('#mensagem').value
    })
  .then(() => {
    btn.textContent = 'Mensagem enviada! ✅';
    this.reset();
    setTimeout(() => {
      btn.textContent = 'Enviar Mensagem';
      btn.disabled = false;
    }, 3000);
  })
  .catch(() => {
    btn.textContent = 'Erro ao enviar ❌';
    btn.disabled = false;
  });
});