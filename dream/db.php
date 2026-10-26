<?php
$host = "aws-0-ap-northeast-1.pooler.supabase.com";
$port = "6543";
$dbname = "postgres";
$user = "postgres.jrdakonfokyayzlcqnef";
$password = "JILLAjilla1@";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    
    // پەیام بۆ دڵنیابوونەوە لە بەستنەوەی سەرکەوتوو
    echo "<h2 style='color: green;'>✅ بە سەرکەوتوویی بە دەیتابێسی Supabase بەستراوەوە!</h2>";

} catch (PDOException $e) {
    // پەیام بۆ پێشاندانی هەڵە ئەگەر کێشەیەک هەبێت
    echo "<h2 style='color: red;'>❌ کێشە لە بەستنەوەدا هەس:</h2> " . $e->getMessage();
}
?>