<?php

//1. Írassuk ki a szorzótáblát az alábbi formában. Egy névtelen függvényt írjunk, amely paraméterként megkap egy n számot (pld. n=10-re lásd az ábrát). A színt egy globális változóként adjuk át (erre closur-t használunk):

$sorokSzama = 10;
$szorzotabla = function($n) use ($sorokSzama) {
    echo "<table border='1' style='border-collapse: collapse;'>";
    for ($i = 1; $i <= $sorokSzama; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $sorokSzama; $j++) {
            $result = $i * $j;
            echo "<td style='border: 1px solid; padding: 5px;'>$i x $j = $result</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
};

$szorzotabla($sorokSzama);


//2.Az alábbi asszociatív tömböt felhasználva állítsuk elő a következő kimenetet (figyelem: a város nevek piros színnel vannak kiíratva): $orszagok = array("Magyarország"=>"Budapest", " Románia" =>"Bukarest", "Belgium"=>"Brussels","Austria"=>" Vienna","Poland"=>"Warsaw")
//Példa kimenet:
//„Magyarország fővárosa Budapest”
//„Románia fővárosa Bukarest”  stb.


$orszagok = array("Magyarország" => "Budapest", "Románia" => "Bukarest", "Belgium" => "Brussels", "Austria" => "Vienna", "Poland" => "Warsaw");

foreach ($orszagok as $orszag => $fovaros) {
    echo "<span style='color:red'>$orszag</span> fővárosa $fovaros<br>";
}


//3. A napok kétdimenziós tömböt írasd ki az alábbi formában (figyelem: a kedd, csütörtök és szombat ki van emelve (bold) a kiírásnál):

$napok = array(
"HU" => array("H" , "<b>K</b>" , "Sze" , "<b>Cs</b>" , "P" , "<b>Szo</b>", "V"),
"EN" => array("M" , "<b>Tu</b>" , "W" , "<b>Th</b>" , "F" , "<b>Sa</b>" , "Su"),
"DE" => array("Mo" , "<b>Di</b>" , "Mi" , "<b>Do</b>" , "F" , "<b>Sa</b>", "So"),
);

foreach ($napok as $nyelv => $hetnapok) {
echo $nyelv . ": ";
echo implode(", ", $hetnapok) . "<br>";
}

//4.feladat

function atalakit($tomb, $mod) {
    if ($mod === "kisbetus") {
        return array_map('strtolower', $tomb);
    } elseif ($mod === "nagybetus") {
        return array_map('strtoupper', $tomb);
    }
}

$szinek = array('A' => 'Kek', 'B' => 'Zold', 'C' => 'Piros');

$kisbetusSzinek = atalakit($szinek, "kisbetus");
print_r($kisbetusSzinek);

$nagybetusSzinek = atalakit($szinek, "nagybetus");
print_r($nagybetusSzinek);



//5.feladat


$bevasarloLista = [];

function hozzaadElem($nev, $mennyiseg, $egysegar) {
    global $bevasarloLista;
    $bevasarloLista[] = ["nev" => $nev, "mennyiseg" => $mennyiseg, "egysegar" => $egysegar];
}

function eltavolitElem($nev) {
    global $bevasarloLista;
    foreach ($bevasarloLista as $index => $elem) {
        if ($elem["nev"] == $nev) {
            unset($bevasarloLista[$index]);
        }
    }
}

function kiirLista() {
    global $bevasarloLista;
    foreach ($bevasarloLista as $elem) {
        echo "Név: " . $elem["nev"] . ", Mennyiség: " . $elem["mennyiseg"] . ", Egységár: " . $elem["egysegar"];
    }
}

function osszegzOsszkoltseg() {
    global $bevasarloLista;
    $osszkoltseg = 0;
    foreach ($bevasarloLista as $elem) {
        $osszkoltseg += $elem["mennyiseg"] * $elem["egysegar"];
    }
    return $osszkoltseg;
}

// Tesztelés
hozzaadElem("Kenyer", 2, 8.5);
hozzaadElem("Viz", 1, 2.5);

echo "Bevásárlólista:\n";
kiirLista();

echo "Összköltség: " . osszegzOsszkoltseg() . " \n";

eltavolitElem("Kenyer");

echo "Bevásárlólista a Kenyer eltávolítása után:\n";
kiirLista();

echo "Összköltség: " . osszegzOsszkoltseg() . " \n";

?>