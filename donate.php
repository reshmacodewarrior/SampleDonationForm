
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
      
      input[type="submit"] {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin:10px;
          }
          
    </style>

  </head>
  <body>

  
    <section class="container">
        
      <div class="logo">
        <img src="logo.png" width="150px" height="80px">
      </div>
       
      <header>Donation Form</header>
      <form action="donatecontrol.php" method="post" class="form" enctype="multipart/form-data">
        <div class="input-box">
          <label>Name</label>
          <input type="text" id="dname" name="dname" placeholder="Enter your name" required />
        </div>
        <div class="input-box">
          <label>Phone no</label>
          <input type="number" id="dphoneno" name="dphoneno" placeholder="Enter your phone number" required />
        </div>
        <div class="input-box">
          <label>Main reasons</label>
          <input type="text" id="dreason" name="dreason" placeholder="Enter your main reason" required />
        </div>
        <div class="input-box">
          <label>Message</label>
          <input type="text" id="dmsg" name="dmsg" row="2" placeholder="Enter your message" required />
        </div>
        <div class="input-box">
          <label>Subject</label>
          <input type="text" id="dsub" name="dsub" row="2" placeholder="Enter your subject" required />
        </div>
        <p class="img">Attach file</p>
          <input type="file" id="image_input" name="image_input" accept="image/jpg, image/png" required="">
        
        <div class="gender-box">
          <h3>Donation type</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-money" name="donation_type" value="Money" onclick = "showmoneyField();" />
              <label for="check-donate">Money</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-things" onclick = "showthingsField();" name="donation_type" value="Things" />
              <label for="check-notdonate">Things</label>
            </div>
            
          </div>
        </div>
        <div class="input-box" id="amount" style="display: none;">
          <label>Amount</label>
          <input type="number" id="damt" name="damt" placeholder="Enter your Amount" >
        </div>
        <div class="input-box" id="payment" style="display: none;">
          <div class="input-box address">
            <label>Payment type </label>
            <div class="column" >
              <div class="select-box">
                <select name="paymenttype" id="paymenttype">
                  <option hidden>Payment type</option>
                  <option value="Online payment">Online payment </option>
                  <option value="Direct Payment">Direct payment</option>
                    
                </select>
              </div>
            </div>
          </div>  
        </div>
        <div class="input-box" id="things" style="display: none;">
          <label>Things Name</label>
          <input type="text" id="things" name="things" placeholder="Enter your Things name">
        </div>
        <div class="input-box" id="delivery" style="display: none;">
          <div class="input-box address">
            <label>Delivery type </label>
            <div class="column">
              <div class="select-box">
                <select name="deliverytype" id="deliverytype">
                  <option hidden>Delivery type</option>
                  <option value="Direct">Direct</option>
                  <option value="Courier">Courier</option>
                    
                </select>
              </div>
            </div>
          </div>  
        </div>
        <input type="submit" name="" value="submit">
        <br><br>    
      </form>
    </section>  
    <script>
     
      function showmoneyField()
      {
        document.getElementById('amount').style.display = "block";
        document.getElementById('payment').style.display = "block";
        document.getElementById('things').style.display = "none";
        document.getElementById('delivery').style.display = "none";
      }
      function showthingsField()
      {
        document.getElementById('amount').style.display = "none";
        document.getElementById('payment').style.display = "none";
        document.getElementById('things').style.display = "block";
        document.getElementById('delivery').style.display = "block";
        
      }
     
    </script>
    
  </body>
</html>
