<?php

error_reporting(-1);
ini_set('display_errors', 'On');

  $mysqli= new mysqli('localhost','root','','databaza_pal') or die($mysqli->connect_error);
  $table ='posts';   
  $l_table ='likes';
    
        echo @$_POST['post_id'];
        echo @$_POST['user_id'];
        echo @$_POST['value'];

        $postid = @$_POST['post_id'];
        $userid = @$_POST['user_id']; 

        $result = $mysqli->query("SELECT * FROM $table WHERE ID LIKE '%$postid%'");
        //echo mysqli_num_rows($result);
        $data_likes = $result->fetch_assoc();
        $likes = $data_likes['likes'];
        
        if($_POST['value']== 0)
        {
            $mysqli->query("UPDATE IGNORE $l_table SET value=0 WHERE user_id LIKE '%$userid%' AND post_id LIKE '%$postid%'");
            $mysqli->query("UPDATE IGNORE $table SET likes=$likes-1 WHERE ID LIKE '%$postid%'");
            
        }
        if($_POST['value']== 1)
        {
            $results = $mysqli->query("SELECT * FROM $l_table WHERE user_id LIKE '%$userid%' AND post_id LIKE '%$postid%'");
            if(mysqli_num_rows($results) == 0)
            {
                $mysqli->query("INSERT IGNORE INTO $l_table(user_id,post_id,value) VALUES ('$userid','$postid',1)");
                
                
            }
            else{
            $mysqli->query("UPDATE IGNORE $l_table SET value=1 WHERE user_id LIKE '%$userid%' AND post_id LIKE '%$postid%'");
            
            
            }
            $mysqli->query("UPDATE IGNORE $table SET likes=$likes+1 WHERE ID LIKE '%$postid%'");
        }
        
        
    

    /*if (isset($_POST['liked'])) {
		$postid = $_POST['postid'];
		$result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "INSERT INTO likes (userid, postid) VALUES (1, $postid)");
		mysqli_query($con, "UPDATE posts SET likes=$n+1 WHERE id=$postid");

		echo $n+1;
		exit();
	}
    
	if (isset($_POST['unliked'])) {
		$postid = $_POST['postid'];
		$result = mysqli_query($con, "SELECT * FROM posts WHERE id=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['likes'];

		mysqli_query($con, "DELETE FROM likes WHERE postid=$postid AND userid=1");
		mysqli_query($con, "UPDATE posts SET likes=$n-1 WHERE id=$postid");
		
		echo $n-1;
		exit();
	}*/
   
    
    

    //$search= "SELECT * FROM skuska";

   //$query = mysqli_query($connect, $search);
    //$num = mysqli_num_rows($query);

    //echo "<meta http-equiv='refresh' content='0'>";
    ?>
