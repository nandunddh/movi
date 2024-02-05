<?php 
include "DB.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and escape POST data
    $patient_name = mysqli_real_escape_string($conn, $_POST['Patientname']);
    $patient_dob = mysqli_real_escape_string($conn, $_POST['PatientDOB']);
    $baseline = mysqli_real_escape_string($conn, $_POST['Baseline']);
    $_1 = mysqli_real_escape_string($conn, $_POST['1']);
    $_2 = mysqli_real_escape_string($conn, $_POST['2']);
    $_3 = mysqli_real_escape_string($conn, $_POST['3']);
    $_4 = mysqli_real_escape_string($conn, $_POST['4']);
    $_5 = mysqli_real_escape_string($conn, $_POST['5']);
    $_6 = mysqli_real_escape_string($conn, $_POST['6']);
    $_7 = mysqli_real_escape_string($conn, $_POST['7']);
    $_8 = mysqli_real_escape_string($conn, $_POST['8']);
    $_9 = mysqli_real_escape_string($conn, $_POST['9']);
    $_10 = mysqli_real_escape_string($conn, $_POST['10']);
    $_11 = mysqli_real_escape_string($conn, $_POST['11']);
    $_12 = mysqli_real_escape_string($conn, $_POST['12']);
    $_13 = mysqli_real_escape_string($conn, $_POST['13']);
    $_14 = mysqli_real_escape_string($conn, $_POST['14']);
    $_15 = mysqli_real_escape_string($conn, $_POST['15']);
    $physician_signature = mysqli_real_escape_string($conn, $_POST['PhysicianSignature']);
    $submitted_date = mysqli_real_escape_string($conn, $_POST['submiteddate']);
    $patient_signature = mysqli_real_escape_string($conn, $_POST['PatientSignature']);

    // Build the INSERT query
    $sql = "INSERT INTO walking (Patientname, PatientDOB, Baseline, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, PatientSignature, submiteddate, PhysicianSignature) VALUES ('$patient_name', '$patient_dob', '$baseline', '$_1', '$_2', '$_3', '$_4', '$_5', '$_6', '$_7', '$_8', '$_9', '$_10', '$_11', '$_12', '$_13', '$_14', '$_15', '$patient_signature', NOW(), '$physician_signature')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}
// Close connection
$conn->close();
?>

