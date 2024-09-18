<?php
//Membuat kelas pengguna
class Pengguna {
    // Atribut atau Properti (Protected)
    protected $nama;

    // Constructor
    public function __construct($nama) {
        $this->nama = $nama; // Menginisialisasi properti $nama dengan nilai yang diberikan saat instansiasi objek
    }

    // Getter untuk nama
    // Mengembalikan nilai dari properti $nama
    public function getNama() {
        return $this->nama;
    }
   
}
// Membuat kelas Dosen yang merupakan turunan dari kelas Pengguna
class Dosen extends Pengguna  {
    private $mataKuliah; // Atribut atau Properti (Private)

    // Constructor
    public function __construct($nama, $mataKuliah){
        parent::__construct($nama); // Memanggil constructor dari kelas induk (Pengguna) menggunakan parent::__construct()
        $this->mataKuliah = $mataKuliah; // Menginisialisasi properti $mataKuliah dengan nilai yang diberikan
    }

    // Getter untuk mataKuliah
    // Mengembalikan nilai dari properti $mataKuliah
    public function getdosen() {
        return $this->mataKuliah;
    }
    
    // Metode untuk menampilkan informasi dosen
    public function tampilkanDosen() {
        return "Nama Dosen $this->nama mengajar matakuliah $this->mataKuliah";// Mengembalikan string yang berisi nama dosen dan mata kuliah yang diajarkan
    }
}
// Membuat objek dosen1 dari kelas Dosen
$dosen1 = new Dosen("Dirga", "FRSD");
// Menampilkan informasi dosen dengan memanggil metode tampilkanDosen()
echo $dosen1->tampilkanDosen()."<br>";

?>