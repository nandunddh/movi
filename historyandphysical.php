<?php 
include "DB.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and escape POST data
    $patient_name = mysqli_real_escape_string($conn, $_POST['Patient_Name']);
    $patient_dob = mysqli_real_escape_string($conn, $_POST['Patient_DOB']);
    $physician = mysqli_real_escape_string($conn, $_POST['Physician']);
    $procedure_date = mysqli_real_escape_string($conn, $_POST['Procedure_Date']);
    $procedure = mysqli_real_escape_string($conn, $_POST['PROCEDURE']);
    $procedure_others = mysqli_real_escape_string($conn, $_POST['Procedure_Others']);
    $indication = mysqli_real_escape_string($conn, $_POST['INDICATION']);
    $indication_others = mysqli_real_escape_string($conn, $_POST['Indication_Others']);
    $history_of_present_illness = mysqli_real_escape_string($conn, $_POST['History_of_Present_Illness']);
    $past_medical_surgical_history = mysqli_real_escape_string($conn, $_POST['Past_Medical/Surgical_History']);
    $previous_peripheral_vascular_intervention = mysqli_real_escape_string($conn, $_POST['Previous_Peripheral_Vascular_Intervention']);
    $previous_angiogram = mysqli_real_escape_string($conn, $_POST['Previous_Angiogram']);
    $risk_factors = mysqli_real_escape_string($conn, $_POST['Risk_Factors']);
    $medications = mysqli_real_escape_string($conn, $_POST['Medications']);
    $medications_others = mysqli_real_escape_string($conn, $_POST['Medications_Others']);
    $labs_k = mysqli_real_escape_string($conn, $_POST['LabsK']);
    $bun = mysqli_real_escape_string($conn, $_POST['BUN']);
    $glucose = mysqli_real_escape_string($conn, $_POST['Glucose']);
    $creatinine = mysqli_real_escape_string($conn, $_POST['Creatnine']);
    $mucomyst_given = mysqli_real_escape_string($conn, $_POST['Mucomystgiven']);
    $impression = mysqli_real_escape_string($conn, $_POST['Impression']);
    $plan = mysqli_real_escape_string($conn, $_POST['Plan']);
    $bp_right = mysqli_real_escape_string($conn, $_POST['BP(Right)']);
    $bp_left = mysqli_real_escape_string($conn, $_POST['BP(Left)']);
    $p = mysqli_real_escape_string($conn, $_POST['P']);
    $rb = mysqli_real_escape_string($conn, $_POST['RB']);
    $hfent = mysqli_real_escape_string($conn, $_POST['HFENT']);
    $lungs = mysqli_real_escape_string($conn, $_POST['Lungs']);
    $abd = mysqli_real_escape_string($conn, $_POST['Abd']);
    $skin = mysqli_real_escape_string($conn, $_POST['Skin']);
    $heart = mysqli_real_escape_string($conn, $_POST['Heart']);
    $ext = mysqli_real_escape_string($conn, $_POST['Ext']);
    $jvd = mysqli_real_escape_string($conn, $_POST['JVD']);
    $carotid_bruit = mysqli_real_escape_string($conn, $_POST['CarotidBruit']);
    $renal_bruit = mysqli_real_escape_string($conn, $_POST['RenalBrui']);
    $radial_brachial_right = mysqli_real_escape_string($conn, $_POST['Radial/Brachial_Right']);
    $radial_brachial_left = mysqli_real_escape_string($conn, $_POST['Radial/Brachial_Left']);
    $femoral_right = mysqli_real_escape_string($conn, $_POST['Femoral_Right']);
    $femoral_left = mysqli_real_escape_string($conn, $_POST['Femoral_Left']);
    $popliteal_right = mysqli_real_escape_string($conn, $_POST['Popliteal_Right']);
    $popliteal_left = mysqli_real_escape_string($conn, $_POST['Popliteal_Left']);
    $pedal_right_dp = mysqli_real_escape_string($conn, $_POST['Pedal_Right_DP']);
    $pedal_left_dp = mysqli_real_escape_string($conn, $_POST['Pedal_Left_DP']);
    $pedal_right_pt = mysqli_real_escape_string($conn, $_POST['Pedal_Right_PT']);
    $pedal_left_pt = mysqli_real_escape_string($conn, $_POST['Pedal_Left_PT']);
    $abi_right = mysqli_real_escape_string($conn, $_POST['ABI_Right']);
    $abi_left = mysqli_real_escape_string($conn, $_POST['ABI_Left']);
    $rutherford_class = mysqli_real_escape_string($conn, $_POST['Rutherford_Class']);
    $vendor_request = mysqli_real_escape_string($conn, $_POST['Vendor_Request']);
    $special_instruction = mysqli_real_escape_string($conn, $_POST['Special_Instruction']);
    $physician_signature = mysqli_real_escape_string($conn, $_POST['Physician_Signature']);
    $submitted_date = mysqli_real_escape_string($conn, $_POST['submited_date']);
    $submitted_time = mysqli_real_escape_string($conn, $_POST['submited_time']);

    // Build the INSERT query
    $sql = "INSERT INTO history_and_physical (Patientname, PatientDOB, Physician, ProcedureDate, `PROCEDURE`, Procedureothers, INDICATION, IndicationOthers, HistoryofPresentIllness, PastMedicalSurgicalHistory, PreviousPeripheralVascularIntervention, PreviousAngiogram, RiskFactors, Medications, Medicationsothers, LabsK, BUN, Glucose, Creatnine, MucomystGiven, Impression, Plan, BPRight, BPLeft, P, RB, HFENT, Lungs, Abd, Skin, Heart, Ext, JVD, CarotidBruit, RenalBrui, RadialBrachialRight, RadialBrachialLeft, FemoralRight, FemoralLeft, PoplitealRight, PoplitealLeft, PedalRightDP, PedalLeftDP, PedalRightPT, PedalLeftPT, ABIRight, ABILeft, RutherfordClass, VendorRequest, SpecialInstruction, PhysicianSignature, submiteddate, submitedtime) VALUES ('$patient_name', '$patient_dob', '$physician', '$procedure_date', '$procedure', '$procedure_others', '$indication', '$indication_others', '$history_of_present_illness', '$past_medical_surgical_history', '$previous_peripheral_vascular_intervention', '$previous_angiogram', '$risk_factors', '$medications', '$medications_others', '$labs_k', '$bun', '$glucose', '$creatinine', '$mucomyst_given', '$impression', '$plan', '$bp_right', '$bp_left', '$p', '$rb', '$hfent', '$lungs', '$abd', '$skin', '$heart', '$ext', '$jvd', '$carotid_bruit', '$renal_bruit', '$radial_brachial_right', '$radial_brachial_left', '$femoral_right', '$femoral_left', '$popliteal_right', '$popliteal_left', '$pedal_right_dp', '$pedal_left_dp', '$pedal_right_pt', '$pedal_left_pt', '$abi_right', '$abi_left', '$rutherford_class', '$vendor_request', '$special_instruction', '$physician_signature', NOW(), '$submitted_time')";

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