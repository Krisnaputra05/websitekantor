const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

menuToggle.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});
// Fungsi untuk menambahkan animasi berdasarkan arah (vertical/horizontal)
function animateOnScroll() {
    const elements = document.querySelectorAll('.opacity-0'); // Pilih elemen yang tersembunyi
    elements.forEach((el) => {
        const rect = el.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom >= 0; // Cek visibilitas elemen

        if (isVisible) {
            // Identifikasi jenis animasi berdasarkan kelas elemen
            if (el.classList.contains('translate-y-8')) {
                // Animasi vertikal (translate-y)
                el.classList.remove('opacity-0', 'translate-y-8');
                el.classList.add('opacity-100', 'translate-y-0');
            } else if (el.classList.contains('translate-x-8') || el.classList.contains('-translate-x-8')) {
                // Animasi horizontal (translate-x)s
                el.classList.remove('opacity-0', 'translate-x-8', '-translate-x-8');
                el.classList.add('opacity-100', 'translate-x-0');
            }
        }
    });
}

// Event listener untuk scroll
window.addEventListener('scroll', animateOnScroll);

// Jalankan animasi saat halaman pertama kali dimuat
window.addEventListener('DOMContentLoaded', animateOnScroll);


