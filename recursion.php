function myfunction($i){
while($i<5){
  echo "hello\n";
  myfunction($i+1);
  }
} 
  myfunction(0);
