<?php
// Membuat kelas Person
class Person {
    protected $name;
    // Konstruktor untuk kelas Person. Menerima parameter $name untuk menginisialisasi objek.
    public function __construct($name) {
        $this->name = $name;// Menginisialisasi properti $name dengan nilai parameter $name
        }
        // Metode getName untuk mendapatkan nama pengguna. Mengembalikan string yang berisi nama pengguna.
        public function getName() {
        return "Nama Pengguna adalah $this->name";
        }
}
//Membuat kelas turunan student dari kelas induk Person
class Student extends Person  {
    public $studentID;  // Mendeklarasikan properti public $studentID
    //Constructor
    public function __construct($nama, $studentID){
        parent::__construct($nama); // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi properti $name
        $this->studentID = $studentID; // Menginisialisasi properti $studentID dengan nilai parameter $studentID
    }
    // Metode getStudentID untuk mendapatkan ID siswa. Mengembalikan string yang berisi ID siswa.
    public function getStudentID() {
        return "StudentID siswa adalah $this->studentID";
    }
    // Metode getName yang didefinisikan ulang (override) dari kelas induk untuk mengembalikan nama
    public function getName() {
        return $this->name;
    }
    
}
// Membuat kelas Teacher yang merupakan turunan dari kelas Person
class Teacher extends Person {
    public $teacherID; // Mendeklarasikan properti public $teacherID
    // Konstruktor untuk kelas Teacher.
    public function __construct($nama, $teacherID){
        parent::__construct($nama); // Memanggil konstruktor dari kelas induk (Person) untuk menginisialisasi properti $name
        $this->teacherID = $teacherID;  // Menginisialisasi properti $teacherID dengan nilai parameter $teacherID
    }
    // Metode getTeacherID untuk mendapatkan ID guru. Mengembalikan string yang berisi ID guru.
    public function getTeacherID() {
        return "TeacherID adalah $this->teacherID";
    }
    // Metode getName yang didefinisikan ulang (override) dari kelas induk untuk mengembalikan nama
    public function getName() {
        return $this->name;
    }
}
//Instansiasi Objek
$person1 = new Person("Malik");
echo $person1->getName();
echo "<br>";

$student1 = new Student("Bagas", "1234");
echo $student1->getStudentID();
echo "<br>";

$teacher1 = new Teacher("Galih", "5678");
echo $teacher1->getTeacherID();
echo "<br>";

?>