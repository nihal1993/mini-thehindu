<div id="#test">
<div class="well">
    <ul class="nav nav-pills" role="tablist" style=" " >
        <li role="presentation" class="active"><a href="/php/index.php" >Home</a></li>
        <li role="presentation"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">news</a></li>
        <li role="presentation"><a href="#allsec" aria-controls="allsec" role="tab" data-toggle="tab">all section</a></li>

        <li role="presentation"><a href="#national" aria-controls="national" role="tab" data-toggle="tab">national</a></li>
        <li role="presentation"><a href="#international" aria-controls="international" role="tab" data-toggle="tab">international</a></li>
        <li role="presentation"><a href="#opi" aria-controls="opi" role="tab" data-toggle="tab">opinion</a></li>
        <li role="presentation"><a href="#buis" aria-controls="buis" role="tab" data-toggle="tab">buisness</a></li>
        <li role="presentation" ><a href="/php/sports/main.php" >sports</a></li>

        <li role="presentation" ><a href="/php/delhi/main.php" >Delhi</a></li>
        <li role="presentation" ><a href="/php/bangalore/main.php" >bangalore</a></li>
        <li role="presentation" ><a href="/php/chennai/main.php" >chennai</a></li>
        <li role="presentation" ><a href="/php/mumbai/main.php" >mumbai</a></li>
        <li role="presentation" ><a href="/php/kolkata/main.php" >Kolkata</a></li>

    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane" id="news">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="/php/national/main.php">national</a></li>
                    <li><a href="/php/international/main.php">international</a></li>
                    <li><a href="/php/buisness/main.php">buisness</a></li>
                    <li><a href="/php/opinion/main.php">opinion</a></li>
                    <li><a href=" /php/sports/main.php">sports</a></li>
                    <li><a href="/php/bangalore/main.php">Bangalore</a></li>
                    <li><a href=" /php/chennai/main.php">chennai</a></li>
                    <li><a href="/php/mumbai/main.php">mumbai</a></li>
                    <li><a href="/php/kolkata/main.php">kolkata</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo($naa2['images']); ?>    " alt="...">
                        <div class="caption">
                            <h3 style="background-color:whitesmoke;color:slategrey "> <a href="/php/national/first.php?id=9"><?php echo($naa2['header']); ?> </h3>
                            <p>
                                <?php echo($naa2['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo($inaa1['images']); ?> " alt="...">
                        <div class="caption">
                            <h3 style="background-color:whitesmoke;color:slategrey "> <a href="/php/international/first.php?id=10"> <?php echo($inaa1['header']); ?> </a></h3>
                            <p>
                                <?php echo($inaa1['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                      <img src="<?php echo($buu1['images']); ?> " alt="..." >
                        <div class="caption">
                            <h3 style="background-color:whitesmoke;color:slategrey "><a href="/php/buisness/first.php?id=9"> <?php echo($buu1['header']); ?></a> </h3>
                            <p>
                                <?php echo($buu1['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
            </div>





        </div><!-- news content with id=news-->




        <div role="tabpanel" class="tab-pane" id="allsec">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>News</th>
                        <th>City</th>
                        <th>Others</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="/php/national/main.php"> national </a></td>
                        <td><a href="/php/bangalore/main.php"> bangalore </a></td>
                        <td>Automobile </td>
                    </tr>
                    <tr>
                        <td><a href="/php/international/main.php"> inter-national </a></td>
                        <td><a href="/php/kolkata/main.php"> kolkata </a></td>
                        <td>technology </td>

                    </tr>
                    <tr>
                        <td><a href="/php/opinion/main.php"> opinion </a></td>
                        <td><a href="/php/mumbai/main.php"> mumbai </a></td>
                        <td>Start-ups </td>

                    </tr>
                    <tr>
                        <td><a href="/php/buisness/main.php">buisness  </a></td>
                        <td><a href="/php/delhi/main.php"> Delhi </a></td>
                        <td>books </td>
                    </tr>
                    <tr>
                        <td><a href="/php/sports/main.php"> sports </a></td>
                        <td><a href="/php/chennai/main.php"> chennai </a></td>
                        <td> sci-fci</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div> <!-- all section content here-->


        <div role="tabpanel" class="tab-pane" id="national">


            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo($naa1['images']); ?> " alt="...">
                        <div class="caption">
                            <h3 style="background-color:whitesmoke;color:slategrey "><a href="/php/national/first.php?id=10"> <?php echo($naa1['header']); ?> </a></h3>
                            <p>
                                <?php echo($naa1['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo($naa2['images']); ?> " alt="...">
                        <div class="caption">
                            <h3 style="background-color:whitesmoke;color:slategrey "><a href="/php/national/first.php?id=9"> <?php echo($naa2['header']); ?></a> </h3>
                            <p>
                                <?php echo($naa2['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo($naa3['images']); ?>  " alt="...">
                        <div class="caption">
                            <h3 style="style=background-color:whitesmoke;color:slategrey "><a href="/php/national/first.php?id=8"> <?php echo($naa3['header']); ?></a> </h3>
                            <p>
                                <?php echo($naa3['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
            </div>

        </div><!--national news content-->

        <div role="tabpanel" class="tab-pane" id="international">


            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo($inaa1['images']); ?> " alt="...">
                        <div class="caption">
                            <h3 style="background-color:whitesmoke;color:slategrey "><a href="/php/international/first.php?id=10">  <?php echo($inaa1['header']); ?> </a></h3>
                            <p>
                                <?php echo($inaa1['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src=" <?php echo($inaa3['images']); ?>" alt="...">
                        <div class="caption">
                            <h3 style="background-color:whitesmoke;color:slategrey "><a href="/php/international/first.php?id=9"> <?php echo($inaa3['header']); ?> </a></h3>
                            <p>
                                <?php echo($inaa3['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo($inaa4['images']); ?>  " alt="...">
                        <div class="caption">
                            <h3 style="style=background-color:whitesmoke;color:slategrey "><a href="/php/international/first.php?id=8"> <?php echo($inaa4['header']); ?></a> </h3>
                            <p>
                                <?php echo($inaa4['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
            </div>


        </div><!--international-->

        <div role="tabpanel" class="tab-pane" id="opi">
            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src=" <?php echo($opp2['images']); ?>" alt="...">
                        <div class="caption">
                            <h3 style="background-color:whitesmoke;color:slategrey "><a href="/php/opinion/first.php?id=10"> <?php echo($opp2['header']); ?> </a></h3>
                            <p>
                                <?php echo($opp2['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src=" <?php echo($opp3['images']); ?>" alt="...">
                        <div class="caption">
                            <h3 style="background-color:whitesmoke;color:slategrey "><a href="/php/opinion/first.php?id=9"> <?php echo($opp3['header']); ?></a> </h3>
                            <p>
                                <?php echo($opp3['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src=" <?php echo($opp4['images']); ?>" alt="...">
                        <div class="caption">
                            <h3 style="style=background-color:whitesmoke;color:slategrey "><a href="/php/opinion/first.php?id=8"> <?php echo($opp4['header']); ?></a> </h3>
                            <p>
                                <?php echo($opp4['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
            </div>


        </div><!--opinion-->

        <div role="tabpanel" class="tab-pane" id="buis">
            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo($buu1['images']); ?>  " alt="...">
                        <div class="caption">
                            <h3 style="background-color:whitesmoke;color:slategrey "><a href="/php/buisness/first.php?id=9"> <?php echo($buu1['header']); ?></a> </h3>
                            <p>
                                <?php echo($buu1['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="  <?php echo($buu2['images']); ?>" alt="...">
                        <div class="caption">
                            <h3 style="background-color:whitesmoke;color:slategrey "><a href="/php/buisness/first.php?id=10"> <?php echo($buu2['header']); ?> </a></h3>
                            <p>
                                <?php echo($buu2['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="  <?php echo($buu3['images']); ?>" alt="...">
                        <div class="caption">
                            <h3 style="style=background-color:whitesmoke;color:slategrey "><a href="/php/buisness/first.php?id=8"> <?php echo($buu3['header']); ?> </a></h3>
                            <p>
                                <?php echo($buu3['fewline']); ?>
                            </p>

                        </div>
                    </div>

                </div>
            </div>


        </div><!--buisness-->

        <div role="tabpanel" class="tab-pane" id="sports">



        </div><!--sports-->

    </div>
</div>

    </div><!-- tab content-->
