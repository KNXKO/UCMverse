<?php
error_reporting(-1);
ini_set('display_errors', 'On');

  $mysqli= new mysqli('localhost','root','','ucm_verse') or die($mysqli->connect_error);
     $table ='users';
     $p_table = 'posts';

     if(isset($_POST['submit'])){
      
       $file=$_FILES['picture'];
        $extensions=array('jpg','png','gif','jpeg');

        $file_ext = explode('.',$file['name']);
       
       // $msg = @$_POST['msg'];
       $user_id=@$_POST['user_id'];
       $name = @$_POST['name'];
       $vorname = @$_POST['vorname'];
       $email = @$_POST['email'];
       $birthday = @$_POST['birthday'];
       $picture=@$_POST['pic'];

       /* NEPOTREBNE $name=$file_ext[0];
        $name= preg_replace("!-!"," ",$name);
        $name= preg_replace("!_!"," ",$name);
        $name = ucfirst($name);*/

        $file_ext = end($file_ext);

        $result=$mysqli->query("SELECT * FROM $table WHERE usersId LIKE '%$user_id%' ") or die($mysqli->error);

        $data = $result->fetch_assoc();

        if($data['usersName']!=$name)
        {
          $mysqli->query("UPDATE IGNORE  $p_table  SET author_name='$name' WHERE author_user_id LIKE '%$user_id%'")  or die($mysqli->error);
        }
        if($data['usersLastname']!=$vorname)
        {
          $mysqli->query("UPDATE IGNORE  $p_table  SET author_last_name='$vorname' WHERE author_user_id LIKE '%$user_id%'")  or die($mysqli->error);
        }


        /*if (!in_array($file_ext,$extensions))
        {
            echo "$file_array[$i]['name'] - Invalid file extension!";
        }
        else{*/
         
        $img_dir='images/profiles/'.$file['name'];
        move_uploaded_file($file['tmp_name'],$img_dir);

        if($img_dir=='images/profiles/')
        {
          $sql = "UPDATE IGNORE $table SET usersName='$name',usersLastname='$vorname',usersEmail='$email',usersBdate='$birthday',usersImgdir='$picture' WHERE usersId='$user_id' ";
          $mysqli->query($sql) or die($mysqli->error);
        
        }
        else{
          $sql = "UPDATE IGNORE $table SET usersName='$name',usersLastname='$vorname',usersEmail='$email',usersBdate='$birthday',usersImgdir='$img_dir' WHERE usersId='$user_id' ";
        $mysqli->query($sql) or die($mysqli->error);

        $mysqli->query("UPDATE IGNORE  $p_table  SET author_photo_dir='$img_dir' WHERE author_user_id LIKE '%$user_id%'")  or die($mysqli->error);
        
        echo $file['name'].' - '.$phpFileUploadErrors[$file['error']];
        }

        
        
        
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