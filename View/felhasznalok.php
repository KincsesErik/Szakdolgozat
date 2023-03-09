<?php
// Adatbázisból felhasználók lekérése
$sql = "SELECT id, felhasznalonev, nev, jogosultsag FROM felhasznalok";
$result = $conn->query($sql);

// Felhasználók tömbbe rendezése
$felhasznalok = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $felhasznalo = array(
            "id" => $row["id"],
            "felhasznalonev" => $row["felhasznalonev"],
            "nev" => $row["nev"],
            "jogosultsag" => $row["jogosultsag"]
        );
        array_push($felhasznalok, $felhasznalo);
    }
}

// Válasz küldése JSON formátumban
header('Content-Type: application/json');
echo json_encode($felhasznalok);

// Adatbázis kapcsolat bezárása
$conn->close();
?>