// Ambil semua gambar pada galeri
const images = document.querySelectorAll('.gallery .content img');
    
// Tambahkan event listener untuk setiap gambar
images.forEach(image => {
    image.addEventListener('click', () => {
        // Buat elemen overlay untuk tampilkan gambar
        const overlay = document.createElement('div');
        overlay.classList.add('overlay');
        
        // Buat elemen gambar dalam overlay
        const imgOverlay = document.createElement('img');
        imgOverlay.src = image.src;
        
        // Tambahkan gambar dalam overlay
        overlay.appendChild(imgOverlay);
        
        // Tambahkan overlay ke dalam body
        document.body.appendChild(overlay);
        
        // Ketika overlay diklik, hilangkan overlay
        overlay.addEventListener('click', () => {
            overlay.remove();
        });
    });
});