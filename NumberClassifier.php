<?php
echo "Enter a Number to Check the Number Whether it's Negative or Positive: " ;

$givenValuefromUser = (int) readline();


if(0>$givenValuefromUser) {
echo "The nuber is Negative" ;

} elseif(0<$givenValuefromUser){
    echo "The nuber is Positive" ;
}else {
    echo "The Number is Zero" ;
}