        // Tab functionality
        const tabButtons = document.querySelectorAll('.tab-btn');
        const searchForms = {
            'flight-search': document.getElementById('flight-search'),
            'hotel-search': document.getElementById('hotel-search')
        };
        
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                tabButtons.forEach(btn => {
                    btn.classList.remove('tab-active');
                    btn.classList.remove('text-blue-600');
                    btn.classList.add('text-gray-700');
                });
                
                // Add active class to clicked button
                button.classList.add('tab-active');
                button.classList.add('text-blue-600');
                button.classList.remove('text-gray-700');
                
                // Show corresponding form
                if(button.textContent.trim() === 'Vuelos') {
                    searchForms['flight-search'].classList.remove('hidden');
                    searchForms['hotel-search'].classList.add('hidden');
                } else if(button.textContent.trim() === 'Hoteles') {
                    searchForms['flight-search'].classList.add('hidden');
                    searchForms['hotel-search'].classList.remove('hidden');
                }
            });
        });
        
        // Login modal functionality
        const loginModal = document.getElementById('loginModal');
        const loginBtn = document.getElementById('loginBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        
        loginBtn.addEventListener('click', () => {
            loginModal.classList.add('modal-open');
        });
        
        closeModalBtn.addEventListener('click', () => {
            loginModal.classList.remove('modal-open');
        });
        
        window.addEventListener('click', (e) => {
            if(e.target === loginModal) {
                loginModal.classList.remove('modal-open');
            }
        });
