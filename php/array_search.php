
   <?php
    function search($array,$element){
        for($i=0;$i<3;++$i){
            if($array[$i]==$element){
                return true;
            }
        }
        return false;
    }


    $arr = array('red','green','blue');


    echo 'red is '.(search($arr,'red')?'':'not ').'found in array<br>';
    echo 'green is '.(search($arr,'green')?'':'not ').'found in array<br>';
    echo 'blue is '.(search($arr,'blue')?'':'not ').'found in array<br>';


?>
