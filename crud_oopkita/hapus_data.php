<?php

require_once 'class/database.php';
require_once 'class/proses.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $db = new proses();
    $db->hapus_data($id);
}

header('Location: index.php');
