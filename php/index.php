<?php
    $servername = "db";
    $username = "root";
    $password = "root";
    $dbname = "test_db";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Apache + PHP + Mysql rodando perfeitamente com o docker!!";
    }
    catch(PDOException $e)
    {
        echo "Falha na conexão com o banco: " . $e->getMessage();
    }