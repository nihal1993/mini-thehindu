<?php
session_start();
include("Dconnect.php");
?>


<!Doctype HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html>
        <head>
            <title><?php echo $page.'|'.$site; ?></title>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <?php include('css.php');?>
            <?php include('js.php');?>

        </head>

        <body>
        <div class="container-fluid" ><!--main class-->



        <div class="container-fluid" >

            <div class="contianer">

                <div style="padding-top: 2px; margin-left:10%;  ">
                    <img src="jjjq.png" class="img-responsive " style="display:inline;"  >
                </div> <!-- containing logo image-->
                  <?php include('header.php')?>







            </div><!-- this the continer class which is under container fluid containing nav and logo-->
        </div> <!-- second container fluid for nav bar and logo-->







        <div class="container-fluid " style="text-align: center"><!--body main-->
            <div class="row">


                <div class="col-md-2" style=" " >


                            <div data-spy="affix" data-offset-top="205"  id="navbar-example">
                            <h4 style="color: slategrey;"> scrolling </h4>
                                <div>
                                    <nav >
                                        <ul class="nav navbar nav-stacked" >
                                            <li><a href="#section1">Headlines</a></li>
                                            <li><a href="#section2">National</a></li>
                                            <li><a href="#section3">International</a></li>
                                            <li><a href="#section4"> Sports</a></li>
                                            <li><a href="#section5"> Opinion</a></li>
                                            <li><a href="#section6">Buisness</a></li>




                                            <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cities <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#section61">Delhi</a></li>
                                                    <li><a href="#section62">Mumbai</a></li>
                                                    <li><a href="#section63">Kolkata</a></li>
                                                    <li><a href="#section64">Chennai</a></li>
                                                    <li><a href="#section65">Bangalore</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>



                                </div>
                            </div>

                </div> <!-- col md -2-->

                <div class="col-md-8" >
                    <div class="container-fluid " style="text-align: center">
                        <div class="panel panel-default">
                            <div class="panel-body" style="text-align: justify;text-justify: inter-cluster;">
                            <div class="container-fluid" data-spy="scroll" data-target="#navbar-example" data-offset="15" >

                            <div id="section1">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="thumbnail">
                                            <img src="<?php echo($naa2['images']); ?> " alt="...">
                                            <div class="caption">
                                                <h3 ><a href="national/first.php?id=9"> <?php echo($naa2['header']); ?></a>  </h3>
                                                <p>
                                                    <?php echo($naa2['fewline']); ?>
                                                </p>

                                            </div>
                                        </div>

                                        <ul class="list-group">
                                            <li class="list-group-item">
                                        <div class="media">
                                            <a class="media-left" href="#">

                                            </a>
                                            <div class="media-body">
                                                <h3 class="media-heading"><a href="international/first.php?id=10"> <?php echo($inaa1['header']); ?> </a></h3>
                                               <p class="media-article"> <?php echo($inaa1['fewline']); ?>  </p>
                                            </div>
                                        </div>
                                        </li>
                                            </ul>


                                    </div>
                                    <div class="col-md-4">
                                        <div class="thumbnail">
                                            <img src=" <?php echo($sop1['images']); ?>" alt="...">
                                            <div class="caption">
                                                <h3 > <a href="sports/first.php?id=10"><?php echo($sop1['header']); ?> </a></h3>
                                                <p> <?php echo($sop1['fewline']); ?>

                                                </p>

                                            </div>
                                            </div>



                                        <ul class="list-group">
                                            <li class="list-group-item">

                                                <h4>  <a href="buisness/first.php?id=9"><?php echo($buu1['header']); ?>

                                                    </a></h4>



                                            </li>
                                            <li class="list-group-item">

                                                <h4>  <a href="national/first.php?id=8"><?php echo($naa3['header']); ?>

                                                    </a></h4>


                                            </li>
                                            <li class="list-group-item">


                                                      <h4>  <a href="international/first.php?id=9"><?php echo($inaa3['header']); ?>

                                                        </a></h4>
                                            </li>
                                        </ul>

                                    </div>


                                </div>

                            </div> <!--section one ends-->

                            <hr>



                                <div id="section2" style="padding-bottom: 100px;" >
                                    <h1 style="color: darkgrey;text-align: left;"><a href="national/main.php "> National</a> </h1>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumbnail">
                                                <img src=" <?php echo($naa2['images']); ?>" alt="...">
                                                <div class="caption">
                                                    <h3 >  <a href="national/first.php?id=9"><?php echo($naa2['header']); ?> </a></h3>
                                                    <p>
                                                        <?php echo($naa2['fewline']); ?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group">

                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"> <a href="national/first.php?id=8"><?php echo($naa3['header']); ?> </a></h3>
                                                            <p ><?php echo($naa3['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="national/first.php?id=7"><?php echo($naa4['header']); ?> </a>  </h3>
                                                            <p>  <?php echo($naa4['fewline']); ?></p>
                                                    </div>


                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"> <a href="national/first.php?id=6"><?php echo($naa5['header']); ?></a> </h3>
                                                            <p><?php echo($naa5['fewline']); ?>  </p>
                                                        </div>
                                                    </div>


                                                </li>

                                            </ul>

                                        </div>


                                    </div>
                                </div>

                            <hr>
                                <div id="section3" style="padding-bottom: 100px;">
                                    <h1 style="color: darkgrey;text-align: left;"><a href="international/main.php "> InterNational</a </h1>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumbnail">
                                                <img src="<?php echo($inaa1['images']); ?>" alt="...">
                                                <div class="caption">
                                                    <h3 > <a href=" international/first.php?id=10"><?php echo($inaa1['header']); ?> </a></h3>
                                                    <p>
                                                        <?php echo($inaa1['fewline']); ?>

                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group">
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="international/first.php?id=9"><?php echo($inaa3['header']); ?></a> </h3>
                                                            <p><?php echo($inaa3['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"> <a href="international/first.php?id=8"><?php echo($inaa4['header']); ?> </a></h3>
                                                            <p> <?php echo($inaa4['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"> <a href="international/first.php?id=7"><?php echo($inaa6['header']); ?></a> </h3>
                                                            <p><?php echo($inaa6['fewline']); ?>  </p>
                                                        </div>
                                                    </div>


                                                </li>


                                            </ul>

                                        </div>


                                    </div>
                                </div>
                            <hr>
                                <div id="section4" style="padding-bottom: 100px;">
                                    <h1 style="color: darkgrey;text-align: left;"><a href="sports/main.php">Sports </a></h1>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumbnail">
                                                <img src="<?php echo($sop1['images']); ?> " alt="...">
                                                <div class="caption">
                                                    <h3 > <a href="sports/first.php?id=10"><?php echo($sop1['header']); ?></a></h3>
                                                    <p>
                                                        <?php echo($sop1['fewline']); ?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group">
                                                <li class="list-group-item">

                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="sports/first.php?id=7"><?php echo($sop2['header']); ?></a></h3>
                                                            <p><?php echo($sop2['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="sports/first.php?id=6"><?php echo($sop3['header']); ?></a></h3>
                                                            <p><?php echo($sop3['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"> <a href="sports/first.php?id=5"><?php echo($sop4['header']); ?></a> </h3>
                                                            <p><?php echo($sop4['fewline']); ?>  </p>
                                                        </div>
                                                    </div>


                                                </li>


                                            </ul>

                                        </div>


                                    </div>
                                </div>
                            <hr>
                                <div id="section5" style="padding-bottom: 100px;">
                                    <h1 style="color: darkgrey;text-align: left;"><a href="opinion/main.php"> Opinion </a></h1>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumbnail">
                                                <img src=" <?php echo($opp1['images']); ?>" alt="...">
                                                <div class="caption">
                                                    <h3 > <a href="opinion/first.php?id=10"><?php echo($opp1['header']); ?></a> </h3>
                                                    <p>
                                                        <?php echo($opp1['fewline']); ?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <ul class="list-group">
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="opinion/first.php?id=9"><?php echo($opp3['header']); ?></a></h3>
                                                            <p>  <?php echo($opp3['fewline']); ?>   </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"> <a href="opinion/first.php?id=8"><?php echo($opp4['header']); ?></a> </h3>
                                                            <p> <?php echo($opp4['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading">  <a href="opinion/first.php?id=7"><?php echo($opp5['header']); ?></a> </h3>
                                                            <p><?php echo($opp5['fewline']); ?> </p>
                                                        </div>
                                                    </div>


                                                </li>


                                            </ul>

                                        </div>


                                    </div>
                                </div>
                            <hr>
                                <div id="section6" style="padding-bottom: 100px;">
                                    <h1 style="color: darkgrey;text-align: left;"><a href="buisness/main.php"> buisness</a></h1>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumbnail">
                                                <img src=" <?php echo($buu1['images']); ?> " alt="...">
                                                <div class="caption">
                                                    <h3 > <a href="buisness/first.php?id=9 "><?php echo($buu1['header']); ?></a> </h3>
                                                    <p>
                                                        <?php echo($buu1['fewline']); ?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group">
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="buisness/first.php?id=10"> <?php echo($buu2['header']); ?> </a></h3>
                                                            <p> <?php echo($buu2['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="buisness/first.php?id=8"> <?php echo($buu3['header']); ?></a> </h3>
                                                            <p> <?php echo($buu3['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"> <a href="buisness/first.php?id=7"> <?php echo($buu4['header']); ?></a> </h3>
                                                            <p>   <?php echo($buu4['fewline']); ?> </p>
                                                        </div>
                                                    </div>


                                                </li>


                                            </ul>

                                        </div>


                                    </div>

                                </div>
                            <hr>

                                <div id="section61" style="padding-bottom: 100px;">
                                    <h1 style="color: darkgrey;text-align: left;"> <a href="delhi/main.php"> city-Delhi </a> </h1>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumbnail">
                                                <img src="<?php echo($die1['images']); ?> " alt="...">
                                                <div class="caption">
                                                    <h3> <a href="delhi/first.php?id=5"> <?php echo($die1['header']); ?> </a></h3>
                                                    <p>
                                                        <?php echo($die1['fewline']); ?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <ul class="list-group">
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="delhi/first.php?id=4"> <?php echo($die2['header']); ?> </a></h3>
                                                            <p><?php echo($die2['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object" src="..." alt="...">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="delhi/first.php?id=3"> <?php echo($die3['header']); ?> </a> </h3>
                                                            <p> <?php echo($die3['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"> <a href="delhi/first.php?id=2"> <?php echo($die4['header']); ?> </a></h3>
                                                            <p><?php echo($die4['fewline']); ?>  </p>
                                                        </div>
                                                    </div>


                                                </li>


                                            </ul>

                                        </div>


                                    </div>
                                </div>
                            <hr>
                                <div id="section62" style="padding-bottom: 100px;">
                                    <h1 style="color: darkgrey;text-align: left;"><a href="mumbai/main.php"> city-Mumbai  </a> </h1>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumbnail">
                                                <img src="  <?php echo($muu2['images']); ?>" alt="...">
                                                <div class="caption">
                                                    <h3 ><a href="mumbai/first.php?id=3"> <?php echo($muu2['header']); ?></a> </h3>
                                                    <p>
                                                        <?php echo($muu2['fewline']); ?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group">

                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="mumbai/first.php?id=2"> <?php echo($muu1['header']); ?></a> </h3>
                                                            <p>  <?php echo($muu1['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="mumbai/first.php?id=1"> <?php echo($muu3['header']); ?></a> </h3>
                                                            <p>  <?php echo($muu3['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>


                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="mumbai/first.php?id=3"> <?php echo($muu4['header']); ?></a> </h3>
                                                            <p>  <?php echo($muu1['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>

                                            </ul>

                                        </div>


                                    </div>
                                </div>
                            <hr>
                                <div id="section63" style="padding-bottom: 100px;">
                                    <h1 style="color: darkgrey;text-align: left;"><a href="kolkata/main.php"> city-Kolkata </a> </h1>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumbnail">
                                                <img src="<?php echo($koo1['images']); ?> " alt="...">
                                                <div class="caption">
                                                    <h3 >  <a href=" kolkata/first.php?id=5 "><?php echo($koo1['header']); ?> </a></h3>
                                                    <p>
                                                         <?php echo($koo1['fewline']); ?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group">
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="kolkata/first.php?id=4"> <?php echo($koo2['header']); ?></a></h3>
                                                            <p> <?php echo($koo2['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="kolkata/first.php?id=3"> <?php echo($koo3['header']); ?></a></h3>
                                                            <p> <?php echo($koo3['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="kolkata/first.php?id=2"> <?php echo($koo4['header']); ?></a></h3>
                                                            <p> <?php echo($koo4['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>


                                            </ul>

                                        </div>


                                    </div>
                                </div>
                            <hr>
                                <div id="section64" style="padding-bottom: 100px;">
                                    <h1 style="color: darkgrey;text-align: left;"><a href="chennai/first.php?id=5"><a href="chennai"> city-Chennai </a></h1>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumbnail">
                                                <img src="<?php echo($chee1['images']); ?> " alt="...">
                                                <div class="caption">
                                                    <h3 >  <a href="chennai/first.php?id=1"><?php echo($chee1['header']); ?> </a></h3>
                                                    <p>
                                                        <?php echo($chee1['fewline']); ?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group">

                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="chennai/first.php?id=5"> <?php echo($chee2['header']); ?></a> </h3>
                                                            <p>  <?php echo($chee2['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="chennai/first.php?id=3"> <?php echo($chee3['header']); ?></a> </h3>
                                                            <p>  <?php echo($chee3['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>


                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="chennai/first.php?id=2"> <?php echo($chee4['header']); ?></a> </h3>
                                                            <p>  <?php echo($chee4['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>

                                            </ul>

                                        </div>


                                    </div>
                                </div>
                            <hr>
                                <div id="section65">
                                    <h1 style="color: darkgrey;text-align: left;"><a href="bangalore/main.php"> city-Bangalore </a> </h1>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="thumbnail">
                                                <img src="<?php echo($baba1['images']); ?> " alt="...">
                                                <div class="caption">
                                                    <h3 >  <a href="bangalore/first.php?id=5"><?php echo($baba1['header']); ?> </a></h3>
                                                    <p>
                                                        <?php echo($baba1['fewline']); ?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-group">

                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="chennai/first.php?id=4"> <?php echo($baba2['header']); ?></a> </h3>
                                                            <p>  <?php echo($baba2['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="chennai/first.php?id=1"> <?php echo($baba3['header']); ?></a> </h3>
                                                            <p>  <?php echo($baba3['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>


                                                <li class="list-group-item">

                                                    <div class="media">

                                                        <div class="media-body">
                                                            <h3 class="media-heading"><a href="chennai/first.php?id=3"> <?php echo($baba4['header']); ?></a> </h3>
                                                            <p>  <?php echo($baba4['fewline']); ?>  </p>
                                                        </div>
                                                    </div>

                                                </li>

                                            </ul>

                                        </div>


                                    </div>
                                </div>




                        </div>
                      </div>
                    </div>
                </div>



            </div>


                <div class="col-md-2">

                </div>

        </div>




















        </div> <!-- first container-fluid class-->
    </body>
</html>
<!--    <div class="container-fluid text-center">
         <div class="navbar navbar-default ">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>

             </div>

            <div class="container bg1">

                    <h1> <?php echo($pages['header']); ?> </h1>
                    <p><?php echo($pages['body']); ?>  </p>

                    </div> -->
           <!-- style>
  body {
      position: relative;
  }
  .affix {
      top: 20px;
  }
  div.col-sm-9 div {
      height: 250px;
      font-size: 28px;
  }
  #section1 {color: #fff; background-color: #1E88E5;}
  #section2 {color: #fff; background-color: #673ab7;}
  #section3 {color: #fff; background-color: #ff9800;}
  #section41 {color: #fff; background-color: #00bcd4;}
  #section42 {color: #fff; background-color: #009688;}

  @media screen and (max-width: 810px) {
    #section1, #section2, #section3, #section41, #section42  {
        margin-left: 150px;
    }
  }
  </style>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">

<div class="container-fluid" style="background-color:#2196F3;color:#fff;height:220px;">
  <h1>Scrollspy & Affix Example</h1>
  <h3>Fixed vertical sidenav on scroll</h3>
  <p>Scroll this page to see how the navbar behaves with data-spy="affix" and data-spy="scrollspy".</p>
  <p>The left menu sticks the page after you have scrolled a specified amount of pixels, and the links in the menu are automatically updated based on scroll position.</p>
</div>
<br>

<div class="container">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
        <li><a href="#section1">Section 1</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#section41">Section 4-1</a></li>
            <li><a href="#section42">Section 4-2</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9">
      <div id="section1">
        <h1>Section 1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section2">
        <h1>Section 2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section3">
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section41">
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section42">
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>

