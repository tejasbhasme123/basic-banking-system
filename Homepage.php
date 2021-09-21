<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark Bank</title>
    <link rel="stylesheet" href="css/Home_css.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
      .top_container{
    height: 55vh;
    width: 100%;
    background-color: #dbcc56;
    background-image: linear-gradient(50deg, #9ea428 0%, #51bd2d  74%);
    }
    </style>
</head>
<body>
     <header>
         <div class="top_container">
             <img src="image\logo.jpg"class="img-fluid">
            <nav>
            <ul class="options">
                <li><a href="create_user.php" style="color: white;">Users</a></li>
                <li><a href="transaction.php" style="color: white;">Transaction</a></li>
                <li><a href="transaction_history.php" style="color: white;">Transaction History</a></li>
            </ul>
            </nav>
        </div>
     </header>
    <div class="middle_container" >
   
    <p><button class="btn btn-primary" onclick="myFunction()" >Welcome to Spark Bank</button></p>
<div id="myDIV">Click for more information</div>
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "") {
    x.innerHTML = "";
  } else {
    x.innerHTML = "About Us <br><br> Basic Banking System Website for transferring money online safely<br>Spark Bank is one of India’s leading private banks and was among the first to receive approval<br> from the Reserve Bank of India (RBI) to set up a private sector bank in 1998.<br><br> Contact Us <br><br>                                           Call us - 0000 1111 222<br>Send an email to contact@sparkbank.com"
  }
}
</script>
    </div>
    </script>
    <footer style="background-color: white; color: black;"    class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b><i>Tejas Bhasme</i></b></p>
    </footer>
    
</body>
</html>