<!-- Login Modal -->
    <div id="loginModal" class="modal fixed inset-0 bg-black bg-opacity-50 items-center justify-center p-4 z-50">
        <div class="bg-white rounded-lg shadow-xl max-w-md w-full animate-fade-in">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-2xl font-bold">Iniciar sesión</h3>
                    <button id="closeModalBtn" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form>
                    <div class="mb-4">
                        <label class="block text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 mb-2">Contraseña</label>
                        <input type="password" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <a href="#" class="text-sm text-blue-600 hover:underline">¿Olvidaste tu contraseña?</a>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition mb-4">Iniciar sesión</button>
                    <div class="text-center">
                        <p class="text-gray-600">¿No tienes una cuenta? <a href="#" class="text-blue-600 hover:underline">Regístrate</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="js/login.js"></script>