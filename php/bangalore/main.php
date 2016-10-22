<?php
session_start();
include("/home/nihal/practice/projects/school/php/Dconnect.php");
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
    <div class="container-fluid " style="text-align: center"><!--body main-->
        <div class="row">
            <div class="col-md-2" style=" " >
            </div>
            <div class="col-md-8" style=" " >

                <!-- main body-->
                <div class="container-fluid " style="text-align: center">
                    <div class="panel panel-default">

                        <div class="panel-body" style="text-align: justify;text-justify: inter-cluster;">
                            <p style="text-align: right;font-size:15px;color:steelblue;  "><?php echo( date("Y/m/d"))?></p>
                            <h3 style="text-align:left;color: slategrey">Bangalore news <i class="fa fa-newspaper-o" aria-hidden="true"></i></h3>

                            <hr>
                            <ul class="media-list">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="<?php echo($baba1['images']); ?> " class="media-object  " style="width:500px;height:400px;">
                                    </div>
                                    <div class="media-body" style="text-align: left;padding: 10px; ">
                                        <h3 class="media-heading"><a href="first.php?id=5"> <?php echo($baba1['header']); ?></a></h3>
                                        <p><?php echo($baba1['fewline']); ?> </p>
                                    </div>
                                </div>

                            </ul>
                            <hr>


                            <div class="row" style="padding-top:100px; ">
                                <div class="col-md-10" style="">
                                    <ul class="media-list">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo($baba2['images']); ?> " class="media-object" style="width:180px;">
                                            </div>
                                            <div class="media-body" style="text-align: left;padding: 5px; ">
                                                <h4 class="media-heading"><a href="first.php?id=4"> <?php echo($baba2['header']); ?></a></h4>
                                                <p style="font-size: 15px;"><?php echo($baba2['fewline']); ?> </p>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo($baba3['images']); ?> " class="media-object" style="width:180px;">
                                            </div>
                                            <div class="media-body" style="text-align: left;padding: 5px; ">
                                                <h4 class="media-heading"><a href="first.php?id=1"> <?php echo($baba3['header']); ?></a></h4>
                                                <p style="font-size: 15px;"><?php echo($baba3['fewline']); ?> </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo($baba4['images']); ?> " class="media-object" style="width:180px;">
                                            </div>
                                            <div class="media-body" style="text-align: left;padding: 5px; ">
                                                <h4 class="media-heading"><a href="first.php?id=3"> <?php echo($baba4['header']); ?></a></h4>
                                                <p style="font-size: 15px;"><?php echo($baba4['fewline']); ?> </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="<?php echo($baba5['images']); ?> " class="media-object" style="width:180px;">
                                            </div>
                                            <div class="media-body" style="text-align: left;padding: 5px; ">
                                                <h4 class="media-heading"><a href="first.php?id=2"> <?php echo($baba5['header']); ?></a></h4>
                                                <p style="font-size: 15px;"><?php echo($baba5['fewline']); ?> </p>
                                            </div>
                                        </div>
                                        <hr>



                                    </ul>
                                </div>
                                <div class="col-md-2"> </div>



                            </div>

                            <!--media all-->

                        </div>
                    </div>
                </div>
                <!--main body-->
            </div>

            <div class="col-md-2" style=" " >
            </div>





        </div>
    </div>
</div>
</body>








