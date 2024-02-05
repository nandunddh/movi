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
      <div class="row">
        <form class="row g-3 needs-validation" novalidate id="form6">
          <div class="col-sm-8">
            <div class="row mb-3">
              <div class="col-sm-8">
                <div class="row">
                  <div class="col-md-2">
                    <label class="form-label" for="validationCustom01"
                      >Patient</label
                    >
                  </div>
                  <div class="col-md-10">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Patient Name"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="Patientname"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Patient Name.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="row">
                  <div class="col-md-2">
                    <label for="basic-url" class="form-label">DOB</label>
                  </div>
                  <div class="col-md-10">
                    <div class="input-group">
                      <input
                        type="date"
                        class="form-control"
                        aria-describedby="basic-addon1"
                        required
                        name="PatientDOB"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Select Date Of Birth.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <p class="fw-bold text-decoration-underline">SUBJECTIVE</p>
              <div>
                <div class="row ms-md-5">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Lifestyle limiting pain"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="SubjectiveLifestyle"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Lifestyle limiting pain, heaviness,
                        swelling, difficulty walking, difficulty with prolonged
                        standing.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Lifestyle limiting pain, heaviness, swelling, difficulty
                      walking, difficulty with prolonged standing</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Symptoms of PCS"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="SubjectiveSymptoms"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Symptoms of PCS (dyspareunia, pelvic cramps,
                        lower GI cramps).
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Symptoms of PCS (dyspareunia, pelvic cramps, lower GI
                      cramps)</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Erectile dysfunction"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="SubjectiveErectiledysfunction"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Erectile dysfunction
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Erectile dysfunction</label
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <p class="fw-bold text-decoration-underline">OBJECTIVE</p>
              <div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Stemmer sign + / -"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveStemmersign"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Stemmer sign + / -
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Stemmer sign + / -</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Buffalo hump + / -"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveBuffalohump"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Buffalo hump + / -
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Buffalo hump + / -</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Edema: chronic / intermittent"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveEdemachronicintermittent"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Edema: chronic / intermittent
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Edema: chronic / intermittent</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Edema: pitting / non-pitting"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveEdemapittingnon-pitting"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Edema: pitting / non-pitting
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Edema: pitting / non-pitting</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Edema: LEFT 1+ / 2+ / 3+ / 4+ RIGHT 1+ / 2+ / 3+ / 4+"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveEdemaLEFT"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Edema: LEFT 1+ / 2+ / 3+ / 4+ RIGHT 1+ / 2+
                        / 3+ / 4+
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Edema: LEFT 1+ / 2+ / 3+ / 4+ RIGHT 1+ / 2+ / 3+ /
                      4+</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Varicose veins: small / large"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveVaricoseveinssmalllarge"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Varicose veins: small / large
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Varicose veins: small / large</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Limited mobility"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveLimitedmobility"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Limited mobility
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Skin pigmentation changes, lipodermatosclerosis,
                      eczema</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Previous SSV / GSV ablation and still symptomatic / previous iliac vein stenting"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectivePreviousSSVGSV"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Previous SSV / GSV ablation and still
                        symptomatic / previous iliac vein stenting
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Skin pigmentation changes, lipodermatosclerosis,
                      eczema</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type DVT"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveDVt"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type DVT</div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >DVT:</label
                    >
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type new"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="Objectivenew"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type new</div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >new</label
                    >
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type recurrent"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="Objectiverecurrent"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type recurrent</div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >recurrent</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type COPD"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveCOPD"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type COPD</div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >COPD</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type OSA NO / YES Using CPAP? NO / YES"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveOSA"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type OSA NO / YES Using CPAP? NO / YES
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >OSA NO / YES Using CPAP? NO / YES</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Pulmonary embolism"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectivePulmonaryembolism"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Pulmonary embolism
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Pulmonary embolism</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-2">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type BMI"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveBMI"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type BMI</div>
                    </div>
                  </div>
                  <div class="col-md-1 mt-2">
                    <label class="form-label" for="validationCustom01"
                      >BMI:</label
                    >
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type under 18.5"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="Objectiveunder"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type under 18.5</div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >under 18.5</label
                    >
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type norm 18.5-24.9"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="Objectivenorm"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type norm 18.5-24.9
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >norm 18.5-24.9</label
                    >
                  </div>
                  <div class="col-md-2 ms-3">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type over wt 25-29.9"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="Objectiveover"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type over wt 25-29.9
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >over wt 25-29.9</label
                    >
                  </div>
                  <div class="col-md-2">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type obese 30-39.9"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="Objectiveobese"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type obese 30-39.9
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mt-2">
                    <label class="form-label" for="validationCustom01"
                      >obese 30-39.9</label
                    >
                  </div>
                  <div class="col-md-2 ms-3">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type extreme obese 40+"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="Objectiveextreme"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type extreme obese 40+
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >extreme obese 40+</label
                    >
                  </div>
                </div>

                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Old healed stasis ulcers"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveOld"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Old healed stasis ulcers
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Old healed stasis ulcers</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Chronic, active stasis ulcer"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveChronic"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Chronic, active stasis ulcer
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Chronic, active stasis ulcer</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Hormone use: anabolic vs. corticosteroid"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveHormone"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Hormone use: anabolic vs. corticosteroid
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Hormone use: anabolic vs. corticosteroid</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Thrombocytopenia NO / YES"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveThrombocytopenia"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Thrombocytopenia NO / YES
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Thrombocytopenia NO / YES</label
                    >
                  </div>
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Thrombocytopenia TYPE"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveThrombocytopeniaTYPE"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Thrombocytopenia TYPE
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row ms-md-5 mb-3">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Can patient perform ADL’s independently YES / NO"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveCanpatient"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Can patient perform ADL’s independently YES
                        / NO
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Can patient perform ADL’s independently YES / NO</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Failed conservative therapy INCLUDE TIME FRAME PATIENT USED WITHOUT RELILEF"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectiveFailed"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Failed conservative therapy INCLUDE TIME FRAME PATIENT
                        USED WITHOUT RELILEF
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Failed conservative therapy INCLUDE TIME FRAME PATIENT
                      USED WITHOUT RELILEF:</label
                    >
                  </div>
                </div>
                <div class="ps-md-5 ms-md-5 ps-2">
                  <div class="row ms-md-5 mt-2">
                    <div class="col-md-auto">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type Leg elevation"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          required
                          name="ObjectiveLegelevation"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Type Leg elevation.
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-auto mt-2 pe-0">
                      <label class="form-label" for="validationCustom01">
                        Leg elevation
                      </label>
                    </div>
                    <div class="col-md-auto">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type WEEKS / MONTHS"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          required
                          name="ObjectiveWEEKSMONTHS"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Type WEEKS / MONTHS.
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-auto mt-2 pe-0">
                      <label class="form-label" for="validationCustom01">
                        WEEKS / MONTHS
                      </label>
                    </div>
                  </div>
                  <div class="row ms-md-5 mt-2">
                    <div class="col-md-auto">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type Diuretics / NSAIDS used without relief"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          required
                          name="ObjectiveDiuretics"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please Type Right.</div>
                      </div>
                    </div>
                    <div class="col-sm-auto mt-2 pe-0">
                      <label class="form-label" for="validationCustom01">
                        Diuretics / NSAIDS used without relief
                      </label>
                    </div>
                    <div class="col-md-auto">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type WEEKS / MONTHS"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          required
                          name="ObjectiveDiureticsWEEKSMONTHS"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Type WEEKS / MONTHS.
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-auto mt-2 pe-0">
                      <label class="form-label" for="validationCustom01">
                        WEEKS / MONTHS
                      </label>
                    </div>
                  </div>
                  <div class="row ms-md-5 mt-2">
                    <div class="col-md-auto">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type Compression stockings used without relief/patient refused"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          required
                          name="ObjectiveCompression"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please Type Right.</div>
                      </div>
                    </div>
                    <div class="col-sm-auto mt-2 pe-0">
                      <label class="form-label" for="validationCustom01">
                        Compression stockings used without relief/patient refused
                      </label>
                    </div>
                    <div class="col-md-auto">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type WEEKS / MONTHS"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          required
                          name="ObjectiveCompressionWEEKSMONTHS"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Type WEEKS / MONTHS.
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-auto mt-2 pe-0">
                      <label class="form-label" for="validationCustom01">
                        WEEKS / MONTHS
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row text-center">
              <p class="fw-bold fs-1">VENOGRAM</p>
            </div>
            <div class="row border mx-2 px-2">
              <p class="text-center fw-bold text-decoration-underline">
                CEAP SCORE (circle)
              </p>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="CEAPSCORE"
                  value="C1 Small varicose veins"
                  id="C1 Small varicose veins"
                  required
                />
                <label class="form-check-label">
                  C1 Small varicose veins
                </label>
              </div>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="CEAPSCORE"
                  value="C2 Large varicose veins"
                  id="C2 Large varicose veins"
                  required
                />
                <label class="form-check-label">
                  C2 Large varicose veins
                </label>
              </div>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="CEAPSCORE"
                  value="C3 Edema"
                  id="C3 Edema"
                  required
                />
                <label class="form-check-label"> C3 Edema </label>
              </div>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="CEAPSCORE"
                  value="C4 Skin changes without ulceration"
                  id="C4 Skin changes without ulceration"
                  required
                />
                <label class="form-check-label">
                  C4 Skin changes without ulceration
                </label>
              </div>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="CEAPSCORE"
                  value="C5 Skin changes with healed ulceration"
                  id="C5 Skin changes with healed ulceration"
                  required
                />
                <label class="form-check-label">
                  C5 Skin changes with healed ulceration
                </label>
              </div>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="CEAPSCORE"
                  value="C6 Skin changes with active ulceration"
                  id="C6 Skin changes with active ulceration"
                  required
                />
                <label class="form-check-label">
                  C6 Skin changes with active ulceration
                </label>
              </div>
              <p class="bg-warning">
                if a C5 or C6, Can be boarded without conservative Treatment
              </p>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="row">
              <p class="fw-bold text-decoration-underline">TESTING</p>
              <div>
                <div class="row ms-md-5">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Lower extremity / abdominal Venous duplex"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="TestingLower"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type Lower extremity / abdominal Venous duplex.</div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Lower extremity / abdominal Venous duplex</label
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-6">
                <p class="fw-bold text-decoration-underline">
                  MEDICATION RECONCILLIATION
                </p>
              </div>
              <div class="col-sm-6 text-end">
                <p>***Confirm/update medication allergies***</p>
              </div>
              <div>
                <div class="row ms-md-5">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type medication"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="medication"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type medication.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-9 mt-2">
                    <label class="form-label" for="validationCustom01"
                      >If patient has had recent procedure at MOVI, confirm
                      anticoagulation status. Update medication list to reflect
                      any changes/additions of: (Xarelto, Eliquis, Plavix,
                      Aspirin, Coumadin etc.)
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <p class="fw-bold text-decoration-underline">LABWORK ORDERS</p>
              <div>
                <div class="row ms-md-5">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type labwork CBC"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="labwork"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type labwork.</div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >CBC, Comprehensive metabolic profile, PT/INR - ORDER AT
                      TIME OF VISIT
                    </label>
                  </div>
                </div>
                <div class="row ms-md-5 mt-2">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Instruct"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="labworkInstruct"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type Instruct.</div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Instruct patient to have labs drawn
                      <strong>PRIOR</strong> to appt. (accepted 1 month to 3
                      days prior)
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <p class="fw-bold text-decoration-underline">ASA CLASSIFICATION (circle)</p>
              <div class="row ps-5">
                <ul style="list-style: upper-roman">
                  <li>
                    Normal, healthy (non-smoker, no or little alcohol use)
                  </li>
                  <li>
                    Mild systemic disease without substantive functional limitations. (Poor controlled DM or HTN, social alcohol use, pregnancy, obesity BMI <40, well-controlled DM/HRN, mild lung disease)
                  </li>
                  <li>
                    Severe systemic disease with substantive functional limitations; one or more moderate to severe disease (poor controlled DM/HTN, COPD, morbid obese BMI >40, active hepatitis, alcohol dependence or abuse, implanted pacemaker, moderate reduced EF, ESRD on regular dialysis, >3 months of MI/CVA/TIA/or CAD/stents)
                  </li>
                  <li>
                    Severe systemic disease that is constant threat to life (<3 months of MI/CVA/TIA/or CAD/stents, ongoing cardia ischemia, severe valve dysfunction, severed reduced EF, sepsis, DIC, ARD or ESRD not on regular dialysis
                  </li>
                  <li>Moribund not expected to survive the procedure</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-2">
                  <p>Physician</p>
                </div>
                <div class="col-sm-10">
                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      name="Physician"
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
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-2">
                  <p>MA</p>
                </div>
                <div class="col-sm-10">
                  <div class="input-group mb-3">
                    <input
                      type="text"
                      class="form-control"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      name="MA"
                      required
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type MA.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12"></div>
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
