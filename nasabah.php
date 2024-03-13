<?php

class Nasabah
{
    // Properties atau atribut
    public $nomorRekening;
    public $nama;
    public $jenisKelamin;
    public $jumlahSaldo;
    public $jumlahPinjaman = 0; // Menyimpan jumlah pinjaman nasabah

    // Constructor untuk menginisialisasi objek
    public function __construct($nomorRekening, $nama, $jenisKelamin, $jumlahSaldo)
    {
        $this->nomorRekening = $nomorRekening;
        $this->nama = $nama;
        $this->jenisKelamin = $jenisKelamin;
        $this->jumlahSaldo = $jumlahSaldo;
    }

    // Method untuk menampilkan informasi tentang objek Nasabah
    public function tampilkanInformasi()
    {
        echo "Nomor Rekening: " . $this->nomorRekening . ", Nama: " . $this->nama . ", Jenis Kelamin: " . $this->jenisKelamin .
            ", Jumlah Saldo: " . $this->jumlahSaldo . ", Jumlah Pinjaman: " . $this->jumlahPinjaman . "<br>";
    }

    // Method untuk tarik tunai
    public function tarikTunai($jumlah)
    {
        if ($jumlah > 0 && $jumlah <= $this->jumlahSaldo) {
            $this->jumlahSaldo -= $jumlah;
            echo "Tarik tunai berhasil. Sisa saldo: " . $this->jumlahSaldo . "<br>";
        } else {
            echo "Tarik tunai gagal. Saldo tidak mencukupi atau jumlah tidak valid." . "<br>";
        }
    }

    // Method untuk setor tunai
    public function setorTunai($jumlah)
    {
        if ($jumlah > 0) {
            $this->jumlahSaldo += $jumlah;
            echo "Setor tunai berhasil. Sisa saldo: " . $this->jumlahSaldo . "<br>";
        } else {
            echo "Setor tunai gagal. Jumlah tidak valid." . "<br>";
        }
    }

    // Method untuk pinjam
    public function pinjam($jumlah)
    {
        // Memeriksa apakah jumlah pinjaman tidak melebihi 30% dari jumlah saldo
        $maksimalPinjaman = 0.3 * $this->jumlahSaldo;

        if ($jumlah <= $maksimalPinjaman) {
            // Mengurangi 10% dari jumlah pinjaman dari saldo nasabah
            $this->jumlahSaldo -= $jumlah * 0.1;
            $this->jumlahPinjaman += $jumlah; // Menambahkan jumlah pinjaman nasabah
            echo "Pinjaman berhasil. Saldo dikurangi sebesar 10% dari jumlah pinjaman. Sisa saldo: " . $this->jumlahSaldo . "<br>";
        } else {
            echo "Pinjaman gagal. Jumlah pinjaman melebihi batas maksimum yang diperbolehkan." . "<br>";
        }
    }
}

// Membuat objek dari kelas 'Nasabah'
$nasabah1 = new Nasabah("123456", "RUHUL", "Laki-laki", 500000);
$nasabah2 = new Nasabah("654321", "Rahmat", "Laki-Laki", 750000);

// Memanggil method pada objek
$nasabah1->tampilkanInformasi();
$nasabah2->tampilkanInformasi();

// Tarik tunai dari nasabah1
echo "Tarik tunai nasabah1: ";
$nasabah1->tarikTunai(200000);

// Setor tunai ke nasabah2
echo "Setor tunai nasabah2: ";
$nasabah2->setorTunai(100000);

// Pinjam uang oleh nasabah1
echo "Pinjam uang nasabah1: ";
$nasabah1->pinjam(1500);

// Menampilkan informasi setelah transaksi
echo "Informasi setelah transaksi:<br>";
$nasabah1->tampilkanInformasi();
$nasabah2->tampilkanInformasi();
