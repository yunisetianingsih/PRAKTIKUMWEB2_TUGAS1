<?php
//Membuat sebuah class dengan nama mahasiswa
class Mahasiswa {
    //Mendeklarasikan properti yang akan digunakan dalam class Mahasiswa
    public $nama;
    public $nim;
    public $jurusan;

    //Constructor 
    public function __construct($nama,$nim,$jurusan){
       $this->nama = $nama;        //Menginisialisasi properti objek dengan nilai  parameter yang di terima
       $this->nim = $nim;
       $this->jurusan = $jurusan; 
    }

    //Membuat sebuah metode untuk menampilkan data
    public function tampilkanData(){
        return "Mahasiswa dengan nama $this->nama nim $this->nim jurusan $this->jurusan"; //Mengembalikan string yang berisi informasi nama, nim, dan jurusan mahasiswa
    }

    //Membuat sebuah metode untuk melakukan update atau memperbarui jurusan
    public function updateJurusan($jurusanbaru){
        $this->jurusan = $jurusanbaru;  //Mengubah nilai jurusan dengan nilai baru yang diberikan
    }

    //Membuat sebuah metode untuk melakukan update atau memperbarui nim
    public function updatenim($nimbaru){
        $this->nim = $nimbaru;  //Mengubah nilai properti nim dengan nilai baru yang diberikan
    }
}
//Membuat objek baru dari kelas mahasiswa 
$mahasiswa1 = new Mahasiswa("Aksara Denaya", "23020298", "Informatika");
echo $mahasiswa1->tampilkanData();  //Pemanggilan metode tampilkanData untuk menampilkan informasi

$mahasiswa1->updateJurusan("Listrik"); // Memperbarui jurusan mahasiswa menggunakan method updateJurusan
echo "<br>";
echo $mahasiswa1->tampilkanData(); //Pemanggilan metode tampilkanData untuk menampilkan informasi

$mahasiswa1->updatenim('23020294'); // Memperbarui NIM mahasiswa menggunakan method updatenim
echo "<br>";
echo $mahasiswa1->tampilkanData(); //Pemanggilan metode tampilkanData untuk menampilkan informasi
?>