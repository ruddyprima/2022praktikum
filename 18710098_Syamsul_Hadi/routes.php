<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'home':
            include('pages/home.php');
            break;
        case 'lokasi':
            include('pages/lokasi.php');
            break;
        case 'bagian':
            include('pages/bagian.php');
            break;
        case 'jabatan':
            include('pages/jabatan.php');
            break;
        case 'karyawan':
            include('pages/karyawan.php');
            break;
        default:
            echo "Halaman tidak ditemukan";
            break;
    }
}