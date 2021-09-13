<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style type="text/css">
        button{
            width:350px;
            position: relative;
            display: inline-block;
            padding: 12px 36px;
            margin: 10px 0;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 18px;
            letter-spacing: 2px;
            border-radius: 8px;
            background-color: #9dc5c3;
            background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
        }
        #main{
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(37,158,160,1) 50%, rgba(11,38,75,1) 100%);
        }
        .intro {
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(37,158,160,1) 50%, rgba(11,38,75,1) 100%);
        }
        .foot{
            
            background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
        }
        p{
            color: black;
        }
        h1{
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(37,158,160,1) 50%, rgba(11,38,75,1) 100%);
        }
        .project{
            display: flex;
            padding-left: 500px;
            padding-bottom: 75px;
            padding-top: 10px;

        }
        .bt{
            margin-left: 20px;
        }
        .bt1{
            margin-left: 20px;
        }
        
    </style>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>

    <div >
        <!-- Introduction section -->
        <div class="intro py-4">
                   <center> <h1><font color="black"> INDIAN BANK </font></h1></center>
            
        </div>
        <!-- Activity section -->
        <div class="col activity text-center" id = "main">

            <div class="col-md act project">
                <br><br>
                <img src="img/user.jpg" class="img-fluid" height="75px" width="75px">
                <br><br>
                <a href="transfermoney.php"><button class="bt1">View all Users</button></a>
            </div>
            <div class="col-md act project">
                <br><br>
                <img src="img/transfer.png" class="img-fluid" height="75px" width="75px">
                <br><br>
                <a href="transfermoney.php"><button class="bt">Transfer Money</button></a>
            </div>
            <div class="col-md act project">
                <br><br>
                <img src="img/history.jpg" class="img-fluid" height="75px" width="75px">
                <br><br>
                <a href="transactionhistory.php"><button class="bt">View Transfer History</button></a>
            </div>
        </div>
    </div>
    
    
    <footer class="text-center  py-3 foot">
        <p>&copy 2021. Made by <b>Vishwajeet Jadhav</b> <br> For the Project of  <b>The Sparks Foundation</b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
