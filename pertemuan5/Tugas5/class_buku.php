<?php

    class Vehicle {
        protected $JenisBuku;
        protected $TahunTerbit;

        protected function __construct($JenisBuku, $TahunTerbit) {
            $this->JenisBuku = $JenisBuku;
            $this->TahunTerbit = $TahunTerbit;
        }

        protected function getInfo() {
            echo "Jenis Bukunya Adalah: " . $this->JenisBuku . "<br>";
            echo "Tahun Terbit Buku: " . $this->TahunTerbit . "<br>";
        }
    }
    
    class Novel_YaAllah_AkuPulang extends Vehicle {
        public $NamaPenerbit;

        public function __construct($JenisBuku, $TahunTerbit, $NomorISBN) {
            parent::__construct($JenisBuku, $TahunTerbit);
            $this->NomorISBN = $NomorISBN;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Nomor ISBN nya Adalah " . $this->NomorISBN . "<br>";
        }
    }
    class KomikNaruto extends Vehicle {
        public  $NamaPenulis;

        public function __construct($JenisBuku, $TahunTerbit, $NamaPenulis) {
            parent::__construct($JenisBuku, $TahunTerbit);
            $this->NamaPenulis = $NamaPenulis;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Nama Penulisnya Adalah: " . $this->NamaPenulis . "<br>";
        }
    }

    class KisahNabi extends Vehicle {
        public $NamaPenerbit;

        public function __construct($JenisBuku, $TahunTerbit, $NamaPenerbit) {
            parent::__construct($JenisBuku, $TahunTerbit);
            $this->NamaPenerbit = $NamaPenerbit;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Nama Penerbitnya Adalah " . $this->NamaPenerbit . "<br>";
        }
    }
?>

