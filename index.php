
  <?php 
  $color="red";
  EcHo "my car is $color <br>";
  echo "Hiiii",25,"turing"."<br>";
   $color=6+4;
  ecHo "my car is $color <br>";
  session_start();
  unset($_SESSION["sessions"]) ;
  $age=25;
  echo "the age is ".$age ," ".(1+1).true;
  function mytest(){
    global $age;
    $age=100;
    static $ageNum=5;
    echo "the value is". $age+1;
    echo "the color is". $GLOBALS['color'];
    echo "the value is". $age;
    echo "the AgeNumvalue is". $ageNum+6 ."<br>";
  }
  mytest();
  function mytesting(){
   static $val=0;
   $val=$val+1;
   echo "$val"."<br>";

  }
  mytesting();
  mytesting();
  mytesting();
  $v=print("");
  echo "$v"
 
?>


