<?php 
include "DB.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and escape POST data
    $patient_name = mysqli_real_escape_string($conn, $_POST['Patient_name']);
    $patient_dob = mysqli_real_escape_string($conn, $_POST['Patient_DOB']);
    $subjective_lifestyle = mysqli_real_escape_string($conn, $_POST['Subjective_Lifestyle']);
    $subjective_symptoms = mysqli_real_escape_string($conn, $_POST['Subjective_Symptoms']);
    $subjective_erectile_dysfunction = mysqli_real_escape_string($conn, $_POST['Subjective_Erectile_dysfunction']);
    $objective_stemmer_sign = mysqli_real_escape_string($conn, $_POST['Objective_Stemmer_sign']);
    $objective_buffalo_hump = mysqli_real_escape_string($conn, $_POST['Objective_Buffalo_hump']);
    $objective_edema_chronic_intermittent = mysqli_real_escape_string($conn, $_POST['Objective_Edema_chronic_intermittent']);
    $objective_edema_pitting_non_pitting = mysqli_real_escape_string($conn, $_POST['Objective_Edema']);
    $objective_edema_left = mysqli_real_escape_string($conn, $_POST['Objective_Edema_LEFT']);
    $objective_varicose_veins_small_large = mysqli_real_escape_string($conn, $_POST['Objective_Varicose_veins']);
    $objective_limited_mobility = mysqli_real_escape_string($conn, $_POST['Objective_Limited_mobility']);
    $objective_previous_ssv_gsv = mysqli_real_escape_string($conn, $_POST['Objective_Previous']);
    $objective_dvt = mysqli_real_escape_string($conn, $_POST['Objective_DVt']);
    $objective_new = mysqli_real_escape_string($conn, $_POST['Objective_new']);
    $objective_recurrent = mysqli_real_escape_string($conn, $_POST['Objectivere_current']);
    $objective_copd = mysqli_real_escape_string($conn, $_POST['Objective_COPD']);
    $objective_osa = mysqli_real_escape_string($conn, $_POST['Objective_OSA']);
    $objective_pulmonary_embolism = mysqli_real_escape_string($conn, $_POST['Objective_Pulmonary_embolism']);
    $objective_bmi = mysqli_real_escape_string($conn, $_POST['Objective_BMI']);
    $objective_under = mysqli_real_escape_string($conn, $_POST['Objective_under']);
    $objective_norm = mysqli_real_escape_string($conn, $_POST['Objective_norm']);
    $objective_over = mysqli_real_escape_string($conn, $_POST['Objective_over']);
    $objective_obese = mysqli_real_escape_string($conn, $_POST['Objective_obese']);
    $objective_extreme = mysqli_real_escape_string($conn, $_POST['Objective_extreme']);
    $objective_old = mysqli_real_escape_string($conn, $_POST['Objective_Old']);
    $objective_chronic = mysqli_real_escape_string($conn, $_POST['Objective_Chronic']);
    $objective_hormone = mysqli_real_escape_string($conn, $_POST['Objective_Hormone']);
    $objective_thrombocytopenia = mysqli_real_escape_string($conn, $_POST['Objective_Thrombocytopenia']);
    $objective_thrombocytopenia_type = mysqli_real_escape_string($conn, $_POST['Objective_Thrombocytopenia_TYPE']);
    $objective_can_patient = mysqli_real_escape_string($conn, $_POST['Objective_Canpatient']);
    $objective_failed = mysqli_real_escape_string($conn, $_POST['Objective_Failed']);
    $objective_leg_elevation = mysqli_real_escape_string($conn, $_POST['Objective_Legelevation']);
    $objective_weeks_months = mysqli_real_escape_string($conn, $_POST['Objective_WEEKS']);
    $objective_diuretics = mysqli_real_escape_string($conn, $_POST['Objective_Diuretics']);
    $objective_diuretics_weeks_months = mysqli_real_escape_string($conn, $_POST['Objective_Diuretics_WEEKS']);
    $objective_compression = mysqli_real_escape_string($conn, $_POST['Objective_Compression']);
    $objective_compression_weeks_months = mysqli_real_escape_string($conn, $_POST['Objective_Compression_WEEKS']);
    $ceap_score = mysqli_real_escape_string($conn, $_POST['CEAPSCORE']);
    $testing_lower = mysqli_real_escape_string($conn, $_POST['Testing_Lower']);
    $medication = mysqli_real_escape_string($conn, $_POST['medication']);
    $labwork = mysqli_real_escape_string($conn, $_POST['labwork']);
    $labwork_instruct = mysqli_real_escape_string($conn, $_POST['labwork_Instruct']);
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