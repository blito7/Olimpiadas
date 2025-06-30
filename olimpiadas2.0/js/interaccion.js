document.addEventListener('DOMContentLoaded', () => {
  const contactoForm = document.getElementById('contactoForm');
  if (contactoForm) {
    contactoForm.addEventListener('submit', (e) => {
      const nombre = contactoForm.nombre.value.trim();
      const email = contactoForm.email.value.trim();
      const mensaje = contactoForm.mensaje.value.trim();
      if (!nombre || !email || !mensaje) {
        e.preventDefault();
        alert('Por favor completa todos los campos del formulario.');
        return false;
      }
      // Validación básica email
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        e.preventDefault();
        alert('Por favor ingresa un email válido.');
        return false;
      }
    });
  }
});
