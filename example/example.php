<?php
$username = $_POST['username'];
$animal = $_POST['animal'];

// 간단한 출력
echo "<h1>결과</h1>";
echo "<p>이름: " . htmlspecialchars($username) . "</p>";
echo "<p>선택한 동물: " . htmlspecialchars($animal) . "</p>";
?>
