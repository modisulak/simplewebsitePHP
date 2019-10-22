<?php
session_start();

$moviesObject = [
  'ACT' => [
    'title' => 'Avengers: Endgame',
    'rating' => 'M',
    'description' => '<p> Avengers Description </p>',
    'screenings' => [
      'WED' => 'T21',
      'THU'=> 'T21',
      'FRI'=> 'T21',
      'SAT'=> 'T18',
      'SUN'=> 'T18',
    ]
  ],
  'RMC' => [
    'title' => 'Top End Wedding',
    'rating' => 'M',
    'description' => '<p> Top End Wedding Description </p>',
    'screenings' => [
      'MON' => 'T18',
      'TUE'=> 'T18',
      'SAT'=> 'T15',
      'SUN'=> 'T15',
    ]
  ],
  'ANM' => [
    'title' => 'Dumbo',
    'rating' => 'M',
    'description' => '<p> Dumbo Description </p>',
    'screenings' => [
      'MON' => 'T12',
      'TUE'=> 'T12',
      'WED' => 'T18',
      'THU'=> 'T18',
      'FRI' => 'T18',
      'SAT'=> 'T12',
      'SUN' => 'T12',

    ]
  ],'AHF' => [
    'title' => 'The Happy Prince',
    'rating' => 'M',
    'description' => '<p> Avengers Description </p>',
    'screenings' => [
      'WED' => 'T12',
      'THU'=> 'T12',
      'FRI'=> 'T12',
      'SAT'=> 'T21',
      'SUN'=> 'T21',
    ]
  ]

];

$pricesObject = [
  'full' => [
    'FCA' =>   30,
    'FCP' => 27,
    'FCC' => 24,
    'STA' => 19.8,
    'STP' => 17.5,
    'STC' =>15.3
  ],
  'disc' => [
    'FCA' => 24,
    'FCP' => 22.5,
    'FCC' => 21,
    'STA' => 14,
    'STP' =>12.5,
    'STC' => 11
  ]
];  

//initialise variables  
    $name = "";
    $email = "";
    $mobileno = "";
    $card = "";
    $cardExpiryMonth =  "";
    $cardExpiryYear = "";
    $movieId = "";
    $movieDay ="";
    $movieHour = "";
    $qtySeats = "";
    $seats = "";
    $movie = "";
    
    $nameError = "";
    $emailError = "";
    $mobileError = "";
    $cardError = "";
    



function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else 
    echo $ret; 
}

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
    echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}

function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "/* Generated with A4's php2js() function */";
  echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
  echo "</script>\n\n";
}


function calcResult($seats,$movieDay,$movieHour) 
{
  global $pricesObject;
  $FullOrDis = isFullorDiscount($movieDay,$movieHour);
  $total = 0;
  foreach($seats as $seatcode => $quantity) 
  {
    $total += $quantity * $pricesObject[$FullOrDis][$seatcode];
  } 
   $gst= ($total*11)/100;
   $totalGst =$total+$gst;
   return round($totalGst,2);
}

function validateCard($cardExpiryMonth,$cardExpiryYear)
{ 
$expires = \DateTime::createFromFormat('mY', $cardExpiryMonth.$cardExpiryYear); 
$now= new \DateTime();
$nowFormat = $now->format('mY');
if ($expires < $nowFormat) 
{
    return false;
}
   return true;
}
    




function isFullorDiscount($movieDay,$movieHour) 
{
  $ret = "full";
  if($movieDay == "MON" || $movieDay == "WED"){
    $ret = "disc";
  }
  if(($movieDay == "TUE" || $movieDay == "THU" || $movieDay == "FRI") && $movieHour=="T12")
  {
    $ret = "disc"; 
  }
  return $ret;
}



?> 