<?php
//Membuat Class Mahasiswa
class Mahasiswa {
    // Atribut atau Properties
    private $nama;
    private $nim;
    private $jurusan;

    //Constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;    //Menginisialisasi properti dengan nilai yang diberikan
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Metode atau Function untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Mahasiswa dengan nama $this->nama nim $this->nim jurusan $this->jurusan"; //Mengembalikan string yang berisi informasi mahasiswa
    }
}
//Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Alexsa", "230202076", "Arsitektur");// Membuat objek dari class Mahasiswa dan mengisi atribut dengan nilai
echo $mahasiswa1->tampilkanData(); // Menampilkan data mahasiswa dengan memanggil metode tampilkanData()
echo "<br>";
?>