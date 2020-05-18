<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #ffffff;}
        h2 {
            background-color:#000000 ;
            border: 1px solid red;
            border-radius: 10px;
            margin: 2px;
            height: 100px;
            color: white;
            text-align: center;
            font-size:40px;
            font-family: "Times New Roman", Times, Sans-serif;
            font-style: normal;
        }
        body {
            background-image: linear-gradient(to right, #020200, #600300);
            margin: 0px;
        }
        span {
            display: inline-block;
            padding: 10px;


        }
        #form {
            text-align: center;
            display: block;
            margin: 0px;
        }
        .button {
            height: 30px;
            width: 80px;
        }
        .input {
            height:20px;
            width:250px;
        }
    </style>
</head>
<body>

<?php
session_start();

?>

<h2><br>welcome</h2>
<div class="form">
    <span>Your Username is:<?php echo $_SESSION["username"] ?></span>
    <span>Your Password is:<?php echo $_SESSION["password"] ?></span>
</div>
<div class="form">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <span>You can upload Your image<br></span>
        <input type = "file" name = "picture" >
        <input type = "submit" value = "Upload" name="submit">
    </form>

    <?php if (!empty($_SESSION['img'])): ?>
        <img src = "<?php print $_SESSION['img']; ?>" alt = "IMG">
    <?php endif; ?>

</div>
<form method="POST" action="logout.php">
    <input type="submit" value="LOGOUT" name="logout">
</form>


</body>
</html>
