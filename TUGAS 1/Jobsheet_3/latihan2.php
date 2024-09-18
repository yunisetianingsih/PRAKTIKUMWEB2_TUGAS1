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
    public $studentID;

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
    
}
class Teacher extends Person {
    public $teacherID;

    public function __construct($nama, $teacherID){
        parent::__construct($nama);
        $this->teacherID = $teacherID;
    }

    public function getTeacherID() {
        return "TeacherID adalah $this->teacherID";
    }

    public function getName() {
        return $this->name;
    }
}
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