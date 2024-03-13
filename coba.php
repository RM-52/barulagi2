<?php
// Definisikan kelas 'Mahasiswa'
class Mahasiswa
{
    // Properties atau atribut
    public $nim;
    public $nama;
    public $jurusan;

    // Constructor untuk menginisialisasi objek
    public function __construct($nim, $nama, $jurusan)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jurusan = $jurusan;
    }

    // Method untuk menampilkan informasi tentang objek Mahasiswa
    public function tampilkanInformasi()
    {
        echo "NIM: " . $this->nim . ", Nama: " . $this->nama . ", Jurusan: " . $this->jurusan;
    }
}

// Membuat objek dari kelas 'Mahasiswa'
$mahasiswa1 = new Mahasiswa("123456", "Dwi", "Informatika");
$mahasiswa2 = new Mahasiswa("654321", "Wahyu", "Sistem Informasi");

// Memanggil method pada objek
$mahasiswa1->tampilkanInformasi();
echo "<br>";
$mahasiswa2->tampilkanInformasi();
