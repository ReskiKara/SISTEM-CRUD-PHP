<?php
require_once 'class/database.php';
require_once 'class/proses.php';
if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $db = new proses();
    $db->update_data($nim, $nama, $jurusan, $id); 
    header('Location: index.php');
    exit();
}
?>
