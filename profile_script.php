<?php
error_reporting(-1);
ini_set('display_errors', 'On');

  $mysqli= new mysqli('localhost','root','','databaza_pal') or die($mysqli->connect_error);
     $table ='profiles';

     if(isset($_POST['submit'])){
       
        $extensions=array('jpg','png','gif','jpeg');

        $file_ext = explode('.',$file_array[$i]['name']);
       
        $msg = @$_POST['msg'];

       /* NEPOTREBNE $name=$file_ext[0];
        $name= preg_replace("!-!"," ",$name);
        $name= preg_replace("!_!"," ",$name);
        $name = ucfirst($name);*/

        $file_ext = end($file_ext);

        /*if (!in_array($file_ext,$extensions))
        {
            echo "$file_array[$i]['name'] - Invalid file extension!";
        }
        else{*/
        
        $img_dir='images/profiles/'.$file_array[$i]['name'];
        move_uploaded_file($file_array[$i]['tmp_name'],$img_dir);
        
        $sql = "INSERT INTO $table(msg,img_dir,time) VALUES('$msg','$img_dir',now())";
        $mysqli->query($sql) or die($mysqli->error);
        
        echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']];
           
        
        /* echo '
<script type="text/javascript">
location.reload();
</script>';*/

      //  $page = $_SERVER['PHP_SELF'];
       
        
        //}
    //}
}
header("location:home.php");

 



?>