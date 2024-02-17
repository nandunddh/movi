<?php include "header.php" ?>
  <div class="container my-5">
    <div class="row">
      <p class="text-center fw-bold fs-3">
        ANGIOGRAM
      </p>

    </div>
    <div class="row">
      <form class="row g-3 needs-validation" novalidate id="form5">
        <div class="col-sm-12">
          <div class="row mb-3">
            <div class="col-sm-8">
              <div class="row">
                <div class="col-md-2">
                  <label class="form-label">Patient</label>
                </div>
                <div class="col-md-10">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type Patient Name" required
                      name="Patient name" />
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
                    <input type="date" class="form-control" placeholder="MM/DD/YYYY" required name="Patient DOB" />
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
                    <input type="text" class="form-control" placeholder="Type Pain" required name="Subjective Pain" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Pain (CLAUDICATION) at rest vs. walking.
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Pain (CLAUDICATION) at rest vs. walking.</label>
                </div>
              </div>
              <div class="ms-md-5 ps-md-5 ps-2">
                <div class="row ms-md-5 mt-2">
                  <div class="col-sm-2 mt-2 pe-0">
                    <label class="form-label">
                      DISTANCE:
                    </label>
                  </div>
                  <div class="col-md-auto">
                    <select class="form-select" aria-label="Default select example" name="Subjective Distance" required>
                      <option selected>Select</option>
                      <option value="FEET">
                        FEET
                      </option>
                      <option value="BLOCKS">
                        BLOCKS
                      </option>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Select Option.</div>
                    </select>
                  </div>
                </div>
                <div class="row ms-md-5 mt-2">
                  <div class="col-sm-2 mt-2 pe-0">

                    <label class="form-label">
                      LEFT:
                    </label>
                  </div>
                  <div class="col-sm-auto">
                    <select class="form-select" aria-label="Default select example" name="Subjective Distance Left"
                      required>
                      <option selected>Select</option>
                      <option value="FOOT">
                        FOOT
                      </option>
                      <option value="CALF">
                        CALF
                      </option>
                      <option value="THIGH">
                        THIGH
                      </option>
                      <option value="HIP">
                        HIP
                      </option>
                      <option value="BUTTOCK">
                        BUTTOCK
                      </option>
                      <option value="LOW BACK">
                        LOW BACK
                      </option>
                      <option value="TOE">
                        TOE
                      </option>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Select Option.</div>
                    </select>
                  </div>
                </div>
                <div class="row ms-md-5 mt-2">
                  <div class="col-sm-2 mt-2 pe-0">
                    <label class="form-label">
                      RIGHT:
                    </label>
                  </div>
                  <div class="col-sm-auto">
                    <select class="form-select" aria-label="Default select example" name="Subjective Distance Right"
                      required>
                      <option selected>Select</option>
                      <option value="FOOT">
                        FOOT
                      </option>
                      <option value="CALF">
                        CALF
                      </option>
                      <option value="THIGH">
                        THIGH
                      </option>
                      <option value="HIP">
                        HIP
                      </option>
                      <option value="BUTTOCK">
                        BUTTOCK
                      </option>
                      <option value="LOW BACK">
                        LOW BACK
                      </option>
                      <option value="TOE">
                        TOE
                      </option>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Select Option.</div>
                    </select>
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
                    <input type="text" class="form-control" placeholder="Type Pedal pulse assessment" required
                      name="Objective Pedal" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Pedal pulse assessment.
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Pedal pulse assessment</label>
                </div>
              </div>
              <div class="ps-md-5 ms-md-5 ps-2">
                <div class="row ms-md-5 mt-2">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type Pedal Left" required
                        name="Objective Pedal Left" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Pedal Left.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label">
                      Left: decreased / absen
                    </label>
                  </div>
                </div>
                <div class="row ms-md-5 mt-2">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type Pedal Right" required
                        name="Objective Pedal Right" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type Right.</div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label">
                      Right: decreased / absen
                    </label>
                  </div>
                </div>
              </div>
              <div class="row ms-md-5 mt-2">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control" placeholder="Type Amputation" required
                      name="Object Amputation" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Amputation.
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    Amputation
                  </label>
                </div>
              </div>
              <div class="row ms-md-5 mt-2 ps-5">
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    Left: level
                  </label>
                </div>
                <div class="col-md-auto">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type Left Level" required
                      name="Object Amputation Left Level" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Left Level.
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    Right: level
                  </label>
                </div>
                <div class="col-md-auto">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type Right Level" required
                      name="Object Amputation Right Levels" />
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
                    <input type="text" class="form-control" placeholder="Type Dependent rubor" required
                      name="Object Dependent rubor" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Dependent rubor.
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    Dependent rubor
                  </label>
                </div>
              </div>
              <div class="row ms-md-5 mt-2">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control" placeholder="Type Chronic sores" required
                      name="Object Chronic sores" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Chronic sores.
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    Chronic sores
                  </label>
                </div>
              </div>
              <div class="row ms-md-5 mt-2">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control"
                      placeholder="Type Walking Impairment Questionnaire completed" required
                      name="Object Walking Impairment Questionnaire completed" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Walking Impairment Questionnaire completed.
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    Walking Impairment Questionnaire completed
                  </label>
                </div>
              </div>
              <div class="row ms-md-5 mt-2">
                <div class="row">
                  <div class="col-sm-auto pe-0">
                    <li></li>
                  </div>
                  <div class="col-md-5 ps-0">
                    <!-- <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control" placeholder="Type Rutherford Score" aria-label="Username"
                    aria-describedby="basic-addon1" required name="Object Rutherford Score" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Rutherford Score.
                    </div>
                  </div> -->



                    <select class="form-select mb-2" aria-label="Default select example" name="RUTHERFORD SCORE"
                      required>
                      <option selected>Select</option>
                      <option value="0 Asymptomatic">
                        0 Asymptomatic
                      </option>
                      <option value="1 Mild Claudication">
                        1 Mild Claudication
                      </option>
                      <option value="2 Moderate Claudication">
                        2 Moderate Claudication
                      </option>
                      <option value="3 Severe Claudication">
                        3 Severe Claudication
                      </option>
                      <option value="4 Rest Pain">
                        4 Rest Pain
                      </option>
                      <option value="5 Ischemic ulceration not exceeding digits of the foot. Minor tissue loss">
                        5 Ischemic ulceration not exceeding digits of the foot. Minor tissue loss
                      </option>
                      <option
                        value="6 Severe ischemic ulcers or frank Gangrene extending above TM level Major tissue loss">
                        6 Severe ischemic ulcers or frank Gangrene extending above TM level Major tissue loss
                      </option>
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Select Option.</div>
                    </select>
                    <!-- <p class="text-center fw-bold text-decoration-underline">
                      RUTHERFORD SCORE (circle)
                    </p>
                    <div class="form-check my-3">
                      <input class="form-check-input" type="radio" name="RUTHERFORD SCORE" value="0 Asymptomatic"
                        id="0 Asymptomatic" required />
                      <label class="form-check-label"> 0 Asymptomatic </label>
                    </div>
                    <div class="form-check my-3">
                      <input class="form-check-input" type="radio" name="RUTHERFORDSCORE" value="1 Mild Claudication"
                        id="1 Mild Claudication" required />
                      <label class="form-check-label"> 1 Mild Claudication </label>
                    </div>
                    <div class="form-check my-3">
                      <input class="form-check-input" type="radio" name="RUTHERFORDSCORE" value="2 Moderate Claudication"
                        id="2 Moderate Claudication" required />
                      <label class="form-check-label">
                        2 Moderate Claudication
                      </label>
                    </div>
                    <div class="form-check my-3">
                      <input class="form-check-input" type="radio" name="RUTHERFORDSCORE" value="3 Severe Claudication"
                        id="3 Severe Claudication" required />
                      <label class="form-check-label"> 3 Severe Claudication </label>
                    </div>
                    <div class="form-check my-3">
                      <input class="form-check-input" type="radio" name="RUTHERFORDSCORE" value="4 Rest Pain" id="4 Rest Pain"
                        required />
                      <label class="form-check-label"> 4 Rest Pain </label>
                    </div>
                    <div class="form-check my-3">
                      <input class="form-check-input" type="radio" name="RUTHERFORDSCORE"
                        value="5 Ischemic ulceration not exceeding digits of the foot. Minor tissue loss"
                        id="5 Ischemic ulceration not exceeding digits of the foot. Minor tissue loss" required />
                      <label class="form-check-label">
                        5 Ischemic ulceration not exceeding digits of the foot. Minor tissue loss
                      </label>
                    </div>
                    <div class="form-check my-3">
                      <input class="form-check-input" type="radio" name="RUTHERFORDSCORE"
                        value="6 Severe ischemic ulcers or frank Gangrene extending above TM level Major tissue loss"
                        id="6 Severe ischemic ulcers or frank Gangrene extending above TM level Major tissue loss" required />
                      <label class="form-check-label">
                        6 Severe ischemic ulcers or frank Gangrene extending above TM level Major tissue loss
                      </label>
                    </div> -->
                    <p class="bg-warning">
                      if 5 or 6, Can be boarded without conservative Treatment
                    </p>
                  </div>

                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label">
                      Rutherford Score (circle in box)
                    </label>
                  </div>
                </div>
              </div>

              <div class="row ms-md-5 mt-2">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control" placeholder="Type Ambulatory status" required
                      name="Object Ambulatory status" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Ambulatory status.
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    Ambulatory status
                  </label>
                </div>
              </div>
              <div class="row ms-md-5 mt-2">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control" placeholder="Type Failed conservative" required
                      name="Object Failed conservative" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Failed conservative.
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    Failed conservative therapy **NEED TIME FRAME FOR EACH
                    OPTION BELOW**
                  </label>
                </div>
              </div>
              <div class="row ms-md-5 mt-2">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control" placeholder="Type dual anti-platelet & statin" required
                      name="Object dual anti platelet statin" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type dual anti-platelet & statin.
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    dual anti-platelet & statin
                  </label>
                </div>
                <div class="col-md-auto">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type (wks/mos)" required
                      name="Object dual wksmos" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type (wks/mos).</div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    (wks/mos)
                  </label>
                </div>
              </div>
              <div class="row ms-md-5 mt-2">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control" placeholder="Type pletal" required name="Object pletal" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type pletal.</div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    pletal
                  </label>
                </div>
                <div class="col-md-auto">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type pletal (wks/mos)" required
                      name="Object pletal wksmos" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type pletal (wks/mos).
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    (wks/mos)
                  </label>
                </div>
              </div>
              <div class="row ms-md-5 mt-2">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control"
                      placeholder="Type Structured / non-structured exercise walking program" required
                      name="Object Structurednon structured exercise walking program" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Structured / non-structured exercise walking
                      program.
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    Structured / non-structured exercise walking program
                  </label>
                </div>
                <div class="col-md-auto">
                  <div class="input-group">
                    <input type="text" class="form-control"
                      placeholder="Type Structured / non-structured exercise walking program (wks/mos)" required
                      name="Object Structurednon structured exercise walking program wksmos" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Structured / non-structured exercise walking
                      program (wks/mos).
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    (wks/mos)
                  </label>
                </div>
              </div>
              <div class="row ms-md-5 mt-2">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control" placeholder="Type Smoking cessation program" required
                      name="Object Smoking cessation program" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Smoking cessation program.
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    Smoking cessation program
                  </label>
                </div>
                <div class="col-md-auto">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type Smoking cessation program (wks/mos)"
                      required name="Object Smoking cessation program wksmos" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Smoking cessation program (wks/mos).
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    (wks/mos)
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-sm-4">
          <div class="row text-center">
            <p class="fw-bold fs-1">ANGIOGRAM</p>
            <p class="fw-bold fs-4">LEFT / RIGHT</p>
          </div>
          <div class="row border mx-2 px-2">
            <select class="form-select mt-3 mb-2" aria-label="Default select example" name="RUTHERFORD SCORE" required>
              <option selected>Select</option>
              <option value="0 Asymptomatic">
                0 Asymptomatic
              </option>
              <option value="1 Mild Claudication">
                1 Mild Claudication
              </option>
              <option value="2 Moderate Claudication">
                2 Moderate Claudication
              </option>
              <option value="3 Severe Claudication">
                3 Severe Claudication
              </option>
              <option value="4 Rest Pain">
                4 Rest Pain
              </option>
              <option value="5 Ischemic ulceration not exceeding digits of the foot. Minor tissue loss">
                5 Ischemic ulceration not exceeding digits of the foot. Minor tissue loss
              </option>
              <option value="6 Severe ischemic ulcers or frank Gangrene extending above TM level Major tissue loss">
                6 Severe ischemic ulcers or frank Gangrene extending above TM level Major tissue loss
              </option>
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please Select Option.</div>
            </select>
             <p class="text-center fw-bold text-decoration-underline">
              RUTHERFORD SCORE (circle)
            </p>
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="RUTHERFORD SCORE" value="0 Asymptomatic"
                id="0 Asymptomatic" required />
              <label class="form-check-label"> 0 Asymptomatic </label>
            </div>
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="RUTHERFORDSCORE" value="1 Mild Claudication"
                id="1 Mild Claudication" required />
              <label class="form-check-label"> 1 Mild Claudication </label>
            </div>
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="RUTHERFORDSCORE" value="2 Moderate Claudication"
                id="2 Moderate Claudication" required />
              <label class="form-check-label">
                2 Moderate Claudication
              </label>
            </div>
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="RUTHERFORDSCORE" value="3 Severe Claudication"
                id="3 Severe Claudication" required />
              <label class="form-check-label"> 3 Severe Claudication </label>
            </div>
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="RUTHERFORDSCORE" value="4 Rest Pain" id="4 Rest Pain"
                required />
              <label class="form-check-label"> 4 Rest Pain </label>
            </div>
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="RUTHERFORDSCORE"
                value="5 Ischemic ulceration not exceeding digits of the foot. Minor tissue loss"
                id="5 Ischemic ulceration not exceeding digits of the foot. Minor tissue loss" required />
              <label class="form-check-label">
                5 Ischemic ulceration not exceeding digits of the foot. Minor tissue loss
              </label>
            </div>
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="RUTHERFORDSCORE"
                value="6 Severe ischemic ulcers or frank Gangrene extending above TM level Major tissue loss"
                id="6 Severe ischemic ulcers or frank Gangrene extending above TM level Major tissue loss" required />
              <label class="form-check-label">
                6 Severe ischemic ulcers or frank Gangrene extending above TM level Major tissue loss
              </label>
            </div> 
            <p class="bg-warning">
              if 5 or 6, Can be boarded without conservative Treatment
            </p>
          </div>
        </div> -->
        <div class="col-sm-12">
          <div class="row">
            <p class="fw-bold text-decoration-underline">TESTING</p>
            <div>
              <div class="row ms-md-5">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type ABI/TBI" required
                      name="Testing ABI_TBI" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type ABI/TBI.</div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">ABI/TBI</label>
                </div>
              </div>
              <div class="row ms-md-5 mt-2">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control" placeholder="Type Lower extremity" required
                      name="Testing Lower extremity" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Lower extremity.
                    </div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
                    Lower extremity / abdominal Arterial duplex
                  </label>
                </div>
              </div>
              <div class="row ms-md-5 mt-2">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control" placeholder="Type CTA" required name="Testing CTA" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type CTA.</div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
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
                    <input type="text" class="form-control" placeholder="Type medication" required name="medication" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type medication.
                    </div>
                  </div>
                </div>
                <div class="col-md-9 mt-2">
                  <label class="form-label">If patient has had recent procedure at MOVI,
                    confirm
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
                    <input type="text" class="form-control" placeholder="Type labwork CBC" required name="labwork" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type labwork.</div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">CBC, Comprehensive metabolic profile, PT/INR -
                    ORDER AT
                    TIME OF VISIT
                  </label>
                </div>
              </div>
              <div class="row ms-md-5 mt-2">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li></li>
                    <input type="text" class="form-control" placeholder="Type Instruct" required
                      name="labwork Instruct" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type Instruct.</div>
                  </div>
                </div>
                <div class="col-sm-auto mt-2 pe-0">
                  <label class="form-label">
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
                  pregnancy, obesity BMI <40, well-controlled DM/HRN, mild lung disease) </li>
                <li>
                  Severe systemic disease with substantive functional
                  limitations; one or more moderate to severe disease (poor
                  controlled DM/HTN, COPD, morbid obese BMI >40, active
                  hepatitis, alcohol dependence or abuse, implanted pacemaker,
                  moderate reduced EF, ESRD on regular dialysis, >3 months of
                  MI/CVA/TIA/or CAD/stents)
                </li>
                <li>
                  Severe systemic disease that is constant threat to life (<3 months of MI/CVA/TIA/or CAD/stents,
                    ongoing cardia ischemia, severe valve dysfunction, severed reduced EF, sepsis, DIC, ARD or ESRD not
                    on regular dialysis </li>
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
                  <input type="text" class="form-control" name="Physician" required />
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
                  <input type="text" class="form-control" name="MA" required />
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
<?php include "footer.php" ?>