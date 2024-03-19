<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
class Calculator {
    private $angka1;
    private $angka2;

    public function __construct($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
    }

    // Method Pertambahan
    public function Pertambahan() {
        return $this->angka1 + $this->angka2;
    }

    // Method Pengurangan
    public function Pengurangan() {
        return $this->angka1 - $this->angka2;
    }

    // Method Pembagian
    public function Pembagian() {
         return $this->angka1 / $this->angka2;
    }

    // Method Perkalian
    public function Perkalian() {
        return $this->angka1 * $this->angka2;
    }
}

// Buat object dan tampilkan masing-masing method
$calculator1 = new Calculator(10, 5);
$calculator2 = new Calculator(9, 5);

    echo "Hasil Pertambahan = " . $calculator1->Pertambahan() . "<br>";
    echo "Hasil Pengurangan = "  . $calculator1->Pengurangan() . "<br>";
    echo "Hasil Pembagian = "  . $calculator1->Pembagian() . "<br>";
    echo "Hasil Perkalian = "  . $calculator1->Perkalian() . "<br><br>";

    echo "Hasil Pertambahan = " . $calculator2->Pertambahan() . "<br>";
    echo "Hasil Pengurangan = "  . $calculator2->Pengurangan() . "<br>";
    echo "Hasil Pembagian = "  . $calculator2->Pembagian() . "<br>";
    echo "Hasil Perkalian = "  . $calculator2->Perkalian() . "<br>";

?>