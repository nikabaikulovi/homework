<?php
session_start();
class upload
{
    public $uploaded;
    public $target_file;

    function __construct()
    {
        $this->target_file = 'images/' . basename($_FILES["image"]["name"]);
        $this->uploaded = 1;
        $this->imageFileType = $_FILES["image"]["type"];
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check == true) {
                echo "file is picture" . $check["mime"] . ".";
                $this->uploaded = 1;

            } else {
                echo "file is not picture";
                \
                $this->uploaded = 0;

        }
        }

    }
    public function picsize (){
        if ($_FILES["image"]["size"]> 200000) {
            echo "pitcure size is too large, try another one.";
            $uploaded = 0;
        }
    }public function pictype(){
    if( $_FILES["image"]["type"] !== 'image/jpeg') {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploaded = 0;
    }
    public function upload(){
        if ($this->uploaded == 0) {
            echo "Sorry, your file was not uploaded.";
        }
        else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $this->target_file)) {
                $_SESSION['img']=$this->target_file;
                header("Location: session.php");
            }else { echo "there was an error uploading your file.";}
}}}}
$pic = new upload();
$pic-> picsize();
$pic-> pictype();
$pic-> upload();
?>
