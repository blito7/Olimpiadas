document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('formPaquete');
  const destino = form.destino;
  const alojamiento = form.alojamiento;
  const actividades = form.querySelectorAll('input[type="checkbox"]');
  const resumen = document.getElementById('resumenTexto');

  function calcularCosto() {
    let costo = 0;

    switch (destino.value) {
      case 'Bariloche': costo += 50000; break;
      case 'Mendoza': costo += 45000; break;
      case 'Cataratas': costo += 60000; break;
      case 'Salta': costo += 48000; break;
    }

    switch (alojamiento.value) {
      case 'hotel_3': costo += 20000; break;
      case 'hotel_4': costo += 30000; break;
      case 'hostel': costo += 10000; break;
      case 'cabaña': costo += 15000; break;
    }

    actividades.forEach(act => {
      if (act.checked) {
        if (act.value === 'excursion') costo += 5000;
        if (act.value === 'traslado') costo += 3000;
        if (act.value === 'comidas') costo += 4000;
      }
    });

    resumen.innerText = `Costo estimado: $${costo}`;
  }

  form.addEventListener('change', calcularCosto);
});
