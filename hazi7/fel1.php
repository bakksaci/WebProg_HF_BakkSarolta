<?php

if (!isset($_COOKIE["veletlen_szam"])) {
    
    $veletlen_szam = rand(1, 100); 
    setcookie("veletlen_szam", $veletlen_szam, time() + 3600); 
} else {
    
    $veletlen_szam = $_COOKIE["veletlen_szam"];
}

if (isset($_POST["elkuld"])) {
    $tipp = $_POST["tipp"];
    
    if (is_numeric($tipp)) {
        if ($tipp == $veletlen_szam) {
            echo "Gratulálunk! Eltaláltad a számot: $veletlen_szam";
            setcookie("veletlen_szam", "", time() - 3600); 
        } else {
            echo "Sajnáljuk, próbáld újra!";
        }
    } else {
        echo "Érvénytelen bemenet. Kérjük, adj meg egy számot!";
    }
}
?>

<form method="POST" action="">
    <br>Tippeld meg a számot:
    <input type="number" name="tipp">
    <br>
    <input type="submit" name="elkuld" value="Ellenőrzés">
</form>
