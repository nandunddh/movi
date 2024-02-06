<?php 
include "DB.php";

// Fetch and store data in a session
$select_query = "SELECT * FROM form1 ORDER BY submitted_date DESC";
$result = $conn->query($select_query);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Output data in an HTML table
    echo "<table>
            <tr>
            <th>ID</th>
            <th>Patient Name</th>
            <th>DOB</th>
            <th>Physician</th>
            <th>Procedure Date</th>
            <th>Procedure</th>
            <th>Allergies</th>
            <th>Labs Names</th>
            <th>Insurance</th>
            <th>Primary Insurance</th>
            <th>Primary Policy Number</th>
            <th>Secondary Insurance</th>
            <th>Secondary Policy Number</th>
            <th>Authorization</th>
            <th>Requested Date</th>
            <th>Patients Language</th>
            <th>Patients Transportation</th>
            <th>Signature</th>
            <th>Submitted Date</th>
            <th>Contact Number</th>
            <th>Fax Number</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>". $row["patient_name"]. "</td>
                <td>". $row["dob"]. "</td>
                <td>". $row["physician"]. "</td>
                <td>". $row["procedure_date"]. "</td>
                <td>". $row["procedure_name"]. "</td>
                <td>". $row["allergies"]. "</td>
                <td>". $row["labs_names"]. "</td>
                <td>". $row["insurance"]. "</td>
                <td>". $row["primary_insurance"]. "</td>
                <td>". $row["primary_policy_number"]. "</td>
                <td>". $row["secondary_insurance"]. "</td>
                <td>". $row["secondary_policy_number"]. "</td>
                <td>". $row["authorization"]. "</td>
                <td>". $row["requested_date"]. "</td>
                <td>". $row["patients_language"]. "</td>
                <td>". $row["patients_transportation"]. "</td>
                <td>". $row["signature"]. "</td>
                <td>". $row["submitted_date"]. "</td>
                <td>". $row["contact_number"]. "</td>
                <td>". $row["fax_number"]. "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}

// Close connection
$conn->close();
?>
