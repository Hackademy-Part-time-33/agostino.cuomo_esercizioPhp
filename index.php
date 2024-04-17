<?php 
/* TRACCIA 1----------------- */
$integer = 4;
$float = 3.9;
$string = "stringa";
$bolean = true;

const FLOAT = 3.9;
const INTEGER = 4;
const BOLEAN= true;
const STRING= "stringa";

/*  var_dump($integer, $float, $string, $bolean);

 var_dump(FLOAT, INTEGER, BOLEAN, STRING); */

/*  TRACCIA 2----------------- */

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perché";
$text6 = '$text2';
$text7 = 'bevuto';
$text8 = "tutto";

/* echo $text1." ".$text2." ".$text3.$text4; */


/* TRACCIA 3------------- */
$words1 = [
    'una', 67, 'vita', 'colle', 'mi', 'rosso',
    [
     'oscura','era',89,
     ['mezzo', 
     [ 'cammin','Nel',
       [
        'selva','la',
        [
         'via','una',true,
        ]
       ],
      ]
     ],'ritrovai','per'
    ],'diritta'
   ];
   
   $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
     'Virgilio',
     'smarrita',
     'ché'
    ]
   ];

   $results = $words1[6][3][1][1].' '.$words1[6][3][0].' '.'del'.' '.$words1[6][3][1][0].' '.'di'.' '.$words2['elemento2'].' '.$words1[2].','.' '.$words1[4].' '.$words1[6][4].' '.$words1[6][5].' '.$words1[6][3][1][2][2][1].' '.$words1[6][3][1][2][0].$words1[6][0].','.' '.$words2['elemento3'][2].' '.$words1[6][3][1][2][1].' '.$words1[7].' '.$words1[6][3][1][2][2][0].' '.$words1[6][1].' '.$words2['elemento3'][1];

  
   echo $results;

?> 