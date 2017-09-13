<?php

namespace Ejemplo;

use PHPUnit\Framework\TestCase;

class convertidor{

	public function convertir($x){
		$i = $x;
		$p = array();

	while($i>0){

	    if($i/1==1){
	        $p[]='I';
	        
	        break;
	    }

	    if($i/2<1){
	        $i-=1;
	        $p[]='I';
	        
	        continue;
	    }

	    if($i/3<1){
	        $i-=2;
	        $p[]='I';
	        $p[]='I';
	        
	        continue;
	    }

	    if($i/4<1){
	        $i-=3;
	        $p[]='I';
	        $p[]='I';
	        $p[]='I';
	        
	        continue;
	    }

	    if($i/5<1){
	        $i-=4;
	        $p[]='I';
	        $p[]='V';
	        
	        continue;
	    }

	    if($i/6<1){
	        $i-=5;
	        $p[]='V';
	        
	        continue;
	    }

	    if($i/7<1){
	        $i-=6;
	        $p[]='V';
	        $p[]='I';
	        
	        continue;
	    }

	    if($i/8<1){
	        $i-=7;
	        $p[]='V';
	        $p[]='I';
	        $p[]='I';
	        
	        continue;
	    }

	    if($i/9<1){
	        $i-=8;
	        $p[]='V';
	        $p[]='I';
	        $p[]='I';
	        $p[]='I';
	        
	        continue;
	    }

	    if($i/10<1){
	        $i-=9;
	        $p[]='I';
	        $p[]='X';
	        
	        continue;
	        }

	    if($i/20<1){
	        $i-=10;
	        $p[]='X';
	        
	        continue;}

	    if($i/30<1){
	        $i-=20;
	        $p[]='X';
	        $p[]='X';
	        
	        continue;}

	    if($i/40<1){
	        $i-=30;
	        $p[]='X';
	        $p[]='X';
	        $p[]='X';
	        
	        continue;}

	    if($i/50<1){
	        $i-=40;
	        $p[]='X';
	        $p[]='L';
	        
	        continue;}

	    if($i/60<1){
	        $i-=50;
	        $p[]='L';
	        
	        continue;}

	    if($i/70<1){
	        $i-=60;
	        $p[]='L';
	        $p[]='X';
	        
	        continue;}

	    if($i/80<1){
	        $i-=70;
	        $p[]='L';
	        $p[]='X';
	        $p[]='X';
	        
	        continue;}

	    if($i/90<1){
	        $i-=80;
	        $p[]='L';
	        $p[]='X';
	        $p[]='X';
	        $p[]='X';
	        
	        continue;}

	    if($i/100<1){
	        $i-=90;
	        $p[]='X';
	        $p[]='C';
	        
	        continue;}

	    if($i/200<1){
	        $i-=100;
	        $p[]='C';
	        
	        continue;}

	    if($i/300<1){
	        $i-=200;
	        $p[]='C';
	        $p[]='C';
	        
	        continue;}

	    if($i/400<1){
	        $i-=300;
	        $p[]='C';
	        $p[]='C';
	        $p[]='C';
	        
	        continue;}

	    if($i/500<1){
	        $i-=400;
	        $p[]='C';
	        $p[]='D';
	        
	        continue;}

	    if($i/600<1){
	        $i-=500;
	        $p[]='D';
	        
	        continue;
	        }

	    if($i/700<1){
	        $i-=600;
	        $p[]='D';
	        $p[]='C';
	        
	        continue;}

	    if($i/800<1){
	        $i-=700;
	        $p[]='D';
	        $p[]='C';
	        $p[]='C';
	        
	        continue;}

	    if($i/900<1){
	        $i-=800;
	        $p[]='D';
	        $p[]='C';
	        $p[]='C';
	        $p[]='C';
	        
	        continue;}

	    if($i/1000<1){
	        $i-=900;
	        $p[]='C';
	        $p[]='M';
	        
	        continue;}

	    if($i/2000<1){
	        $i-=1000;
	        $p[]='M';
	        
	        continue;}

	    if($i/3000<1){
	        $i-=2000;
	        $p[]='M';
	        $p[]='M';
	        
	        continue;}

	    if($i/4000<1){
	        $i-=3000;
	        $p[]='M';
	        $p[]='M';
	        $p[]='M';
	        
	        continue;}

	    if($i/5000<1){
	        $i-=4000;
	        $p[]='I';
	        $p[]='V';
	        $p[]='m';
	        
	        continue;}

	    if($i/6000<1){
	        $i-=5000;
	        $p[]='V';
	        $p[]='m';
	        
	        continue;}

	    if($i/7000<1){
	        $i-=6000;
	        $p[]='V';
	        $p[]='I';
	        $p[]='m';
	        
	        continue;}

	    if($i/8000<1){
	        $i-=7000;
	        $p[]='V';
	        $p[]='I';
	        $p[]='I';
	        $p[]='m';
	        
	        continue;}

	    if($i/9000<1){
	        $i-=8000;
	        $p[]='V';
	        $p[]='I';
	        $p[]='I';
	        $p[]='I';
	        $p[]='m';
	        
	        continue;}

	    if($i/10000<1){
	        $i-=9000;
	        $p[]='I';
	        $p[]='X';
	        $p[]='m';
	        continue;}
	    else{
	        $p[]='X';
	        $p[]='m';
	        }
		}

	$s = implode($p);

	return $s;
	}

}

$a = new convertidor;

$a->convertir(144);
