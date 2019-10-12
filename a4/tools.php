<?php
session_start();

$moviesObject = [
  'ACT' => [
    'title' => 'Avengers: Endgame',
    'rating' => 'M',
    'description' => '<p> Avengers Discription </p>',
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
    'description' => '<p> Top End Wedding Discription </p>',
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
    'description' => '<p> Dumbo Discription </p>',
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
    'description' => '<p> Avengers Discription </p>',
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

function validateUserInput() {
  $errorsfound = false;


  if(!empty($_POST)) {
    $name = $_POST['cust']['name']; 
    $email = $_POST['cust']['email']; 
    $mobileno = $_POST['cust']['mobile']; 
    $card = $_POST['cust']['card']; 
    $cardExpiryMonth = $_POST['cust']['expiryMonth']; 
    $cardExpiryYear = $_POST['cust']['expiryYear'];
    $movieId = $_POST['movie']['id'];
    $movieDay = $_POST['movie']['day'];
    $movieHour = $_POST['movie']['hour'];
    $qtySeats = [
      'STA' => $_POST['seats']['STA'],
      'STP' => $_POST['seats']['STP'],
      'STC' => $_POST['seats']['STC'],
      'FCA' => $_POST['seats']['FCA'],
      'FCP' => $_POST['seats']['FCP'],
      'FCC' => $_POST['seats']['FCC']

    ];
    $seats = $_POST['seats']; 
    $movie = $_POST['movie'];

    if(empty($name)){
      $nameError = '<span style="color:red"> Must Enter Name. </span>';
      $errorsfound = true;
    } else {
      if(!is_string($name)) {
        $nameError = '<span style="color:red"> Must Letters Only. </span>';
        $errorsfound = true;
      }
    }
    if(empty($email)) {
      $emailError = '<span style="color:red"> Must Enter Email. </span>';
      $errorsfound = true;
    } else {
      if(filter_var($email,FILTER_VALIDATE_EMAIL) == false) {
        $emailError = '<span style="color:red"> Email Format Incorrect. </span>';
        $errorsfound = true;
      }
    }
    if(empty($mobileno)) {
      $mobileError = '<span style="color:red"> Must Enter Mobile No. </span>';
      $errorsfound = true;
    } else {
      if(!preg_match("^[(04\)|04|\+614)( ?\d)}{6}")) {
        $mobileError = '<span style="color:red"> Must Enter Correct Mobile No. </span>';
        $errorsfound = true;
      }
    }
    if(empty($card)) {
      $cardError = '<span style="color:red"> Must Enter Card No. </span>';
      $errorsfound = true;
    } else {
      if(!preg_match("[(\d)]{4} ?[(\d)]{4} ?[(\d)]{4} ?[(\d)]{4} ?")) {
        $cardError = '<span style="color:red"> Must Enter Correct Card No. </span>';
        $errorsfound = true;
      }
    }
    if(empty($cardExpiryMonth)) or (empty($cardExpiryYear)) { 
      $cardError = '<span style="color:red"> Must Enter Card Expire Details! </span>';
      $errorsfound = true;
    } else {
      if(!validateCard($cardExpiryMonth,$cardExpiryYear)) {
        $cardError = '<span style="color:red"> Card Expired! </span>';
        $errorsfound = true;
      }
    } else {
      if(!$errorsfound) {
        calcResult($seats,$movieDay,$movieHour); 
      }
    }
  }


}

/*
No idea how to implement the calculate result.
*/
function calcResult($seats,$movieDay,$movieHour) {
  global $pricesObject;
  $FullOrDis = isFullorDiscount($movieDay,$movieHour);
  $total = 0;
  foreach($seats as $seat => $seatcode) {
    $total += $seats[$seatcode] * $pricesObject[$FullOrDis][$seatcode];
  } 
  return $total;
}




function validateCard($cardmonth,$cardYear) { 
  $expires = \DateTime::createFromFormat('mY',$cardmonth.$cardYear);
  $current = new \DateTime();
  if ($expires < $current) {
    return false;
  } else {
    return true; 
  }
}

function isFullorDiscount($movieDay,$movieHour) {
  $ret = "full";
  if($movieDay == "MON" || $movieDay == "WED")
  {
    $ret = "discount"
  }
  if(($movieDay"TUE" || $movieDay == "THU" || $movieDay == "FRI") && $movieHour=="T12")
  {
    $ret = "discount" 
  }
  return $ret;

}





?> 