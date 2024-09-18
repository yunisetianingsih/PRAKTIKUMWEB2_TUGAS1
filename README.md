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


