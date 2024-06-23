<?php

class proses extends database
{
    public function tampil_data()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM mahasiswa ");
        $row = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return ($row);
    }
    public function tambah_data ($nim,$nama,$jurusan)
    {
        $data ="INSERT INTO mahasiswa(nim,nama,jurusan) 
        VALUES ('$nim','$nama','$jurusan')";
        $this->connect->query($data);
    } 
    public function update_data($nim, $nama, $jurusan, $id)
    {
        $query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan' WHERE id=$id"; 
        $this->connect->query($query);
    }
    public function menampilkan_data_mengunakan_id($id)
    {
        $query = "SELECT * FROM mahasiswa WHERE id = $id"; 
        $result = mysqli_query($this->connect, $query);
        $data = mysqli_fetch_assoc($result);
        return $data;
    }
    public function hapus_data($id)
    {
        $sql="DELETE FROM mahasiswa WHERE id='$id'";
        $this->connect->query($sql);
    }
}
