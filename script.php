<?php

error_reporting(-1);
ini_set('display_errors', 'On');

  $mysqli= new mysqli('localhost','root','','ucm_verse') or die($mysqli->connect_error);
     $table ='posts';
     $u_table = 'users';
                 
    $phpFileUploadErrors = array(
        0=>'Succes',
        1=>'Too big for upload_max_filesize in php.ini',
        2=>'Too big for MAX_FILE_SIZE in HTML form',
        3=>'Podarila sa nahrat iba časť',
        4=>'No file was uploaded',
        6=>'Missing temporary folder',
        7=>'Failed writing file to disk',
        8=>'A PHP extension stopped file upload',
    );

    if (!strlen(trim(@$_POST['msg'])))
    {   
        header("location:home.php");
        exit();
    } 

    if(isset($_POST['submit'])){
        $file_array=reArrayFiles($_FILES['userfile']);
        for ($i=0;$i<count($file_array);$i++){
           /* if($file_array[$i]['error']){
                echo $file_array[$i]['name'].' - '.$phpFileUploadErrors[$file_array[$i]['error']];

            }
            else  {*/echo"1";
                $extensions=array('jpg','png','gif','jpeg');

                $file_ext = explode('.',$file_array[$i]['name']);
               
                $user_id=@$_POST['user_id'];
                echo $user_id;
                $msg = filter_var(@$_POST['msg'], FILTER_SANITIZE_STRING);
                $a_name=@$_POST['a_name'];
                $a_l_name=@$_POST['a_l_name'];
                $a_photo=@$_POST['a_photo'];
               /* NEPOTREBNE $name=$file_ext[0];
                $name= preg_replace("!-!"," ",$name);
                $name= preg_replace("!_!"," ",$name);
                $name = ucfirst($name);*/

                $mysqli->query("UPDATE IGNORE  $u_table  SET usersPoststoday=usersPoststoday+1 WHERE usersId LIKE '%$user_id%'");

                $file_ext = end($file_ext);

                /*if (!in_array($file_ext,$extensions))
                {
                    echo "$file_array[$i]['name'] - Invalid file extension!";
                }
                else{*/
                
                $img_dir='images/web/'.$file_array[$i]['name'];
                move_uploaded_file($file_array[$i]['tmp_name'],$img_dir);
                
                $sql = "INSERT INTO $table(author_user_id,author_name,author_last_name,author_photo_dir,img_dir,msg,time) VALUES('$user_id','$a_name','$a_l_name','$a_photo','$img_dir','$msg',now())";
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
        
         
     
    }
    
    

    function reArrayFiles(&$file_post) {

        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);
    
        for ($i=0; $i<$file_count; $i++) {
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }
    
        return $file_ary;
    }
    //$search= "SELECT * FROM skuska";

   //$query = mysqli_query($connect, $search);
    //$num = mysqli_num_rows($query);

    //echo "<meta http-equiv='refresh' content='0'>";
    ?>
