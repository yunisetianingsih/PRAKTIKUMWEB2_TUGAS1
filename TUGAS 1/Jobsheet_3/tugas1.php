<?php
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return "Nama Pengguna adalah $this->name";
    }

    public function getRole() {
        return "$this->name sebagai pengguna";
    }
}

class Dosen extends Person {
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function tampildata() {
        return "Dosen dengan nama $this->name dengan nidn $this->nidn";
    }

    public function getRole() {
        return "$this->name sebagai dosen";
    }

    public function getnidn() {
        return $this->nidn;
    }

    public function setnidn($nidn) {
        $this->nidn = $nidn;
    }
}

class Mahasiswa extends Person {
    private $nim;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function tampildata() {
        return "Mahasiswa dengan nama $this->name dengan nim $this->nim";
    }

    public function getRole() {
        return "$this->name sebagai mahasiswa";
    }

    public function getnim() {
        return $this->nim;
    }

    public function setnim($nim) {
        $this->nim = $nim;
    }
}

abstract class Jurnal {
    protected $judul;

    public function __construct($judul) {
        $this->judul = $judul;
    }
}

class JurnalDosen extends Jurnal {
    private $namadosen;

    public function __construct($judul, $namadosen) {
        parent::__construct($judul);
        $this->namadosen = $namadosen;
    }

    public function pengajuanJurnal() {
        return "Jurnal dengan judul $this->judul diajukan oleh dosen dengan nama $this->namadosen";
    }
}

class JurnalMahasiswa extends Jurnal {
    private $namamahasiswa;

    public function __construct($judul, $namamahasiswa) {
        parent::__construct($judul);
        $this->namamahasiswa = $namamahasiswa;
    }

    public function pengajuanJurnal() {
        return "Jurnal dengan judul $this->judul diajukan oleh mahasiswa dengan nama $this->namamahasiswa";
    }
}

// Membuat objek Person
$person = new Person("Tata");
echo $person->getName();
echo "<br>";

// Membuat objek Dosen
$dosen = new Dosen("Tata", "7890");
echo $dosen->tampildata(); // Menampilkan data dosen
echo "<br>";
echo $dosen->getRole(); // Menampilkan peran dosen
echo "<br>";
$dosen->setnidn("123456"); // Mengatur NIDN baru
echo "NIDN Baru: " . $dosen->getnidn(); // Menampilkan NIDN baru
echo "<br>";

// Membuat objek Mahasiswa
$mahasiswa = new Mahasiswa("Gabriel", "230202096");
echo $mahasiswa->tampildata(); // Menampilkan data mahasiswa
echo "<br>";
echo $mahasiswa->getRole(); // Menampilkan peran mahasiswa
echo "<br>";
$mahasiswa->setnim("987654"); // Mengatur NIM baru
echo "NIM Baru: " . $mahasiswa->getnim(); // Menampilkan NIM baru
echo "<br>";

// Membuat objek JurnalDosen
$jurnaldosen = new JurnalDosen("Pengaruh Perkembangan Digital", "Budi");
echo $jurnaldosen->pengajuanJurnal();
echo "<br>";

// Membuat objek JurnalMahasiswa
$jurnalmahasiswa = new JurnalMahasiswa("Pengaruh Industri terhadap Masyarakat", "Gabriel");
echo $jurnalmahasiswa->pengajuanJurnal();
?>
