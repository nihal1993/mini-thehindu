<?php
session_start();
include("/home/nihal/practice/projects/school/php/Dconnect.php");
?>


<!Doctype HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title><?php echo $page8.'|'.$site; ?></title>
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
                            <h3 style="text-align:left;color: slategrey">opinion news <i class="fa fa-newspaper-o" aria-hidden="true"></i></h3>

                             <hr>
                            <ul class="media-list">
                            <div class="media">
                                <div class="media-left">
                                    <img src="<?php echo($opp2['images']); ?> " class="media-object  " style="width:500px;">
                                </div>
                                <div class="media-body" style="text-align: left;padding: 10px; ">
                                    <h3 class="media-heading"><a href="first.php?id=10"> <?php echo($opp2['header']); ?></a></h3>
                                    <p><?php echo($opp2['fewline']); ?> </p>
                                </div>
                            </div>

                            </ul>
                            <hr>


                           <div class="row" style="padding-top:100px; ">
                           <div class="col-md-10" style="">
                               <ul class="media-list">
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($opp3['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=9"> <?php echo($opp3['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($opp3['fewline']); ?> </p>
                                       </div>
                                   </div>

                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($opp4['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=8"> <?php echo($opp4['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($opp4['fewline']); ?> </p>
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($opp5['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=7"> <?php echo($opp5['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($opp5['fewline']); ?> </p>
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($opp6['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=6"> <?php echo($opp6['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($opp6['fewline']); ?> </p>
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($opp7['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=5"> <?php echo($opp7['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($opp7['fewline']); ?> </p>
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($opp8['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=4"> <?php echo($opp8['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($opp8['fewline']); ?> </p>
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($opp9['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=3"> <?php echo($opp9['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($opp9['fewline']); ?> </p>
                                       </div>
                                   </div>
                                   <hr>
                                   <div class="media">
                                       <div class="media-left">
                                           <img src="<?php echo($opp10['images']); ?> " class="media-object" style="width:180px;">
                                       </div>
                                       <div class="media-body" style="text-align: left;padding: 5px; ">
                                           <h4 class="media-heading"><a href="first.php?id=2"> <?php echo($opp10['header']); ?></a></h4>
                                           <p style="font-size: 15px;"><?php echo($opp10['fewline']); ?> </p>
                                       </div>
                                   </div>


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








