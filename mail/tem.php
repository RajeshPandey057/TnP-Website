<?php
require_once "Mail.php";
$body="\n";
	$body.=$_POST['message'];
	$body.="\n\n\n";
	$body.="From:";
	$body.=$_POST['fname'].$_POST['lname'];
$body.="\n";
$body.='Mobile:';
$body.=$_POST['mno'];
	$body.="\n";
	$body.="Email:";
	$body.=$_POST['email'];

$from = "rajputchintan22@gmail.com";
$to = 'bvmtpc2020@gmail.com';

$host = "ssl://smtp.gmail.com";
$port = "465";
$username = 'tpcknowhow19@gmail.com';
$password = 'teapeasea2020';

$subject = "KnowHow Query";

$headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'port' => $port,
    'auth' => true,
    'username' => $username,
    'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
  echo ("<script LANGUAGE='JavaScript'>
	    alert('Fail to Send Query :(');
	    window.location.href='../contact.html';
	    </script>");
} else {

      echo ("<script LANGUAGE='JavaScript'>
		    alert('Your Query has been send!We will get back to you within 24 Hours....:)');
		    window.location.href='../contact.html';
		    </script>");
}
?>