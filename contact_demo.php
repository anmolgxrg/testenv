<?php
print_r($_REQUEST[]);
exit;
if($_REQUEST)
{
//=============================================================================================//


	$to      = 'a.anmolgarg@gmail.com';
	$subject = 'New Contect Us Request';
	$message = '<table width="800" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="260" style="text-align:left">Name:</td>
    <td width="18" style="text-align:left">&nbsp;</td>
    <td width="502" style="text-align:left">'.$_REQUEST['t_name'].'</td>
  </tr>

  <tr>
    <td style="text-align:left">Phone:</td>
    <td style="text-align:left">&nbsp;</td>
    <td style="text-align:left">'.$_REQUEST['phone'].'</td>
  </tr>
  <tr>
    <td style="text-align:left">Email:</td>
    <td style="text-align:left">&nbsp;</td>
    <td style="text-align:left">'.$_REQUEST['email'].'</td>
  </tr>
 
  <tr>
    <td style="text-align:left">Message:</td>
    <td style="text-align:left">&nbsp;</td>
    <td style="text-align:left">'.implode(', ',$_REQUEST['message']).'</td>
  </tr>
</table>';
	$fromad="";
	
	 $headers="From:anmol2002garg@gmail.com  <".$fromad."> \r\n";
	 $headers .= "Reply-To:anmol2002garg@gmail ".$fromad."\r\n"; 
	 $headers .= "Cc: ".$ccc."\r\n"; 
	 $headers .= "X-Mailer:a.anmolgarg@gmail.com PHP/ ".phpversion(). " \r\n";
	 $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
	mail($to, $subject, $message, $headers);
	echo '1';
}
?>
