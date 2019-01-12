
<?php
    include "DBConnection.php";
    $mycon = new DataBase();
    $con = $mycon->con;


    $data = mysqli_query($con,"SELECT `date` FROM `day` WHERE id=(SELECT MAX(id) FROM `day`)");
    $row = mysqli_fetch_array($data);
    $date = date("Y-m-d");
    if(!($row[0] == $date))
    {
        mysqli_query($con,"INSERT INTO day(`date`) VALUES ('$date')") or die("new date not updated");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goal To Achive : Home</title>

    <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">

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
                    <div id="date-label"><?php echo date("d M , Y"); echo " <br>".date('l');?></div>
                    <center><h1>Goal To Achieve</h1></center>
                    <div id="admin-label"><a href="#" style="color:#fff;text-decoration:none;">B h a y a n i <br/> V a i t u l <a/></div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2  col-md-8 col-sm-offset-1  col-sm-10 col-xs-12" id="result">
                    <div id="post">
                        <div id="time-stat" title="time : 95%" >
                            <div id="result-stat" title="result : 90%" >
                             &nbsp;result 90%
                            </div>
                            <span>time 90%&nbsp;</span>
                        </div>

                        <div id="day-title">
                            <center>19 JAN, 2019</center> 
                            <b>Day-1</b>
                        </div>

                    </div> 
                </div>
            </div>

        </div>
    </div>
</body>
</html>
