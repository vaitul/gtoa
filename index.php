
<?php
    include "DBConnection.php";
    $mycon = new DataBase();
    $con = $mycon->con;


    /*$data = mysqli_query($con,"SELECT `date` FROM `day` WHERE id=(SELECT MAX(id) FROM `day`)");
    $row = mysqli_fetch_array($data);
    $date = date("Y-m-d");
    if(!($row[0] == $date))
    {
        mysqli_query($con,"INSERT INTO day(`date`) VALUES ('$date')") or die("new date not updated");
    }*/
    //vaitul bhyani
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Goal To Achive : Home</title>

        <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="External/index-style.css">

    </head>
    <body>
        <div class="container">
            <div id="mainpage">
                <div class="row" id="header">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div id="date-label"><?php echo date("d M , Y"); echo " <br>".date('<b>l</b>');?></div>
                        <center><h1>Goal To Achieve</h1></center>
                        <div id="admin-label">Made By <br/> <a href="#" style="text-decoration:none;"> Vaitul <i class="fa fa-heart"></i> </a></div>
                    </div>
                    <div id="notification-box" class="col-lg-offset-2 col-lg-8 col-md-offset-2  col-md-8 col-sm-offset-1  col-sm-10 col-sm-offset-1 col-xs-12">
                    <center><i class="fa fa-chevron-down "></i></center>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-offset-2 col-lg-8 col-md-offset-2  col-md-8 col-sm-offset-1  col-sm-10 col-xs-12">
                        <?php
                            $data = mysqli_query($con,"SELECT * FROM `day`");
                            while($tabelday = mysqli_fetch_array($data))
                            {
                                $tableDayId = $tabelday['id'];
                                $tableDayDate = $tabelday['date'];
                                $tableDayTime = $tabelday['total_avg_time'];
                                $tableDayResult = $tabelday['avg_result'];

                                //For Divinding Date
                                $timestamp = strtotime($tableDayDate);
                                $day = date('l', $timestamp);
                        ?>
                        <div id="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div id="time-stat" title="time : <?php echo $tableDayTime;?>%" style="width:<?php echo $tableDayTime;?>%;" >
                                        <div id="result-stat" title="result : <?php echo $tableDayResult;?>%" style="width:<?php echo $tableDayResult;?>%;" >
                                            &nbsp;<?php echo $tableDayResult;?>%
                                        </div>
                                        <span><?php echo $tableDayTime;?>%&nbsp;</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div id="day-title">
                                        <center><?php echo $day;?></center> 
                                        <b>Day-<?php echo $tableDayId;?></b>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row no-gutter">
                                
                                <?php
                                    $tableSubject= mysqli_fetch_array(mysqli_query($con,"SELECT * FROM `book` WHERE `id`='$tableDayId'"));
                                ?>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="subject">                                    
                                        <div class="subject-heading">
                                                BOOK
                                        </div>
                                            <b>Description : </b>
                                            <p class="sub-desc"><?php echo $tableSubject['description'];?></p>
                                        <div id="sub-time-stat" class="stat" title="time : <?php echo $tableSubject['time'];?>%" style="width:<?php echo $tableSubject['time'];?>%;">
                                            <span>time <?php echo $tableSubject['time'];?>% &nbsp;</span>
                                         </div>
                                        <div id="sub-result-stat" class="stat"  title="time : <?php echo $tableSubject['result'];?>%" style="width:<?php echo $tableSubject['result'];?>%;">
                                                &nbsp;result <?php echo $tableSubject['result'];?>%
                                        </div>
                                        <span>
                                            <b>Wasted In : </b>
                                            <br>
                                            <?php
                                                $array = explode(";",$tableSubject['wasted_in']);
                                                foreach ($array as $value) {
                                                   $label = mysqli_fetch_array(mysqli_query($con,"SELECT `wasted_label` FROM `wasted_labels` WHERE `id`='$value'"));
                                                   echo "<span class='wasted-labels'>".ucfirst($label[0])."</span> ";
                                                }
                                            ?>
                                        </span>
                                    </div>
                                </div>

                                <?php
                                    $tableSubject= mysqli_fetch_array(mysqli_query($con,"SELECT * FROM `CS` WHERE `id`='$tableDayId'"));
                                ?>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="subject">                                    
                                        <div class="subject-heading">
                                                Communication Skill
                                        </div>
                                            <b>Description : </b>
                                            <p class="sub-desc"><?php echo $tableSubject['description'];?></p>
                                        <div id="sub-time-stat" class="stat" title="time : <?php echo $tableSubject['time'];?>%" style="width:<?php echo $tableSubject['time'];?>%;">
                                            <span>time <?php echo $tableSubject['time'];?>% &nbsp;</span>
                                         </div>
                                        <div id="sub-result-stat" class="stat"  title="time : <?php echo $tableSubject['result'];?>%" style="width:<?php echo $tableSubject['result'];?>%;">
                                                &nbsp;result <?php echo $tableSubject['result'];?>%
                                        </div>
                                        <span>
                                            <b>Wasted In : </b>
                                            <br>
                                            <?php
                                                $array = explode(";",$tableSubject['wasted_in']);
                                                foreach ($array as $value) {
                                                   $label = mysqli_fetch_array(mysqli_query($con,"SELECT `wasted_label` FROM `wasted_labels` WHERE `id`='$value'"));
                                                   echo "<span class='wasted-labels'>".ucfirst($label[0])."</span> ";
                                                }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <?php
                                    $tableSubject= mysqli_fetch_array(mysqli_query($con,"SELECT * FROM `IT` WHERE `id`='$tableDayId'"));
                                ?>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="subject">                                    
                                        <div class="subject-heading">
                                                IT
                                        </div>
                                            <b>Description : </b>
                                            <p class="sub-desc"><?php echo $tableSubject['description'];?></p>
                                        <div id="sub-time-stat" class="stat" title="time : <?php echo $tableSubject['time'];?>%" style="width:<?php echo $tableSubject['time'];?>%;">
                                            <span>time <?php echo $tableSubject['time'];?>% &nbsp;</span>
                                         </div>
                                        <div id="sub-result-stat" class="stat"  title="time : <?php echo $tableSubject['result'];?>%" style="width:<?php echo $tableSubject['result'];?>%;">
                                                &nbsp;result <?php echo $tableSubject['result'];?>%
                                        </div>
                                        <span>
                                            <b>Wasted In : </b>
                                            <br>
                                            <?php
                                                $array = explode(";",$tableSubject['wasted_in']);
                                                foreach ($array as $value) {
                                                   $label = mysqli_fetch_array(mysqli_query($con,"SELECT `wasted_label` FROM `wasted_labels` WHERE `id`='$value'"));
                                                   echo "<span class='wasted-labels'>".ucfirst($label[0])."</span> ";
                                                }
                                            ?>
                                        </span>
                                    </div>
                                </div> 

                                
                            </div>

                        </div> <!--END of post-->
                        <br>
                    <?php } ?>

                    </div> 
                </div>
                <hr/>


            </div>
        </div>
    </body>
</html>
