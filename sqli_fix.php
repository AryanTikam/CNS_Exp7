$stmt = $pdo->prepare('SELECT * FROM users WHERE user_id = :id'); 
$stmt->execute([':id' => $id]); 
$user = $stmt->fetch();
