<!-- PHP Assignment Module-3 (Core PHP) -->

<!-- Write a program to find whether a number is Armstrong or not  -->


<form action="">
    <label for="">Enter any Number to Check it Armstrong or Not : </label>
    <input type="text" name="num">
    <input type="submit" name="check" value="Check">
</form>

<?php

if(isset($_REQUEST['check'])){
    $n=$_REQUEST['num'];
    $temp=$n;
    $sum=0;

    while($n>0){
        $r=$n%10;
        $sum+=($r*$r*$r);
        $n/=10;
    }
    if($temp==$sum){
        echo "$temp is a armstrong Number.";
    }else{
        echo "$temp is not a armstrong Number.";
    }
}
?>