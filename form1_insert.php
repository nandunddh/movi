<?php 
include "DB.php";

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape and sanitize form data
    $patient_name = mysqli_real_escape_string($conn, $_POST['Patient_Name']);
    $dob = mysqli_real_escape_string($conn, $_POST['DOB']);
    $physician = mysqli_real_escape_string($conn, $_POST['Physician']);
    $procedure_date = mysqli_real_escape_string($conn, $_POST['Procedure_Date']);
    $procedure = mysqli_real_escape_string($conn, $_POST['Procedure']);
    $allergies = mysqli_real_escape_string($conn, $_POST['Allergies']);
    $labs_names = mysqli_real_escape_string($conn, $_POST['labs_names']);
    $insurance = mysqli_real_escape_string($conn, $_POST['Insurance']);
    $primary_insurance = mysqli_real_escape_string($conn, $_POST['Primary_Insurance']);
    $primary_policy_number = mysqli_real_escape_string($conn, $_POST['Primary_Policy_Number']);
    $secondary_insurance = mysqli_real_escape_string($conn, $_POST['Secondary_Insurance']);
    $secondary_policy_number = mysqli_real_escape_string($conn, $_POST['Secondary_Policy_Number']);
    $authorization = mysqli_real_escape_string($conn, $_POST['Authorazation']);
    $requested_date = mysqli_real_escape_string($conn, $_POST['requested_date']);
    $patients_language = mysqli_real_escape_string($conn, $_POST['Patients_language']);
    $patients_transportation = mysqli_real_escape_string($conn, $_POST['patients_transportation']);
    $signature = mysqli_real_escape_string($conn, $_POST['signature']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $fax_number = mysqli_real_escape_string($conn, $_POST['fax_number']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO form1 
            (patient_name, dob, physician, procedure_date, `procedure_name`, allergies, labs_names, insurance, 
             primary_insurance, primary_policy_number, secondary_insurance, secondary_policy_number, 
             authorization, requested_date, patients_language, patients_transportation, `signature`, 
             submitted_date, contact_number, fax_number)
            VALUES 
            ('$patient_name', '$dob', '$physician', '$procedure_date', '$procedure', '$allergies', '$labs_names', 
             '$insurance', '$primary_insurance', '$primary_policy_number', '$secondary_insurance', 
             '$secondary_policy_number', '$authorization', '$requested_date', '$patients_language', 
             '$patients_transportation', '$signature', NOW(), '$contact_number', '$fax_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}

// Close connection
$conn->close();
?>