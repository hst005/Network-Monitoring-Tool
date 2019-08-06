<?php
ini_set('display_errors','1');
if(isset($_POST['r1']) && isset($_POST['dropdown'])){
$rad = $_POST["r1"];
$sel = $_POST["dropdown"];

	if($rad=="arp"){
		if($sel=="Timestamp"){
		echo "Arp Packets";
		echo "Timestamp";
		header("Location: timestamparp");

		}
		else if($sel=="SIP"){
		echo "Arp Packets";
		echo "SIP";
		header("Location: siparp");
		}
		else if($sel=="DIP"){
		echo "Arp Packets";
		echo "DIP 0 byte file";
		//header("Location: diparp");
		}
		else if($sel=="DPort"){
		echo "Arp Packets";
		echo "DPort not possible";
		//header("Location: dportarp");
		}
		else if($sel=="SPort"){
		echo "Arp Packets";
		echo "SPort";
		//header("Location: sportarp");

		}
		else if($sel=="SMAC"){
		echo "Arp Packets";
		echo "SMAC";
		header("Location: smacarp");
		}
		else if($sel=="DMAC"){
		echo "Arp Packets";
		echo "DMAC";
		header("Location: dmacarp");
		}
		else if($sel=="Plength"){
		echo "Arp Packets";
		echo "Plength";
		header("Location: lengtharp");
		}
		else if($sel=="All"){
		echo "Arp Packets";
		echo "Detailed View";
		header("Location: arppackets");
		}


	}
	else if($rad=="udp"){
		if($sel=="Timestamp"){
		echo "UDP Packets";
		echo "Timestamp";
		header("Location: timestampudp");
		}
		else if($sel=="SIP"){
		echo "UDP Packets";
		echo "SIP";
		header("Location: sipudp");
		}
		else if($sel=="DIP"){
		echo "UDP Packets";
		echo "DIP";
		header("Location: dipudp");
		}
		else if($sel=="DPort"){
		echo "UDP Packets";
		echo "DPort";
		header("Location: dportudp");
		}
		else if($sel=="SPort"){
		echo "UDP Packets";
		echo "SPort";
		//header("Location: sportudp");
		}
		else if($sel=="SMAC"){
		echo "UDP Packets";
		echo "SMAC";
		header("Location: smacudp");
		}
		else if($sel=="DMAC"){
		echo "UDP Packets";
		echo "DMAC";
		header("Location: dmacudp");
		}
		else if($sel=="Plength"){
		echo "UDP Packets";
		echo "Plength";
		header("Location: lengthudp");
		}
		else if($sel=="All"){
		echo "UDP Packets";
		echo "Detailed View";
		header("Location: udppackets");
		}


	}
	else if($rad=="tcp"){
		if($sel=="Timestamp"){
		echo "TCP Packets";
		echo "Timestamp";
		header("Location: timestamparp");
		
		}
		else if($sel=="SIP"){
		echo "TCP Packets";
		echo "SIP";
		header("Location: siptcp");
		}
		else if($sel=="DIP"){
		echo "TCP Packets";
		echo "DIP";
		header("Location: diptcp");
		}
		else if($sel=="DPort"){
		echo "TCP Packets";
		echo "DPort";
		header("Location: dporttcp");
		}
		else if($sel=="SPort"){
		echo "TCP Packets";
		echo "SPort";
		//header("Location: sporttcp");
		}
		else if($sel=="SMAC"){
		echo "TCP Packets";
		echo "SMAC";
		header("Location: smactcp");
		}
		else if($sel=="DMAC"){
		echo "TCP Packets";
		echo "DMAC";
		header("Location: dmactcp");
		}
		else if($sel=="Plength"){
		echo "TCP Packets";
		echo "Plength";
		header("Location: lengthtcp");
		}
		else if($sel=="All"){
		echo "TCP Packets";
		echo "Detailed View";
		header("Location: tcppackets");
		}


	}
}
?>
<!DOCTYPE html>
<html>	
	<title>Choice of packets</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<body>
		<div class="box">
		
			<h1>Choose the type of packets you need</h1>
			<form id = "login" method="POST" action="#">
				
				<input  value="arp" type="radio" name="r1">Arp<br>
				<input  value="tcp" type="radio" name="r1">Tcp<br>
				<input  value="udp" type="radio" name="r1">Udp<br>
				
<p><select name="dropdown">
	<option value="Timestamp">Timestamp</option>
	<option value="SIP">Source IP</option>
	
	<option value="SMAC">Source MAC</option>
	<option value="DIP">Destination IP</option>
	<option value="SPort 0">Source Port</option>
	<option value="DPort">Destination Port</option>
	<option value="DMAC">Destination MAC</option>
	<option value="Plength">Plength</option>
	<option value="All">all</option>
	
		
</select>	
				<input type = "submit"  value="Submit "onclick="loginOnClick()" ><br><br>
				</form>
		<div>
	</body>			
</html>
