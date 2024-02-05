<?php 
include "DB.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and escape POST data
    $patient_name = mysqli_real_escape_string($conn, $_POST['Patientname']);
    $patient_dob = mysqli_real_escape_string($conn, $_POST['PatientDOB']);
    $subjective_pain = mysqli_real_escape_string($conn, $_POST['SubjectivePain']);
    $subjective_distance = mysqli_real_escape_string($conn, $_POST['SubjectiveDistance']);
    $objective_pedal = mysqli_real_escape_string($conn, $_POST['ObjectivePedal']);
    $objective_pedal_left = mysqli_real_escape_string($conn, $_POST['ObjectivePedalLeft']);
    $objective_pedal_right = mysqli_real_escape_string($conn, $_POST['ObjectivePedalRight']);
    $object_amputation = mysqli_real_escape_string($conn, $_POST['ObjectAmputation']);
    $object_amputation_left_level = mysqli_real_escape_string($conn, $_POST['ObjectAmputationLeftLevel']);
    $object_amputation_right_levels = mysqli_real_escape_string($conn, $_POST['ObjectAmputationRightLevels']);
    $object_dependent_rubor = mysqli_real_escape_string($conn, $_POST['ObjectDependentrubor']);
    $object_chronic_sores = mysqli_real_escape_string($conn, $_POST['ObjectChronicsores']);
    $object_walking_impairment_questionnaire_completed = mysqli_real_escape_string($conn, $_POST['ObjectWalkingImpairmentQuestionnairecompleted']);
    $object_rutherford_score = mysqli_real_escape_string($conn, $_POST['ObjectRutherfordScore']);
    $object_ambulatory_status = mysqli_real_escape_string($conn, $_POST['ObjectAmbulatorystatus']);
    $object_failed_conservative = mysqli_real_escape_string($conn, $_POST['ObjectFailedconservative']);
    $object_dual_anti_platelet_statin = mysqli_real_escape_string($conn, $_POST['Objectdualanti-plateletstatin']);
    $object_dual_wks_mos = mysqli_real_escape_string($conn, $_POST['Objectdualwksmos']);
    $object_pletal = mysqli_real_escape_string($conn, $_POST['Objectpletal']);
    $object_pletal_wks_mos = mysqli_real_escape_string($conn, $_POST['Objectpletalwksmos']);
    $object_structured_non_structured_exercise_walking_program = mysqli_real_escape_string($conn, $_POST['ObjectStructurednon-structuredexercisewalkingprogram']);
    $object_structured_non_structured_exercise_walking_program_wks_mos = mysqli_real_escape_string($conn, $_POST['ObjectStructurednon-structuredexercisewalkingprogramwksmos']);
    $object_smoking_cessation_program = mysqli_real_escape_string($conn, $_POST['ObjectSmokingcessationprogram']);
    $object_smoking_cessation_program_wks_mos = mysqli_real_escape_string($conn, $_POST['ObjectSmokingcessationprogramwksmos']);
    $rutherford_score = mysqli_real_escape_string($conn, $_POST['RUTHERFORDSCORE']);
    $testing_abi_tbi = mysqli_real_escape_string($conn, $_POST['TestingABI_TBI']);
    $testing_lower_extremity = mysqli_real_escape_string($conn, $_POST['TestingLowerextremity']);
    $testing_cta = mysqli_real_escape_string($conn, $_POST['TestingCTA']);
    $medication = mysqli_real_escape_string($conn, $_POST['medication']);
    $labwork = mysqli_real_escape_string($conn, $_POST['labwork']);
    $labwork_instruct = mysqli_real_escape_string($conn, $_POST['labworkInstruct']);
    $physician = mysqli_real_escape_string($conn, $_POST['Physician']);
    $ma = mysqli_real_escape_string($conn, $_POST['MA']);

    // Build the INSERT query
    $sql = "INSERT INTO angiogram (
        Patientname,
        PatientDOB,
        SubjectivePain,
        SubjectiveDistance,
        ObjectivePedal,
        ObjectivePedalLeft,
        ObjectivePedalRight,
        ObjectAmputation,
        ObjectAmputationLeftLevel,
        ObjectAmputationRightLevels,
        ObjectDependentrubor,
        ObjectChronicsores,
        ObjectWalkingImpairmentQuestionnairecompleted,
        ObjectRutherfordScore,
        ObjectAmbulatorystatus,
        ObjectFailedconservative,
        Objectdualanti_plateletstatin,
        Objectdualwksmos,
        Objectpletal,
        Objectpletalwksmos,
        ObjectStructurednon_structuredexercisewalkingprogram,
        ObjectStructurednon_structuredexercisewalkingprogramwksmos,
        ObjectSmokingcessationprogram,
        ObjectSmokingcessationprogramwksmos,
        RUTHERFORDSCORE,
        TestingABI_TBI,
        TestingLowerextremity,
        TestingCTA,
        medication,
        labwork,
        labworkInstruct,
        Physician,
        MA
    ) VALUES (
        '$patient_name',
        '$patient_dob',
        '$subjective_pain',
        '$subjective_distance',
        '$objective_pedal',
        '$objective_pedal_left',
        '$objective_pedal_right',
        '$object_amputation',
        '$object_amputation_left_level',
        '$object_amputation_right_levels',
        '$object_dependent_rubor',
        '$object_chronic_sores',
        '$object_walking_impairment_questionnaire_completed',
        '$object_rutherford_score',
        '$object_ambulatory_status',
        '$object_failed_conservative',
        '$object_dual_anti_platelet_statin',
        '$object_dual_wks_mos',
        '$object_pletal',
        '$object_pletal_wks_mos',
        '$object_structured_non_structured_exercise_walking_program',
        '$object_structured_non_structured_exercise_walking_program_wks_mos',
        '$object_smoking_cessation_program',
        '$object_smoking_cessation_program_wks_mos',
        '$rutherford_score',
        '$testing_abi_tbi',
        '$testing_lower_extremity',
        '$testing_cta',
        '$medication',
        '$labwork',
        '$labwork_instruct',
        '$physician',
        '$ma'
    )";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}

$conn->close();
?>

