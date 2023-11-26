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


// Menambahkan event listener untuk tombol "Fany skylar"
document.getElementById('buyPani').addEventListener('click', function() {
buyItem('Fanny Skylar');
});



