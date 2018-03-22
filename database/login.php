<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Avenir" rel="stylesheet">
    
    <style type="text/css">
        body {
            text-align: center;
            font-family: "Avenir", Helvetica, sans-serif;            
            
        }
        #login {
            font-family: "Avenir", Helvetica, sans-serif;
            font-size: 14px;
            padding: 5px 30px 5px 30px;
            background: #d9d9d9;  /* fallback for old browsers */
            cursor: pointer;
            width: auto;
        }
        button#login:hover{
            background: #a8a8a8;
        }
        
form {
border: 3px solid #f1f1f1;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}


.cancelbtn {
    width: auto;
    padding: 10px 18px;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 40%; 
}
/*
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
*/
@media screen and (max-width: 300px) {
  
    .cancelbtn {
       width: 100%;
    }
}
</style>

</head>
<html>
    <body>
    <button value="login" id="login" onclick="document.getElementById('id01').style.display='block'">Login</button>




<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="POST">

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit" id="login">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" id="login">Cancel</button>
    </div>
  </form>
</div>

    </body>
</html>

<?php 
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $db = "myDB";

    $conn = new mysqli($servername, $username, $password, $db);

    $result = mysqli_query($conn,"SELECT * FROM login");
    $row = mysqli_fetch_array($result);
    
    $userComp = $row['username'];
    $passComp = $row['password'];

    if (!empty($_POST)){
        $userIn = $_POST["uname"];
        $passIn = sha1($_POST["pass"]);
        if($passIn === $passComp || $userIn === $userComp){
            //echo "<br>" . "Authentication successful";
            //header('Location: www.google.com');
            echo "<script type='text/javascript'>alert('Login successful, redirecting...');</script>";               
            echo "<script type='text/javascript'>window.location.href = 'index.html';</script>";               
            exit();
        } else {
            echo "<script type='text/javascript'>alert('Wrong username/password');</script>";   
            echo "<script type='text/javascript'>document.getElementById('id01').style.display='block';</script>";   
            
        }
    }

    $conn->close();
?>
