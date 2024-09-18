<?php
//Membuat kelas pengguna
abstract class Pengguna {
    protected $nama;
    // Constructor
    public function __construct($nama) {
        $this->nama = $nama;
    }
    // Metode abstrak
    abstract public function aksesFitur();
}
// Membuat kelas Dosen yang merupakan turunan dari kelas Pengguna
class Dosen extends Pengguna {
    public function aksesFitur() {
        return "Dosen dengan nama $this->nama mempunyai akses fitur mengedit";
    }
}
// Membuat kelas Mahasiswa yang merupakan turunan dari kelas Pengguna
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return "Mahasiswa dengan nama $this->nama mempunyai akses fitur melihat";
    }
}
//Instansiasi objek
$mahasiswa = new Mahasiswa("Leo");
echo $mahasiswa->aksesFitur();// M
echo "<br>";
//Instansiasi Objek
$dosen = new Dosen("Amin");
echo $dosen->aksesFitur();
?>