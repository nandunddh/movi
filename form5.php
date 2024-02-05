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
        <form class="row g-3 needs-validation" novalidate id="form5">
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
                        placeholder="Type Pain"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="SubjectivePain"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Pain (CLAUDICATION) at rest vs. walking.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Pain (CLAUDICATION) at rest vs. walking.</label
                    >
                  </div>
                </div>
                <div class="ms-md-5 ps-md-5 ps-2">
                  <div class="row ms-md-5 mt-2">
                    <div class="col-sm-auto mt-2 pe-0">
                      <label class="form-label" for="validationCustom01">
                        DISTANCE:
                      </label>
                    </div>
                    <div class="col-md-auto">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type Pain"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          required
                          name="SubjectiveDistance"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Type Distance.
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-auto mt-2 pe-0">
                      <label class="form-label" for="validationCustom01">
                        FEET / BLOCKS
                      </label>
                    </div>
                  </div>
                  <div class="row ms-md-5 mt-2">
                    <div class="col-sm-auto mt-2 pe-0">
                      <label class="form-label" for="validationCustom01">
                        LEFT: FOOT / CALF / THIGH / HIP / BUTTOCK / LOW BACK /
                        TOE
                      </label>
                    </div>
                  </div>
                  <div class="row ms-md-5 mt-2">
                    <div class="col-sm-auto mt-2 pe-0">
                      <label class="form-label" for="validationCustom01">
                        RIGHT: FOOT / CALF / THIGH / HIP / BUTTOCK / LOW BACK /
                        TOE
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <p class="fw-bold text-decoration-underline">OBJECTIVE</p>
              <div>
                <div class="row ms-md-5">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li class="mt-1"></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Pedal pulse assessment"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectivePedal"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Pedal pulse assessment.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >Pedal pulse assessment</label
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
                          placeholder="Type Pedal Left"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          required
                          name="ObjectivePedalLeft"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">
                          Please Type Pedal Left.
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-auto mt-2 pe-0">
                      <label class="form-label" for="validationCustom01">
                        Left: decreased / absen
                      </label>
                    </div>
                  </div>
                  <div class="row ms-md-5 mt-2">
                    <div class="col-md-auto">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Type Pedal Right"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                          required
                          name="ObjectivePedalRight"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please Type Right.</div>
                      </div>
                    </div>
                    <div class="col-sm-auto mt-2 pe-0">
                      <label class="form-label" for="validationCustom01">
                        Right: decreased / absen
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row ms-md-5 mt-2">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Amputation"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectAmputation"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Amputation.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Amputation
                    </label>
                  </div>
                </div>
                <div class="row ms-md-5 mt-2 ps-5">
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Left: level
                    </label>
                  </div>
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Left Level"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectAmputationLeftLevel"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Left Level.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Right: level
                    </label>
                  </div>
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Right Level"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectAmputationRightLevels"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Right Level.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row ms-md-5 mt-2">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Dependent rubor"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectDependentrubor"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Dependent rubor.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Dependent rubor
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
                        placeholder="Type Chronic sores"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectChronicsores"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Chronic sores.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Chronic sores
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
                        placeholder="Type Walking Impairment Questionnaire completed"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectWalkingImpairmentQuestionnairecompleted"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Walking Impairment Questionnaire completed.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Walking Impairment Questionnaire completed
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
                        placeholder="Type Rutherford Score"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectRutherfordScore"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Rutherford Score.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Rutherford Score (circle in box)
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
                        placeholder="Type Ambulatory status"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectAmbulatorystatus"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Ambulatory status.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Ambulatory status
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
                        placeholder="Type Failed conservative"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectFailedconservative"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Failed conservative.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Failed conservative therapy **NEED TIME FRAME FOR EACH
                      OPTION BELOW**
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
                        placeholder="Type dual anti-platelet & statin"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="Objectdualanti-plateletstatin"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type dual anti-platelet & statin.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      dual anti-platelet & statin
                    </label>
                  </div>
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type (wks/mos)"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="Objectdualwksmos"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type (wks/mos).</div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      (wks/mos)
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
                        placeholder="Type pletal"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="Objectpletal"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type pletal.</div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      pletal
                    </label>
                  </div>
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type pletal (wks/mos)"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="Objectpletalwksmos"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type pletal (wks/mos).
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      (wks/mos)
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
                        placeholder="Type Structured / non-structured exercise walking program"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectStructurednon-structuredexercisewalkingprogram"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Structured / non-structured exercise walking
                        program.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Structured / non-structured exercise walking program
                    </label>
                  </div>
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Structured / non-structured exercise walking program (wks/mos)"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectStructurednon-structuredexercisewalkingprogramwksmos"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Structured / non-structured exercise walking
                        program (wks/mos).
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      (wks/mos)
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
                        placeholder="Type Smoking cessation program"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectSmokingcessationprogram"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Smoking cessation program.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Smoking cessation program
                    </label>
                  </div>
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Smoking cessation program (wks/mos)"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="ObjectSmokingcessationprogramwksmos"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Smoking cessation program (wks/mos).
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      (wks/mos)
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="row text-center">
              <p class="fw-bold fs-1">ANGIOGRAM</p>
              <p class="fw-bold fs-4">LEFT / RIGHT</p>
            </div>
            <div class="row border mx-2 px-2">
              <p class="text-center fw-bold text-decoration-underline">
                RUTHERFORD SCORE (circle)
              </p>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="RUTHERFORDSCORE"
                  value="0 Asymptomatic"
                  id="0 Asymptomatic"
                  required
                />
                <label class="form-check-label"> 0 Asymptomatic </label>
              </div>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="RUTHERFORDSCORE"
                  value="1 Mild Claudication"
                  id="1 Mild Claudication"
                  required
                />
                <label class="form-check-label"> 1 Mild Claudication </label>
              </div>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="RUTHERFORDSCORE"
                  value="2 Moderate Claudication"
                  id="2 Moderate Claudication"
                  required
                />
                <label class="form-check-label">
                  2 Moderate Claudication
                </label>
              </div>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="RUTHERFORDSCORE"
                  value="3 Severe Claudication"
                  id="3 Severe Claudication"
                  required
                />
                <label class="form-check-label"> 3 Severe Claudication </label>
              </div>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="RUTHERFORDSCORE"
                  value="4 Rest Pain"
                  id="4 Rest Pain"
                  required
                />
                <label class="form-check-label"> 4 Rest Pain </label>
              </div>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="RUTHERFORDSCORE"
                  value="5 Ischemic ulceration not exceeding digits of the foot. Minor tissue loss"
                  id="5 Ischemic ulceration not exceeding digits of the foot. Minor tissue loss"
                  required
                />
                <label class="form-check-label">
                  5 Ischemic ulceration not exceeding digits of the foot. Minor
                  tissue loss
                </label>
              </div>
              <div class="form-check my-3">
                <input
                  class="form-check-input"
                  type="radio"
                  name="RUTHERFORDSCORE"
                  value="6 Severe ischemic ulcers or frank Gangrene extending above TM level Major tissue loss"
                  id="6 Severe ischemic ulcers or frank Gangrene extending above TM level Major tissue loss"
                  required
                />
                <label class="form-check-label">
                  6 Severe ischemic ulcers or frank Gangrene extending above TM
                  level Major tissue loss
                </label>
              </div>
              <p class="bg-warning">
                if 5 or 6, Can be boarded without conservative Treatment
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
                        placeholder="Type ABI/TBI"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="TestingABI_TBI"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type ABI/TBI.</div>
                    </div>
                  </div>
                  <div class="col-md-auto mt-2">
                    <label class="form-label" for="validationCustom01"
                      >ABI/TBI</label
                    >
                  </div>
                </div>
                <div class="row ms-md-5 mt-2">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <li></li>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Type Lower extremity"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="TestingLowerextremity"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Lower extremity.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      Lower extremity / abdominal Arterial duplex
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
                        placeholder="Type CTA"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                        name="TestingCTA"
                      />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type CTA.</div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label" for="validationCustom01">
                      CTA / MRA / previous cath with LE runof
                    </label>
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
                <p>
                  ***Confirm/update medication allergies***
                </p>
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
              <p class="fw-bold text-decoration-underline">SA CLASSIFICATION</p>
              <div class="row ps-5">
                <ul style="list-style: upper-roman">
                  <li>
                    Normal, healthy (non-smoker, no or little alcohol use)
                  </li>
                  <li>
                    Mild systemic disease without substantive functional
                    limitations. (Poor controlled DM or HTN, social alcohol use,
                    pregnancy, obesity BMI <40, well-controlled DM/HRN, mild
                    lung disease)
                  </li>
                  <li>
                    Severe systemic disease with substantive functional
                    limitations; one or more moderate to severe disease (poor
                    controlled DM/HTN, COPD, morbid obese BMI >40, active
                    hepatitis, alcohol dependence or abuse, implanted pacemaker,
                    moderate reduced EF, ESRD on regular dialysis, >3 months of
                    MI/CVA/TIA/or CAD/stents)
                  </li>
                  <li>
                    Severe systemic disease that is constant threat to life (<3
                    months of MI/CVA/TIA/or CAD/stents, ongoing cardia ischemia,
                    severe valve dysfunction, severed reduced EF, sepsis, DIC,
                    ARD or ESRD not on regular dialysis
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
