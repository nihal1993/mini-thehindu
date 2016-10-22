<?php
$page9='international';
$page8=' Opinion';
$page7= 'National';
$page6= 'Sports';
$page5= 'mumbai';
$page4='Delhi';
$page2='chennai';
$page1='Buisness';
$page='Home'  ;
$site='The.News';
?>
<?php
// connection with database
$db = mysqli_connect("localhost","root","nihalj12","dynamic");
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);}




    // comment box php coding








// national top  to bottom article
    $n1 = "SELECT * FROM articles ORDER BY datetime desC limit 1";
    $result = mysqli_query($db,$n1);
    $naa1=mysqli_fetch_assoc($result);

    $n2 = "SELECT * FROM articles ORDER BY datetime desC limit 1 offset 1";
    $result = mysqli_query($db,$n2);
    $naa2=mysqli_fetch_assoc($result);

    $n3 = "SELECT * FROM articles ORDER BY datetime desC limit 1 offset 2";
    $result = mysqli_query($db,$n3);
    $naa3=mysqli_fetch_assoc($result);

    $n4 = "SELECT * FROM articles ORDER BY datetime desC limit 1 offset 3";
    $result = mysqli_query($db,$n4);
    $naa4=mysqli_fetch_assoc($result);

    $n5 = "SELECT * FROM articles ORDER BY datetime desC limit 1 offfset 4";
    $result = mysqli_query($db,$n5);
    $naa5=mysqli_fetch_assoc($result);

    $n6 = "SELECT * FROM articles ORDER BY datetime desC limit 1 offset 5";
    $result = mysqli_query($db,$n6);
    $naa6=mysqli_fetch_assoc($result);

    $n7 = "SELECT * FROM articles ORDER BY datetime desC limit 1 offset 6";
    $result = mysqli_query($db,$n7);
    $naa7=mysqli_fetch_assoc($result);

    $n8 = "SELECT * FROM articles ORDER BY datetime desC limit 1 offset 7";
    $result = mysqli_query($db,$n8);
    $naa8=mysqli_fetch_assoc($result);

    $n9 = "SELECT * FROM articles ORDER BY datetime desC limit 1 offset 8";
    $result = mysqli_query($db,$n9);
    $naa9=mysqli_fetch_assoc($result);

    $n10 = "SELECT * FROM articles ORDER BY datetime desC limit 1 offset 9";
    $result = mysqli_query($db,$n10);
    $naa10=mysqli_fetch_assoc($result);





// international top  to bottom article
$in1 = "SELECT * FROM inter ORDER BY datetime desC limit 1";
$result = mysqli_query($db,$in1);
$inaa1=mysqli_fetch_assoc($result);

$in2 = "SELECT * FROM inter ORDER BY datetime desC limit 1 offset 1";
$result = mysqli_query($db,$in2);
$inaa2 = mysqli_fetch_assoc($result);

$in3 = "SELECT * FROM inter ORDER BY datetime desC limit 1 offset 2";
$result = mysqli_query($db,$in3);
$inaa3=mysqli_fetch_assoc($result);

$in4 = "SELECT * FROM inter ORDER BY datetime desC limit 1 offset 3";
$result = mysqli_query($db,$in4);
$inaa4=mysqli_fetch_assoc($result);

$in5 = "SELECT * FROM inter ORDER BY datetime desC limit 1 offset 4";
$result = mysqli_query($db,$in5);
$inaa5=mysqli_fetch_assoc($result);

$in6 = "SELECT * FROM inter ORDER BY datetime desC limit 1 offset 5";
$result = mysqli_query($db,$in6);
$inaa6=mysqli_fetch_assoc($result);

$in7 = "SELECT * FROM inter ORDER BY datetime desC limit 1 offset 6";
$result = mysqli_query($db,$in7);
$inaa7=mysqli_fetch_assoc($result);

$in8 = "SELECT * FROM inter ORDER BY datetime desC limit 1 offset 7";
$result = mysqli_query($db,$in8);
$inaa8=mysqli_fetch_assoc($result);

$in9 = "SELECT * FROM inter ORDER BY datetime desC limit 1 offset 8";
$result = mysqli_query($db,$in9);
$inaa9=mysqli_fetch_assoc($result);

$in10 = "SELECT * FROM inter ORDER BY datetime desC limit 1 offset 9";
$result = mysqli_query($db,$in10);
$inaa10=mysqli_fetch_assoc($result);


// headline sports
// national top  to bottom article
$s1 = "SELECT * FROM sports ORDER BY datetime desC limit 1";
$result = mysqli_query($db,$s1);
$sop1=mysqli_fetch_assoc($result);

$s2 = "SELECT * FROM sports ORDER BY datetime desC limit 1 offset 1";
$result = mysqli_query($db,$s2);
$sop2=mysqli_fetch_assoc($result);

$s3 = "SELECT * FROM sports ORDER BY datetime desC limit 1 offset 2";
$result = mysqli_query($db,$s3);
$sop3=mysqli_fetch_assoc($result);

$s4 = "SELECT * FROM sports ORDER BY datetime desC limit 1 offset 3";
$result = mysqli_query($db,$s4);
$sop4=mysqli_fetch_assoc($result);

$s5 = "SELECT * FROM sports ORDER BY datetime desC limit 1 offfset 4";
$result = mysqli_query($db,$s5);
$sop5=mysqli_fetch_assoc($result);

$s6 = "SELECT * FROM sports ORDER BY datetime desC limit 1 offset 5";
$result = mysqli_query($db,$s6);
$sop6=mysqli_fetch_assoc($result);

$s7 = "SELECT * FROM sports ORDER BY datetime desC limit 1 offset 6";
$result = mysqli_query($db,$s7);
$sop7=mysqli_fetch_assoc($result);

$s8 = "SELECT * FROM sports ORDER BY datetime desC limit 1 offset 7";
$result = mysqli_query($db,$s8);
$sop8=mysqli_fetch_assoc($result);

$s9 = "SELECT * FROM sports ORDER BY datetime desC limit 1 offset 8";
$result = mysqli_query($db,$s9);
$sop9=mysqli_fetch_assoc($result);

$s10 = "SELECT * FROM sports ORDER BY datetime desC limit 1 offset 9";
$result = mysqli_query($db,$s10);
$sop10=mysqli_fetch_assoc($result);


// opinion top to bottom

$o1 = "SELECT * FROM opinion ORDER BY datetime desC limit 1";
$result = mysqli_query($db,$o1);
$opp1=mysqli_fetch_assoc($result);

$o2 = "SELECT * FROM opinion ORDER BY datetime desC limit 1 offset 1";
$result = mysqli_query($db,$o2);
$opp2=mysqli_fetch_assoc($result);

$o3 = "SELECT * FROM opinion ORDER BY datetime desC limit 1 offset 2";
$result = mysqli_query($db,$o3);
$opp3=mysqli_fetch_assoc($result);

$o4 = "SELECT * FROM opinion ORDER BY datetime desC limit 1 offset 3";
$result = mysqli_query($db,$o4);
$opp4=mysqli_fetch_assoc($result);

$o5 = "SELECT * FROM opinion ORDER BY datetime desC limit 1 offset 4";
$result = mysqli_query($db,$o5);
$opp5=mysqli_fetch_assoc($result);

$o6 = "SELECT * FROM opinion ORDER BY datetime desC limit 1 offset 5";
$result = mysqli_query($db,$o6);
$opp6=mysqli_fetch_assoc($result);

$o7 = "SELECT * FROM opinion ORDER BY datetime desC limit 1 offset 6";
$result = mysqli_query($db,$o7);
$opp7=mysqli_fetch_assoc($result);

$o8 = "SELECT * FROM opinion ORDER BY datetime desC limit 1 offset 7";
$result = mysqli_query($db,$o8);
$opp8=mysqli_fetch_assoc($result);

$o9 = "SELECT * FROM opinion ORDER BY datetime desC limit 1 offset 8";
$result = mysqli_query($db,$o9);
$opp9=mysqli_fetch_assoc($result);

$o10 = "SELECT * FROM opinion ORDER BY datetime desC limit 1 offset 9";
$result = mysqli_query($db,$o10);
$opp10=mysqli_fetch_assoc($result);

// top to bottom buisness
$b1 = "SELECT * FROM buisness ORDER BY datetime desC limit 1";
$result = mysqli_query($db,$b1);
$buu1=mysqli_fetch_assoc($result);

$b2 = "SELECT * FROM buisness ORDER BY datetime desC limit 1 offset 1";
$result = mysqli_query($db,$b2);
$buu2=mysqli_fetch_assoc($result);

$b3 = "SELECT * FROM buisness ORDER BY datetime desC limit 1 offset 2";
$result = mysqli_query($db,$b3);
$buu3=mysqli_fetch_assoc($result);

$b4 = "SELECT * FROM buisness ORDER BY datetime desC limit 1 offset 3";
$result = mysqli_query($db,$b4);
$buu4=mysqli_fetch_assoc($result);

$b5 = "SELECT * FROM buisness ORDER BY datetime desC limit 1 offfset 4";
$result = mysqli_query($db,$b5);
$buu5=mysqli_fetch_assoc($result);

$b6 = "SELECT * FROM buisness ORDER BY datetime desC limit 1 offset 5";
$result = mysqli_query($db,$b6);
$buu6=mysqli_fetch_assoc($result);

$b7 = "SELECT * FROM buisness ORDER BY datetime desC limit 1 offset 6";
$result = mysqli_query($db,$b7);
$buu7=mysqli_fetch_assoc($result);

$b8 = "SELECT * FROM buisness ORDER BY datetime desC limit 1 offset 7";
$result = mysqli_query($db,$b8);
$buu8=mysqli_fetch_assoc($result);

$b9 = "SELECT * FROM buisness ORDER BY datetime desC limit 1 offset 8";
$result = mysqli_query($db,$b9);
$buu9=mysqli_fetch_assoc($result);

$b10 = "SELECT * FROM buisness ORDER BY datetime desC limit 1 offset 9";
$result = mysqli_query($db,$b10);
$buu10=mysqli_fetch_assoc($result);


// top to bottom bangalore
$ban1 = "SELECT * FROM bangalore ORDER BY datetime desC limit 1";
$result = mysqli_query($db,$ban1);
$baba1=mysqli_fetch_assoc($result);

$ban2 = "SELECT * FROM bangalore ORDER BY datetime desC limit 1 offset 1";
$result = mysqli_query($db,$ban2);
$baba2=mysqli_fetch_assoc($result);

$ban3 = "SELECT * FROM bangalore ORDER BY datetime desC limit 1 offset 2";
$result = mysqli_query($db,$ban3);
$baba3=mysqli_fetch_assoc($result);

$ban4 = "SELECT * FROM bangalore ORDER BY datetime desC limit 1 offset 3";
$result = mysqli_query($db,$ban4);
$baba4=mysqli_fetch_assoc($result);

$ban5 = "SELECT * FROM bangalore ORDER BY datetime desC limit 1 offset 4";
$result = mysqli_query($db,$ban5);
$baba5=mysqli_fetch_assoc($result);


// top to bottom chennai
$ch1 = "SELECT * FROM chennai ORDER BY datetime desC limit 1";
$result = mysqli_query($db,$ch1);
$chee1=mysqli_fetch_assoc($result);

$ch2 = "SELECT * FROM chennai ORDER BY datetime desC limit 1 offset 1";
$result = mysqli_query($db,$ch2);
$chee2=mysqli_fetch_assoc($result);

$ch3 = "SELECT * FROM chennai ORDER BY datetime desC limit 1 offset 2";
$result = mysqli_query($db,$ch3);
$chee3=mysqli_fetch_assoc($result);

$ch4 = "SELECT * FROM chennai ORDER BY datetime desC limit 1 offset 3";
$result = mysqli_query($db,$ch4);
$chee4=mysqli_fetch_assoc($result);

$ch5 = "SELECT * FROM chennai ORDER BY datetime desC limit 1 offset 4";
$result = mysqli_query($db,$ch5);
$chee5=mysqli_fetch_assoc($result);


// top to bottom kolkata
$k1 = "SELECT * FROM kolkata ORDER BY datetime desC limit 1";
$result = mysqli_query($db,$k1);
$koo1=mysqli_fetch_assoc($result);

$k2 = "SELECT * FROM kolkata ORDER BY datetime desC limit 1 offset 1";
$result = mysqli_query($db,$k2);
$koo2=mysqli_fetch_assoc($result);

$k3 = "SELECT * FROM kolkata ORDER BY datetime desC limit 1 offset 2";
$result = mysqli_query($db,$k3);
$koo3=mysqli_fetch_assoc($result);

$k4 = "SELECT * FROM kolkata ORDER BY datetime desC limit 1 offset 3";
$result = mysqli_query($db,$k4);
$koo4=mysqli_fetch_assoc($result);

$k5 = "SELECT * FROM kolkata ORDER BY datetime desC limit 1 offset 4";
$result = mysqli_query($db,$k5);
$koo5=mysqli_fetch_assoc($result);



// top to bottom mumbai
$m1 = "SELECT * FROM mumbai ORDER BY datetime desC limit 1";
$result = mysqli_query($db,$m1);
$muu1=mysqli_fetch_assoc($result);

$m2 = "SELECT * FROM mumbai ORDER BY datetime desC limit 1 offset 1";
$result = mysqli_query($db,$m2);
$muu2=mysqli_fetch_assoc($result);

$m3 = "SELECT * FROM mumbai ORDER BY datetime desC limit 1 offset 2";
$result = mysqli_query($db,$m3);
$muu3=mysqli_fetch_assoc($result);

$m4 = "SELECT * FROM mumbai ORDER BY datetime desC limit 1 offset 3";
$result = mysqli_query($db,$m4);
$muu4=mysqli_fetch_assoc($result);

$m5 = "SELECT * FROM mumbai ORDER BY datetime desC limit 1 offset 4";
$result = mysqli_query($db,$m5);
$muu5=mysqli_fetch_assoc($result);

// top to bottom delhi

$d1 = "SELECT * FROM delhi ORDER BY datetime desC limit 1";
$result = mysqli_query($db,$d1);
$die1=mysqli_fetch_assoc($result);

$d2 = "SELECT * FROM delhi ORDER BY datetime desC limit 1 offset 1";
$result = mysqli_query($db,$d2);
$die2=mysqli_fetch_assoc($result);

$d3 = "SELECT * FROM delhi ORDER BY datetime desC limit 1 offset 2";
$result = mysqli_query($db,$d3);
$die3=mysqli_fetch_assoc($result);

$d4 = "SELECT * FROM delhi ORDER BY datetime desC limit 1 offset 3";
$result = mysqli_query($db,$d4);
$die4=mysqli_fetch_assoc($result);

$d5 = "SELECT * FROM delhi ORDER BY datetime desC limit 1 offset 4";
$result = mysqli_query($db,$d5);
$die5=mysqli_fetch_assoc($result);









?>