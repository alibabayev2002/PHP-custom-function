<?php 


    function explode__($search,$string){
        $array = [];
        $index = [];
        for($i = 0 ; $i < strlen($string) ; $i++){
            $bool = true;
            for($j = 0; $j < strlen($search) ; $j++){
                if($string[$i + $j] != $search[$j]){
                    $bool = false;
                    break;
                }
            }
            if($bool){
                $index[] = $i;
    
            }
            
        }
        $k = 0;
        for($l = 0; $l < count($index) ; $l++){
            if($k!=0){
                $k+=strlen($search);
            }
            $array[] = substr($string,$k,$index[$l]-$k);
    
            $k = $index[$l];
            // echo substr($string,$k,$index[$l])."<br>";
            if(count($index)-1==$l){
                $array[] = substr($string,$index[$l]+strlen($search),strlen($string));
            }
        }
    return !empty($array) ? $array : (array)$string;
    }
    
    print_r(explode__(",","Hello , world!"));




?>
