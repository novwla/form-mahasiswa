<?php

// DATA MAHASISWA (Associative Array di dalam Indexed Array)

$daftarMahasiswa = [
    [
        "nim"     => "25001",
        "nama"    => "ovel imut princesable",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email"   => "ovel@upi.edu",
        "nilai"   => 88,
    ],
    [
        "nim"     => "25002",
        "nama"    => "wovelyouveyy",
        "jurusan" => "Sistem Telekomunikasi",
        "email"   => "wovelyouveyy@upi.edu",
        "nilai"   => 76,
    ],
    [
        "nim"     => "25003",
        "nama"    => "novela andauri",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email"   => "novela@upi.edu",
        "nilai"   => 67,
    ],
    [
        "nim"     => "25004",
        "nama"    => "veyyievey",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email"   => "veyyievey@upi.edu",
        "nilai"   => 92,
    ],
    [
        "nim"     => "25005",
        "nama"    => "ovel sang ratu kegelapan",
        "jurusan" => "Sistem Telekomunikasi",
        "email"   => "ovel@upi.edu",
        "nilai"   => 58,
    ],
];


// FUNCTION: Menentukan Grade berdasarkan Nilai (Percabangan)

function tentukanGrade($nilai)
{
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 75) {
        return "B";
    } elseif ($nilai >= 65) {
        return "C";
    } else {
        return "D";
    }
}


// FUNCTION: Menentukan Status Kelulusan berdasarkan Nilai

function tentukanStatus($nilai)
{
    if ($nilai >= 75) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}
?>