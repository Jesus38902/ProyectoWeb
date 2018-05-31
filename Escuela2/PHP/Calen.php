<?php
$date = time();
$day = date('d',$date);
$month = date('m',$date);
$year = date('Y',$date);

$first_day = mktime(0,0,0,$month,1,$year);
$title =  date('F',$first_day);
$day_of_week = date('D',$first_day);

switch($day_of_week){
    case "Sun": $blank = 0;break;
	case "Mon": $blank = 1;break;
	case "Tue": $blank = 2;break;
	case "Wed": $blank = 3;break;
	case "Thu": $blank = 4;break;
	case "Fri": $blank = 5;break;
	case "Sat": $blank = 6;break;
}

switch($title){
    case "January": $title = "Enero";break;
	case "February": $title = "Febrero";break;
	case "March": $title = "Marzo";break;
	case "April": $title = "Abril";break;
	case "May": $title = "Mayo";break;
	case "June": $title = "Junio";break;
	case "July": $title = "Julio";break;
	case "August": $title = "Agosto";break;
	case "September": $title = "Septiembre";break;
	case "October": $title = "Octubre";break;
	case "November": $title = "Noviembre";break;
	case "December": $title = "Diciembre";break;
}
//Fecha actual
$ahora = getdate();
$DiaAct = $ahora["mday"];

$days_in_month = cal_days_in_month(0, $month, $year);

echo "<table border= 6 width= 394 align = center bordercolor=4D8F9>";
echo "<tr><th colspan=60 bgcolor=46A6CE>$title de $year</th></tr>";
echo "<tr><td width=62 bgcolor=47EEF9>Dom</td><td width=62 bgcolor=47EEF9>Lun</td>
                                              <td width=62 bgcolor=47EEF9>Mar</td>
											  <td width=62 bgcolor=47EEF9>Mier</td>
											  <td width=62 bgcolor=47EEF9>Jue</td>
											  <td width=62 bgcolor=47EEF9>Vier</td>
											  <td width=62 bgcolor=47EEF9>Sab</td></tr>";

$day_count =1;

echo"<tr>";
while($blank>0){
   echo "<td></td>";
   $blank = $blank-1;
   $day_count++;
}

$day_num = 1;

while($day_num <= $days_in_month){
    if($day_num == $DiaAct){
	     echo "<td bgcolor=blue>$day_num</td>";
	}else{
	    echo "<td>$day_num</td>";
	}
	$day_num++;
	$day_count++;
	if($day_count > 7){
	      echo "</tr><tr>";
		  $day_count =1;
	}
}

while( $day_count >1 && $day_count <=7){
    echo "<td></td>";
	$day_count++;
}
echo "<font color=blue>***</font>";
echo "Hoy es el dia ".$DiaAct." de ".$title." del ".$year;
echo "<br><br>";
echo "<font color=red>***</font>";
echo "Tienes hasta el dia ".$DiaAct." de ".$title." del ".$year." Para realizar tu pago";
echo "<br><br>";

?>