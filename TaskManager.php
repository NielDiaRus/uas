<?php
// TaskManager.php (update)
class TaskManager {
    // ...

    public function addTask($task, $priority, $completed, $category) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO tasks (task, priority, completed, category) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $task, $priority, $completed, $category);
        $stmt->execute();
        $stmt->close();
    }

    public function getTasks() {
        global $conn;
        $result = $conn->query("SELECT * FROM tasks");
        $tasks = [];
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
        return $tasks;
    }
}
?>
