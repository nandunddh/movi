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
    console.log("data", entries);

    fetch("form1_insert.php", {
      method: "POST",
      body: data,
    })
      .then((response) => response.text())
      .then((result) => {
        alert(result);
      })
      .catch((error) => {
        console.error("Error:", error);
      });
    console.log(data);
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
          alert(result);
          alert("Form submitted successfully!");
        })
        .catch((error) => {
          console.error("Error:", error);
        });

      // window.location.reload();

      console.log(entries);
      // window.location.href = "form3.html";
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
          alert(result);
          alert("Form submitted successfully!");
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
          alert(result);
          alert("Form submitted successfully!");
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
          alert(result);
          alert("Form submitted successfully!");
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
