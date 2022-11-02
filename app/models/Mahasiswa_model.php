<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "bolod",
    //         "nim" => "123",
    //         "email" => "bolod@gmail.com",
    //         "jurusan" => "kimia"
    //     ],
    //     [
    //         "nama" => "bolod1",
    //         "nim" => "124",
    //         "email" => "bolod1@gmail.com",
    //         "jurusan" => "kimia"
    //     ],
    //     [
    //         "nama" => "bolod2",
    //         "nim" => "125",
    //         "email" => "bolod2@gmail.com",
    //         "jurusan" => "kimia"
    //     ]
    // ];

    // using PDO
    private $dbh; // database handler
    private $stmt; 

    public function __construct()
    {
        //datasource name 
        $dsn = 'mysql:host=localhost;dbname=mahasiswa';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        // return $this->mhs;
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
