<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "movi";

// Check if 'entries' key exists in $_POST
if (isset($_POST['entries'])) {
    $entries = json_decode($_POST['entries'], true);

    // Check if $entries is an array
    if (is_array($entries)) {
        try {
            // Create a PDO connection
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Dynamically generate CREATE TABLE statement
            $tableName = 'form2';
            $createTableSQL = "CREATE TABLE IF NOT EXISTS $tableName (id INT AUTO_INCREMENT PRIMARY KEY, ";

            foreach ($entries as $columnName => $columnValue) {
                // This simplistic example assumes all columns are VARCHAR. Adjust as needed.
                $createTableSQL .= "$columnName VARCHAR(255), ";
            }

            $createTableSQL = rtrim($createTableSQL, ', '); // Remove the trailing comma
            $createTableSQL .= ");";

            // Execute the CREATE TABLE statement
            $conn->exec($createTableSQL);

            // Prepare and execute the INSERT statement
            $columns = implode(', ', array_keys($entries));
            $values = implode(', ', array_fill(0, count($entries), '?'));

            $sql = "INSERT INTO $tableName ($columns) VALUES ($values)";
            $stmt = $conn->prepare($sql);

            // Bind parameters
            $types = '';  // Assuming you have mixed data types
            foreach ($entries as $columnValue) {
                $types .= is_numeric($columnValue) ? 'i' : 's';  // Use 'i' for integers and 's' for strings
            }
            $stmt->bind_param($types, ...array_values($entries));

            // Execute the statement
            if ($stmt->execute()) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 'message' => $stmt->error]);
            }

            // Close the statement
            $stmt->close();
        } catch (PDOException $e) {
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }

        // Close the database connection
        $conn = null;
    } else {
        echo json_encode(['status' => 'error', 'message' => "'entries' is not an array."]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => "'entries' key not found in POST data."]);
}
?>
