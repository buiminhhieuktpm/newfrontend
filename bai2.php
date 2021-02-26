<?php
function letterChange($string){
    for($i=0;$i<strlen($string);$i++){
        $x = 0;

        $x = ord(substr($string,$i)) ;
        if(($x>=65&&$x<=90) || ($x>=97&&$x<=122) ){
            $x+=1;
        }
        if($x==97||$x==101||$x==111||$x==117||$x==105){
            $x-=32;
        }
        $y[] = array(chr($x));  
    }
    return $y;
}
echo letterChange("hello*3");
?>