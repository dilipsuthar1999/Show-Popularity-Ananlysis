<?php
	$conn=new mysqli("localhost","root","","primeworld");
	session_start();

	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
        $query="SELECT * FROM user where email='$_SESSION[email]'";
       	$result=mysqli_query($conn,$query);
	    $user=mysqli_num_rows($result);
	    if($user!=0)
	    {
	       	while($data=mysqli_fetch_assoc($result))
	       	{
				$query1="SELECT * FROM comments where show_id='$_SESSION[show_id]' AND comment='$_POST[com]'";
			    $result1=mysqli_query($conn,$query1);
			    $user1=mysqli_fetch_all($result1,MYSQLI_ASSOC);
			    if($user1)
				{
				}
				else
				{    		
					$a=$_POST['com'];
					$result=shell_exec("C:\Users\ajay\anaconda3\python comment.py $a 2>&1 ");
					$r=(int)$result;
					if($r==1)
					{
						$result='Positive';
					}
					if($r==0)
					{
						$result='Negative';
					}
			      	$sql="INSERT INTO `comments`(`user_id`, `age`, `gender`, `location`, `show_id`, `comment`, `analysis`) VALUES ('$data[user_id]','$data[age]','$data[gender]','$data[location]','$_SESSION[show_id]','$_POST[com]','$result')";
					if($conn->query($sql))
					{
						$query02="SELECT count(analysis) FROM comments where show_id='$_SESSION[show_id]'";
					    $result02=mysqli_query($conn,$query02);
					    $row02=mysqli_fetch_array($result02);						

						$query2="SELECT count(analysis) FROM comments where show_id='$_SESSION[show_id]' AND analysis='Positive'";
					    $result2=mysqli_query($conn,$query2);
					    $row2=mysqli_fetch_array($result2);				
					    $row2[0]=($row2[0]*5)/($row02[0]);
						$sql2="UPDATE movies SET movie_rating='$row2[0]',movie_total_comments='$row02[0]' where movie_id='$_SESSION[show_id]'";
						if($conn->query($sql2))
						{}

						$query03="SELECT count(analysis) FROM comments where show_id='$_SESSION[show_id]'";
					    $result03=mysqli_query($conn,$query03);
					    $row03=mysqli_fetch_array($result03);						

						$query3="SELECT count(analysis) FROM comments where show_id='$_SESSION[show_id]' AND analysis='Positive'";
					    $result3=mysqli_query($conn,$query3);
					    $row3=mysqli_fetch_array($result3);	
					    $row3[0]=($row3[0]*5)/($row03[0]);					
						$sql3="UPDATE tvshows SET tvshow_rating='$row3[0]',tvshow_total_comments='$row03[0]' where tvshow_id='$_SESSION[show_id]'";
						if($conn->query($sql3))
						{}
						echo "Successfully Created !!!";
			   		}
			   		else
			  		{
			   			echo "Not Created !!!";
			   		}
			   	}
	       	}
	    }
	}
?>