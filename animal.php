<?php

class Animal{
    public $nama;
    public $jenis;
    

    public function __construct($nama, $jenis){
        $this->nama = $nama;
        $this->jenis = $jenis;  

        
    }
    public function getInfo(){
        echo 'HEWAN INI ADALAH '.$this->nama.' JENIS '.$this->jenis ;
    }

    
}

class Cat extends Animal {
    public $nama;
    public $jenis;
    public $kelas;
    public $hidup;
    public $makanan;

    public function __construct($nama){
        
        echo 'HEWAN INI ADALAH '.$this->nama = $nama;
        echo ' JENIS ' .$this->jenis = ' KUCING ';
        
    }

    public function getInfo(){
        $this->kelas = ' MAMALIA';
        $this->hidup = ' DARATAN';
        $this->makanan = ' KARNIVORA';
        return $this->jenis." ADALAH HEWAN ".$this->kelas.". HABITATNYA YAITU ".$this->hidup.". TERMASUK HEWAN ".$this->makanan;
        }

}

class Dog extends Animal{
    public $nama;
    public $jenis;
    public $kelas;
    public $hidup;
    public $makanan;


    public function __construct($nama){
        echo 'HEWAN INI ADALAH '.$this->nama = $nama;
        echo ' JENIS ' .$this->jenis = ' ANJING ';

    
    }
    public function getInfo(){
        $this->kelas= ' MAMALIA';
        $this->hidup = ' DARATAN';
        $this->makanan = ' KARNIVORA';
        return $this->jenis." ADALAH HEWAN ".$this->kelas.". HABITATNYA YAITU ".$this->hidup.". TERMASUK HEWAN ".$this->makanan;
    }
}


$animal = new Animal(' HARIMAU ', ' KARNIVORA ');
echo $animal->getInfo()."<br>";

$cat = new Cat('KITTY');
echo $cat->getInfo()."<br>";

$dog = new Dog('BUDDY');
echo $dog->getInfo()."<br>";