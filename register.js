// Mendapatkan elemen modal
var modal = document.getElementById("myModal");

// Mendapatkan elemen <span> yang digunakan untuk menutup modal
var span = document.getElementsByClassName("close")[0];

// Mendapatkan tombol 'OK' di dalam modal
var okButton = document.getElementById("okButton");

// Fungsi untuk menampilkan modal
function showModal() {
  modal.style.display = "block";
}

// Ketika tombol 'OK' diklik, tutup modal
okButton.onclick = function() {
  modal.style.display = "none";
}

// Ketika pengguna mengklik <span> (x), tutup modal
span.onclick = function() {
  modal.style.display = "none";
}

// Ketika pengguna mengklik di luar modal, tutup modal
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Fungsi untuk validasi form
function validateForm() {
  var nama = document.getElementById("Nama").value;
  var nisn = document.getElementById("NISN").value;
  var birthDate = document.getElementById("birthDate").value;
  var gender = document.querySelector('input[name="gender"]:checked');
  var password = document.getElementById("password").value;

  if (!nama || !nisn || !birthDate || !gender || !password) {
    alert("Semua kolom harus diisi!");
  } else {
    showModal();
  }
}
