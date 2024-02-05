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
    <div class="container my-5">
      <div class="col-sm-12">
        <p class="fw-bold fs-4">MEDICATION RECONCILIATION</p>
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="row mb-3">
              <div class="col-sm-auto">
                <label class="form-check-label" for="flexRadioDefault1">
                  Source provided by:
                </label>
              </div>
              <div class="col-sm-auto">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="Source"
                    value="PATIENT"
                    required
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    PATIENT
                  </label>
                </div>
              </div>
              <div class="col-sm-auto">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    value="SPOUSE"
                    name="Source"
                    required
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    SPOUSE
                  </label>
                </div>
              </div>
              <div class="col-sm-auto">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    value="CAREGIVER"
                    name="Source"
                    required
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    CAREGIVER
                  </label>
                </div>
              </div>
              <div class="col-sm-auto">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    value="PHARMACY"
                    name="Source"
                    required
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    PHARMACY
                  </label>
                </div>
              </div>
              <div class="col-sm-auto">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    value="CHART NOTES"
                    name="Source"
                    id="flexRadioDefault1"
                    required
                  />
                  <label class="form-check-label" for="flexRadioDefault1">
                    CHART NOTES
                  </label>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please Select one option.</div>
                </div>
              </div>
              <div class="col-sm-auto">
                <div class="row">
                  <div class="col-sm-auto">
                    <label class="form-check-label" for="flexRadioDefault1">
                      OTHER
                    </label>
                  </div>
                  <div class="col-sm-auto">
                    <div class="form-check">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Patient Name"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="source Other"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <table class="table text-center border">
                <thead class="table-light">
                  <tr>
                    <th scope="col-12">ALLERGIES (include drugs, food and materials) include REACTIONS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0 form-control-sm"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <p class="text-start fw-bold">PRE-OPERATIVELY</p>
        </div>
        <div class="col-sm-6">
          <p class="text-end fw-bold">POST-OPERATIVELY</p>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="row mt-5">
              <table class="table text-center border">
                <thead class="table-light">
                  <tr>
                    <th class="border">Medication</th>
                    <th class="border">Dose</th>
                    <th class="border">Directions</th>
                    <th class="border">HOLD day of procedure?<br/> Y / N</th>
                    <th class="border">RHESUME SAME DAY or other:<br/> Y / N</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0 form-control-sm"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0 form-control-sm"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0 form-control-sm"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0 form-control-sm"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0 form-control-sm"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
      <div class="row">
        <form class="row g-3 needs-validation" novalidate id="form5">
          <div class="row mt-5">
            <div class="col-sm-12">
              <div class="row mb-3">
                <div class="col-sm-auto">
                  <p>DISCONTINUEMEDICATIONS</p>
                </div>
                <div class="col-sm-9">
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      name="DISCONTINUEMEDICATIONS"
                      placeholder="Type DISCONTINUEMEDICATIONS"
                      required
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please choose a Physician.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p>NEW MEDICATIONS ADDED POST-OPERATIVELY:</p>
          </div>
          <div class="row mt-3">
              <table class="table text-center border">
                <thead class="table-light">
                  <tr>
                    <th class="border">Medication</th>
                    <th class="border">Dose</th>
                    <th class="border">Directions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0 form-control-sm"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0 form-control-sm"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0 form-control-sm"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                    <td class="border">
                      <div class="input-group input-group-sm">
                        <textarea
                          class="form-control border-0"
                          aria-label="With textarea"
                          rows="1"
                        ></textarea>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="row">
          <div class="col-sm-auto">
                <div class="row">
                  <div class="col-sm-auto">
                    <label class="form-check-label" for="flexRadioDefault1">
                    PHARMACY
                    </label>
                  </div>
                  <div class="col-sm-auto">
                    <div class="form-check">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type PHARMACY"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="PHARMACY"
                      />
                    </div>
                  </div>
                </div>
              </div>
          <div class="col-sm-auto">
                <div class="row">
                  <div class="col-sm-auto">
                    <label class="form-check-label" for="flexRadioDefault1">
                    NUMBER
                    </label>
                  </div>
                  <div class="col-sm-auto">
                    <div class="form-check">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type NUMBER"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="NUMBER"
                      />
                    </div>
                  </div>
                </div>
              </div>
          <div class="col-sm-auto">
                <div class="row">
                  <div class="col-sm-auto">
                    <label class="form-check-label" for="flexRadioDefault1">
                    called in by
                    </label>
                  </div>
                  <div class="col-sm-auto">
                    <div class="form-check">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type called in by"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="calledinby"
                      />
                    </div>
                  </div>
                </div>
              </div>
        </div>
          
          <div class="row mt-5">
            <div class="col-sm-12 text-center">
              <button class="btn btn-primary" type="submit">
                Save & Continue
              </button>
            </div>
          </div>
        </form>
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

    <script src="index.js"></script>
  </body>
</html>
