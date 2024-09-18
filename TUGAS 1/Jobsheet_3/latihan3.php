<?php
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
        }
    
        public function getName() {
        return "Nama Pengguna adalah $this->name";
        }
}
class Student extends Person  {
    private $studentID;

    public function __construct($nama, $studentID){
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return "StudentID siswa adalah $this->studentID";
    }

    public function getName() {
        return $this->name;
    }
    
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    public function setName($name) {
        $this->name = $name;
    }
    
}

$person1 = new Student("Malik", "1235");
echo $person1->setName("Rafa");
echo $person1->getName();
echo "<br>";

$student1 = new Student("Bagas", "1234");
echo $student1->setStudentID("5555");
echo $student1->getStudentID();
echo "<br>";
?>