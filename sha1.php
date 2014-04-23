
<html>

<head bgcolor="white">

<style type="text/css"><!--



body {

	margin-left: 50px;

	margin-bottom: 50px;

	margin-right: 200px;

	margin-top: 50px;

	font-family: courier, fixed, monospace;

	font-size: 15px;

	color: #363636;

}



h2 {

	font-weight: bold;

}



a{

	text-decoration:none;

	color:black;

}	

 





--></style>

<title>Cryptography || SHA-1</title>
<script src="js/func.js"></script>
<script src="js/sha.js"></script>

<meta name="keywords" content="cryptography tutorial, interactive learning,

cryptography animation, DES, security demonstration, buffer overflow

vulnerabilities, federal cyber service, NSF SFS, scholarship for service,

cyber security, information assurance education, cryptography, security

dimensions, security personnel, NSF security grant, security expertise,

aviation security education, interactive learning in security">

<meta name="description" content="Interactive learning module for computer

security concepts related to cryptography."></head>

<body bgcolor=ADADAD >

<H2>SHA-1</H2>

<p> Enter a message in the text box below. </p>



<form name =  "SHA">



	<textarea rows = "10" name = "Message" cols = "100" wrap = physical  >

	</textarea>





	<br>



	<input type = "button" value = "Convert" onClick = "Convert();" ><br>

	

	<p>Below is a bit level representation of your message.</p>



	<textarea rows = "10" name =Converted cols = "100" readonly wrap = physical  >

	</textarea>



	<br>

	

	<input type = "button" value = "Step 1" onClick  = "Pad();"><br>



	<p>Your message contains <input type = text name = MessageLength size = 6> bits.  The message will be padded to make it

	 448 mod 512 bits long. Since your message is 

	<input type = text name = MessageLength2 size = 6> we will add <input type = text name = PaddedBits size = 6> because:

	<input type = text name = MessageLength3 size = 6> MOD  512 = <input type = text name = ModResult size =6>

	We will add ONE 1 and <input type = text name = PadValue size = 3> ZEROS. After this operation a 

	64 bit value which represents the original length of the message is added. For this particular 

	message the input 

 	value added will be <input type = text name = PadMessageLength size = 64>. So the message after all

	appending operations are complete will look like, at the bit level the text box below. If you look at the end of 

	message you should be able to identify the added bits.</p>





	<textarea rows = "10" name =PaddedMessage cols = "100" wrap = physical >

	</textarea>



	<br>





	
	<input type = "button" value = "Step 3" onClick = "SHA.FinalMessage.value = Sha1.hash(SHA.Message.value);ShowFinalMessage();"><br>



	<textarea rows = "10" name =FinalMessage cols = "100" wrap = physical >

	</textarea>

	<br>

	<input type= "reset" value= "clear">




</form>

<table width="758" border="0" cellspacing="5" cellpadding="5">
  <tr> 
    <td> 
      <div align="center"> 
        <hr align="center" width="25%">
        <p><font face="Georgia, Times New Roman, Times, serif"><b><a href="../index.html">Project 
          Info</a> &#149; <a href="../modules.html">Modules</a> &#149; <a href="../links.html">Links</a> 
          &#149; <a href="file:///G4%20HD/Documents/nsf%20docs/team.html"></a><a href="../papers.html">Papers</a> 
          &#149; <a href="../team.html">Team</a> &#149; <a href="http://www.nsf.gov">NSF</a></b></font></p>
        <p>Last update: 
          <!-- #BeginDate format:Am1 -->August 1, 2002<!-- #EndDate -->
          <img src="../images/spacer.gif" width="21" height="8"> 
          <!-- BEGIN WebSTAT Activation Code -->
          <script type="text/javascript" language="JavaScript" src="http://hits.webstat.com/cgi-bin/wsv2.cgi?34012"></script>
          <noscript> <a href="http://hits.webstat.com"> <img src="http://hits.webstat.com/scripts/wsb.php?ac=34012" border="0" alt="WebSTAT - Free Web Statistics" align="top"></a> 
          </noscript> 
          <!-- END WebSTAT Activation Code -->
        </p>
      </div>
    </td>
  </tr>
</table>
</body>





</html>

