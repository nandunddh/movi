<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MOVI</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img
            src="movi_logo2.svg"
            alt="Logo"
            width="150"
            class="d-inline-block align-text-top"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>

    <div class="container py-5 my-4">
      <div class="row">
        <p class="text-center fw-bold fs-3">
          Order for Blood Work- Provide to patient.
        </p>
        <p class="text-center fw-bold fs-3">
          Please have labs drawn 1-2 weeks prior to your scheduled procedure.
        </p>
      </div>
      <div class="row mt-5">
        <div class="col-sm-12">
          <div class="col-sm-5">
            <div class="row">
              <div class="col-md-6 text-md-end">
                <label for="basic-url" class="form-label">Patient Name</label>
              </div>
              <div class="col-md-6">
                <div class="input-group mb-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Type Patient Name"
                    aria-describedby="basic-addon1"
                    required
                    name="Patient-Name"
                  />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please Type Patient Name.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="row">
            <div class="col-md-6 text-md-end">
              <label for="basic-url" class="form-label">Date of Birth</label>
            </div>
            <div class="col-md-6">
              <div class="input-group mb-3">
                <input
                  type="date"
                  class="form-control"
                  aria-describedby="basic-addon1"
                  required
                  name="Date-of-Birth"
                />
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please Select Date of Birth.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-9">
              <p>Diagnosis: I70.213– Peripheral Arterial Disease</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-9">
              <p>Please Draw:</p>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-9">
              <p class="fw-bold">
                CBC with diff<br />
                PT & INR<br />
                Comprehensive Metabolic Panel
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-1 text-end"></div>
            <div class="col-sm-2 text-end">
              <p>Physician Signature</p>
            </div>
            <div class="col-sm-7">
              <div class="input-group mb-3">
                <input
                  type="file"
                  class="form-control"
                  aria-label="Username"
                  aria-describedby="basic-addon1"
                  name="form-4-Physician-Signature"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">
                  Please choose a Physician Signature.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-1 text-end"></div>
            <div class="col-sm-2 text-end">
              <p>Dr</p>
            </div>
            <div class="col-sm-7">
              <div class="input-group mb-3">
                <input
                  type="text"
                  class="form-control"
                  aria-label="Username"
                  aria-describedby="basic-addon1"
                  name="form-4-Physician-Signature"
                  required
                />
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">
                  Please choose a Physician Signature.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 mt-5">
        <p class="text-center fw-bold fs-1">Please fax results to 313-359-8305</p>
      </div>
      <div class="row mt-5">
        <div class="col-sm-12 text-center">
          <button class="btn btn-primary" type="submit">Save & Continue</button>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>

    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
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
    </script>

    <script>
      const form = document.querySelector("#form1");

      form.addEventListener("submit", (e) => {
        e.preventDefault();

        const data = new FormData(e.target);
        const entries = Object.fromEntries(data.entries());

        if (validateForm(entries)) {
          alert("Form submitted successfully!");
          // window.location.reload();
          window.location.href = "form2.html";
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
    </script>
  </body>
</html>
