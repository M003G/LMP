<?php
session_start();
?>
<?php


if (isset($_POST['id'])) {
	$output = '';
   include ('includes/conn.php');
   $query =" SELECT * FROM issue_book WHERE username = '".$_POST['id']."'";
   $result = mysqli_query($con, $query);
   while($res = mysqli_fetch_array($result)){
   
    $issue = $res['issue_date'];
    $expiry = $res['expiry_date'];
 

		$daysLeft = 0;

		$curDate = date('Y-m-d');
		$daysLeft = abs(strtotime($curDate) - strtotime($issue));
		$days = $daysLeft/(60 * 60 * 24);
      
        if ($days>14) {
          $more= $days-14;
        	$fine = 1*$more;
        	$output = '<h4 class="text-warning text-center"><b>Today Date:'.date('d-m-Y').'<br>Your fine is Rs. ' .intval($fine). '. You had a book for '.intval($days).' days </b></h4>';
        }else{
            $output = '<h4 class="text-warning text-center">No fine</h4>';
        }
        
}
echo $output;
}
?>
