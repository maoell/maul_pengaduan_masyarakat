<?php
class mobil
 {
  public $merek = "toyota";
  public $tahun_produksi = 2018;
  public $warna = "putih";
  public $kecepatan = 100;
  

  public function start(){
    echo"mobil berjalan";
     }
   public function akselerasi(){
    echo"mobilakselerasi";
   }
   public function berhenti(){
     echo"mobil berhenti"; 
   }
    }
    $mobil = new mobil();
    echo"<h1>mobil</h1>";
    echo$mobil->merek;
    echo "<br />";
    echo$mobil->tahun_produksi;
    echo "<br />";
    echo$mobil->warna;
    echo "<br />";
    echo$mobil->kecepatan;
    echo "<br />";
    
    $mobil2 = new mobil();
    echo"<h1>mobil2</h1>";
    echo$mobil->merek = "daihatsu";
    echo "<br />";
    echo$mobil->tahun_produksi = 2001;
    echo "<br />";
    echo$mobil->warna = "hitam";
    echo "<br />";
    echo$mobil->kecepatan = 70;
    echo "<br />";
     
    $mobil->start();
    echo "<br />";
    $mobil->akselerasi();
    echo "<Br />";
    $mobil->berhenti();
    echo "<br />";





  ?>