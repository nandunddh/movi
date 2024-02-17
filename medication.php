<?php 
include "DB.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and escape POST data
    $source = mysqli_real_escape_string($conn, $_POST['Source']);
    $source_other = mysqli_real_escape_string($conn, $_POST['source_Other']);
    $allergie_1 = mysqli_real_escape_string($conn, $_POST['allergie-1']);
    $allergie_2 = mysqli_real_escape_string($conn, $_POST['allergie-2']);
    $allergie_3 = mysqli_real_escape_string($conn, $_POST['allergie-3']);
    $allergie_4 = mysqli_real_escape_string($conn, $_POST['allergie-4']);
    $medication_1 = mysqli_real_escape_string($conn, $_POST['medication-1']);
    $medication_2 = mysqli_real_escape_string($conn, $_POST['medication-2']);
    $medication_3 = mysqli_real_escape_string($conn, $_POST['medication-3']);
    $medication_4 = mysqli_real_escape_string($conn, $_POST['medication-4']);
    $dose_1 = mysqli_real_escape_string($conn, $_POST['dose-1']);
    $dose_2 = mysqli_real_escape_string($conn, $_POST['dose-2']);
    $dose_3 = mysqli_real_escape_string($conn, $_POST['dose-3']);
    $dose_4 = mysqli_real_escape_string($conn, $_POST['dose-4']);
    $direction_1 = mysqli_real_escape_string($conn, $_POST['direction-1']);
    $direction_2 = mysqli_real_escape_string($conn, $_POST['direction-2']);
    $direction_3 = mysqli_real_escape_string($conn, $_POST['direction-3']);
    $direction_4 = mysqli_real_escape_string($conn, $_POST['direction-4']);
    $hold_1 = mysqli_real_escape_string($conn, $_POST['hold-1']);
    $hold_2 = mysqli_real_escape_string($conn, $_POST['hold-2']);
    $hold_3 = mysqli_real_escape_string($conn, $_POST['hold-3']);
    $hold_4 = mysqli_real_escape_string($conn, $_POST['hold-4']);
    $rhesume_1 = mysqli_real_escape_string($conn, $_POST['rhesume-1']);
    $rhesume_2 = mysqli_real_escape_string($conn, $_POST['rhesume-2']);
    $rhesume_3 = mysqli_real_escape_string($conn, $_POST['rhesume-3']);
    $rhesume_4 = mysqli_real_escape_string($conn, $_POST['rhesume-4']);
    $discontinuemedications = mysqli_real_escape_string($conn, $_POST['DISCONTINUEMEDICATIONS']);
    $new_medication_1 = mysqli_real_escape_string($conn, $_POST['new_medication-1']);
    $new_medication_2 = mysqli_real_escape_string($conn, $_POST['new_medication-2']);
    $new_medication_3 = mysqli_real_escape_string($conn, $_POST['new_medication-3']);
    $new_medication_4 = mysqli_real_escape_string($conn, $_POST['new_medication-4']);
    $new_dose_4 = mysqli_real_escape_string($conn, $_POST['new_dose-4']);
    $new_dose_3 = mysqli_real_escape_string($conn, $_POST['new_dose-3']);
    $new_dose_2 = mysqli_real_escape_string($conn, $_POST['new_dose-2']);
    $new_dose_1 = mysqli_real_escape_string($conn, $_POST['new_dose-1']);
    $new_direction_1 = mysqli_real_escape_string($conn, $_POST['new_direction-1']);
    $new_direction_2 = mysqli_real_escape_string($conn, $_POST['new_direction-2']);
    $new_direction_3 = mysqli_real_escape_string($conn, $_POST['new_direction-3']);
    $new_direction_4 = mysqli_real_escape_string($conn, $_POST['new_direction-4']);
    $pharmacy = mysqli_real_escape_string($conn, $_POST['PHARMACY']);
    $NUMBER = mysqli_real_escape_string($conn, $_POST['NUMBER']);
    $called_in_by = mysqli_real_escape_string($conn, $_POST['called_in_by']);
    $date_time = mysqli_real_escape_string($conn, $_POST['date_time']);


    // INSERT query
$query = "INSERT INTO medication (source, source_other, allergie_1, allergie_2, allergie_3, allergie_4, medication_1, medication_2, medication_3, medication_4, dose_1, dose_2, dose_3, dose_4, direction_1, direction_2, direction_3, direction_4, hold_1, hold_2, hold_3, hold_4, rhesume_1, rhesume_2, rhesume_3, rhesume_4, discontinuemedications, new_medication_1, new_medication_2, new_medication_3, new_medication_4, new_dose_4, new_dose_3, new_dose_2, new_dose_1, new_direction_1, new_direction_2, new_direction_3, new_direction_4, pharmacy, `NUMBER`, called_in_by, date_time) VALUES ('$source', '$source_other', '$allergie_1', '$allergie_2', '$allergie_3', '$allergie_4', '$medication_1', '$medication_2', '$medication_3', '$medication_4', '$dose_1', '$dose_2', '$dose_3', '$dose_4', '$direction_1', '$direction_2', '$direction_3', '$direction_4', '$hold_1', '$hold_2', '$hold_3', '$hold_4', '$rhesume_1', '$rhesume_2', '$rhesume_3', '$rhesume_4', '$discontinuemedications', '$new_medication_1', '$new_medication_2', '$new_medication_3', '$new_medication_4', '$new_dose_4', '$new_dose_3', '$new_dose_2', '$new_dose_1', '$new_direction_1', '$new_direction_2', '$new_direction_3', '$new_direction_4', '$pharmacy', '$NUMBER', '$called_in_by', Now())";

// Execute the query
if (mysqli_query($conn, $query)) {
    echo "success";
} else {
    echo "Error: " . mysqli_error($conn);
}
}

// Close the database connection
mysqli_close($conn);
?>