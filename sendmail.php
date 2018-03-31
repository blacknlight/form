<?php




$fname = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$company = $_REQUEST['company'];
$city = $_REQUEST['city'];
$country = $_REQUEST['country'];
$message = $_REQUEST['message'];


// $to="formationsarchitect@gmail.com";
$to="mahajanswapnil13@gmail.com";

$headers = "MIME-Version: 1.0\r\n" ;
$headers.= "Content-type: text/html \r\n" ;
$headers.= "From: $email \r\n";
$headers .= 'Cc: formations@dataone.in' . "\r\n";		   

$msg ="<BR><BR>

<table width='100%' border='0' cellpadding='0' cellspacing='0' style='border:#cccccc 1px solid;'>
<tr><td bgcolor='#000000' style='font-family:arial; padding:3px 5px 3px 8px; color:white; font-size:12px; font-weight:bold;'> Contact Us Form </td></tr>
<tr><td bgcolor='#cccccc'>
<table width='100%' border='0' cellpadding='6' cellspacing='1'>
  <tr>
  	<td align='right' bgcolor='#237dae' style='font-family:arial; color:white; font-size:12px; font-weight:bold;' width='20%'>Name:</td>
  	<td bgcolor='#FFFFFF' style='font-family:arial; color:black; font-size:12px; font-weight:normal;'>".$fname."</td>
	</tr>
	<tr>
		<td align='right' bgcolor='#237dae'style='font-family:arial; color:white; font-size:12px; font-weight:bold;'  width='20%'>E-mail ID:</td>
		<td bgcolor='#FFFFFF' style='font-family:arial; color:black; font-size:12px; font-weight:normal;'>".$phone."</td>
	</tr>
	<tr>
		<td align='right' bgcolor='#237dae'style='font-family:arial; color:white; font-size:12px; font-weight:bold;'  width='20%'>E-mail ID:</td>
	  <td bgcolor='#FFFFFF' style='font-family:arial; color:black; font-size:12px; font-weight:normal;'>".$email."</td>
	</tr>
	<tr>
	  <td align='right' bgcolor='#237dae'style='font-family:arial; color:white; font-size:12px; font-weight:bold;'  width='20%'>Company:</td>
	  <td bgcolor='#FFFFFF' style='font-family:arial; color:black; font-size:12px; font-weight:normal;'>".$company."</td>
	</tr>
	<tr>
	  <td align='right' bgcolor='#237dae'style='font-family:arial; color:white; font-size:12px; font-weight:bold;'  width='20%'>City:</td>
	  <td bgcolor='#FFFFFF' style='font-family:arial; color:black; font-size:12px; font-weight:normal;'>".$city."</td>
	</tr>
	<tr>
	  <td align='right' bgcolor='#237dae'style='font-family:arial; color:white; font-size:12px; font-weight:bold;'  width='20%'>Country:</td>
		<td bgcolor='#FFFFFF' style='font-family:arial; color:black; font-size:12px; font-weight:normal;'>".$country."</td>
	</tr>
	<tr>
	  <td align='right' bgcolor='#237dae'style='font-family:arial; color:white; font-size:12px; font-weight:bold;'  width='20%'>Message:</td>
		<td bgcolor='#FFFFFF' style='font-family:arial; color:black; font-size:12px; font-weight:normal;'>".$message."</td>
	</tr>
</table>
</td></tr></table>";				 

mail($to,"Enquiry",$msg,$headers); 

header("Location:index.html ");

?>