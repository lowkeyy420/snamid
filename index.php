<?php

// Establish connection to db
try {
    $pdo = new PDO("mysql:host=172.17.0.3;port=3306;dbname=Redlock", "user", "password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $err) {
    die("Connection Failed :" . $err->getMessage());
}

// Get Users query
 $query = $pdo->query('SELECT * FROM Users');

$count = 0;

echo "<table><tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jabatan</th></tr>";
while ($result = $query->fetch()) {
    echo '<tr><td>'.$result['ID'].'</td>';
    echo '<td>'.$result['Nama'].'</td>';
    echo '<td>'.$result['Alamat'].'</td>';
    echo '<td>'.$result['Jabatan'].'</td></tr>';
    $count = $count + 1;
}

echo "<p>". $count . "</p>";
echo "</table>";

?>