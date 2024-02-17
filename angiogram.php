<?php 
include "DB.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and escape POST data
    $patient_name = mysqli_real_escape_string($conn, $_POST['Patient_name']);
    $patient_dob = mysqli_real_escape_string($conn, $_POST['Patient_DOB']);
    $subjective_pain = mysqli_real_escape_string($conn, $_POST['Subjective_Pain']);
    $subjective_distance = mysqli_real_escape_string($conn, $_POST['Subjective_Distance']);
    $objective_pedal = mysqli_real_escape_string($conn, $_POST['Objective_Pedal']);
    $objective_pedal_left = mysqli_real_escape_string($conn, $_POST['Objective_Pedal_Left']);
    $objective_pedal_right = mysqli_real_escape_string($conn, $_POST['Objective_Pedal_Right']);
    $object_amputation = mysqli_real_escape_string($conn, $_POST['Object_Amputation']);
    $object_amputation_left_level = mysqli_real_escape_string($conn, $_POST['Object_Amputation_Left_Level']);
    $object_amputation_right_levels = mysqli_real_escape_string($conn, $_POST['Object_Amputation_Right_Levels']);
    $object_dependent_rubor = mysqli_real_escape_string($conn, $_POST['Object_Dependent_rubor']);
    $object_chronic_sores = mysqli_real_escape_string($conn, $_POST['Object_Chronic_sores']);
    $object_walking_impairment_questionnaire_completed = mysqli_real_escape_string($conn, $_POST['Object_Walking_Impairment_Questionnaire_completed']);
    $object_rutherford_score = mysqli_real_escape_string($conn, $_POST['RUTHERFORD_SCORE']);
    $object_ambulatory_status = mysqli_real_escape_string($conn, $_POST['Object_Ambulatory_status']);
    $object_failed_conservative = mysqli_real_escape_string($conn, $_POST['Object_Failed_conservative']);
    $object_dual_anti_platelet_statin = mysqli_real_escape_string($conn, $_POST['Object_dual_anti_platelet_statin']);
    $object_dual_wks_mos = mysqli_real_escape_string($conn, $_POST['Object_dual_wksmos']);
    $object_pletal = mysqli_real_escape_string($conn, $_POST['Object_pletal']);
    $object_pletal_wks_mos = mysqli_real_escape_string($conn, $_POST['Object_pletal_wksmos']);
    $object_structured_non_structured_exercise_walking_program = mysqli_real_escape_string($conn, $_POST['Object_Structurednon_structured_exercise_walking_program']);
    $object_structured_non_structured_exercise_walking_program_wks_mos = mysqli_real_escape_string($conn, $_POST['Object_Structurednon_structured_exercise_walking_program_wksmos']);
    $object_smoking_cessation_program = mysqli_real_escape_string($conn, $_POST['Object_Smoking_cessation_program']);
    $object_smoking_cessation_program_wks_mos = mysqli_real_escape_string($conn, $_POST['Object_Smoking_cessation_program_wksmos']);
    $rutherford_score = mysqli_real_escape_string($conn, $_POST['RUTHERFORD_SCORE']);
    $testing_abi_tbi = mysqli_real_escape_string($conn, $_POST['Testing_ABI_TBI']);
    $testing_lower_extremity = mysqli_real_escape_string($conn, $_POST['Testing_Lower_extremity']);
    $testing_cta = mysqli_real_escape_string($conn, $_POST['Testing_CTA']);
    $medication = mysqli_real_escape_string($conn, $_POST['medication']);
    $labwork = mysqli_real_escape_string($conn, $_POST['labwork']);
    $labwork_instruct = mysqli_real_escape_string($conn, $_POST['labwork_Instruct']);
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
        null,
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

