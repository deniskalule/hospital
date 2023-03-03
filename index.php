<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCC</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Jquery datatables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="./admin/includes/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <style>
        .welcome
        {
            background-color: rgb(6, 103, 103);
            width: 100%;
            height: 100vh;
        }

        .image img
        {
            width: 100%;
            height: 100vh;
        }

        .message
        {
            margin-top: 20%;
        }

        .links a
        {
            color: #090909;
            background-color: #fff;
            border: 2px solid #000;
        }

        .links a:hover
        {
            background-color: rgb(15,15,145);
            color: #fff;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid welcome">
        <div class="row">
            <div class="col-lg-5 message">
                <h5 class="text-center text-white">BYEYALE CITIZEN CLINIC</h5>
                <p class="text-center text-white">Management System</p>

                <div class="links text-center mt-3">
                    <a href="./admin/" class="btn ">Admin</a>
                    <a href="./receptionist/" class="btn">Receptionist</a>
                </div>
            </div>
            <div class="col-lg-7 image">
                <img src="./admin/assets/images/interior-view-operating-room.jpg" alt="">
                
            </div>
        </div>
    </div>
</body>
</html>