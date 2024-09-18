# PWEB2_JOBSHEET-1
<h3>LATIHAN</h3>
1.Membuat Class dan Object <br>
Kelas dalam OOP merupakan sebuah blueprint untuk membuat sebuah objek, di dalam kelas itu sendirinya nantinya akan mendefinisikan sebuah properti (atribut) dan metode (fungsi) yang di miliki oleh suatu objek. Untuk membuat class dengan menggunakan sintaks :<br>

class Mahasiswa {}	
	
Keterangan: untuk membuat kelas dengan perintah ‘class’ di ikuti dengan nama kelas yang akan dibuat.

2.Mendefinisikan Atribut (Properti)<br>
Properti merupakan sebuah variabel yang mendeskripsikan karakteristik dari sebuah kelas. Berikut merupakan contoh sintaks yang digunakan dalam pembuatan atribut:<br>

public $nama;
public $nim;
public $jurusan;

Keterangan : code di atas merupakn penambahan atribut yang berisi nama, nim, dan jurusan.

3.Membuat Constructor<br>
Constructor digunakan untuk dapat menerima parameter yang digunakan untuk menginisialisasi nilai awal dari atribut(properti). Berikut merupakan contoh sintaks yang digunakan untuk membuat constructor<br>

public function __construct($nama,$nim,$jurusan){
       $this->nama = $nama;        
       $this->nim = $nim;
       $this->jurusan = $jurusan; 
    }
    
Keterangan : code di atas merupakan constructor untuk menginisialisasikan atribut (properti) pada kelas mahasiswa

4.Membuat Metode <br>
Pada kelas juga terdapat metode yang berisi suatu fungsi yang mendefinisikan sebuah aksi atau perilaku yang nantinya dapat dilakukan oleh suatu objek. Berikut merupakan contoh sintaks yang digunakan untuk membuat metode :<br>

public function tampilkanData(){
        return "Mahasiswa dengan nama $this->nama nim $this->nim jurusan $this->jurusan";
    }
Keterangan : Code di atas merupakan code yang digunakan untuk membuat metode tampilkanData() pada kelas mahasiswa untuk menampilkan informasi yang ada.

5.Membuat Metode Tambahan <br>
Untuk membuiat metode tambahan berupa metode updateJurusan() yang akan melakukan aksi perubahan jurusan dari objek yang sudah dilihat. Berikut merupakan sintaks untuk membuat metode tambahan berupa update :<br>

public function updateJurusan($jurusanbaru){
        $this->jurusan = $jurusanbaru;  
}

6.Instansiasi Objek<br>
Untuk membuat instansiasi harus menggunakan kata ‘new’ yang kemudian diikuti oleh nama kelas yang dibuat. Jika kelas yang dibuat mempunyai constructor maka harus menyatakan argument. Berikut merupakan sintaks yang digunakan untuk instansiasi objek :<br>

$mahasiswa1 = new Mahasiswa("Aksara Denaya", "23020298", "Informatika");

7.Penggunaan Metode <br>
Untuk menggunakan metode yang sudah dibuat di dalam sebuah kelas harus melakukan instansiasi onjek dahulu. Untuk dapat mengakses metode penulisannya (nama_objek -> nama_metode). Berikut sintaks yang digunakan untuk penggunaan metode:<br>

$mahasiswa1->tampilkanData();

Keterangan : Berikut merupakan code untuk menjalankan metode tampilData yang diterapkan ke objek mahasiswa1


<h3>TUGAS</h3>
Praktikum Pemrograman Web 2 Jobsheet 1 Menggunakan Konsep Kelas dab Objek dalam PHP<br>

1.Proses Pembuatan Kelas<br><hr>
Kelas dalam OOP merupakan sebuah blueprint untuk membuat sebuah objek, di dalam kelas itu sendirinya nantinya akan mendefinisikan sebuah properti (atribut) dan metode (fungsi) yang di miliki oleh suatu objek. <br>

Dalam PHP sebuah kelas di buat dengan menggunakan kata 'class' yang di ikuti oleh nama kelas yang akan dibuat. Nama kelas biasanya dibuat dengan diawali oleh huruf kapital. Di dalam pembuatan kelas terdapat beberapa langkah dasar, di antaranya yaitu :<br>

- Mendefinisikan properti (atribut) yang dimiliki oleh sebuah kelas<br>
Properti merupakan sebuah variabel yang mendeskripsikan karakteristik dari sebuah kelas. <br>
Berikut merupakan contoh code nya :<br>
![Screenshot 2024-09-18 060330](https://github.com/user-attachments/assets/87d966a2-4d7c-45a3-acc8-76df638b636d) <br>
Code di atas merupakan pendefinisian properti yang ada pada kelas dosen dengan yang berisi nama, nip, dan mata kuliah dengan aksesibilitas properti berupa public<br>
- Membuat Construct<br>
Construct ini merupakan sebuah metode khusus yang secara otomatis akan dipanggil ketika sebuah objek telas berhasil dibuat, di dalam construct ini berisi inisialisasi dari properti class.<br>
Berikut merupakan contoh code nya :<br>
![Screenshot 2024-09-18 060607](https://github.com/user-attachments/assets/ad433b03-c216-4b4c-894e-c3fb7780b596)<br>
Pada code di atas merupakan inisialisasi properti kelas yang terdiri dari nama, nip, dan matakuliah<br>

- Membuat Metode<br>
Di dalam kelas juga terdapat metode yang berisi suatu fungsi yang mendefinisikan sebuah aksi atau perilaku yang nantinya dapat dilakukan oleh suatu objek.<br>
Berikut merupakan contoh code nya :<br> 
![Screenshot 2024-09-18 060352](https://github.com/user-attachments/assets/d8788732-4c70-446c-8a07-1a9e7d7d9000)<br>
Pada code di atas merupakan sebuah pembuatan metode tampilkanDosen() untuk menampilkan informasi dosen.<br>

2.Penggunaan Metode<hr>
Untuk menggunakan metode yang sudah di buat di dalam sebuah kelas harus melakukan instansiasi objek ( membuat objek ) dari sebuah kelas terlebih dahulu, dimana dalam instansiasi objek terdapat kata 'new' yang di ikuti oleh nama kelas  yang telah dibuat. Setelah itu, untuk dapat mengakses metode penulisannya (nama_objek -> nama_metode)<br>

Berikut merupakan code dari penggunaan metode :<br>
![Screenshot 2024-09-18 060753](https://github.com/user-attachments/assets/bc121cc3-59d1-4c92-ac9a-5f96b6e803e9)<br>
Code di atas merupakan penggunaan metode, yang di awali dengan pembuatan objek dari kelas dosen yang akan diberikan metode tampilDosen() untuk menampilkan informasi<br>

3.Hasil Output<hr>
Berikut merupakan hasil output dari objek yang diberikan sebuah metode:<br>
![Screenshot 2024-09-18 055856](https://github.com/user-attachments/assets/848c3a77-1897-4630-8200-4ad55c161976)<br>
Hasil Output di atas menampilkan sebuah informasi yang berisi nama dosen, nip, dan juga mata kuliah yang diajarkan.<br>

# PWEB2_JOBSHEET-2
<h3>TUGAS</h3>
1.Membuat Class dan Object 
-	Membuat Class 
Untuk membuat class dengan menggunakan sintaks ‘class’ yang diikuti opleh nama kelas yang akan dibuat. Berikut merupakan sintaks untuk membuat class Mahasiswa.

class Mahasiswa {}

-Mendefinisikan Atribut (properti)
Mendefinisikan Atribut dilakukan di dalam sebuah kelas yang didahului oleh aksesibilitas yang terdiri dari public, private, dan protected yang kemudian diikuti oleh nama atribut(properti). Berikut ini merupakan sintaks untuk mendefinisikan artibut(properti):

    public $nama;
    public $nim;
    public $jurusan;

Keterangan : Mendefinisikan atribut (properti) yang terdiri dari nama,nim, dan jurusan. Untuk atribut (properti) di atas  bersifat public ( dapat di akses dimana saja)

-Membuat Constructor
Constructor di gunakan untuk inisialisasi setiap atribut (properti) yang ada di dalam kelas. Berikut merupakan sintaksnya :

public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;    
        $this->nim = $nim;
        $this->jurusan = $jurusan;
 }

-Membuat Metode tampilkanData()
Untuk membuat metode tampilkanData() dalam kelas mahasiswa yang akan menampilkan data informasi yang ada. Berikut merupakan sintaksnya:

public function tampilkanData() {
        return "Mahasiswa dengan nama $this->nama nim $this->nim jurusan $this->jurusan"; 
    }

Keterangan : Di atas merupakan metode (fungsi) yang digunakan untuk menampilkan data nama , nim , dan jurusan dari kelas mahasiswa.

-Instansiasi  Objek dan Penggunaan Metode
Instansiasi objek untuk membuat sebuah objek baru dari kelas mahasiswa dan kemudian di ikuti dengan pengaplikasian metode yang telah dibuat ke objek. Berikut merupakan sintaksnya :

$mahasiswa1 = new Mahasiswa("Alexsa", "230202076", "Arsitektur");
echo $mahasiswa1->tampilkanData();

Keterangan: untuk instansiasi objek harus di ikuti kata ‘new’ untuk menambahkan nilai awal, kemudian $mahasiswa1->tampilkanData(); merupakan code untuk menggunakan metode tampilData()

2.Encapsulation
Menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu. 
-Membuat Class Mahasiswa
Membuat kelas dilakukan dengan cara yang sama seperti  yang ada pada nomor 1. Berikut merupakan sintaksnya :

class Mahasiswa {}

-Mendefinisikan Atribut (properti)
Mendefinisikan Atribut dilakukan dengan cara yang sama seperti  yang ada pada nomor 1. Berikut merupakan sintaksnya :

    private $nama;
    private $nim;
    private $jurusan;

Keterangan: berdasarkan perintah di soal atribut diubah menjadi private dimana atribut (properti) hanya bisa digunakan di dalam kelas itu saja

-Membuat Constructor

Constructor di gunakan untuk inisialisasi setiap atribut (properti) yang ada di dalam kelas. Berikut merupakan sintaksnya :

public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;    
        $this->nim = $nim;
        $this->jurusan = $jurusan;
 }
-Membuat metode Getter 
Metode getter merupakan metode yang digunakan untuk mengambil data atau membaca data nilai dari atribut (properti) yang memiliki aksesibilitas privat atau protected dalam sebuah kelas. Metode getter  dimulai dengan kata ‘get’.Berikut merupakan sintaksnya :

//Getter pada nama
public function getnama() {
        return $this->nama;
}

//Getter pada nim
public function getnim() {
        return $this->nim;
}

Keterangan : metode tersebut digunakan untuk mengambil atau membaca nilai dari atribut $nama dan $nim 

-Membuat Metode Setter
Mettode setter digunakan untuk mengubah atau menetapkan nilai dari atribut (properti) yang bersifat private atau protected pada sebuah kelas. Metode setter dimulai dengan kata ‘set’. Berikut merupakan sintaksnya:

 // Setter untuk nama
 public function setnama($nama) {
        $this->nama = $nama;
  }

// Setter untuk nim
public function setnim($nim) {
        $this->nim = $nim;
}

Keterangan : metode tersebut digunakan untuk mengubah atau menetapkan nilai dari atribut $nama dan $nim 

3.Inheritance
Inheritance digunakan untuk mewarisi atribut dan metode dari class lain (induk class atau turunan class). Berikut ini merupakan code pembuatan class induk pengguna :

-Class Induk:
class Pengguna {
	protected $nama
}

Keterangan : Pada code di atas  atribut nama bersifat protected yang berarti bisa diturunkan ke kelas turunannya.

-Class Turunan:
Untuk membuat kelas turunan yang mengambil atribut (properti) dari kelas induk di tuliskan dengan sintaks sebagai berikut:

class Dosen extends Pengguna  {}

Keterangan : code di atas menjelaskan bahwa kelas dosen merupakan turunan dari kelas pengguna .

-Construct pada kelas turunan 
Untuk penulisan construct pada kelas pengguna dilakukan dengan cara berikut:

public function __construct($nama, $mataKuliah){
        parent::__construct($nama); 
        $this->mataKuliah = $mataKuliah;   
 }

4.Polymorphism
Polymorphism  merupakan sebuah prinsip yang memungkinkan metode yang sama untuk melakukan tindakan yang berbeda berdasarkan objek yang memanggilnya.

5.Abstraction
Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting. Fungsi abstraction dapat diberikan di class ataupun di metode. Berikut merupakan contoh sintaksnya :

abstract class Pengguna {
    protected $nama;
    // Constructor
    public function __construct($nama) {
        $this->nama = $nama;
    }
    // Metode abstrak
    abstract public function aksesFitur();
}

Keterangan : pada code di atas melakukan abstraction pada kelas pengguna  dan pada metode aksesFitur()

## PWEB2_JOBSHEET-3
<h3>TUGAS </h3>
Mampu Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP

Object-Oriented Programming (OOP) dalam PHP memungkinkan pengembangan perangkat lunak yang lebih terstruktur dan modular. Konsep-konsep seperti Inheritance,Polymorphism, Encapsulation, dan Abstraction

1.	Inheritances (pewarisan)
Inheritance (pewarisan) adalah konsep dalam pemrograman berorientasi objek (OOP) yang memungkinkan sebuah kelas (disebut kelas anak atau kelas turunan) untuk mewarisi atribut dan metode dari kelas lain (disebut kelas induk atau kelas dasar). Konsep ini mendukung penggunaan kembali kode, memperluas fungsionalitas, dan menciptakan struktur hierarki antar kelas. Berikut merupakan sintaks untuk membuat Inheritances (pewarisan):

2.	Polymorphism (Polimorfisme)
Polymorphism memungkinkan satu metode untuk memiliki banyak bentuk,
biasanya melalui metode override di kelas turunan. Dengan ini, objek dapat diperlakukan sebagai bentuk umum dan khusus sesuai kebutuhan. BErikut merupakan code nya :

3.	Encapulation (Enkapulasi)
Prinsip ini memungkinkan Anda untuk menyembunyikan detail implementasi dari objek dan hanya mengekspos antarmuka yang diperlukan untuk berinteraksi dengan objek tersebut. Enkapsulasi membantu menjaga integritas data dan memudahkan pemeliharaan kode. Berikut merupakan codenya :

4.	Abstraction (Abstraksi)
Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting. Fungsi abstraction dapat diberikan di class ataupun di metode. Abstraksi biasanya di terapkan pada metode dan kelas. 

