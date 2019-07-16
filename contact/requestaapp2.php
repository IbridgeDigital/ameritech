<?php 
	// var_dump($_POST);
	// exit();
 	 $fname = $_POST["fname"];
 	 $lname = $_POST["lname"];
 	 $emailid  = $_POST["email"];
	 $pnumber= $_POST["phone"];
	 $contoption  = $_POST["cont_option"];
	 $mbox= $_POST["message_box"];
	 

	 
	 // $location = $_POST["location"];

	 $subject ="Contact Request by " . $fname;
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: '. $fname .' <' . $emailid .">" ."\r\n";
	
	// $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
	// $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
	
	   	$message= "<table border='0' cellpadding='4' cellspacing='4' width='100%'>

	   			  <tr><td style='font-size:1.3em;' colspan='2'><strong>Contact Details</strong></td></tr>
	   			   <tr>
	                   <td align='left' width='35%'><strong>Name :</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $fname ." ". $lname ."</td>
	                 </tr>

	                  <tr>
	                   <td align='left' width='35%'><strong>Email:</strong></td>
	                   <td align='left' width='60%'>
	                   ".  $emailid ."</td>
	                 </tr>


	   			  	<tr>
	                   <td align='left' width='35%'><strong>Phone number :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $pnumber ."</td>
	                 </tr>


	   			  	<tr>
	                   <td align='left' width='35%'><strong>Contact Option :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $contoption ."</td>
	                 </tr>


	   			  	<tr>
	                   <td align='left' width='35%'><strong>Message :</strong></td>
	                   <td align='left' width='60%'>
	                   ". $mbox ."</td>
	                 </tr>

	   			  	
	                 
	               </table>";  
	              
	  	  if(mail("roxanetlowry@gmail.com", $subject, $message, $headers))
	  	  {
			// delete the cookie so it cannot sent again by refreshing this page
			setcookie('tntcon','');
			echo "Your enquiry has been sent successfully";
		}
		// else{
		// 	echo "error";
		// }

		
	  	//$msg = "Your enquiry has been sent successfully.";
	  	
	
?>