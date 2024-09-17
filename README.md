# PWEB2_JOBSHEET-1
Praktimun Pemrograman Web 2 Jobsheet 1 Menggunakan Konsep Kelas dab Objek dalam PHP

#Proses Pembuatan Kelas<br>#
Kelas dalam OOP merupakan sebuah blueprint untuk membuat sebuah objek, di dalam kelas itu sendirinya nantinya akan mendefinisikan sebuah properti (atribut) dan metode (fungsi) yang di miliki oleh suatu objek. <br>

Dalam PHP sebuah kelas di buat dengan menggunakan kata 'class' yang di ikuti oleh nama kelas yang akan dibuat. Nama kelas biasanya dibuat dengan diawali oleh huruf kapital. Di dalam pembuatan kelas terdapat beberapa langkah dasar, di antaranya yaitu :<br>

- Mendefinisikan properti (atribut) yang dimiliki oleh sebuah kelas<br>
Properti merupakan sebuah variabel yang mendeskripsikan karakteristik dari sebuah kelas. <br>
Berikut merupakan contoh code nya <br>:
 // Menambahkan atribut atau properties
    public $nama;
    public $nip;
    public $mataKuliah;

- Membuat Construct<br>
Construct ini merupakan sebuah metode khusus yang secara otomatis akan dipanggil ketika sebuah objek telas berhasil dibuat, di dalam construct ini berisi inisialisasi dari properti class.<br>
Berikut merupakan contoh code nya <br>:
  //Constructor
      public function __construct($nama, $nip, $mataKuliah){
          $this->nama = $nama;
          $this->nip = $nip;
          $this->mataKuliah = $mataKuliah;
      }

- Membuat Metode<br>
Di dalam kelas juga terdapat metode yang berisi suatu fungsi yang mendefinisikan sebuah aksi atau perilaku yang nantinya dapat dilakukan oleh suatu objek.<br>
Berikut merupakan contoh code nya <br> :
  //Metode atau Function
      public function tampilDosen(){
          return "Dosen $this->nama denggan nip $this->nip mengajar matakuliah $this->mataKuliah.";
      }
