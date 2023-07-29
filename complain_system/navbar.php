
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container1 {
            display: flex;
            /* position: fixed; */
            width: 100%;
            height: 120px;
            margin: 0% 0;
            background-color: #002D72;
            z-index: 1;
        }

        .middle {
            padding-top: 30px;
            padding-left: 20px;
            padding-right: 15px;
        }

        .IPAS {
            font-family: 'Merriweather';
            /* display: block; */
            padding-top: 8px;
            font-size: 35px;
            color: #CCCCCC;
            padding: 5px;
            font-weight: 600;
            align-items: center;
            padding-left: 10px;
            text-align: center;
            justify-content: center;
        }

        .right {

            margin-right: 10px;
            display: flex;
        }

        .logo {
            display: block;
            width: auto;
            height: 110px;
            padding: 5px;
            align-items: center;
            margin-left: 35px;
            margin-right: 10px;
        }

        .scroll {
            display: block;
            position: absolute;
            direction: left;
            width: 705px;
            line-height: 20px;
            padding-left: 10px;
            /* padding-right: 125px; */
            margin-top: 15px;
            font-size: 15px;
            color: #FFFFFF;
        }

        .button {
            border-radius: 5px;
            height: 45px;
            margin: 10px;
            display: block;
            text-decoration: none;
            margin: 40px 15px 10px 20px;
            padding: 9px 25px;
            line-height: 23px;
            font-size: 17px;
            width: 175px;
            background-color: blue;
            color: white;
        }

        .button a {
            text-decoration: none;
            color: antiquewhite;
        }
        .home{
            
            height: 50px;
            width: 50px;
            position: absolute;
            justify-content: right;
            color: #002D72; 
            margin-top: 40px;    
            margin-right:15px;      
          
        }
      
    </style>

</head>

<body>
    <div class="container1">

        <div>
            <img src="Indian-Railways.png" alt="logo" class="logo">
        </div>

        <div class="middle">
            <div class="IPAS">
                IPAS COMPLAINT MANAGEMENT SYSTEM

            </div>
            <div class="scroll">
                <marquee width="" direction="left">Contribute your rendering of the National Anthem of India
                    at: https://rashtragaan.in/</marquee>
            </div>
        </div>
        <div class="right-logo">
            <img src="emblem.png" alt="Emblem" class="logo">
        </div>
        <div class="right">
            <a href="./admin_panel/admin_login.php" style="color: antiquewhite; text-decoration: none;"><button class="button">Admin Login</button></a>

            <a href="./dealer_panel/admin_login.php"
                    style="color: antiquewhite; text-decoration: none;"><button class="button">Dealer Login</button></a>
        </div>

        <div  style="  ">
        <div class="home">
            <a href="index.php"><img src="bxs-home.svg" alt=""></a>
    </div>
    </div>

    </div>
    
</body>

</html>