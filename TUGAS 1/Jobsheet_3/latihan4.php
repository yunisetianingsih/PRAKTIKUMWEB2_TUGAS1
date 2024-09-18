<?php
abstract class Course{
    abstract public function getCourseDetails();
}
class OnlineCourse extends Course{
    private $namacourseonline;
    private $hargacourseonline;

    public function __construct($namacourseonline,$hargacourseonline){
        $this->namacourseonline = $namacourseonline;
        $this->hargacourseonline = $hargacourseonline;
    }

    public function getCourseDetails() {
        return "Nama course online adalah $this->namacourseonline dengan biaya sebesar Rp. $this->hargacourseonline";
    }
}
class OfflineCourse extends Course{
    private $namacourseoffline;
    private $hargacoureoffline;

    public function __construct($namacourseoffline,$hargacourseoffline){
        $this->namacourseoffline = $namacourseoffline;
        $this->hargacourseoffline = $hargacourseoffline;
    }

    public function getCourseDetails() {
        return "Nama course offline adalah $this->namacourseoffline dengan biaya sebesar Rp.  $this->hargacourseoffline";
    }
}
$onlinecourse = new OnlineCourse("Bahasa Inggris", "100.000");
echo $onlinecourse->getCourseDetails();
echo "<br>";

$offlinecourse = new OfflineCourse("Bahasa Arab", "200.000");
echo $offlinecourse->getCourseDetails();
echo "<br>";
?>