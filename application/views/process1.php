<?php
	include('db.php');
	$sql = "SELECT result FROM  exam_result WHERE staffid = '$_POST[staffid]' AND question = '$_POST[question]'";
	//echo '<pre>';print_r($sql);
	$result = mysqli_query($con,$sql);
	$qryresult = mysqli_num_rows($result);
		if($qryresult > 0){
			echo 'You have already answered this question...';		
		}else
		{
			$sql_1 = "SELECT * FROM  question WHERE question = '$_POST[question]' AND result = '$_POST[result]' LIMIT 0,1";
			//echo '<pre>';print_r($sql_1 );
			if ($result=mysqli_query($con,$sql_1))
			{
				$rowcount=mysqli_num_rows($result);
				//printf("Result set has %d rows.\n",$rowcount);
				mysqli_free_result($result);
			}
			$score =  $rowcount;

			$sql ="INSERT INTO exam_result (staffid, question, result, score, entry_time)
			VALUES
			('$_POST[staffid]','$_POST[question]','$_POST[result]',$score,NOW())";
			//echo $sql;
			if(mysqli_query($con,$sql)){
				echo "<h2>1 record added</h2>";
			}
			else 
			{
			  //die('Error: Record does not add' . odbc_error($connection));
			  echo "Error: Record does not add";
			  exit();
			}
			mysqli_close($con);
		}
?>