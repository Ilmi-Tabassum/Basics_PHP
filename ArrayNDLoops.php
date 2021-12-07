<?php

//index Array

$names = array("ilmi","tabassum","shorna");
sort($names);

$nlen = count($names);
for($x=0;$x<$nlen;$x++){
    echo "Sort Array : ";
    echo $names[$x];
}
echo "<br>";
echo "<hr/>";
//Index Array
echo "Full Name :" .$names[0] . "  " .$names[1] . "  ".$names[2]. "<hr/>";

echo "total length : ";
echo count($names);


//Loop Through an Indexed Array
$colours = array("Blue","Green");
$arrlength = count($colours);
echo "<br>";
print("length of colours arrays $arrlength" );
echo "<br>";
for($x=0;$x<$arrlength;$x++) {
    echo "<hr/>";
    echo "Colours Name : ";

    echo $colours[$x];
    echo "<br>";
}

//Associative Array:

$scores= array("Ilmi"=>"90", "hjhj"=>"70", "tyui"=>"80");
echo "ilmi scored : " .$scores['Ilmi']. "/100";
echo "<br>";
echo "ilmi scored : " .$scores['hjhj']. "/100";
echo "<br>";
echo "ilmi scored : " .$scores['tyui']. "/100";


//Loop Through an Associative Array:
echo"<hr/>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo"<hr/>";

$relations = array("sam"=>"brother","asd"=>"sis","qwer"=>"wife");
echo"<hr/>";

foreach ($relations as $str =>$str_value){
    echo "Members=" .$str . ", relations=" .$str_value;
    echo "<br>";
}
echo"<hr/>";

$positions = array("sam"=>"intern","asd"=>"docter","qwer"=>"engineer");

foreach ($positions as $str =>$str_value){
    echo "Members=" .$str . ", positions=" .$str_value;
    echo "<br>";
}

echo"<hr/>";

foreach  ($age as $x => $y) {
    echo "Key=" . $x . ", Value=" . $y. ",";
}
echo"<hr/>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Ben is " .$age['Ben']. " years old.<br> ";
echo "Peter is " .$age['Peter']. " years old. <br>";
echo "Joe is " .$age['Joe']. " years old.";

echo"<hr/>";

echo " Multi-Dimensional Array!!";
echo "<br>";
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

echo"<hr/>";

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row </b></p>";


    for ($col = 0; $col < 3; $col++) {
        echo "<li> ".$cars[$row][$col]."</li>";
    }

}

echo"<hr/>";

$games = array (
    array("Play_Stations",22,18),
    array("laptops",15,13),
    array("mobiles",5,2),
    array("Computers",17,15)
);

echo $games[0][0].": Total Games: ".$games[0][1].", Completed: ".$games[0][2].".<br>";
echo $games[1][0].": Total Games: ".$games[1][1].", Completed: ".$games[1][2].".<br>";
echo $games[2][0].": Total Games: ".$games[2][1].", Completed: ".$games[2][2].".<br>";
echo $games[3][0].": Total Games: ".$games[3][1].", Completed: ".$games[3][2].".<br>";

echo"<hr/>";
$blogs = [
    ['title'=>'rrvv','author'=>'ytre899','content'=>'trew','likes'=>'2022'],
    ['title'=>'rrvv','author'=>'ytre','content'=>'trew','likes'=>'2012'],
    ['title'=>'rrvv','author'=>'ytre','content'=>'trew','likes'=>'1234'],
    ['title'=>'rrvv','author'=>'ytre','content'=>'trew','likes'=>'1235'],
    ];


echo "title : ", $blogs[0]['title'], " , ", "author :", $blogs[0]['author'],", " ,"content :" , $blogs[0]['content'], ", " ,"likes :", $blogs[1]['likes'];

echo"<hr/>";
$tscore = array("John"=>"60","Bill"=>"100","Dan"=>75);
krsort($tscore);

foreach ($tscore as $x => $x_value){
    echo "<br>";
    echo "keys : " .$x. ", ","values : " .$x_value;
}
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
//echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];