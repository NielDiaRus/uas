// script.js (update)

// Function to set a cookie
// script.js

function addTask() {
    // Ambil nilai dari input formulir
    var taskValue = document.getElementById("task").value;
    var priorityValue = document.getElementById("priority").value;
    var completedValue = document.getElementById("completed").checked ? "Yes" : "No";
    var categoryValue = document.querySelector('input[name="category"]:checked').value;

    // Implementasi logika untuk menambahkan tugas ke dalam tabel
    // ...

    // Contoh: Menampilkan nilai input di console
    console.log("Task:", taskValue);
    console.log("Priority:", priorityValue);
    console.log("Completed:", completedValue);
    console.log("Category:", categoryValue);
}
