(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

const form1 = document.querySelector("#form1");

if (form1 !== null) {
  form1.addEventListener("submit", (e) => {
    e.preventDefault();

    const data = new FormData(e.target);
    const entries = Object.fromEntries(data.entries());

    if (validateForm(entries)) {
      fetch("form1_insert.php", {
        method: "POST",
        body: data,
      })
        .then((response) => response.text())
        .then((result) => {
          // alert(result);
          window.location.href = "form2.php";
        })
        .catch((error) => {
          console.error("Error:", error);
        });

      // window.location.reload();

      console.log(entries);
    } else {
      // alert("Form validation failed. Please check your inputs.");
    }
  });

  function validateForm(data) {
    for (const key in data) {
      if (!data[key]) {
        alert(`Please enter a value for ${key}.`);

        // Focus on the first input element that is found to be empty
        const inputElement = document.querySelector(`[name="${key}"]`);
        if (inputElement) {
          inputElement.focus();
          inputElement.scrollIntoView({ behavior: "smooth" });
        }
        return false;
      }
    }

    // If the loop completes without returning, it means all fields have values
    return true;
  }
}

const form2 = document.querySelector("#form2");
if (form2 !== null) {
  form2.addEventListener("submit", (e) => {
    e.preventDefault();

    const data = new FormData(e.target);
    const entries = Object.fromEntries(data.entries());

    if (validateForm(entries)) {
      fetch("historyandphysical.php", {
        method: "POST",
        body: data,
      })
        .then((response) => response.text())
        .then((result) => {
          // alert(result);
          window.location.href = "form3.php";
        })
        .catch((error) => {
          console.error("Error:", error);
        });

      // window.location.reload();

      console.log(entries);
    } else {
      // alert("Form validation failed. Please check your inputs.");
    }
  });

  function validateForm(data) {
    for (const key in data) {

      // Skip validation for the "Procedure Others" field
      if (key === "Procedure Others") {
        continue;
      }
      if (key === "Indication Others") {
        continue;
      }
      if (key === "Medications Others") {
        continue;
      }
      if (key === "Risk Factors Others") {
        continue;
      }

      if (!data[key]) {
        alert(`Please enter a value for ${key}.`);

        // Focus on the first input element that is found to be empty
        const inputElement = document.querySelector(`[name="${key}"]`);
        if (inputElement) {
          inputElement.focus();
          inputElement.scrollIntoView({ behavior: "smooth" });
        }
        return false;
      }
    }

    // If the loop completes without returning, it means all fields have values
    return true;
  }
}
const form3 = document.querySelector("#form3");
if (form3 !== null) {
  form3.addEventListener("submit", (e) => {
    e.preventDefault();

    const data = new FormData(e.target);
    const entries = Object.fromEntries(data.entries());

    if (validateForm(entries)) {
      fetch("form3_insert.php", {
        method: "POST",
        body: data,
      })
        .then((response) => response.text())
        .then((result) => {
          // alert(result);
          window.location.href = "form5.php";
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    } else {
      // alert("Form validation failed. Please check your inputs.");
    }
  });

  function validateForm(data) {
    for (const key in data) {
      if (!data[key]) {
        alert(`Please enter a value for ${key}.`);

        // Focus on the first input element that is found to be empty
        const inputElement = document.querySelector(`[name="${key}"]`);
        if (inputElement) {
          inputElement.focus();
          inputElement.scrollIntoView({ behavior: "smooth" });
        }
        return false;
      }
    }

    // If the loop completes without returning, it means all fields have values
    return true;
  }
}

const form5 = document.querySelector("#form5");
if (form5 !== null) {
  form5.addEventListener("submit", (e) => {
    e.preventDefault();

    const data = new FormData(e.target);
    const entries = Object.fromEntries(data.entries());

    if (validateForm(entries)) {
      fetch("angiogram.php", {
        method: "POST",
        body: data,
      })
        .then((response) => response.text())
        .then((result) => {
          // alert(result);
          window.location.href = "form6.php";
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    } else {
      // alert("Form validation failed. Please check your inputs.");
    }
  });

  function validateForm(data) {
    for (const key in data) {
      if (!data[key]) {
        alert(`Please enter a value for ${key}.`);

        // Focus on the first input element that is found to be empty
        const inputElement = document.querySelector(`[name="${key}"]`);
        if (inputElement) {
          inputElement.focus();
          inputElement.scrollIntoView({ behavior: "smooth" });
        }
        return false;
      }
    }

    // If the loop completes without returning, it means all fields have values
    return true;
  }
}
const form6 = document.querySelector("#form6");
if (form6 !== null) {
  form6.addEventListener("submit", (e) => {
    e.preventDefault();

    const data = new FormData(e.target);
    const entries = Object.fromEntries(data.entries());

    if (validateForm(entries)) {
      fetch("venogram.php", {
        method: "POST",
        body: data,
      })
        .then((response) => response.text())
        .then((result) => {
          // alert(result);
          // window.location.href = "form7.php";
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    } else {
      // alert("Form validation failed. Please check your inputs.");
    }
  });

  function validateForm(data) {
    for (const key in data) {

      if (key === "source Other") {
        continue;
      }
      
      if (!data[key]) {
        alert(`Please enter a value for ${key}.`);

        // Focus on the first input element that is found to be empty
        const inputElement = document.querySelector(`[name="${key}"]`);
        if (inputElement) {
          inputElement.focus();
          inputElement.scrollIntoView({ behavior: "smooth" });
        }
        return false;
      }
    }

    // If the loop completes without returning, it means all fields have values
    return true;
  }
}
const form7 = document.querySelector("#form7");
const successMessageContainer = document.getElementById("successMessageContainer");
if (form7 !== null) {
  form7.addEventListener("submit", (e) => {
    e.preventDefault();

    const data = new FormData(e.target);
    const entries = Object.fromEntries(data.entries());

    if (validateForm(entries)) {
      fetch("medication.php", {
        method: "POST",
        body: data,
      })
        .then((response) => response.text())
        .then((result) => {
          alert(result);
          if (result === "success") {
            // Display success message in the container
            successMessageContainer.innerHTML = "Submitted successfully!";
            form7.reset();
          } else {
            // Display error message in the container
            successMessageContainer.innerHTML = "Error: " + result;
          }
        })
        .catch((error) => {
          console.error("Error:", error);
        });
      console.log(entries);
    } else {
      // alert("Form validation failed. Please check your inputs.");
    }
  });

  function validateForm(data) {
    for (const key in data) {

      // Skip validation for the "Procedure Others" field
      if (key === "source Other") {
        continue;
      }
      if (key === "allergie-1") {
        continue;
      }
     

      if (!data[key]) {
        alert(`Please enter a value for ${key}.`);

        // Focus on the first input element that is found to be empty
        const inputElement = document.querySelector(`[name="${key}"]`);
        if (inputElement) {
          inputElement.focus();
          inputElement.scrollIntoView({ behavior: "smooth" });
        }
        return false;
      }
    }

    // If the loop completes without returning, it means all fields have values
    return true;
  }
}

function showInputField(select) {
  var inputDiv = document.getElementById("othersInput");

  if (select.value === "others") {
    inputDiv.style.display = "block";
  } else {
    inputDiv.style.display = "none";
  }
}

function showPROCEDURE_others(select) {
  var PROCEDURE_others = document.getElementById("PROCEDURE_others");

  if (select.value === "others") {
    PROCEDURE_others.style.display = "block";
  } else {
    PROCEDURE_others.style.display = "none";
  }
}

function Past_Medical(select) {
  var Past_Medical = document.getElementById("Past_Medical");

  if (select.value === "others") {
    Past_Medical.style.display = "block";
  } else {
    Past_Medical.style.display = "none";
  }
}

function Risk_Factors(select) {
  var Risk_Factors = document.getElementById("Risk_Factors");

  if (select.value === "others") {
    Risk_Factors.style.display = "block";
  } else {
    Risk_Factors.style.display = "none";
  }
}

function show_Medications(select) {
  var Medications = document.getElementById("Medications");

  if (select.value === "others") {
    Medications.style.display = "block";
  } else {
    Medications.style.display = "none";
  }
}

flatpickr("input[type=date]", {
  enableTime: false,
  dateFormat: "m-d-Y",
});
