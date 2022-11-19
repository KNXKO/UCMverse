<?php
error_reporting(-1);
ini_set('display_errors', 'On');

  $mysqli= new mysqli('localhost','root','','databaza_pal') or die($mysqli->connect_error);
     $table ='profiles';
echo "1";
     if(isset($_POST['submit'])){
      echo "1";
       $file=$_FILES['picture'];
        $extensions=array('jpg','png','gif','jpeg');

        $file_ext = explode('.',$file['name']);
        echo "1";
       // $msg = @$_POST['msg'];

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
          echo "1";
        $img_dir='images/profiles/'.$file['name'];
        move_uploaded_file($file['tmp_name'],$img_dir);
        echo "1";
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