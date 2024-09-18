<?php
// Membuat kelas abstrak Course
abstract class Course {
    // Deklarasi metode abstrak getCourseDetails, yang harus diimplementasikan oleh kelas turunan
    abstract public function getCourseDetails();
}

// Membuat kelas OnlineCourse yang merupakan turunan dari kelas Course
class OnlineCourse extends Course {
    // Mendeklarasikan properti private $namacourseonline dan $hargacourseonline
    private $namacourseonline;
    private $hargacourseonline;

    // Konstruktor untuk kelas OnlineCourse. Menerima parameter $namacourseonline dan $hargacourseonline untuk menginisialisasi objek
    public function __construct($namacourseonline, $hargacourseonline) {
        $this->namacourseonline = $namacourseonline; // Menginisialisasi properti $namacourseonline dengan nilai parameter $namacourseonline
        $this->hargacourseonline = $hargacourseonline; // Menginisialisasi properti $hargacourseonline dengan nilai parameter $hargacourseonline
    }

    // Implementasi metode getCourseDetails untuk kelas OnlineCourse
    public function getCourseDetails() {
        // Mengembalikan string yang berisi nama dan harga course online
        return "Nama course online adalah $this->namacourseonline dengan biaya sebesar Rp. $this->hargacourseonline";
    }
}

// Membuat kelas OfflineCourse yang merupakan turunan dari kelas Course
class OfflineCourse extends Course {
    // Mendeklarasikan properti private $namacourseoffline dan $hargacourseoffline
    private $namacourseoffline;
    private $hargacourseoffline;

    // Konstruktor untuk kelas OfflineCourse. Menerima parameter $namacourseoffline dan $hargacourseoffline untuk menginisialisasi objek
    public function __construct($namacourseoffline, $hargacourseoffline) {
        $this->namacourseoffline = $namacourseoffline; // Menginisialisasi properti $namacourseoffline dengan nilai parameter $namacourseoffline
        $this->hargacourseoffline = $hargacourseoffline; // Menginisialisasi properti $hargacourseoffline dengan nilai parameter $hargacourseoffline
    }

    // Implementasi metode getCourseDetails untuk kelas OfflineCourse
    public function getCourseDetails() {
        // Mengembalikan string yang berisi nama dan harga course offline
        return "Nama course offline adalah $this->namacourseoffline dengan biaya sebesar Rp. $this->hargacourseoffline";
    }
}

// Membuat objek baru dari kelas OnlineCourse dengan nama course "Bahasa Inggris" dan harga "100.000"
$onlinecourse = new OnlineCourse("Bahasa Inggris", "100.000");
// Menampilkan detail course online dengan memanggil metode getCourseDetails()
echo $onlinecourse->getCourseDetails();
echo "<br>";

// Membuat objek baru dari kelas OfflineCourse dengan nama course "Bahasa Arab" dan harga "200.000"
$offlinecourse = new OfflineCourse("Bahasa Arab", "200.000");
// Menampilkan detail course offline dengan memanggil metode getCourseDetails()
echo $offlinecourse->getCourseDetails();
echo "<br>";
?>
