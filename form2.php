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
        <div class="col-sm-12 col-lg-12 col-md-12">
          <p class="text-center fw-bold fs-3 mb-5">HISTORY AND PHYSICAL</p>
          <div>
            <form class="row g-3 needs-validation" novalidate id="form2">
              <div class="row mb-3">
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-md-1">
                      <label class="form-label" for="validationCustom01"
                        >Patient</label
                      >
                    </div>
                    <div class="col-md-11">
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
              <div class="row mb-3">
                <div class="col-sm-8">
                  <div class="row">
                    <div class="col-md-1">
                      <label for="basic-url" class="form-label"
                        >Physician</label
                      >
                    </div>
                    <div class="col-md-11">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type Physician"
                          aria-describedby="basic-addon1"
                          required
                          name="Physician"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Type Physician.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-md-6 text-md-end">
                      <label for="basic-url" class="form-label"
                        >Desired Date of Procedure</label
                      >
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <input
                          type="date"
                          class="form-control"
                          aria-describedby="basic-addon1"
                          required
                          name="ProcedureDate"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Select Desired Date of Procedure.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-auto text-md-end">
                  <label for="basic-url" class="form-label fw-bold"
                    >PROCEDURE:
                  </label>
                </div>
                <div class="col-md-auto">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="PROCEDURE"
                          value="Upper/Lower Ext Angio/Intervention"
                          id="flexRadioDefault1"
                          required
                        />
                        <label class="form-check-label" for="flexRadioDefault1">
                          Upper/Lower Ext Angio/Intervention
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          value="Carotid Angio"
                          name="PROCEDURE"
                          id="flexRadioDefault1"
                          required
                        />
                        <label class="form-check-label" for="flexRadioDefault1">
                          Carotid Angio
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          value="Loop Recorder Implant/Explant"
                          name="PROCEDURE"
                          id="flexRadioDefault1"
                          required
                        />
                        <label class="form-check-label" for="flexRadioDefault1">
                          Loop Recorder Implant/Explant
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          value="Cardiac Catheterization"
                          name="PROCEDURE"
                          id="flexRadioDefault1"
                          required
                        />
                        <label class="form-check-label" for="flexRadioDefault1">
                          Cardiac Catheterization
                        </label>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          value="Pacemaker/ ICD"
                          name="PROCEDURE"
                          id="flexRadioDefault1"
                          required
                        />
                        <label class="form-check-label" for="flexRadioDefault1">
                          Pacemaker/ ICD
                        </label>
                      </div>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Select one option.
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="row">
                        <div class="col-md-2 text-md-end align-self-center">
                          <label for="basic-url" class="form-label"
                            >Other:</label
                          >
                        </div>
                        <div class="col-md-10">
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Type others"
                              aria-label="Username"
                              aria-describedby="basic-addon1"
                              name="Procedureothers"
                              required
                            />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">
                              Please Type others.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-12">
                  <label for="basic-url" class="form-label fw-bold"
                    >INDICATION:
                  </label>
                </div>
                <div class="row px-5">
                  <div class="col-sm-6">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Lifestyle Limiting Claudication"
                        name="INDICATION"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Lifestyle Limiting Claudication
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Critical Limb Ischemia (rest pain, ulceration, gangrene)"
                        name="INDICATION"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Critical Limb Ischemia (rest pain, ulceration, gangrene)
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="AV Block"
                        name="INDICATION"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        AV Block
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Afib"
                        name="INDICATION"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Afib
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Bradycardia"
                        name="INDICATION"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Bradycardia
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="NO KNOWN ALLERGIES"
                        name="INDICATION"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        NO KNOWN ALLERGIES
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Critical renal stenosis (greater than 90%)"
                        name="INDICATION"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Critical renal stenosis (greater than 90%)
                      </label>
                    </div>

                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Coronary Artery Disease"
                        name="INDICATION"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Coronary Artery Disease
                      </label>
                    </div>

                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Pulmonary edema, unstable angina, CHF associated with renal artery stenosis."
                        name="INDICATION"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Pulmonary edema, unstable angina, CHF associated with
                        renal artery stenosis.
                      </label>
                    </div>

                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Symptomatic, high risk surgical candidate previous CVA/TIA"
                        name="INDICATION"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Symptomatic, high risk surgical candidate previous
                        CVA/TIA
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Pacemaker/ ICD"
                        name="INDICATION"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Pacemaker/ ICD
                      </label>
                    </div>
                    <div class="col-sm-12 mb-3">
                      <div class="row">
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label"
                            >Other:</label
                          >
                        </div>
                        <div class="col-md-10">
                          <div class="input-group">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Type Others"
                              aria-label="Username"
                              aria-describedby="basic-addon1"
                              name="IndicationOthers"
                              required
                            />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">
                              Please Type Others.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please Select Yes or No.</div>

                  <div class="row">
                    <div class="col-sm-4">
                      <label for="basic-url" class="form-label fw-bold"
                        >ALLERGIES (PLEASE INCLUDE REACTION)</label
                      >
                    </div>
                    <div class="col-sm-8">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type Procedure"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          name="Procedure"
                          required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Type Procedure.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-sm-auto">
                  <label for="basic-url" class="form-label fw-bold"
                    >History of Present Illness</label
                  >
                </div>
                <div class="col-sm-10">
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Type History of Present Illness"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      name="HistoryofPresentIllness"
                      required
                      width="100%"
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type History of Present Illness.
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-12">
                  <label for="basic-url" class="form-label fw-bold"
                    >Past Medical/Surgical History:
                  </label>
                </div>
                <div class="row">
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="CHF"
                        name="PastMedicalSurgicalHistory"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        CHF
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="MI"
                        name="PastMedicalSurgicalHistory"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        MI
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Unstable angina"
                        name="PastMedicalSurgicalHistory"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Unstable angina
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Prev PCI"
                        name="PastMedicalSurgicalHistory"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Prev PCI
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Prev CABG"
                        name="PastMedicalSurgicalHistory"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Prev CABG
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="AFib"
                        name="PastMedicalSurgicalHistory"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        AFib
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Valvular heart dx"
                        name="PastMedicalSurgicalHistory"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Valvular heart dx
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="PPM"
                        name="PastMedicalSurgicalHistory"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        PPM
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        values="AICD"
                        name="PastMedicalSurgicalHistory"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        AICD
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="COPD"
                        name="PastMedicalSurgicalHistory"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        COPD
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="CRF"
                        name="PastMedicalSurgicalHistory"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        CRF
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="PastMedicalSurgicalHistory"
                        value="Recent GI bleed"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Recent GI bleed
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="CVA/TIA"
                        name="PastMedicalSurgicalHistory"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        CVA/TIA
                      </label>
                    </div>
                  </div>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please Select Yes or No.</div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-md-auto">
                      <label for="basic-url" class="form-label fw-bold"
                        >Previous Peripheral Vascular Intervention</label
                      >
                    </div>
                    <div class="col-md-8">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type Previous Peripheral Vascular Intervention"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          name="PreviousPeripheralVascularIntervention"
                          required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Type Previous Peripheral Vascular Intervention.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="basic-url" class="form-label fw-bold"
                        >Previous Angiogram</label
                      >
                    </div>
                    <div class="col-md-8 ms-md-2">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type Previous Angiogram"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          name="PreviousAngiogram"
                          required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Type Previous Angiogram.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label for="basic-url" class="form-label fw-bold"
                    >Risk Factors:
                  </label>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="HTN"
                        name="RiskFactors"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        HTN
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Current smoking"
                        name="RiskFactors"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Current smoking
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Inactivity"
                        name="RiskFactors"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Inactivity
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="DM"
                        name="RiskFactors"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        DM
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Obesity"
                        name="RiskFactors"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Obesity
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="RiskFactors"
                        value="Previous smoking"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Previous smoking
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Hyperlipidemia"
                        name="RiskFactors"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Hyperlipidemia
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Fam. Hx"
                        name="RiskFactors"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Fam. Hx
                      </label>
                    </div>
                  </div>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please Select Yes or No.</div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-md-12">
                  <label for="basic-url" class="form-label fw-bold"
                    >Medications:
                  </label>
                </div>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="ASA"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        ASA
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Plavix"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Plavix
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Coumadin"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Coumadin
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Pletal"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Pletal
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Ca + Chan Blocker"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Ca + Chan Blocker
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Beta Blocker"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Beta Blocker
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="ACE"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        ACE
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="ARB"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        ARB
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Nitrate"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Nitrate
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Digoxin"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Digoxin
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Diuretic"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Diuretic
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Statin"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Statin
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="radio"
                        value="Trental"
                        name="Medications"
                        id="flexRadioDefault1"
                        required
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Trental
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-12 my-3">
                    <div class="row">
                      <div class="col-md-auto text-md-end">
                        <label for="basic-url" class="form-label">Others</label>
                      </div>
                      <div class="col-md-8">
                        <div class="input-group">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type Others"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="Medicationsothers"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Others.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label for="basic-url" class="form-label fw-bold"
                    >Labs:
                  </label>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-4 text-md-end">
                        <label for="basic-url" class="form-label"
                          >K+ (potassium)</label
                        >
                      </div>
                      <div class="col-md-8">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type K+ (potassium)"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="LabsK"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type K+ (potassium).
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-4 text-md-end">
                        <label for="basic-url" class="form-label">BUN</label>
                      </div>
                      <div class="col-md-8">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type BUN"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="BUN"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please Type BUN.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-4 text-md-end">
                        <label for="basic-url" class="form-label"
                          >Glucose</label
                        >
                      </div>
                      <div class="col-md-8">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type Glucose"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="Glucose"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Glucose.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-4 text-md-end">
                        <label for="basic-url" class="form-label"
                          >Creatnine</label
                        >
                      </div>
                      <div class="col-md-8">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type Creatnine"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="Creatnine"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Creatnine.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-8">
                    <div class="row">
                      <div class="col-md-4 text-md-end">
                        <label for="basic-url" class="form-label"
                          >(if greater than 1.2, was Mucomyst given?)</label
                        >
                      </div>
                      <div class="col-md-8">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type (if greater than 1.2, was Mucomyst given?)"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="Mucomystgiven"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type (if greater than 1.2, was Mucomyst
                            given?).
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-4 text-md-end">
                        <label for="basic-url" class="form-label"
                          >Impression</label
                        >
                      </div>
                      <div class="col-md-8">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type Impression"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="Impression"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Impression.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-4 text-md-end">
                        <label for="basic-url" class="form-label">Plan</label>
                      </div>
                      <div class="col-md-8">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type Plan"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="Plan"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please Type Plan.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-auto">
                  <label for="basic-url" class="form-label fw-bold"
                    >Physical Exam and Review of Systems:
                  </label>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-3 text-md-end">
                        <label for="basic-url" class="form-label"
                          >BP (Right)</label
                        >
                      </div>
                      <div class="col-md-9">
                        <div class="input-group">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type BP (Right)"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="BP(Right)"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type BP (Right).
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-3 text-md-end">
                        <label for="basic-url" class="form-label"
                          >BP (Left)</label
                        >
                      </div>
                      <div class="col-md-9">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type BP (Left)"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="BP(Left)"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type BP (Left).
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-3 text-md-end">
                        <label for="basic-url" class="form-label">P</label>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type P"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="P"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please Type P.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-3 text-md-end">
                        <label for="basic-url" class="form-label">RB</label>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type RB"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="RB"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please Type RB.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-3 text-md-end">
                        <label for="basic-url" class="form-label">HFENT</label>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type HFENT"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="HFENT"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please Type HFENT</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-3 text-md-end">
                        <label for="basic-url" class="form-label">Lungs</label>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type Lungs"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="Lungs"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please Type Lungs.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-3 text-md-end">
                        <label for="basic-url" class="form-label">Abd</label>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type Abd"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="Abd"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please Type Abd.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-3 text-md-end">
                        <label for="basic-url" class="form-label">Skin</label>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type Skin"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="Skin"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please Type Skin.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-3 text-md-end">
                        <label for="basic-url" class="form-label">Heart</label>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type Heart"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="Heart"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please Type Heart.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-3 text-md-end">
                        <label for="basic-url" class="form-label">Ext</label>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group mb-3">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Type Ext"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            name="Ext"
                            required
                          />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">Please Type Ext.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-3 text-md-end">
                        <label for="basic-url" class="form-label">JVD</label>
                      </div>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-sm-auto">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="JVD"
                                value="Yes"
                                id="flexRadioDefault1"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="flexRadioDefault1"
                              >
                                Yes
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-auto">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="JVD"
                                value="No"
                                id="flexRadioDefault1"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="flexRadioDefault1"
                              >
                                No
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-4 text-md-end">
                        <label for="basic-url" class="form-label"
                          >Carotid Bruit</label
                        >
                      </div>
                      <div class="col-md-auto">
                        <div class="row">
                          <div class="col-sm-auto">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="CarotidBruit"
                                value="Yes"
                                id="flexRadioDefault1"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="flexRadioDefault1"
                              >
                                Yes
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-auto">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="CarotidBruit"
                                value="No"
                                id="flexRadioDefault1"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="flexRadioDefault1"
                              >
                                No
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-md-4 text-md-end">
                        <label for="basic-url" class="form-label"
                          >Renal Brui</label
                        >
                      </div>
                      <div class="col-md-auto">
                        <div class="row">
                          <div class="col-sm-auto">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="RenalBrui"
                                value="Yes"
                                id="flexRadioDefault1"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="flexRadioDefault1"
                              >
                                Yes
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-auto">
                            <div class="form-check">
                              <input
                                class="form-check-input"
                                type="radio"
                                name="RenalBrui"
                                value="No"
                                id="flexRadioDefault1"
                                required
                              />
                              <label
                                class="form-check-label"
                                for="flexRadioDefault1"
                              >
                                No
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-auto">
                  <label for="basic-url" class="form-label fw-bold"
                    >Pulses:
                  </label>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="row">
                      <div class="col-sm-2">
                        <label for="basic-url" class="form-label"
                          ><li>Radial/Brachial</li>
                        </label>
                      </div>
                      <div class="col-sm-10">
                        <div class="row">
                          <div class="col-md-1 text-md-end">
                            <label for="basic-url" class="form-label"
                              >Right</label
                            >
                          </div>
                          <div class="col-md-5">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Type Radial/Brachial Right"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                                name="Radial/BrachialRight"
                                required
                              />
                              <div class="valid-feedback">Looks good!</div>
                              <div class="invalid-feedback">
                                Please Type Radial/Brachial Right.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 text-md-end">
                            <label for="basic-url" class="form-label"
                              >Left</label
                            >
                          </div>
                          <div class="col-md-5">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Type Radial/Brachial Left"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                                name="Radial/BrachialLeft"
                                required
                              />
                              <div class="valid-feedback">Looks good!</div>
                              <div class="invalid-feedback">
                                Please Type Radial/Brachial Left.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label for="basic-url" class="form-label"
                          ><li>Femoral</li>
                        </label>
                      </div>
                      <div class="col-sm-10">
                        <div class="row">
                          <div class="col-md-1 text-md-end">
                            <label for="basic-url" class="form-label"
                              >Right</label
                            >
                          </div>
                          <div class="col-md-5">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Type Femoral Right"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                                name="FemoralRight"
                                required
                              />
                              <div class="valid-feedback">Looks good!</div>
                              <div class="invalid-feedback">
                                Please Type Femoral Right.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 text-md-end">
                            <label for="basic-url" class="form-label"
                              >Left</label
                            >
                          </div>
                          <div class="col-md-5">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Type Femoral Left"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                                name="FemoralLeft"
                                required
                              />
                              <div class="valid-feedback">Looks good!</div>
                              <div class="invalid-feedback">
                                Please Type Femoral Left.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label for="basic-url" class="form-label"
                          ><li>Popliteal</li>
                        </label>
                      </div>
                      <div class="col-sm-10">
                        <div class="row">
                          <div class="col-md-1 text-md-end">
                            <label for="basic-url" class="form-label"
                              >Right</label
                            >
                          </div>
                          <div class="col-md-5">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Type Popliteal Right"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                                name="PoplitealRight"
                                required
                              />
                              <div class="valid-feedback">Looks good!</div>
                              <div class="invalid-feedback">
                                Please Type Popliteal Right.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 text-md-end">
                            <label for="basic-url" class="form-label"
                              >Left</label
                            >
                          </div>
                          <div class="col-md-5">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Type Popliteal Left"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                                name="PoplitealLeft"
                                required
                              />
                              <div class="valid-feedback">Looks good!</div>
                              <div class="invalid-feedback">
                                Please Type Popliteal Left.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                        <label for="basic-url" class="form-label"
                          ><li>Pedal</li>
                        </label>
                      </div>
                      <div class="col-sm-10">
                        <div class="row">
                          <div class="col-md-1 text-md-end">
                            <label for="basic-url" class="form-label"
                              >Right DP</label
                            >
                          </div>
                          <div class="col-md-5">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Type Pedal Right DP"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                                name="PedalRightDP"
                                required
                              />
                              <div class="valid-feedback">Looks good!</div>
                              <div class="invalid-feedback">
                                Please Type Pedal Right DP.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 text-md-end">
                            <label for="basic-url" class="form-label"
                              >Left DP</label
                            >
                          </div>
                          <div class="col-md-5">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Type Pedal Left DP"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                                name="PedalLeftDP"
                                required
                              />
                              <div class="valid-feedback">Looks good!</div>
                              <div class="invalid-feedback">
                                Please Type Pedal Left DP.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 text-md-end">
                            <label for="basic-url" class="form-label"
                              >Right PT</label
                            >
                          </div>
                          <div class="col-md-5">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Type Pedal Right PT"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                                name="PedalRightPT"
                                required
                              />
                              <div class="valid-feedback">Looks good!</div>
                              <div class="invalid-feedback">
                                Please Type Pedal Right PT.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1 text-md-end">
                            <label for="basic-url" class="form-label"
                              >Left PT</label
                            >
                          </div>
                          <div class="col-md-5">
                            <div class="input-group mb-3">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="Type Pedal Left PT"
                                aria-label="Username"
                                aria-describedby="basic-addon1"
                                name="PedalLeftPT"
                                required
                              />
                              <div class="valid-feedback">Looks good!</div>
                              <div class="invalid-feedback">
                                Please Type Pedal Left PT.
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-2">
                      <label for="basic-url" class="form-label fw-bold"
                        >ABI:
                      </label>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label"
                            >Right</label
                          >
                        </div>
                        <div class="col-md-5">
                          <div class="input-group mb-3">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Type ABI Right"
                              aria-label="Username"
                              aria-describedby="basic-addon1"
                              name="ABIRight"
                              required
                            />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">
                              Please Type ABI Right.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label">Left</label>
                        </div>
                        <div class="col-md-5">
                          <div class="input-group mb-3">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Type ABI Left"
                              aria-label="Username"
                              aria-describedby="basic-addon1"
                              name="ABILeft"
                              required
                            />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">
                              Please Type ABI Left.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row my-3">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-2">
                      <label for="basic-url" class="form-label fw-bold"
                        >Rutherford Class:
                      </label>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="RutherfordClass"
                              value="0 (asymptomatic)"
                              id="flexRadioDefault1"
                              required
                            />
                            <label
                              class="form-check-label"
                              for="flexRadioDefault1"
                            >
                              0 (asymptomatic)
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="RutherfordClass"
                              value="1 (mild claudication)"
                              id="flexRadioDefault1"
                              required
                            />
                            <label
                              class="form-check-label"
                              for="flexRadioDefault1"
                            >
                              1 (mild claudication)
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="RutherfordClass"
                              value="2 (moderate claudication)"
                              id="flexRadioDefault1"
                              required
                            />
                            <label
                              class="form-check-label"
                              for="flexRadioDefault1"
                            >
                              2 (moderate claudication)
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="RutherfordClass"
                              value="3 (severe claudication)"
                              id="flexRadioDefault1"
                              required
                            />
                            <label
                              class="form-check-label"
                              for="flexRadioDefault1"
                            >
                              3 (severe claudication)
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="RutherfordClass"
                              value="4 (rest pain)"
                              id="flexRadioDefault1"
                              required
                            />
                            <label
                              class="form-check-label"
                              for="flexRadioDefault1"
                            >
                              4 (rest pain)
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="RutherfordClass"
                              value="5 (minor tissue loss)"
                              id="flexRadioDefault1"
                              required
                            />
                            <label
                              class="form-check-label"
                              for="flexRadioDefault1"
                            >
                              5 (minor tissue loss)
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="radio"
                              name="RutherfordClass"
                              value="6 (major tissue loss)"
                              id="flexRadioDefault1"
                              required
                            />
                            <label
                              class="form-check-label"
                              for="flexRadioDefault1"
                            >
                              6 (major tissue loss)
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-2">
                      <label for="basic-url" class="form-label fw-bold"
                        >VENDOR REQUEST:
                      </label>
                    </div>
                    <div class="col-md-10">
                      <div class="input-group mb-3">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type VENDOR REQUEST"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          name="VendorRequest"
                          required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Type VENDOR REQUEST.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-2">
                      <label for="basic-url" class="form-label fw-bold"
                        >SPECIAL INSTRUCTIONS:
                      </label>
                    </div>
                    <div class="col-md-10">
                      <div class="input-group mb-3">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type SPECIAL INSTRUCTIONS:"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          name="SpecialInstruction"
                          required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Type SPECIAL INSTRUCTIONS:.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-center mt-5 mb-4 fw-bold">
                  I have reviewed the initial history and physical, examined the
                  patient and I have determined that the patient’s condition has
                  not changed.
                </p>
                <div class="col-sm-5">
                  <div class="row">
                    <div class="col-sm-auto">
                      <p>PHYSICIAN’S SIGNATURE</p>
                    </div>
                    <div class="col-sm-7">
                      <div class="input-group mb-3">
                        <input
                          type="file"
                          class="form-control"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          name="PhysicianSignature"
                          required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please choose a PHYSICIAN’S SIGNATURE.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="row">
                    <div class="col-sm-auto">
                      <p>DATE</p>
                    </div>
                    <dov class="col-sm-9">
                      <div class="input-group mb-3">
                        <input
                          type="date"
                          class="form-control"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          name="submiteddate"
                          required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please Select Date.</div>
                      </div>
                    </dov>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="row">
                    <div class="col-sm-auto">
                      <p>TIME</p>
                    </div>
                    <dov class="col-sm-9">
                      <div class="input-group mb-3">
                        <input
                          type="time"
                          class="form-control"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          name="submitedtime"
                          required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please Select Tme.</div>
                      </div>
                    </dov>
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
