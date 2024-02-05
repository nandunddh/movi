<?php 
include "DB.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and escape POST data
    $patient_name = mysqli_real_escape_string($conn, $_POST['Patientname']);
    $patient_dob = mysqli_real_escape_string($conn, $_POST['PatientDOB']);
    $subjective_lifestyle = mysqli_real_escape_string($conn, $_POST['SubjectiveLifestyle']);
    $subjective_symptoms = mysqli_real_escape_string($conn, $_POST['SubjectiveSymptoms']);
    $subjective_erectile_dysfunction = mysqli_real_escape_string($conn, $_POST['SubjectiveErectiledysfunction']);
    $objective_stemmer_sign = mysqli_real_escape_string($conn, $_POST['ObjectiveStemmersign']);
    $objective_buffalo_hump = mysqli_real_escape_string($conn, $_POST['ObjectiveBuffalohump']);
    $objective_edema_chronic_intermittent = mysqli_real_escape_string($conn, $_POST['ObjectiveEdemachronicintermittent']);
    $objective_edema_pitting_non_pitting = mysqli_real_escape_string($conn, $_POST['ObjectiveEdemapittingnon-pitting']);
    $objective_edema_left = mysqli_real_escape_string($conn, $_POST['ObjectiveEdemaLEFT']);
    $objective_varicose_veins_small_large = mysqli_real_escape_string($conn, $_POST['ObjectiveVaricoseveinssmalllarge']);
    $objective_limited_mobility = mysqli_real_escape_string($conn, $_POST['ObjectiveLimitedmobility']);
    $objective_previous_ssv_gsv = mysqli_real_escape_string($conn, $_POST['ObjectivePreviousSSVGSV']);
    $objective_dvt = mysqli_real_escape_string($conn, $_POST['ObjectiveDVt']);
    $objective_new = mysqli_real_escape_string($conn, $_POST['Objectivenew']);
    $objective_recurrent = mysqli_real_escape_string($conn, $_POST['Objectiverecurrent']);
    $objective_copd = mysqli_real_escape_string($conn, $_POST['ObjectiveCOPD']);
    $objective_osa = mysqli_real_escape_string($conn, $_POST['ObjectiveOSA']);
    $objective_pulmonary_embolism = mysqli_real_escape_string($conn, $_POST['ObjectivePulmonaryembolism']);
    $objective_bmi = mysqli_real_escape_string($conn, $_POST['ObjectiveBMI']);
    $objective_under = mysqli_real_escape_string($conn, $_POST['Objectiveunder']);
    $objective_norm = mysqli_real_escape_string($conn, $_POST['Objectivenorm']);
    $objective_over = mysqli_real_escape_string($conn, $_POST['Objectiveover']);
    $objective_obese = mysqli_real_escape_string($conn, $_POST['Objectiveobese']);
    $objective_extreme = mysqli_real_escape_string($conn, $_POST['Objectiveextreme']);
    $objective_old = mysqli_real_escape_string($conn, $_POST['ObjectiveOld']);
    $objective_chronic = mysqli_real_escape_string($conn, $_POST['ObjectiveChronic']);
    $objective_hormone = mysqli_real_escape_string($conn, $_POST['ObjectiveHormone']);
    $objective_thrombocytopenia = mysqli_real_escape_string($conn, $_POST['ObjectiveThrombocytopenia']);
    $objective_thrombocytopenia_type = mysqli_real_escape_string($conn, $_POST['ObjectiveThrombocytopeniaTYPE']);
    $objective_can_patient = mysqli_real_escape_string($conn, $_POST['ObjectiveCanpatient']);
    $objective_failed = mysqli_real_escape_string($conn, $_POST['ObjectiveFailed']);
    $objective_leg_elevation = mysqli_real_escape_string($conn, $_POST['ObjectiveLegelevation']);
    $objective_weeks_months = mysqli_real_escape_string($conn, $_POST['ObjectiveWEEKSMONTHS']);
    $objective_diuretics = mysqli_real_escape_string($conn, $_POST['ObjectiveDiuretics']);
    $objective_diuretics_weeks_months = mysqli_real_escape_string($conn, $_POST['ObjectiveDiureticsWEEKSMONTHS']);
    $objective_compression = mysqli_real_escape_string($conn, $_POST['ObjectiveCompression']);
    $objective_compression_weeks_months = mysqli_real_escape_string($conn, $_POST['ObjectiveCompressionWEEKSMONTHS']);
    $ceap_score = mysqli_real_escape_string($conn, $_POST['CEAPSCORE']);
    $testing_lower = mysqli_real_escape_string($conn, $_POST['TestingLower']);
    $medication = mysqli_real_escape_string($conn, $_POST['medication']);
    $labwork = mysqli_real_escape_string($conn, $_POST['labwork']);
    $labwork_instruct = mysqli_real_escape_string($conn, $_POST['labworkInstruct']);
    $physician = mysqli_real_escape_string($conn, $_POST['Physician']);
    $ma = mysqli_real_escape_string($conn, $_POST['MA']);

    // Build the INSERT query
    $sql = "INSERT INTO venogram (
        Patientname,
        PatientDOB,
        SubjectiveLifestyle,
        SubjectiveSymptoms,
        SubjectiveErectiledysfunction,
        ObjectiveStemmersign,
        ObjectiveBuffalohump,
        ObjectiveEdemachronicintermittent,
        ObjectiveEdemapittingnon_pitting,
        ObjectiveEdemaLEFT,
        ObjectiveVaricoseveinssmalllarge,
        ObjectiveLimitedmobility,
        ObjectivePreviousSSVGSV,
        ObjectiveDVt,
        Objectivenew,
        Objectiverecurrent,
        ObjectiveCOPD,
        ObjectiveOSA,
        ObjectivePulmonaryembolism,
        ObjectiveBMI,
        Objectiveunder,
        Objectivenorm,
        Objectiveover,
        Objectiveobese,
        Objectiveextreme,
        ObjectiveOld,
        ObjectiveChronic,
        ObjectiveHormone,
        ObjectiveThrombocytopenia,
        ObjectiveThrombocytopeniaTYPE,
        ObjectiveCanpatient,
        ObjectiveFailed,
        ObjectiveLegelevation,
        ObjectiveWEEKSMONTHS,
        ObjectiveDiuretics,
        ObjectiveDiureticsWEEKSMONTHS,
        ObjectiveCompression,
        ObjectiveCompressionWEEKSMONTHS,
        CEAPSCORE,
        TestingLower,
        medication,
        labwork,
        labworkInstruct,
        Physician,
        MA
    ) VALUES (
        '$patient_name',
        '$patient_dob',
        '$subjective_lifestyle',
        '$subjective_symptoms',
        '$subjective_erectile_dysfunction',
        '$objective_stemmer_sign',
        '$objective_buffalo_hump',
        '$objective_edema_chronic_intermittent',
        '$objective_edema_pitting_non_pitting',
        '$objective_edema_left',
        '$objective_varicose_veins_small_large',
        '$objective_limited_mobility',
        '$objective_previous_ssv_gsv',
        '$objective_dvt',
        '$objective_new',
        '$objective_recurrent',
        '$objective_copd',
        '$objective_osa',
        '$objective_pulmonary_embolism',
        '$objective_bmi',
        '$objective_under',
        '$objective_norm',
        '$objective_over',
        '$objective_obese',
        '$objective_extreme',
        '$objective_old',
        '$objective_chronic',
        '$objective_hormone',
        '$objective_thrombocytopenia',
        '$objective_thrombocytopenia_type',
        '$objective_can_patient',
        '$objective_failed',
        '$objective_leg_elevation',
        '$objective_weeks_months',
        '$objective_diuretics',
        '$objective_diuretics_weeks_months',
        '$objective_compression',
        '$objective_compression_weeks_months',
        '$ceap_score',
        '$testing_lower',
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

    // Close connection
    $conn->close();
}

?>