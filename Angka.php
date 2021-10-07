<?php

    class Angka 
    {

        private $angka;        
        private $jmlKelipatan3dan5 = 0;        

        public function __construct($angka){
            $this->angka = $angka;
        }

        public function cetak()
        {
            echo "<b>Jumlah Perulangan : </b>".$this->angka."<br>";

            for($i = 1; $i <= $this->angka; $i++){

                if($this->jmlKelipatan3dan5 == 5){

                    break;
                    
                } else {
                    
                    if($i % 3 == 0 AND $i % 5 == 0){

                        echo $i." Pasar 20 Belanja Pangan <br>";
                        $this->jmlKelipatan3dan5 += 1;
                        

                    } else if($i % 3 == 0){

                        if($this->jmlKelipatan3dan5 >= 2){
                            echo $i." Belanja pangan <br>";
                        } else {
                            echo $i." Pasar 20 <br>";
                        }

                    } else if($i % 5 == 0) {

                        if($this->jmlKelipatan3dan5 >= 2){
                            echo $i." Pasar 20 <br>";
                        } else {
                            echo $i." Belanja pangan <br>";
                        }

                    } else {
                        echo $i . "<br>";;
                    }     
                }           

            }

        }

    }