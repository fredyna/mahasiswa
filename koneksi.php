<?php
    class Koneksi{
        private $server = "localhost";
        private $username = "id5881217_fredynur";
        private $password = "bismillah";
        private $db = "id5881217_mahasiswa";

        function getKoneksi(){
            return new mysqli($this->server, $this->username, $this->password, $this->db);
        }

    }
    
    
?>