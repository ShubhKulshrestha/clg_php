function fact($a){
    if($a==0 || $a==1){
        return 1;
    }
    else{
        return $a*fact($a-1);
    }
} 
$b=5;
echo fact($b);
