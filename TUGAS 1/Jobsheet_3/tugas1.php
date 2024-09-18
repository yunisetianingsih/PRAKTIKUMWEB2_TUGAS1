<?php
// Membuat kelas Person
class Person {
    // Mendeklarasikan properti protected $name
    protected $name;

    // Konstruktor untuk kelas Person. Menerima parameter $name untuk menginisialisasi objek
    public function __construct($name) {
        $this->name = $name; // Menginisialisasi properti $name dengan nilai parameter $name
    }

    // Metode getName untuk mendapatkan nama pengguna
    public function getName() {
        return "Nama Pengguna adalah $this->name";
    }

    // Metode getRole untuk mendapatkan peran pengguna, dapat di-overridden oleh kelas turunan
    public function getRole() {
        return "$this->name sebagai pengguna";
    }
}

// Membuat kelas Dosen yang merupakan turunan dari kelas Person
class Dosen extends Person {
    // Mendeklarasikan properti private $nidn
    private $nidn;

    // Konstruktor untuk kelas Dosen. Menerima parameter $name dan $nidn untuk menginisialisasi objek
    public function __construct($name, $nidn) {
        parent::__construct($name); // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi properti $name
        $this->nidn = $nidn; // Menginisialisasi properti $nidn dengan nilai parameter $nidn
    }

    // Metode tampildata untuk menampilkan informasi dosen
    public function tampildata() {
        return "Dosen dengan nama $this->name dengan nidn $this->nidn";
    }

    // Metode getRole yang di-overridden dari kelas induk untuk mengembalikan peran sebagai dosen
    public function getRole() {
        return "$this->name sebagai dosen";
    }

    // Metode getnidn untuk mendapatkan nilai NIDN
    public function getnidn() {
        return $this->nidn;
    }

    // Metode setnidn untuk mengubah nilai NIDN
    public function setnidn($nidn) {
        $this->nidn = $nidn;
    }
}

// Membuat kelas Mahasiswa yang merupakan turunan dari kelas Person
class Mahasiswa extends Person {
    // Mendeklarasikan properti private $nim
    private $nim;

    // Konstruktor untuk kelas Mahasiswa. Menerima parameter $name dan $nim untuk menginisialisasi objek
    public function __construct($name, $nim) {
        parent::__construct($name); // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi properti $name
        $this->nim = $nim; // Menginisialisasi properti $nim dengan nilai parameter $nim
    }

    // Metode tampildata untuk menampilkan informasi mahasiswa
    public function tampildata() {
        return "Mahasiswa dengan nama $this->name dengan nim $this->nim";
    }

    // Metode getRole yang di-overridden dari kelas induk untuk mengembalikan peran sebagai mahasiswa
    public function getRole() {
        return "$this->name sebagai mahasiswa";
    }

    // Metode getnim untuk mendapatkan nilai NIM
    public function getnim() {
        return $this->nim;
    }

    // Metode setnim untuk mengubah nilai NIM
    public function setnim($nim) {
        $this->nim = $nim;
    }
}

// Membuat kelas abstrak Jurnal
abstract class Jurnal {
    // Mendeklarasikan properti protected $judul
    protected $judul;

    // Konstruktor untuk kelas Jurnal. Menerima parameter $judul untuk menginisialisasi objek
    public function __construct($judul) {
        $this->judul = $judul; // Menginisialisasi properti $judul dengan nilai parameter $judul
    }
}

// Membuat kelas JurnalDosen yang merupakan turunan dari kelas Jurnal
class JurnalDosen extends Jurnal {
    // Mendeklarasikan properti private $namadosen
    private $namadosen;

    // Konstruktor untuk kelas JurnalDosen. Menerima parameter $judul dan $namadosen untuk menginisialisasi objek
    public function __construct($judul, $namadosen) {
        parent::__construct($judul); // Memanggil konstruktor dari kelas induk (Jurnal) untuk menginisialisasi properti $judul
        $this->namadosen = $namadosen; // Menginisialisasi properti $namadosen dengan nilai parameter $namadosen
    }

    // Metode pengajuanJurnal untuk menampilkan informasi pengajuan jurnal oleh dosen
    public function pengajuanJurnal() {
        return "Jurnal dengan judul $this->judul diajukan oleh dosen dengan nama $this->namadosen";
    }
}

// Membuat kelas JurnalMahasiswa yang merupakan turunan dari kelas Jurnal
class JurnalMahasiswa extends Jurnal {
    // Mendeklarasikan properti private $namamahasiswa
    private $namamahasiswa;

    // Konstruktor untuk kelas JurnalMahasiswa. Menerima parameter $judul dan $namamahasiswa untuk menginisialisasi objek
    public function __construct($judul, $namamahasiswa) {
        parent::__construct($judul); // Memanggil konstruktor dari kelas induk (Jurnal) untuk menginisialisasi properti $judul
        $this->namamahasiswa = $namamahasiswa; // Menginisialisasi properti $namamahasiswa dengan nilai parameter $namamahasiswa
    }

    // Metode pengajuanJurnal untuk menampilkan informasi pengajuan jurnal oleh mahasiswa
    public function pengajuanJurnal() {
        return "Jurnal dengan judul $this->judul diajukan oleh mahasiswa dengan nama $this->namamahasiswa";
    }
}

// Membuat objek Person
$person = new Person("Tata");
echo $person->getName(); // Menampilkan nama pengguna
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
echo $jurnaldosen->pengajuanJurnal(); // Menampilkan pengajuan jurnal dosen
echo "<br>";

// Membuat objek JurnalMahasiswa
$jurnalmahasiswa = new JurnalMahasiswa("Pengaruh Industri terhadap Masyarakat", "Gabriel");
echo $jurnalmahasiswa->pengajuanJurnal(); // Menampilkan pengajuan jurnal mahasiswa
?>
