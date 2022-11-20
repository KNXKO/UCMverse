<?php
error_reporting(-1);
ini_set('display_errors', 'On');

  $mysqli= new mysqli('localhost','root','','databaza_pal') or die($mysqli->connect_error);
     $table ='profiles';

     if(isset($_POST['submit'])){
      
       $file=$_FILES['picture'];
        $extensions=array('jpg','png','gif','jpeg');

        $file_ext = explode('.',$file['name']);
       
       // $msg = @$_POST['msg'];
       $name = @$_POST['name'];
       $vorname = @$_POST['vorname'];
       $email = @$_POST['email'];
       $birthday = @$_POST['birthday'];

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
         
        $img_dir='images/profiles/'.$file['name'];
        move_uploaded_file($file['tmp_name'],$img_dir);
        

        $sql = "INSERT INTO $table(user_id,img_dir) VALUES(1,'$img_dir')";
        $mysqli->query($sql) or die($mysqli->error);
        
        echo $file['name'].' - '.$phpFileUploadErrors[$file['error']];
        
        
        /* echo '
<script type="text/javascript">
location.reload();
</script>';*/

      //  $page = $_SERVER['PHP_SELF'];
       
        
        //}
    //}
    header("location:profil.php");
}


 



?>