<?php
session_start();
include("/home/nihal/practice/projects/school/php/Dconnect.php");

$id = $_GET['id'];

$k1 = "SELECT * FROM kolkata where id = $id";
$result = mysqli_query($db,$k1);
$ko1=mysqli_fetch_assoc($result);

if($id == 1)
{
    $back=' first.php?id=5';
    $front=' first.php?id=2 ';
    $action='first.php?id=1';
}

if($_GET['id'] == 2 )
{
    $back=' first.php?id=1';
    $front=' first.php?id=3 ';
    $action='first.php?id=2';
}
if($_GET['id'] == 3)
{
    $back=' first.php?id=2';
    $front=' first.php?id=4 ';
    $action='first.php?id=3';
}
if($_GET['id'] == 4)
{
    $back=' first.php?id=3';
    $front=' first.php?id=5 ';
    $action='first.php?id=4';
}
if($_GET['id'] == 5)
{
    $back=' first.php?id=4';
    $front=' first.php?id=1 ';
    $action='first.php?id=4';
}



?>


<!Doctype HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title><?php echo $page.'|'.$site; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include('/home/nihal/practice/projects/school/php/css.php');?>
    <?php include('/home/nihal/practice/projects/school/php/js.php');?>

</head>
<body>
<div class="container-fluid" ><!--main class-->

<div class="container-fluid" >

    <div class="contianer">

        <div style="padding-top: 2px; margin-left:10%;  ">
            <img src="jjj.png" class="img-responsive " style="display:inline;"  >

        </div> <!-- containing logo image-->
        <?php include('/home/nihal/practice/projects/school/php/header.php')?>

    </div><!-- this the continer class which is under container fluid containing nav and logo-->


</div> <!-- second container fluid for nav bar and logo-->

<!-- body-->
<div class="container-fluid " ><!--body main-->
<div class="row">
    <div class="col-md-1" style=" " >
    </div>
    <div class="col-md-7" style=" " >
        <div class="container-fluid " style="text-align: center">

            <!--main body-->
            <hr>
            <div class="collapse navbar-collapse" >
                <ul style="padding-left:50px;padding-right: 50px; ">
                    <li class="nav navbar-left" style="font-size :15px ; font-family:courier;font-weight: bold; "><a href="/php/index.php"> Home /</a></li>
                    <li class="nav navbar-left" style="font-size :15px ; font-family:courier;font-weight: bold; "><a href="main.php">/kokata news -</a></li>

                    <li class="nav navbar-right"> Date/ <?php echo( date("Y/m/d"))?>/ </li>


                </ul>
            </div>
            <hr>


            <div class="panel panel-default">
                <div class="panel-body" style="text-align: justify;text-justify: inter-cluster;">



                    <h2 style="text-align: left;padding:5px;color:lightslategrey; " > <?php echo($ko1['header']); ?>  </h2>
                    <hr>
                    <img src="<?php echo($ko1['images']); ?> " class="img-responsive" style="width:600px;height:400px;padding:50px; ">

                    <hr>
                    <div style="text-align: justify;text-justify: inter-word;">
                        <h4 style="text-align:left;padding-left:50px;padding-right:50px;color: darkgrey;   ">
                            <?php echo($ko1['fewline']); ?>
                        </h4>


                        <p style="padding-left:50px;padding-right:50px;font-size:15px;color: black;   ">
                            <?php echo($ko1['body']); ?>
                        </p>

                    </div>
                    <!--pager-->
                    <nav aria-label="...">
                        <ul class="pager">
                            <li class="previous"><a href="<?php echo($back); ?>"><span aria-hidden="true">&larr;</span> Older</a></li>
                            <li class="next"><a href="<?php echo($front ); ?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
                        </ul>
                    </nav>

                    <!--main body-->
                </div>
            </div>

            <!--comment section-->
            <div class="panel panel-default">
                <div class="panel-body" style="text-align: justify;text-justify: inter-cluster;">

                    <h3> Comments</h3>


                    <form class="form-horizontal" method="post" action="<?php echo($action); ?>" style="padding: 30px;">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" style="min-width: 40%;" name="username" placeholder=" username">
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <textarea class="form-control" name="comment" rows="3" placeholder=" write a comment here ..." style="min-width: 100%;"></textarea>

                        </div>
                        <button type="submit" class="btn btn-default" name="register"> press here </button>



                        <p>   <?php  if (isset($_POST['register']))
                            {
                                $user= $_POST['username'];
                                $com=$_POST['comment'];

                                if($com!=null and $user!=null )
                                {
                                    $sql = "insert into connec(name,comment) values('$user','$com') ";
                                    mysqli_query($db,$sql);
                                }
                                else
                                {
                                    echo('please fill the comment box');
                                }

                            }     ?>
                        </p>




                    </form>

                    <?php
                    $com_var=" select * from connec order by id desc";
                    $result = mysqli_query($db,$com_var);

                    while($answer=mysqli_fetch_assoc($result))
                    {
                    $idi = $answer['id'];
                    $saras = $answer['name'];
                    $sara = $answer['comment'];  ?>
                    <ul>
                        <div  class="list-group" " style="text-align: justify;text-justify: inter-cluster;">
                        <li class="list-group-item">
                            <strong style="margin-left: 5px;color:steelblue;font-family:bold;"> <?php echo $saras; ?>   </strong>
                            <br />
                            <em style="margin-left:10px;color:black "> <?php echo $sara; ?>  </em>
                        </li>
                </div>
                </ul>
                <?php   }
                ?>









            </div>
        </div>
        <!--comment section -->

    </div>
</div>

<div class="col-md-4" style=" " >
<!-- collapse list start here-->

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"
     style="padding-top:200px;padding-right:40px;padding-left:20px;   ">
<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion"
               href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                kolkata News
            </a>
        </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            <div >
                <nav style="font-size: 15px;" >
                    <ul class="nav navbar nav-stacked" >
                        <li><a href="first.php?id=5"><?php echo($koo1['header']); ?></a></li>
                        <hr>
                        <li><a href="first.php?id=4 "><?php echo($koo2['header']); ?></a></li>
                        <hr>
                        <li><a href="first.php?id=3 "><?php echo($koo3['header']); ?></a></li>
                        <hr>
                        <li><a href="first.php?id=2 "><?php echo($koo4['header']); ?> </a></li>
                        <hr>
                        <li><a href="first.php?id=1 "> <?php echo($koo5['header']); ?></a></li>





                    </ul>
                </nav>



            </div>



        </div>
    </div>
</div>



</div>






</div>
















</div>
</div>
<div class="footer" style="text-align:center ;   ">
    <p style="color:slategrey;font-size: 15px;font-weight: bold;padding: 5px" >..THE NEWS: 2016..</p> </div>
</div>
</div>
</body>








