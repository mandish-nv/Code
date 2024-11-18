<?php
header('Content-Type: application/json');

// Validate and sanitize the input
if (!isset($_GET['search']) || empty(trim($_GET['search']))) {
    echo json_encode(["error" => "Search parameter is required"]);
    exit();
}

$search = trim($_GET['search']);

// Database connection
$conn = mysqli_connect("localhost", "root", "", "recipetopia");

if (!$conn) {
    echo json_encode(["error" => "Failed to connect to the database"]);
    exit();
}

// Prepare the query to prevent SQL injection
$sql = "SELECT recipeName, chefName, category, difficultyLevel, recipeImage, views 
        FROM recipe 
        WHERE recipeName = ? OR chefName = ?";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    echo json_encode(["error" => "Failed to prepare the query"]);
    exit();
}

mysqli_stmt_bind_param($stmt, "ss", $search, $search);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result) {
    echo json_encode(["error" => "Query execution failed"]);
    exit();
}

// Fetch the results
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

// Return the JSON-encoded data
echo json_encode($data);
exit();


// SQL Injection Prevention: Replaces string interpolation with prepared statements.
// Validation and Sanitization: Ensures the input is non-empty and safe.
// Error Handling: Detects and reports errors for database connection, query preparation, and execution.
// Correct Content-Type Header: Informs the client that the response is JSON.
// Readable and Secure Code: The updated code is easier to maintain and more secure.