<?php 
    function explode__($search,$string){
        $array = [];
        $index = [];
        $string =  $string.$search;
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

            $array[] = substr($string,$k,$index[$l]-$k);
            $k = $index[$l];
            $k+=strlen($search);

        }

    return $array;
    }
    

    print_r(explode("a","alma,armud,heyva"));
    echo "<br>";
    print_r(explode__("a","alma,armud,heyva"));
?>
