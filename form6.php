<?php include "header.php" ?>
  <div class="container my-5">
    <div class="row">
      <form class="row g-3 needs-validation" novalidate id="form6">
        <div class="col-sm-8">
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
                    <input type="text" class="form-control" placeholder="Type Lifestyle limiting pain" required
                      name="Subjective Lifestyle" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Lifestyle limiting pain, heaviness,
                      swelling, difficulty walking, difficulty with prolonged
                      standing.
                    </div>
                  </div>
                </div>
                <div class="col-md-8 mt-2">
                  <label class="form-label">Lifestyle limiting pain, heaviness, swelling,
                    difficulty
                    walking, difficulty with prolonged standing</label>
                </div>
              </div>
              <div class="row ms-md-5">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Symptoms of PCS" required
                      name="Subjective Symptoms" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Symptoms of PCS (dyspareunia, pelvic cramps,
                      lower GI cramps).
                    </div>
                  </div>
                </div>
                <div class="col-md-8 mt-2">
                  <label class="form-label">Symptoms of PCS (dyspareunia, pelvic cramps, lower
                    GI
                    cramps)</label>
                </div>
              </div>
              <div class="row ms-md-5">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Erectile dysfunction" required
                      name="Subjective Erectile dysfunction" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Erectile dysfunction
                    </div>
                  </div>
                </div>
                <div class="col-md-8 mt-2">
                  <label class="form-label">Erectile dysfunction</label>
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
                    <input type="text" class="form-control" placeholder="Type Stemmer sign + / -" required
                      name="Objective Stemmer sign" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Stemmer sign + / -
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Stemmer sign + / -</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Buffalo hump + / -" required
                      name="Objective Buffalo hump" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Buffalo hump + / -
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Buffalo hump + / -</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Edema: chronic / intermittent" required
                      name="Objective Edema chronic intermittent" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Edema: chronic / intermittent
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Edema: chronic / intermittent</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Edema: pitting / non-pitting" required
                      name="Objective Edema" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Edema: pitting / non-pitting
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Edema: pitting / non-pitting</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control"
                      placeholder="Type Edema: LEFT 1+ / 2+ / 3+ / 4+ RIGHT 1+ / 2+ / 3+ / 4+" required
                      name="Objective Edema LEFT" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Edema: LEFT 1+ / 2+ / 3+ / 4+ RIGHT 1+ / 2+
                      / 3+ / 4+
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Edema: LEFT 1+ / 2+ / 3+ / 4+ RIGHT 1+ / 2+ / 3+ /
                    4+</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Varicose veins: small / large" required
                      name="Objective Varicose veins" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Varicose veins: small / large
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Varicose veins: small / large</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Limited mobility" required
                      name="Objective Limited mobility" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Limited mobility
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Skin pigmentation changes, lipodermatosclerosis,
                    eczema</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control"
                      placeholder="Type Previous SSV / GSV ablation and still symptomatic / previous iliac vein stenting"
                      required name="Objective Previous" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Previous SSV / GSV ablation and still
                      symptomatic / previous iliac vein stenting
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Skin pigmentation changes, lipodermatosclerosis,
                    eczema</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type DVT" required name="Objective DVt" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type DVT</div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">DVT:</label>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type new" required name="Objective new" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type new</div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">new</label>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type recurrent" required
                      name="Objectivere current" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type recurrent</div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">recurrent</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type COPD" required name="Objective COPD" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type COPD</div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">COPD</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type OSA NO / YES Using CPAP? NO / YES"
                      required name="Objective OSA" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type OSA NO / YES Using CPAP? NO / YES
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">OSA NO / YES Using CPAP? NO / YES</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Pulmonary embolism" required
                      name="Objective Pulmonary embolism" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Pulmonary embolism
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Pulmonary embolism</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-2">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type BMI" required name="Objective BMI" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type BMI</div>
                  </div>
                </div>
                <div class="col-md-1 mt-2">
                  <label class="form-label">BMI:</label>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type under 18.5" required
                      name="Objective under" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type under 18.5</div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">under 18.5</label>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type norm 18.5-24.9" required
                      name="Objective norm" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type norm 18.5-24.9
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">norm 18.5-24.9</label>
                </div>
                <div class="col-md-2 ms-3">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type over wt 25-29.9" required
                      name="Objective over" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type over wt 25-29.9
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">over wt 25-29.9</label>
                </div>
                <div class="col-md-2">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type obese 30-39.9" required
                      name="Objective obese" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type obese 30-39.9
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mt-2">
                  <label class="form-label">obese 30-39.9</label>
                </div>
                <div class="col-md-2 ms-3">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type extreme obese 40+" required
                      name="Objective extreme" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type extreme obese 40+
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">extreme obese 40+</label>
                </div>
              </div>

              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Old healed stasis ulcers" required
                      name="Objective Old" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Old healed stasis ulcers
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Old healed stasis ulcers</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Chronic, active stasis ulcer" required
                      name="Objective Chronic" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Chronic, active stasis ulcer
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Chronic, active stasis ulcer</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Hormone use: anabolic vs. corticosteroid"
                      required name="Objective Hormone" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Hormone use: anabolic vs. corticosteroid
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Hormone use: anabolic vs. corticosteroid</label>
                </div>
              </div>
              <div class="row ms-md-5 mb-3">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Thrombocytopenia NO / YES" required
                      name="Objective Thrombocytopenia" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Thrombocytopenia NO / YES
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Thrombocytopenia NO / YES</label>
                </div>
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control" placeholder="Type Thrombocytopenia TYPE" required
                      name="Objective Thrombocytopenia TYPE" />
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
                    <input type="text" class="form-control"
                      placeholder="Type Can patient perform ADL’s independently YES / NO" required
                      name="Objective Canpatient" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Type Can patient perform ADL’s independently YES
                      / NO
                    </div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Can patient perform ADL’s independently YES /
                    NO</label>
                </div>
              </div>
              <div class="row ms-md-5">
                <div class="col-md-auto">
                  <div class="input-group">
                    <li class="mt-1"></li>
                    <input type="text" class="form-control"
                      placeholder="Type Failed conservative therapy INCLUDE TIME FRAME PATIENT USED WITHOUT RELILEF"
                      required name="Objective Failed" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Failed conservative therapy INCLUDE TIME FRAME PATIENT
                      USED WITHOUT RELILEF
                    </div>
                  </div>
                </div>
                <div class="col-md-8 mt-2">
                  <label class="form-label">Failed conservative therapy INCLUDE TIME FRAME
                    PATIENT
                    USED WITHOUT RELILEF:</label>
                </div>
              </div>
              <div class="ps-md-5 ms-md-5 ps-2">
                <div class="row ms-md-5 mt-2">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type Leg elevation" required
                        name="Objective Legelevation" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Leg elevation.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label">
                      Leg elevation
                    </label>
                  </div>
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type WEEKS / MONTHS" required
                        name="Objective WEEKS" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type WEEKS / MONTHS.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label">
                      WEEKS / MONTHS
                    </label>
                  </div>
                </div>
                <div class="row ms-md-5 mt-2">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type Diuretics / NSAIDS used without relief"
                        required name="Objective Diuretics" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type Right.</div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label">
                      Diuretics / NSAIDS used without relief
                    </label>
                  </div>
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type WEEKS / MONTHS" required
                        name="Objective Diuretics WEEKS" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type WEEKS / MONTHS.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label">
                      WEEKS / MONTHS
                    </label>
                  </div>
                </div>
                <div class="row ms-md-5 mt-2">
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input type="text" class="form-control"
                        placeholder="Type Compression stockings used without relief/patient refused" required
                        name="Objective Compression" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type Right.</div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label">
                      Compression stockings used without relief/patient refused
                    </label>
                  </div>
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type WEEKS / MONTHS" required
                        name="Objective Compression WEEKS" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type WEEKS / MONTHS.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-auto mt-2 pe-0">
                    <label class="form-label">
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
              <input class="form-check-input" type="radio" name="CEAPSCORE" value="C1 Small varicose veins"
                id="C1 Small varicose veins" required />
              <label class="form-check-label">
                C1 Small varicose veins
              </label>
            </div>
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="CEAPSCORE" value="C2 Large varicose veins"
                id="C2 Large varicose veins" required />
              <label class="form-check-label">
                C2 Large varicose veins
              </label>
            </div>
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="CEAPSCORE" value="C3 Edema" id="C3 Edema" required />
              <label class="form-check-label"> C3 Edema </label>
            </div>
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="CEAPSCORE" value="C4 Skin changes without ulceration"
                id="C4 Skin changes without ulceration" required />
              <label class="form-check-label">
                C4 Skin changes without ulceration
              </label>
            </div>
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="CEAPSCORE"
                value="C5 Skin changes with healed ulceration" id="C5 Skin changes with healed ulceration" required />
              <label class="form-check-label">
                C5 Skin changes with healed ulceration
              </label>
            </div>
            <div class="form-check my-3">
              <input class="form-check-input" type="radio" name="CEAPSCORE"
                value="C6 Skin changes with active ulceration" id="C6 Skin changes with active ulceration" required />
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
                    <input type="text" class="form-control" placeholder="Type Lower extremity / abdominal Venous duplex"
                      required name="Testing Lower" />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please Type Lower extremity / abdominal Venous duplex.</div>
                  </div>
                </div>
                <div class="col-md-auto mt-2">
                  <label class="form-label">Lower extremity / abdominal Venous duplex</label>
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
            <p class="fw-bold text-decoration-underline">ASA CLASSIFICATION (circle)</p>
            <div class="row ps-5">
              <ul style="list-style: upper-roman">
                <li>
                  Normal, healthy (non-smoker, no or little alcohol use)
                </li>
                <li>
                  Mild systemic disease without substantive functional limitations. (Poor controlled DM or HTN, social
                  alcohol use, pregnancy, obesity BMI <40, well-controlled DM/HRN, mild lung disease) </li>
                <li>
                  Severe systemic disease with substantive functional limitations; one or more moderate to severe
                  disease (poor controlled DM/HTN, COPD, morbid obese BMI >40, active hepatitis, alcohol dependence or
                  abuse, implanted pacemaker, moderate reduced EF, ESRD on regular dialysis, >3 months of MI/CVA/TIA/or
                  CAD/stents)
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