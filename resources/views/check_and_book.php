<?php
// Adatbázis kapcsolat
$pdo = new PDO('mysql:host=localhost;dbname=gearuprental', 'root', '');

// JSON input feldolgozása
$data = json_decode(file_get_contents("php://input"), true);

$auto_tipus = $data['auto_tipus'];
$berles_kezdete = $data['berles_kezdete'];
$berles_vege = $data['berles_vege'];
$user_name = $data['user_name'];

// Ellenőrzés: Az autó foglalt-e az adott időszakra
$sql = "
    SELECT * 
    FROM berlesek 
    WHERE auto_tipus = :auto_tipus
      AND (
        (berles_kezdete <= :berles_vege AND berles_vege >= :berles_vege) OR
        (berles_kezdete <= :berles_kezdete AND berles_vege >= :berles_kezdete) OR
        (berles_kezdete >= :berles_kezdete AND berles_vege <= :berles_vege)
      )
";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':auto_tipus' => $auto_tipus,
    ':berles_kezdete' => $berles_kezdete,
    ':berles_vege' => $berles_vege,
]);

$results = $stmt->fetchAll();

if (count($results) > 0) {
    // Ha az autó foglalt
    echo json_encode([
        "status" => "error",
        "message" => "Az autó már foglalt az adott időszakra!"
    ]);
} else {
    // Ha az autó szabad, mentjük a foglalást
    $insertSql = "
        INSERT INTO berlesek (user_name, auto_tipus, berles_kezdete, berles_vege, created_at, updated_at)
        VALUES (:user_name, :auto_tipus, :berles_kezdete, :berles_vege, NOW(), NOW())
    ";

    $insertStmt = $pdo->prepare($insertSql);
    $insertStmt->execute([
        ':user_name' => $user_name,
        ':auto_tipus' => $auto_tipus,
        ':berles_kezdete' => $berles_kezdete,
        ':berles_vege' => $berles_vege,
    ]);

    echo json_encode([
        "status" => "success",
        "message" => "Foglalás sikeresen mentve!"
    ]);
}
?>
