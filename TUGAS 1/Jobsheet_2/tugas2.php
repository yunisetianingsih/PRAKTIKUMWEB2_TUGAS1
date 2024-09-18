<?php
// Mendefinisikan kelas Mahasiswa
class Mahasiswa {
    // Atribut atau Properties (Private)
    private $nama;
    private $nim;
    private $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama; //// Menginisialisasi properti dengan nilai yang diberikan saat instansiasi objek
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Mahasiswa dengan nama $this->nama nim $this->nim jurusan $this->jurusan";// Mengembalikan string yang berisi informasi mahasiswa
    }

    // Getter untuk nama
    // Mengembalikan nilai dari properti $nama
    public function getnama() {
        return $this->nama;
    }

    // Setter untuk nama
    // Mengatur nilai baru untuk properti $nama
    public function setnama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk NIM
    // Mengembalikan nilai dari properti $nim
    public function getnim() {
        return $this->nim;
    }
    // Setter untuk NIM
    // Mengatur nilai baru untuk properti $nim
    public function setnim($nim) {
        $this->nim = $nim;
    }

    // Getter untuk jurusan
    // Mengembalikan nilai dari properti $jurusan
    public function getjurusan() {
        return $this->jurusan;
    }

    // Setter untuk jurusan
    // Mengatur nilai baru untuk properti $jurusan
    public function setjurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

}
// Membuat objek mahasiswa1 dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa("Alexsa", "230202076", "Arsitektur");
echo $mahasiswa1->tampilkanData(); // Menampilkan data mahasiswa sebelum perubahan
echo "<br>";

// Mengubah nama, nim, dan jurusan menggunakan metode setter
echo $mahasiswa1->setnama("Keyra");
echo $mahasiswa1->setnim("230202096");
echo $mahasiswa1->setjurusan('FRSD');
// Menampilkan data mahasiswa setelah perubahan
echo $mahasiswa1->tampilkanData();
echo"<br>";

// Menampilkan nilai atribut individu menggunakan metode getter
echo $mahasiswa1->getnama();
echo"<br>";
echo $mahasiswa1->getnim();
echo"<br>";
echo $mahasiswa1->getjurusan();
echo"<br>";

?>