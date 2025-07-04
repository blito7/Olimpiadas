<?php
include 'includes/encabezado.php'
?>
<!DOCTYPE html>
<html lang="es">
<body class="font-sans bg-gray-50">
    <!-- Hero Section with Search -->
    <section class="relative bg-blue-700 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Reserva tu viaje ideal</h1>
                <p class="text-xl mb-8">Encuentra las mejores ofertas en vuelos, hoteles y paquetes</p>
                
                <!-- Search Tabs -->
                <div class="bg-white rounded-t-lg shadow-lg">
                    <div class="flex border-b">
                        <button class="tab-btn py-4 px-6 font-medium text-gray-700 tab-active">Vuelos</button>
                        <button class="tab-btn py-4 px-6 font-medium text-gray-700">Hoteles</button>
                        <button class="tab-btn py-4 px-6 font-medium text-gray-700">Paquetes</button>
                        <button class="tab-btn py-4 px-6 font-medium text-gray-700">Autos</button>
                    </div>
                    
                    <!-- Flight Search Form -->
                    <div id="flight-search" class="p-6 text-gray-800 animate-fade-in">
                        <form class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">Origen</label>
                                <input type="text" placeholder="Ciudad o aeropuerto" class="w-full p-3 border rounded-lg">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Destino</label>
                                <input type="text" placeholder="Ciudad o aeropuerto" class="w-full p-3 border rounded-lg">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-1">Salida</label>
                                    <input type="date" class="w-full p-3 border rounded-lg">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1">Regreso</label>
                                    <input type="date" class="w-full p-3 border rounded-lg">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Pasajeros</label>
                                <select class="w-full p-3 border rounded-lg">
                                    <option>1 adulto</option>
                                    <option>2 adultos</option>
                                    <option>Familia (2+2)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Clase</label>
                                <select class="w-full p-3 border rounded-lg">
                                    <option>Económica</option>
                                    <option>Premium Economy</option>
                                    <option>Business</option>
                                    <option>Primera Clase</option>
                                </select>
                            </div>
                            <div class="flex items-end">
                                <button class="bg-blue-600 text-white px-6 py-3 rounded-lg w-full hover:bg-blue-700 transition">Buscar vuelos</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Hotel Search Form (hidden by default) -->
                    <div id="hotel-search" class="hidden p-6 text-gray-800">
                        <form class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">Destino</label>
                                <input type="text" placeholder="Ciudad, hotel o zona" class="w-full p-3 border rounded-lg">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-1">Check-in</label>
                                    <input type="date" class="w-full p-3 border rounded-lg">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1">Check-out</label>
                                    <input type="date" class="w-full p-3 border rounded-lg">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Huéspedes</label>
                                <select class="w-full p-3 border rounded-lg">
                                    <option>1 adulto</option>
                                    <option>2 adultos</option>
                                    <option>Familia (2+2)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Categoría</label>
                                <select class="w-full p-3 border rounded-lg">
                                    <option>Todas</option>
                                    <option>3 estrellas +</option>
                                    <option>4 estrellas +</option>
                                    <option>5 estrellas</option>
                                    <option>Lujo</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Tipo</label>
                                <select class="w-full p-3 border rounded-lg">
                                    <option>Todos</option>
                                    <option>Hoteles</option>
                                    <option>Resorts</option>
                                    <option>Depto/Apt</option>
                                    <option>Hostels</option>
                                </select>
                            </div>
                            <div class="flex items-end">
                                <button class="bg-blue-600 text-white px-6 py-3 rounded-lg w-full hover:bg-blue-700 transition">Buscar hoteles</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promotions Carousel -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Ofertas especiales</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Promotion 1 -->
                <div class="border rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-48 overflow-hidden">
                        <img src="https://placehold.co/600x400" alt="Playa paradisíaca con arena blanca y palmeras en Cancún, México" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Cancún All Inclusive</h3>
                        <p class="text-gray-600 mb-4">7 noches con vuelos incluidos desde</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$1,299 USD</span>
                            <span class="text-sm line-through text-gray-500">$1,599 USD</span>
                        </div>
                        <button class="mt-4 bg-blue-100 text-blue-600 w-full py-2 rounded-lg hover:bg-blue-200 transition">Ver oferta</button>
                    </div>
                </div>
                
                <!-- Promotion 2 -->
                <div class="border rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-48 overflow-hidden">
                        <img src="https://placehold.co/600x400" alt="Vista panorámica de la ciudad de Buenos Aires con el Obelisco al centro" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Fin de semana en Buenos Aires</h3>
                        <p class="text-gray-600 mb-4">3 noches en hotel 4 estrellas desde</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$399 USD</span>
                            <span class="text-sm line-through text-gray-500">$499 USD</span>
                        </div>
                        <button class="mt-4 bg-blue-100 text-blue-600 w-full py-2 rounded-lg hover:bg-blue-200 transition">Ver oferta</button>
                    </div>
                </div>
                
                <!-- Promotion 3 -->
                <div class="border rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                    <div class="h-48 overflow-hidden">
                        <img src="https://placehold.co/600x400" alt="Majestuosas montañas nevadas de los Alpes Suizos con un lago cristalino en primer plano" class="w-full h-full object-cover">
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Suiza en invierno</h3>
                        <p class="text-gray-600 mb-4">5 noches con esquí ilimitado desde</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-blue-600">$2,199 USD</span>
                            <span class="text-sm line-through text-gray-500">$2,799 USD</span>
                        </div>
                        <button class="mt-4 bg-blue-100 text-blue-600 w-full py-2 rounded-lg hover:bg-blue-200 transition">Ver oferta</button>
                    </div>
                </div>
            </div>
            <div class="text-center mt-8">
                <button class="bg-white border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg hover:bg-blue-50 transition">Ver todas las ofertas</button>
            </div>
        </div>
    </section>

    <!-- Flight Results (Sample) -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6">Vuelos a Miami</h2>
            <div class="mb-6 flex justify-between items-center">
                <p class="text-gray-600">Mostrando 24 resultados del 15 al 30 de junio</p>
                <div>
                    <select class="p-2 border rounded-lg">
                        <option>Ordenar por: Mejor combinación</option>
                        <option>Precio más bajo</option>
                        <option>Duración más corta</option>
                        <option>Salida más temprana</option>
                    </select>
                </div>
            </div>
            
            <!-- Filters -->
            <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
                <div class="flex flex-wrap gap-4">
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="direct-filter" class="h-4 w-4">
                        <label for="direct-filter">Solo vuelos directos</label>
                    </div>
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="morning-filter" class="h-4 w-4">
                        <label for="morning-filter">Mañana (6am-12pm)</label>
                    </div>
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="bags-filter" class="h-4 w-4">
                        <label for="bags-filter">Equipaje incluido</label>
                    </div>
                </div>
            </div>
            
            <!-- Flight Cards -->
            <div class="space-y-4">
                <!-- Flight 1 -->
                <div class="flight-card bg-white rounded-lg shadow-sm hover:shadow-md transition p-6">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                        <div class="md:col-span-3 flex items-center space-x-4">
                            <img src="https://placehold.co/100x50" alt="Logo de Aerolíneas Argentinas" class="h-8">
                            <div>
                                <h3 class="font-bold">Aerolíneas Argentinas</h3>
                                <p class="text-sm text-gray-600">AR 1234 | Boeing 737</p>
                            </div>
                        </div>
                        <div class="md:col-span-4">
                            <div class="grid grid-cols-3 items-center text-center">
                                <div>
                                    <p class="text-xl font-bold">11:30</p>
                                    <p class="text-sm text-gray-600">EZE</p>
                                </div>
                                <div class="relative">
                                    <div class="h-px bg-gray-300 w-full"></div>
                                    <div class="absolute top-1/2 left-0 right-0 flex justify-center">
                                        <div class="bg-white px-2 transform -translate-y-1/2">
                                            <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">5h 30m</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-xl font-bold">17:00</p>
                                    <p class="text-sm text-gray-600">MIA</p>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-3">
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Equipaje incluido</span>
                            </div>
                            <div class="flex items-center space-x-2 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <span>Sin escalas</span>
                            </div>
                        </div>
                        <div class="md:col-span-2 text-right">
                            <p class="text-2xl font-bold text-blue-600">$549 USD</p>
                            <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Seleccionar</button>
                        </div>
                    </div>
                </div>
                
                <!-- Flight 2 -->
                <div class="flight-card bg-white rounded-lg shadow-sm hover:shadow-md transition p-6">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                        <div class="md:col-span-3 flex items-center space-x-4">
                            <img src="https://placehold.co/100x50" alt="Logo de American Airlines" class="h-8">
                            <div>
                                <h3 class="font-bold">American Airlines</h3>
                                <p class="text-sm text-gray-600">AA 789 | Boeing 787</p>
                            </div>
                        </div>
                        <div class="md:col-span-4">
                            <div class="grid grid-cols-3 items-center text-center">
                                <div>
                                    <p class="text-xl font-bold">09:15</p>
                                    <p class="text-sm text-gray-600">EZE</p>
                                </div>
                                <div class="relative">
                                    <div class="h-px bg-gray-300 w-full"></div>
                                    <div class="absolute top-1/2 left-0 right-0 flex justify-center">
                                        <div class="bg-white px-2 transform -translate-y-1/2">
                                            <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">9h 45m</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-xl font-bold">19:00</p>
                                    <p class="text-sm text-gray-600">MIA</p>
                                </div>
                            </div>
                            <div class="text-center mt-1">
                                <span class="text-xs bg-gray-100 px-2 py-1 rounded-full">1 escala (DFW)</span>
                            </div>
                        </div>
                        <div class="md:col-span-3">
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Equipaje incluido</span>
                            </div>
                            <div class="flex items-center space-x-2 mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>WiFi a bordo</span>
                            </div>
                        </div>
                        <div class="md:col-span-2 text-right">
                            <p class="text-2xl font-bold text-blue-600">$489 USD</p>
                            <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Seleccionar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-12 bg-blue-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Recibe las mejores ofertas</h2>
            <p class="text-xl mb-6 max-w-2xl mx-auto">Suscríbete a nuestro newsletter y recibe descuentos exclusivos en tu email.</p>
            <form class="max-w-md mx-auto flex">
                <input type="email" placeholder="Tu email" class="flex-grow p-3 rounded-l-lg focus:outline-none text-gray-800">
                <button type="submit" class="bg-blue-900 px-6 py-3 rounded-r-lg hover:bg-blue-800 transition">Suscribirse</button>
            </form>
        </div>
    </section>

<?php
include 'includes/pie.php';
include 'usuario/login.php';
?>
<script src="js/login.js"></script>
</body>
</html>
