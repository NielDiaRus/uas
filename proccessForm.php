<?php
// processForm.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $task = $_POST["task"];
    $priority = $_POST["priority"];
    $completed = isset($_POST["completed"]) ? "Yes" : "No";
    $category = $_POST["category"];

    // Implementasi logika untuk menyimpan data (session atau basis data)
    // ...

    // Contoh: Menampilkan nilai input
    echo "Task: $task<br>";
    echo "Priority: $priority<br>";
    echo "Completed: $completed<br>";
    echo "Category: $category<br>";
} else {
    echo "Invalid request method.";
}
?>
