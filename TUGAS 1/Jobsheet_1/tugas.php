<?php
class Dosen {
    // Menambahkan atribut atau properties
    public $nama;
    public $nip;
    public $mataKuliah;

    //Constructor
    public function __construct($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //Metode atau Function
    public function tampilDosen(){
        return "Dosen $this->nama denggan nip $this->nip mengajar matakuliah $this->mataKuliah.";
    }
}
//Instansiasi Objek
$Dosen1 = new Dosen("Deandra Putri S.T", "230202095", "Teknik Informatika");
echo $Dosen1->tampilDosen();
?>