
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Hoteles - Viajar.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
  <?php
    include 'includes/encabezado.php';
  ?>
<main class="container mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold mb-6">Encuentra tu hotel ideal</h2>
    <form class="grid grid-cols-1 md:grid-cols-4 gap-4 bg-white p-6 rounded shadow">
      <input type="text" placeholder="Destino" class="col-span-2 p-3 border rounded">
      <input type="date" class="p-3 border rounded">
      <input type="date" class="p-3 border rounded">
      <button class="col-span-1 bg-blue-600 text-white px-4 py-3 rounded hover:bg-blue-700 transition">Buscar</button>
    </form>

    <section class="mt-10 space-y-6">
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-xl font-bold">Hotel Central</h3>
        <p class="text-gray-600">Buenos Aires • 4 estrellas</p>
        <p class="text-blue-600 font-bold mt-2">$24.999 / noche</p>
        <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Reservar</button>
      </div>
      <div class="bg-white p-4 rounded shadow">
        <h3 class="text-xl font-bold">Playa Resort</h3>
        <p class="text-gray-600">Mar del Plata • 5 estrellas</p>
        <p class="text-blue-600 font-bold mt-2">$32.500 / noche</p>
        <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">Reservar</button>
      </div>
    </section>
  </main>

  <footer class="bg-gray-100 mt-10 py-6 text-center text-sm text-gray-600">
    © 2025 Viajar.com - Todos los derechos reservados
  </footer>
</body>
</html>
