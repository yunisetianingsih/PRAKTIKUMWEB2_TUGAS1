<?php
// Membuat kelas Person
class Person {
    // Mendeklarasikan properti protected $name, yang hanya bisa diakses oleh kelas ini dan kelas turunannya
    protected $name;

    // Konstruktor untuk kelas Person. Menerima parameter $name untuk menginisialisasi objek
    public function __construct($name) {
        $this->name = $name; // Menginisialisasi properti $name dengan nilai parameter $name
    }

    // Metode getName untuk mendapatkan nama pengguna. Mengembalikan string yang berisi nama pengguna
    public function getName() {
        return "Nama Pengguna adalah $this->name";
    }
}

// Membuat kelas Student yang merupakan turunan dari kelas Person
class Student extends Person {
    // Mendeklarasikan properti private $studentID
    private $studentID;

    // Konstruktor untuk kelas Student. Menerima parameter $nama dan $studentID untuk menginisialisasi objek
    public function __construct($nama, $studentID) {
        parent::__construct($nama); // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi properti $name
        $this->studentID = $studentID; // Menginisialisasi properti $studentID dengan nilai parameter $studentID
    }

    // Metode getStudentID untuk mendapatkan ID siswa. Mengembalikan string yang berisi ID siswa
    public function getStudentID() {
        return "StudentID siswa adalah $this->studentID";
    }

    // Metode getName yang didefinisikan ulang (override) dari kelas induk untuk mengembalikan nama
    public function getName() {
        return $this->name;
    }
    
    // Metode setStudentID untuk mengubah nilai studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID; // Mengubah nilai properti $studentID dengan nilai baru
    }

    // Metode setName untuk mengubah nilai name
    public function setName($name) {
        $this->name = $name; // Mengubah nilai properti $name dengan nilai baru
    }
}

// Membuat objek baru dari kelas Student dengan nama "Malik" dan StudentID "1235"
$person1 = new Student("Malik", "1235");
// Mengubah nama pengguna menjadi "Rafa" menggunakan metode setName()
echo $person1->setName("Rafa");
// Menampilkan nama pengguna yang telah diubah dengan memanggil metode getName()
echo $person1->getName();
echo "<br>";

// Membuat objek baru dari kelas Student dengan nama "Bagas" dan StudentID "1234"
$student1 = new Student("Bagas", "1234");
// Mengubah studentID menjadi "5555" menggunakan metode setStudentID()
echo $student1->setStudentID("5555");
// Menampilkan studentID yang telah diubah dengan memanggil metode getStudentID()
echo $student1->getStudentID();
echo "<br>";
?>
