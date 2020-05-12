<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Email</title>
	<link href="css/cssreset.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script>
      $(document).ready(function() {$("#accordion").accordion();});
    </script>
<style type="text/css">
body,td,th {font-family: DIN-Light, DIN-LightAlternate;color: #333;};
body {background-color: #FFF;};
</style>
</head>
<body>
<div id="accordion">
<?php
function entrada($username,$password){
	$hostname="{pop.gmail.com:995/pop3/ssl/novalidate-cert}";
#	$hostname = "{imap.googlemail.com:993/ssl}INBOX";
	if ($username==""){$username="samuel.caldas@gmail.com";};
	if ($password==""){$password="samuel18";};
	/* try to connect */
	$inbox = imap_open($hostname,$username,$password) or die('Impossivel conectar ao Gmail: '.imap_last_error());
	/* grab emails */
	$emails = imap_search($inbox,'ALL');
	/* if emails are returned, cycle through each... */
	if($emails) {
	  /* begin output var */
	  $output = '';
	  /* put the newest emails on top */
	  rsort($emails);
	  /* for every email... */
	  foreach($emails as $email_number) {
		/* get information specific to this email */
		$overview = imap_fetch_overview($inbox,$email_number,0);
		$message = imap_fetchbody($inbox,$email_number,2);
		/* output the email header information */
		$output.= '<h3>'.$overview[0]->subject.' '.$overview[0]->from.' dia '.$overview[0]->date.'</h3>
		<div><p>'.$message.'</p></div>';
	  }
	  echo $output;
	} 
	/* close the connection */
	imap_close($inbox);
};
entrada("","");
?>
</div>
</body>
</html>