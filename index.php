<?php

$divider = '<br/><br/>';
$name = 'Jane';
$rating = 2;

$time = date("g:i a");

$rate = true;
// 1.1

if($name == 'Kathrin') {
    echo 'Hello Kathrin';
}
else {
    echo 'Nice Name';
}
// 1.2 
echo "$divider";

if($rating >=1 && $rating <=10) {
    echo 'Thank you for rating';
}
else {
    echo 'Invalid rating, only numbers between 1 and 10';

}

// 2.1
echo "$divider";


if($time < 12) {
    echo 'Good morning Kathrin';
}
elseif ($time > 12 && $time < 7) {
    echo 'Good afternoon Kathrin';
}
else {
    echo 'Good evening Kathrin';
}
echo "$divider";
var_dump($rating );


// 2.2 
echo "$divider";
if ($rating <= 10) {
    if ($rate )
    echo 'You already voted';
    else  {
        echo 'Thanks for voting';
   
    }
    
}
else {
    echo 'Number has value more than 10';
}


//3 
$voters = array(
    "Marija" => array("voted" => false, "rating" => 5),
    "Nikola" => array("voted" => true, "rating" => 8),
    "Angela" => array("voted" => false, "rating" => 90),
    
);

foreach ($voters as $voter => $voterData) {
    $hasVoted = $voterData["voted"];
    $rating = $voterData["rating"];

    $currentHour = date('H');
    if ($currentHour < 12) {
        echo "Good morning $voter,<br>";
    } elseif ($currentHour < 19) {
        echo "Good afternoon $voter,<br>";
    } else {
        echo "Good evening $voter,<br>";
    }

    if ($hasVoted) {
        if ($rating >= 1 && $rating <= 10) {
            echo "You already voted with a $rating.<br><br>";
        } else {
            echo "Invalid rating, only numbers between 1 and 10.<br><br>";
        }
    } else {
        if ($rating >= 1 && $rating <= 10) {
            echo "Thanks for voting with a $rating.<br><br>";
        } else {
            echo "Invalid rating, only numbers between 1 and 10.<br><br>";
        }
    }
}

?>