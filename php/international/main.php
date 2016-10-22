<?php
session_start();
include("/home/nihal/practice/projects/school/php/Dconnect.php");



?>


<!Doctype HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title><?php echo $page9.'|'.$site; ?></title>
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

                        <div class="panel-body">
                            <p style="text-align: right;font-size:15px;color:steelblue;  "><?php echo( date("Y/m/d"))?></p>
                            <h3 style="text-align:left;color: slategrey">international news <i class="fa fa-newspaper-o" aria-hidden="true"></i></h3>

                             <hr>
                            <ul class="media-list">
                            <div class="media">
                                <div class="media-left">
                                    <img src="<?php echo($inaa1['images']); ?> " class="media-object  " style="width:500px;">
                                </div>
                                <div class="media-body" style="text-align: left;padding: 10px; ">
                                    <h3 class="media-heading"><a href="first.php?id=10"> <?php echo($inaa1['header']); ?></a></h3>
                                    <p><?php echo($inaa1['fewline']); ?> </p>
                                </div>
                            </div>

                            </ul>
                            <hr>


                           <div class="row" style="padding-top:100px; ">
                           <div class="col-md-10" style="">
                               <ul class="media-list">
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($inaa3['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=9"> <?php echo($inaa3['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($inaa3['fewline']); ?> </p>
                                       </div>
                                   </div>

                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($inaa4['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=8"> <?php echo($inaa4['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($inaa4['fewline']); ?> </p>
                                       </div>
                                   </div>
                                   <hr>

                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($inaa6['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=7"> <?php echo($inaa6['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($inaa6['fewline']); ?> </p>
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($inaa7['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=6"> <?php echo($inaa7['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($inaa7['fewline']); ?> </p>
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($inaa8['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=5"> <?php echo($inaa8['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($inaa8['fewline']); ?> </p>
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($inaa9['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=4"> <?php echo($inaa9['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($inaa9['fewline']); ?> </p>
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($inaa10['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=3"> <?php echo($inaa10['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($inaa10['fewline']); ?> </p>
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








