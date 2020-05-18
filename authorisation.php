<style>
    .error {color: #ffffff;}
    h2 {
        background-color: #020001;
        border: 1px solid red;
        border-radius: 10px;
        margin: 2 px;
        height: 100px;
        color: white;
        text-align: center;
        font-size: 40px;
        font-family: "Times New Roman", Times , Sans-serif;
        font-style: normal;}
    body {background-image: linear-gradient(to right, #020200, #600300);margin 0px;}
    span {display: inline-block;padding: 10px;
    }
    #form { text-align: center;
             display: block;
              margin: 0px;}
    .button {height: 30px;
             width: 80px;}
    .input {height: 20 px;
            width: 250px;}
    </style>
</head>
<body>
<?php
$singinerror="";
if (isset($_post["login"])) {
    if($_post["singinusername"]=="user" && $_post["singinpassword"]="user"):session_start();
$_SESSION["username"]=$_post["singinusername"];
$_SESSION["password"]=$_post["singinpassword"];
header("Location:welcome.php");}
else {
    $singinerror="Please make sure all fields are filled in correctly";
    }
}
?>
<h2><br>sing in</h2>
<div id="form"
<form method="post" action="authorisation.php">
    <span><b>username:</b></span> <input class="input" type="text" name="singinusername">
    <span><b>password:/b></span> <input class="input" type="password" name="singinpasswrod">
    <span class="error"><b><?php echo $singinerror; ?></b></span>
    <input type="submit" name="login" value="Login" class="button">
    <br>
</form>
</div>


</body>


    </html>

