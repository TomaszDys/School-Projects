<html>
<head>
  <title>Program</title>
</head>
<body style="background-colour:#131313;background-image:url('tlo.jpg');background-repeat: no repeat;background-position: center center;">

<?
				
$t=$_GET['wartosc'];
if($t==0){
echo"Nie mo¿na";
}
else{
?><center><table style="background: rgba(255, 255, 255, 0.6);padding: 10px;"><tr style="font-size:35;font-weight:800;text-align:center;">
<td style="font-size:35;font-weight:600;text-align:center;text-shadow: 0px 0px 10px white;">
<? $h=1000000/$t;
 $me=$t*41666666/($h*$t);
 $w=$t*77586206/($h*$t);
 $z=$t*107758620/($h*$t);
 $m=$t*163793103/($h*$t);
 $j=$t*558908045/($h*$t);
 $s=$t*1025143678/($h*$t);
 $u=$t*2061781609/($h*$t);
 $n=$t*3230603448/($h*$t);
 $cal=($z/1000)/0.14;
 	echo"Promien \n orbity (m): \n";?><br><?
	echo"Merkury: " ;
	echo number_format($me, 2,',',' ');?><br><?
	echo"Wenus:   " ;
	echo number_format($w, 2,',',' ');?><br><?
	echo"Ziemia:  " ;
	echo number_format($z, 2,',',' ');?><br><?
	echo"Mars:    " ;
	echo number_format($m, 2,',',' ');?><br><?
	echo"Jowisz:  " ;
	echo number_format($j, 2,',',' ');?><br><?
	echo"Saturn:  " ;
	echo number_format($s, 2,',',' ');?><br><?
	echo"Uran:    " ;
	echo number_format($u, 2,',',' ');?><br><?
	echo"Neptun:  " ;
	echo number_format($n, 2,',',' ');?><br><?
	 
		
	
}
//$tablica ma teraz 3 elementy!
	?></td><td style="font-size:35;font-weight:600;text-align:center;text-shadow: 0px 0px 10px white;"><?
	echo ("Prêdkosæ swiat³a(km/h): ");?><br><?
	echo number_format($cal, 2,',',' ');
	if($cal<=10){	?><br><img height="250" width="250" src="walk.gif">
	<?
	}elseif($cal<=30){?><br><img height="250" width="250" src="run.gif"><?}
	elseif($cal<=50){?><br><img height="250" width="250" src="rower.gif"><?}
	elseif($cal<=200){?><br><img height="250" width="250" src="samochód.gif"><?}
	?>
	</td><td style="background-image:url('images/mars.png');"></td>
<td style="font-size:35;font-weight:600;text-align:center;text-shadow: 0px 0px 10px white;"><?$h=1000000/$t;
 $me=$t*352011.4/($h*$t);
 $w=$t*869252.8/($h*$t);
 $z=$t*919540.2/($h*$t);
 $m=$t*488505.7/($h*$t);
 $j=$t*10272988/($h*$t);
 $s=$t*8304597/($h*$t);
 $u=$t*4008620/($h*$t);
 $n=$t*3556034/($h*$t);

 	echo"Srednica planety (cm): \n";?><br><?
	echo"Merkury: " ;
	echo number_format($me, 2,',',' ');?><br><?
	echo"Wenus:   " ;
	echo number_format($w, 2,',',' ');?><br><?
	echo"Ziemia:  " ;
	echo number_format($z, 2,',',' ');?><br><?
	echo"Mars:    " ;
	echo number_format($m, 2,',',' ');?><br><?
	echo"Jowisz:  " ;
	echo number_format($j, 2,',',' ');?><br><?
	echo"Saturn:  " ;
	echo number_format($s, 2,',',' ');?><br><?
	echo"Uran:    " ;
	echo number_format($u, 2,',',' ');?><br><?
	echo"Neptun:  " ;
	echo number_format($n, 2,',',' ');?><br></td>
</tr></table></center>
       
</body>
</html>
