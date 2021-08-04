<?php

// duomenu koregavimas/ istrynimas

// vienmatis masyvas
$masyvas= array(1,2,3,4,5,6,7,8,9,10); 

// reikia istrinti/ pakoreguoti kazkuri elementa is esamo vienmacio masyvo 

// uzduotis- istrinti 5 ir 10 elementus is masyvo turinio 
// turime zinoti, kokia yra elemento vieta masyve

// atvaizduojamas masyvas- issivedimas 
var_dump($masyvas); 

// numeris- 5- eiles numeris 4, nes 1 yra 0 
echo $masyvas[4];

// echo $masyvas[9];// 10 elementas
// ARBA
// elementu skaicius masyve isvedamas taip:
$elementuSkaiciusMasyve=count($masyvas); // visi 10 elementu- arba tiek kiek yra 
// paskutinio elemento masyvo isvedimas 
echo $masyvas[$elementuSkaiciusMasyve-1]; // parodomas paskutinis elementas

// funkcija- "atstatyk atgal"
// [] pasirenkamas elementas kuri norima istrinti 
unset($masyvas[4]); 
unset($masyvas[$elementuSkaiciusMasyve-1]);

var_dump($masyvas); 

// ciklu paleidimas foreach
// masyvas sulyginamas as element- sivedimas tik skaiciam 
foreach($masyvas as $elementas); {
    echo $elementas; 
    echo "<br>"; 
} 

// kitas budas nei for- masyvo numeracijos atstatymas su array_values
// tokiu budu nereikia kurti naujo masyvo, o jis atsattomas 
$masyvas=array_values($masyvas); 
var_dump($masyvas); 


// ciklas- for. bandys parodyti neegizstuojancius elementus , kaip pvz 4, rodo klaida
// count- suskaiciuoja kiek elementu yra masyve
// paskutinio elemento (8) net neapima nes jo ir nera- jis nebandomas atvaizduoti 
// tokio pobudzio aprasymas netinkamas 



for($i=0; $i<count($masyvas); $i++) {
    echo $masyvas[$i]; 
    echo "<br>"; 
}

// veiksmai (istrynimo/ redagavimo) su asociatyviu masyvu
// po elementu, - kitaip- klaida
// asociatyvus masyvas su 5 masyvais
$asoc_masyvas= array(
    "el1"=>"1",  
    "el2"=>"2",  
    "el3"=>"3", 
    "el4"=>"4",  
    "el5"=>"5", 
    "el6"=>"6",
); 

// isvedame pries panaikinima 
var_dump($asoc_masyvas); 
// reikia istrinti paskutini elementa ir el4; 
// naudoti unset funkcija ir zinoti kaip kreiptis i funkcija 

// su unset- nurodoma, kurie elementai turi buti panaikinti 
unset($asoc_masyvas["el4"]); 
unset($asoc_masyvas["el6"]);

// isvedame po panaikinimo 
var_dump($asoc_masyvas); 

// foreach 
// cia eiliskumas nera svarbus, nebent jis yra numatytas
foreach($asoc_masyvas as $elementas) {
    echo $elementas; 
    echo "<br>"; 
}

$Kitas_asoc_masyvas= array(
    "elementas10"=>"1",  
    "elementas11"=>"2",  
    "elementas12"=>"3", 
    "elementas13"=>"4",  
    "elementas14"=>"5",
    "elementas15"=>"6", 
); 

var_dump($Kitas_asoc_masyvas); 

for($i=0; $i<16; $i++) {
    // isvedamas konkretus masyvas asociatyviame masyve 
    echo $Kitas_asoc_masyvas["elementas".$i];  // gausime- elementas10
    echo "<br>";
}

// dvimaciam masyvui 
$dvimatisMasyvas = array (
    array(1,2,3,4,5,6,7,8,9), // 0 
    array(1,2,3,4,5,9,10),          // 1 
    array(55,77,66,88),       // 2 
    array("99","88","77","55"),  // 3 
    array(1,2,3,4,5,6,7,8,9), // 4
    array(1,2,3,4,5, 40, 40),          // 5 
    array(55,77,66,88),       // 6 
    array("99","88","77","55"),  // 7
); 

// istrinti visa lentynele
// istrinti pavienius lentyneles elementus 
// unnset funkcija ir zinoti kaip kreiptis i lentynele 

// isvedimas pries unset 
var_dump($dvimatisMasyvas); 

//unset($dvimatisMasyvas[7]); 
//unset($dvimatisMasyvas[3]); 

// isvedimas po unset funkcijos- komandos 
var_dump($dvimatisMasyvas); 


$dvimatisMasyvas=array_values($dvimatisMasyvas); 
var_dump($dvimatisMasyvas); 

// kaip istrinti pavieni lentyneles elementas 
// naudojam unset funkcija 
// kreipiames i pavieni lentyneles elementa s
// trinam 5 lentyneles  5 elementa 

// istrintas elementas, bet sugriuvo numeracija 
unset($dvimatisMasyvas[4][4]);
var_dump($dvimatisMasyvas); 

// eiliskumo atstatymas - nurodant eiliskuma- nurodant lentyneles numeri  
$dvimatisMasyvas[4]=array_values($dvimatisMasyvas[4]); 
var_dump($dvimatisMasyvas); 

// dvimatis masyvas, o masyvo elementai yra asociatyvus masyvai 

$klientai=array(); 

for($i=0; $i< 10; $i++){
        
        $klientas = array(
            "id" => $i+1,
            "vardas" => "vardas".($i+1), 
            "pavarde" => "pavarde".($i+1), 
            "asmens_kodas" => rand(3,6).rand(0,99).rand(1,12).rand(1,31).rand(0,9999), //38512300000

            //atsitiktiniu budu sugeneruota data
            "prisijungimo_data" => rand(1950, 2021)."-".rand(1,12)."-".rand(1,31), 
            "adresas" => "adresas".($i+1), 
            "elpastas" => "vardas".($i+1)."pavarde".($i+1)."@pastas.lt"
        );

        //kaip dabar papildyti masyva $klientai?
        array_push($klientai, $klientas);
    }

    var_dump($klientai); 

    // pvz- 3cio kliento istrynimas, [kliento numetis]; 
    unset($klientai[2]);
    var_dump($klientai); 

    // eiliskumo sutvarkymas 
    $klientai=array_values($klientai); 
    var_dump($klientai); 

    // istrinamas 6 kliento adresas [klientas][trinamas objektas]
    unset($klientai[6]["adresas"]); 
    var_dump($klientai); 


    // 1. sukuriamas masyvas 1,2,3,4,5,6,
    // 2. is masyvo istrinti 3 ir 5 skaicius
    // 3. masyvo pasivertimas i teksta 
    // 4. teksta pasiversime i masyva 

    // sukuriamas skaiciu masyvas 
    $skaiciuMasyvas= array(1,2,3,4,5,6);

    // isvedimas pradzioje
    var_dump($skaiciuMasyvas); 

    // elementu istrynimas 
    unset ($skaiciuMasyvas[2]);
    unset ($skaiciuMasyvas[4]);

    // masyva verciam i teksta 
    $skaiciuMasyvas_tekstas=implode(",", $skaiciuMasyvas); 

    // teskat paverciam i masyva 
    $skaiciuMasyvas=explode(",", $skaiciuMasyvas_tekstas); 

    // isvedimas po pavertimo is/ i teksta 
    var_dump($skaiciuMasyvas); 
    // !!!! islieka eiliskumas- nebereikia array_values !!!! 
    // skaiciai pavirsta tekstu 

// is klientu masyvo istrinsime 3 ir 5 klientus
// masyva pasiversime i teksta
// teksta atversime i masyva 

 $klientai=array(); 

    for($i=0; $i< 10; $i++){
            
    $klientas = array(
        "id" => $i+1,
        "vardas" => "vardas".($i+1), 
        "pavarde" => "pavarde".($i+1), 
        "asmens_kodas" => rand(3,6).rand(0,99).rand(1,12).rand(1,31).rand(0,9999), //38512300000
        "prisijungimo_data" => rand(1950, 2021)."-".rand(1,12)."-".rand(1,31), 
        "adresas" => "adresas".($i+1), 
        "elpastas" => "vardas".($i+1)."pavarde".($i+1)."@pastas.lt"
    );
    
    array_push($klientai, $klientas);
    }

// pirma reikia suplokstinti (for)- tuomet istrinti (unset)   

    // imame for- kiekvieno kliento pavertimui i teksta 
    for ($i=0; $i<count($klientai); $i++) {
        $klientai[$i]=implode(",", $klientai[$i]); 
}

// su unset- panaikiname 2 ir 5 klientus 
    unset($klientai[2]);
    unset($klientai[5]);

// paverciam i teksta
$klientai_tekstas=implode("|", $klientai);
echo $klientai_tekstas; 

// paverciam i masyva 
$klientai=explode("|", $klientai_tekstas); 

// su for- pritaikoma visu klientu 
for($i=0; $i<count($klientai); $i++); 
    $klientai[$i]=explode("|", $klientai_tekstas[$i]);



?> 