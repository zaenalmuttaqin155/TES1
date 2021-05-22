<?php 



        for ($a = 0; $a < 9; $a++){
            for ($b =0; $b <5; $b ++){
                echo 'abc';
                if ( $a == $b){
                   break;
                }else if( ($a+$b) == 8)
                    break;

            }
            echo "<br>";

        }





 ?>