<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div id="ordersBtn" >
    
        <table class="table table-striped" style="margin:50px; width:75vw; transform: translate(19%, 10%);">
          <thead>
          <!-- <h2 style="color:#002D72">Check Status</h2> -->
            <tr>
              <th>Sl.No.</th>
              <th>User Id</th>
              <th>Full Name</th>
              <th>Complain Description</th>
              <th>Remark by Admin</th>
              <th>Remark by Dealer</th>
              <th>complain Status</th>
           </tr>
          </thead>
           <?php
          error_reporting(E_ERROR | E_PARSE);
          include "./adminHeader.php";
          include "../side.php";
          
            include "./config/dbconnect.php";
            session_start();
            $sgId = $_POST['sgId'];
            // Retrieve the system-generated ID from the session
            // $sgId = $_SESSION['sgId'];
            $serialNo = 1;
      
            $sql="SELECT * FROM complains WHERE sgid = '$sgId';
            ";
            $result=$conn-> query($sql);
            
            if ($result-> num_rows > 0){
              while ($row=$result-> fetch_assoc()) {
          ?>
             <tr>
             <td><?php echo $serialNo; ?></td>
                <td><?=$row["userid"]?></td>
                <td><?=$row["name"]?></td>
                <td><?=$row["subject"]?></td>
                <td><?=$row["remarkbyAdmin"]?></td>
                <td><?=$row["remarkbyDealer"]?></td>
               
                
                    
              <td><a class="btn btn-primary openPopup" data-href="./adminView/viewEachOrder1.php?id=<?=$row['sgid']?>" href="javascript:void(0);"><?=$row["status"]?></a></td>
              
              </tr>
          <?php
               $serialNo++;   
              }
            }
          ?>
           
        </table>

        <?php
            if (isset($_GET['category']) && $_GET['category'] == "success") {
                echo '<script> alert("Category Successfully Added")</script>';
            }else if (isset($_GET['category']) && $_GET['category'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['size']) && $_GET['size'] == "success") {
                echo '<script> alert("Size Successfully Added")</script>';
            }else if (isset($_GET['size']) && $_GET['size'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['variation']) && $_GET['variation'] == "success") {
                echo '<script> alert("Variation Successfully Added")</script>';
            }else if (isset($_GET['variation']) && $_GET['variation'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
        ?>


    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
         
           
       
</body>
</html>



