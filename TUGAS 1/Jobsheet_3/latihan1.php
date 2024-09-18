<?php
//Membuat kelas baru dengan nama Person
class Person {
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
        }
    
        public function getName() {
        return $this->name;
        }
}
// Membuat Kelas Student yang merupakan turunan dari kelas Person
class Student extends Person  {
    public $studentID;

    // Constructor
    public function __construct($nama, $studentID){
        parent::__construct($nama);
        $this->studentID = $studentID;
    }
    // Metode untuk mendapatkan ID mahasiswa
    public function getStudentID() {
        return $this->studentID;
    }
    
}
// Membuat objek dari kelas Person
$person1 = new Person("Alya");
echo $person1->getName();
echo "<br>";

// Membuat objek dari kelas Student
$student1 = new Student("Caca", "01");
echo $student1->getStudentID();
?>