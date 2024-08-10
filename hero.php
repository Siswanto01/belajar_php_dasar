<?php

// a == b
// a < b
// a > b
// a =< b
// a >= b
// a != b
// if (Kondisi) {
//     //true
// } else {
//     //false
// }

$namaHeroMl = "Wanto";
$level = 4;


// variabel = (kondisi) ? true : false;
$skill = $level <= 4 ? $namaHeroMl." Belum memiliki skill" : $namaHeroMl." Sudah memiliki skill";
echo $skill;



// switch ($level) {
//     case 2 :
//         echo $namaHeroMl. " Hanya Memiliki Skill 1";
//         break;
//     case 3 :
//         echo $namaHeroMl. " Hanya Memiliki Skill 2";
//         break;
//     case 4 :
//         echo $namaHeroMl. " Sudah Memiliki Skill 1, 2, dan 3";
//         break;
//     case 5 :
//         echo $namaHeroMl. " Waktunya War dan Rusuh";
//         break;
    
//     default:
//         echo $namaHeroMl. " keluar dari lane";
//         break;
// }

// if($level < 4) {
//     echo $namaHeroMl. " belum memiliki ulti";
// } else if($level >= 4) {
//     echo $namaHeroMl. " tidak memiliki ulti";
// } else {
//     echo $namaHeroMl. " keluar dari lane";
// }