<?php

class convert{

    public function convertir($x){
        $num = $x;
        $ar = array();

    while($num>0){

        if($num-1==0){
            $ar[]='I';
           
            break;   
        }

        if($num-2<0){
            $num-=1;
            $ar[]='I';
           
            continue;
        }

        if($num-3<0){
            $num-=2;
            $ar[]='I';
            $ar[]='I';
           
            continue;
        }

        if($num-4<0){
            $num-=3;
            $ar[]='I';
            $ar[]='I';
            $ar[]='I';
           
            continue;
        }

        if($num-5<0){
            $num-=4;
            $ar[]='I';
            $ar[]='V';
           
            continue;
        }

        if($num-6<0){
            $num-=5;
            $ar[]='V';
           
            continue;
        }

        if($num-7<0){
            $num-=6;
            $ar[]='V';
            $ar[]='I';
           
            continue;
        }

        if($num-8<0){
            $num-=7;
            $ar[]='V';
            $ar[]='I';
            $ar[]='I';
           
            continue;
        }

        if($num-9<0){
            $num-=8;
            $ar[]='V';
            $ar[]='I';
            $ar[]='I';
            $ar[]='I';
           
            continue;
        }

        if($num-10<0){
            $num-=9;
            $ar[]='I';
            $ar[]='X';
           
            continue;
            }

        if($num-20<0){
            $num-=10;
            $ar[]='X';
           
            continue;}

        if($num-30<0){
            $num-=20;
            $ar[]='X';
            $ar[]='X';
           
            continue;}

        if($num-40<0){
            $num-=30;
            $ar[]='X';
            $ar[]='X';
            $ar[]='X';
           
            continue;}

        if($num-50<0){
            $num-=40;
            $ar[]='X';
            $ar[]='L';
           
            continue;}

        if($num-60<0){
            $num-=50;
            $ar[]='L';
           
            continue;}

        if($num-70<0){
            $num-=60;
            $ar[]='L';
            $ar[]='X';
           
            continue;}

        if($num-80<0){
            $num-=70;
            $ar[]='L';
            $ar[]='X';
            $ar[]='X';
           
            continue;}

        if($num-90<0){
            $num-=80;
            $ar[]='L';
            $ar[]='X';
            $ar[]='X';
            $ar[]='X';
           
            continue;}

        if($num-100<0){
            $num-=90;
            $ar[]='X';
            $ar[]='C';
           
            continue;}

        if($num-200<0){
            $num-=100;
            $ar[]='C';
           
            continue;}

        if($num-300<0){
            $num-=200;
            $ar[]='C';
            $ar[]='C';
           
            continue;}

        if($num-400<0){
            $num-=300;
            $ar[]='C';
            $ar[]='C';
            $ar[]='C';
           
            continue;}

        if($num-500<0){
            $num-=400;
            $ar[]='C';
            $ar[]='D';
           
            continue;}

        if($num-600<0){
            $num-=500;
            $ar[]='D';
           
            continue;
            }

        if($num-700<0){
            $num-=600;
            $ar[]='D';
            $ar[]='C';
           
            continue;}

        if($num-800<0){
            $num-=700;
            $ar[]='D';
            $ar[]='C';
            $ar[]='C';
           
            continue;}

        if($num-900<0){
            $num-=800;
            $ar[]='D';
            $ar[]='C';
            $ar[]='C';
            $ar[]='C';
           
            continue;}

        if($num-1000<0){
            $num-=900;
            $ar[]='C';
            $ar[]='M';
           
            continue;}

        if($num-2000<0){
            $num-=1000;
            $ar[]='M';
           
            continue;}

        if($num-3000<0){
            $num-=2000;
            $ar[]='M';
            $ar[]='M';
           
            continue;}

        if($num-4000<0){
            $num-=3000;
            $ar[]='M';
            $ar[]='M';
            $ar[]='M';
           
            continue;}

        if($num-5000<0){
            $num-=4000;
            $ar[]='I';
            $ar[]='V';
            $ar[]='m';
           
            continue;}

        if($num-6000<0){
            $num-=5000;
            $ar[]='V';
            $ar[]='m';
           
            continue;}

        if($num-7000<0){
            $num-=6000;
            $ar[]='V';
            $ar[]='I';
            $ar[]='m';
           
            continue;}

        if($num-8000<0){
            $num-=7000;
            $ar[]='V';
            $ar[]='I';
            $ar[]='I';
            $ar[]='m';
           
            continue;}

        if($num-9000<0){
            $num-=8000;
            $ar[]='V';
            $ar[]='I';
            $ar[]='I';
            $ar[]='I';
            $ar[]='m';
           
            continue;}

        if($num-10000<0){
            $num-=9000;
            $ar[]='I';
            $ar[]='X';
            $ar[]='m';
            continue;}
        else{
            $ar[]='X';
            $ar[]='m';
            }
        }

    $s = implode($ar);

    return $s;
    }

}

$n = new convert;

$n->convertir(144);
