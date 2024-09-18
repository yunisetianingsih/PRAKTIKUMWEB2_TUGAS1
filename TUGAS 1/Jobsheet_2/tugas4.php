<?php
//Membuat kelas pengguna
class Pengguna {
    // Atribut atau Properti (Protected)
    protected $nama;

    // Constructor
    public function __construct($nama) {
        $this->nama = $nama;// Menginisialisasi properti $nama dengan nilai yang diberikan saat instansiasi objek
    }
    // Metode untuk mengakses fitur
    public function aksesFitur() {
        return "Pengguna dengan nama $this->nama mempunyai akses umum";
    }
  
}
// Membuat kelas Dosen yang merupakan turunan dari kelas Pengguna
class Dosen extends Pengguna {
    // Metode untuk mengakses fitur
    public function aksesFitur() {
        return "Dosen dengan nama $this->nama mempunyai akses ke semua fitur yang ada";
    }
}
// Membuat kelas Mahasiswa yang merupakan turunan dari kelas Pengguna
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return "Mahasiswa dengan nama $this->nama mempunyai akses terbatas";
    }
}
// Membuat objek dari kelas Pengguna dengan nama 'Dika' dan menampilkan akses fitur
$pengguna = new Pengguna("Dika");
echo $pengguna->aksesFitur()."<br>";

// Membuat objek dari kelas Dosen dengan nama 'Budi' dan menampilkan akses fitur
$dosen = new Dosen("Budi");
echo $dosen->aksesFitur()."<br>";

// Membuat objek dari kelas Mahasiswa dengan nama 'Caca' dan menampilkan akses fitur
$mahasiswa = new Mahasiswa("Caca");
echo $mahasiswa->aksesFitur()."<br>"; 

?>