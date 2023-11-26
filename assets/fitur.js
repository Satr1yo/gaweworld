// script.js

// Fungsi untuk menangani pembelian item
function buyItem(itemName) {
    // Tampilkan dialog pop-up dengan pertanyaan
    var userResponse = prompt('Anda ingin membeli berapa ' + itemName + '?');
  
    // Periksa respons pengguna
    if (userResponse !== null) {
      // Jika pengguna menekan OK, tampilkan pesan konfirmasi
      alert('Terima kasih! Anda telah membeli ' + userResponse + ' ' + itemName + '.');
    } else {
      // Jika pengguna menekan Cancel atau tidak memasukkan nilai, tampilkan pesan lain
      alert('Pembelian dibatalkan.');
    }
  }
  
  // Menambahkan event listener untuk tombol "Buy Diamond Lock"
  document.getElementById('buyDiamondLock').addEventListener('click', function() {
    buyItem('Diamond Lock');
  });


// Fungsi untuk menangani pembelian item
function buyItem(itemName) {
    // Tampilkan dialog pop-up dengan pertanyaan
    var userResponse = prompt('Anda ingin membeli berapa ' + itemName + '?');
  
    // Periksa respons pengguna
    if (userResponse !== null) {
      // Jika pengguna menekan OK, tampilkan pesan konfirmasi
      alert('Terima kasih! Anda telah membeli ' + userResponse + ' ' + itemName + '.');
    } else {
      // Jika pengguna menekan Cancel atau tidak memasukkan nilai, tampilkan pesan lain
      alert('Pembelian dibatalkan.');
    }
  }
  
  // Menambahkan event listener untuk tombol "Buy Zeus"
  document.getElementById('buyArcanazeus').addEventListener('click', function() {
    buyItem('Tempest Helm of the Thundergod');
  });

  function buyItem(itemName) {
    // Tampilkan dialog pop-up dengan pertanyaan
    var userResponse = prompt('Anda ingin membeli berapa ' + itemName + '?');
  
    // Periksa respons pengguna
    if (userResponse !== null) {
      // Jika pengguna menekan OK, tampilkan pesan konfirmasi
      alert('Terima kasih! Anda telah membeli ' + userResponse + ' ' + itemName + '.');
    } else {
      // Jika pengguna menekan Cancel atau tidak memasukkan nilai, tampilkan pesan lain
      alert('Pembelian dibatalkan.');
    }
  }
  
  // Menambahkan event listener untuk tombol "Buy Arcana lina"
  document.getElementById('buyArcanalina').addEventListener('click', function() {
    buyItem('Fiery Soul of the Slayer');
  });
  
  function tampilkanBerita(news1) {
    // Dapatkan konten kartu berdasarkan ID
    var kontenKartu = document.getElementById(news1);

    // Ekstrak informasi yang relevan dari kartu
    var judul = kontenKartu.querySelector('.card-title').innerText;
    var isiBerita = kontenKartu.querySelector('.card-text').innerText;

    // Buat konten popup untuk menampilkan berita
    var kontenPopup = '<h3>' + judul + '</h3><p>' + isiBerita + '</p>';
    alert(kontenPopup);
}

// Menambahkan event listener untuk tombol "Fany skylar"
document.getElementById('buyPani').addEventListener('click', function() {
  buyItem('Fanny Skylar');
});



