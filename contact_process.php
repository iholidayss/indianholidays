<?php
    if (isset($_POST['send'])) {
    $to = "nikunj.91speed@gmail.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $csubject = $_REQUEST['subject'];
    $number = $_REQUEST['phone'];
    $cmessage = $_REQUEST['message'];

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "Location: thankyou.html";


    $subject = "You have a message from Contact Us Form.";

     $logo = 'https://indianholidayss.com/img/IH_1.png';
    $link = '#';

    $body = "<!DOCTYPE html> <html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'>";
    $body .= "<head><style> table, td, div, h1, p {font-family: Arial, sans-serif;} table, td { border: 2px solid #000000 !important; }</style></head>";
    $body .= "<body style='margin:0;padding:0;'>";
    $body .= "<table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;'>";
    $body .= "<tr> <td align='center' style='padding:0;'><table role='presentation' style='width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;'>";
    $body .= "<tr> <td align='center' style='padding:40px 0 30px 0;background:#E7D2CC;'> <img src='{$logo}' alt='Indian Holiday $ Hotels' width='300' style='height:auto;display:block;' /> </td></tr>";
    $body .= "<tr> <td style='padding:36px 30px 42px 30px;'><h2 style='text-align:center'>Message From the Contact Us Page</h2>";
    $body .= "<table role='presentation' style='width:100%;border-collapse:collapse;border:0;border-spacing:0;'>";
    $body .= "<tr> <td style='padding:10; width:20%'> <b> Name </b> </td><td style='padding:10;'> {$name} </td> </tr>";
    $body .= "<tr> <td style='padding:10;'> <b> Email </b> </td> <td style='padding:10;'> {$from} </td> </tr>";
    $body .= "<tr> <td style='padding:10;'> <b> Mobile </b> </td> <td style='padding:10;'> {$number} </td> </tr>"
    $body .= "<tr> <td style='padding:10;'> <b> Subject </b> </td> <td style='padding:10;'> {$csubject} </td> </tr>";
    $body .= "<tr> <td style='padding:10;'> <b> Message </b> </td> <td style='padding:10;'> {$cmessage} </td> </tr>";
    $body .= "</table> </td> </tr>";
    $body .= "<tr> <td style='padding:5;text-align:center'> Copyright © All rights reserved </td> </tr> </table> </td> </tr> </table> </body> </html>";

    mail($to, $subject, $body, $headers);
    header('Location:thankyou.html');


}
?>
