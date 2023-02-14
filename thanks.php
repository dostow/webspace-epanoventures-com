<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<meta http-equiv="refresh" content="2; URL=http://www.epanoventures.com">
<link href="mystyle.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style3 {color: #000000}
.style9 {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style10 {
	FONT-SIZE: 14px;
	LINE-HEIGHT: normal;
	TEXT-DECORATION: none;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
.style11 {color: #000000; font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style>
<head>
<title>Thank You!</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<center>
  <table width="615" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="CopyBlack10">
    <!--DWLayoutTable-->
    <tr> 
      <td width="4" height="19" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="60">&nbsp;</td>
      <td width="453">&nbsp;</td>
      <td width="98"></td>
    </tr>
    <tr> 
      <td height="114">&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="117"></td>
      <td></td>
      <td valign="top" class="CopyBlack10 whitetext"><p align="center"><span class="style11">THANK 
          YOU!!!</span></p>        
        <p align="center" class="style10">Your contact us form has been 
          submited<br>
          <br />
      We'll get back to you as soon as possible.</p></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="48"></td>
      <td></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
    <tr>
      <td height="19"></td>
      <td></td>
      <td valign="top"><div align="center" class="style3">
        <SCRIPT LANGUAGE="php">
    $email = $HTTP_POST_VARS[email];
    $mailto = "chris@epanoventures.com";
    $mailsubj = "Form Submission";
    $mailhead = "From: $email\n";
    reset ($HTTP_POST_VARS);
    $mailbody = "Values submitted from Epano Ventures Website:\n";
    while (list ($key, $val) = each ($HTTP_POST_VARS)) {
        $mailbody .= "$key : $val\n"; }
    mail($mailto, $mailsubj, $mailbody, $mailhead);
      </SCRIPT>
        <span class="style11"><a href="index.html" target="_parent" class="style9">&nbsp;- HOME -</a></span></div></td>
      <td></td>
    </tr>
    <tr>
      <td height="100"></td>
      <td></td>
      <td>&nbsp;</td>
      <td></td>
    </tr>
</table>
</center>
</body>
</html>
