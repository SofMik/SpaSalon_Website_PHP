<?php 
function checkDiscount(){
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year1 = date("Y");
    $date = "$day-$month-$year1";
    $bd = strtotime($date); 
        if ($bd < time()){//если день в этом году уже прошел
        $year1 = date("Y")+1;
        $date = "$day-$month-$year1";
        $bd = strtotime($date); 
        };
    $days= $bd - time();
    $days_until = floor($days/86400); 
    $hours_until = floor(($days%86400)/3600);
    if ($day == date("d") && $month == date("m")){
            $result = "Happy birthday! Congratilations! Today You get your personal discount 5 %! Use it now!"; 
        }
        else {
            $result = "Unfortunately you do not receive a personal discount today!" .  "<br>" .  "<br>" . "But don't worry, try again in $days_until days and $hours_until hours!";
        }
    return $result;
}

function checkTime(){
    $id_dates = date('d.m.Y');
    $id_time = $_SESSION['time'];
    $first_date = $id_dates . " " . $id_time;
    $first_date1 = strtotime($first_date);  
    $time_new = $id_time + 86399;
    $second_date = date('d.m.Y H:i:s', $time_new); 
    $second_date1 = strtotime($second_date); 
    $dics_time = $second_date1 - time();
    $hours = floor(($dics_time%86400)/3600);
    $minutes = floor(($dics_time%3600)/60);
    $seconds = $dics_time%60;
    $res = "You have ". $hours. " hours " . $minutes . " minutes " .  $seconds .  " seconds until the end of the promotion!" . "<br>" . "<br>";
    return $res;
}

?>