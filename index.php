<!--boolean-->
<!--true==1;//true-->
<!--false==0//false-->
<!--""==false-->
<!--" "==true-->

<!--oject-->
<!--$obj=new a;-->
<!--$obj->color='red';-->
<!--echo $obj->color;-->

<!--isser, unset//удаление переменной-->
<!--$var=[];-->
<!--if(isset($var)){//isser усть ли переменная-->
<!--    echo "ok";-->
<!--} else{-->
<!--    echo "not";-->
<!--}-->
<?php
//$var=12; //gettype узнать тип данных
//echo gettype($var);
//$var =["or","gre"];
//echo "<pre>";//аккуратный вывод массива
//    print_r($var);
//echo "</pre>";

//комбинированные операторы
//$n = 6;
//$n += 1; // 1 прибавить к $n
//echo "$n"
//$message = "Hello";
//$message .= "world!"; // Hello world!
//echo "$message";
//?>
<!--//zadanie1-->
<?php
 $elem1=10;
 $elem2=2;
     echo $elem1+$elem2 . "<br>";
     echo $elem1-$elem2 . "<br>";
     echo $elem1*$elem2 . "<br>";
     echo $elem1/$elem2 . "<br>";
?>
<!--zadanie2-->

<?php
    $a=25;
    $b=70;
    $c=100;
    if(($a>26 && $a<$b) || $a=25 || $c==100 || $b==70 ){
        echo "OK";
    }

?>