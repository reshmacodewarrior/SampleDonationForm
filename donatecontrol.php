<?php require_once '../db-connect.php';

$name = $_POST['dname'];
$contact = $_POST['dphoneno'];
$main_reason = $_POST['dreason'];
$message = $_POST['dmsg'];
$subject = $_POST['dsub'];
$attached_file = $_POST['image_input'];
$donation_type = $_POST['donation_type'];
$things = $_POST['things'];
$donateamount = $_POST['damt'];
$paymenttype = $_POST['paymenttype'];
$deliverytype = $_POST['deliverytype'];

$date = date('Y-m-d');


$sql = "INSERT INTO donate(Name,Contact_Number,Main_Reason,Message,Subject,Attached_file,Donation_type,amount,paymenttype,thingsname,deliverytype,donate_date)VALUES('$name','$contact','$main_reason','$message','$subject','$attached_file','$donation_type','$donateamount','$paymenttype','$things','$deliverytype','$date')";
                    
                    if(mysqli_query($conn, $sql)){
                        echo '
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Contact form</title>
                            <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
                            <link rel="stylesheet" href="style1.css">
                            <style>
                              .container h1, .container p{
                                  color: black  
                            }
                            </style>
                        </head>
                        <body>
                            <div class="container" style="background-color: white;">
                                <h1>Thank you for Donating.</h1>
                                <p class="back">Go back to the <a href="../index.php" style="color: blue;">homepage</a>.</p>
                                
                            </div>
                        </body>
                        </html>
                        ';
                    }
                    else{
                        echo '<script>alert("<?php $conn->error; ?>")</script>';
                    }
            
            $conn->close();

?>