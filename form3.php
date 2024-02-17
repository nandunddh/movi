<?php include "header.php" ?>
  <div class="container my-5">
    <div class="row">
      <div class="col-sm-12 col-lg-12 col-md-12">
        <p class="text-center fw-bold fs-4 mb-3">
          Walking Impairment Questionnaire
        </p>
        <p class="text-center fw-bold fs-5 mb-5">
          MUST BE COMPLETED IF ORDERING A LOWER EXTREMITY ANGIOGRAM
        </p>
      </div>
      <form class="row g-3 needs-validation" novalidate id="form3">
        <div class="row mb-3">
          <div class="col-sm-8">
            <div class="row">
              <div class="col-md-1">
                <label class="form-label" for="validationCustom01">Patient</label>
              </div>
              <div class="col-md-11">
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
        <div class="row my-5">
          <div class="col-md-12">
            <div class="row">
              <div class="col-sm-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Baseline" value="Baseline" required />
                  <label class="form-check-label">
                    Baseline
                  </label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="1 month" name="Baseline" required />
                  <label class="form-check-label">
                    1 month
                  </label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="6 months" name="Baseline" required />
                  <label class="form-check-label">
                    6 months
                  </label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="12 months" name="Baseline" required />
                  <label class="form-check-label">
                    12 months
                  </label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="24 months" name="Baseline" required />
                  <label class="form-check-label">
                    24 months
                  </label>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" value="36 months" name="Baseline" required />
                  <label class="form-check-label">
                    36 months
                  </label>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">
                    Please Select one option.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-3">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-7 text-center">
                <p class="text-underline fw-bold">
                  DO YOU HAVE TROUBLE WITH ANY OF THE FOLLOWING
                </p>
              </div>
              <div class="col-sm-4 text-md-center d-none d-sm-block">
                <div class="row">
                  <div class="col-sm-auto">
                    <p class="text-underline fw-bold">None</p>
                  </div>
                  <div class="col-sm-auto">
                    <p class="text-underline fw-bold">Slight</p>
                  </div>
                  <div class="col-sm-auto">
                    <p class="text-underline fw-bold">Some</p>
                  </div>
                  <div class="col-sm-auto">
                    <p class="text-underline fw-bold">Much</p>
                  </div>
                  <div class="col-sm-auto">
                    <p class="text-underline fw-bold">Very</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>
                    1. Pain, aching, or cramps in your calves, thighs, or
                    buttock?
                  </p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="1" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="1" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="1" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="1" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="1" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>
                    2. Pain, stiffness, or aching in your ankles, knees, or
                    hips?
                  </p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="2" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="2" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="2" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="2" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="2" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>3. Weakness in one or both legs?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="3" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="3" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="3" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="3" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="3" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>4. Pain or discomfort in your chest?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="4" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="4" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="4" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="4" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="4" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>5. Shortness of breath?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="5" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="5" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="5" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="5" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="5" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>6. Heart palpitations?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="6" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="6" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="6" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="6" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="6" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>7. Walking indoors such as around your home?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="7" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="7" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="7" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="7" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="7" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>8. Walking 50 feet?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="8" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="8" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="8" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="8" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="8" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>9. Walking 150 feet (1/2 block)?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="9" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="9" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="9" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="9" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="9" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>10. Walking 300 feet (1 block)?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="10" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="10" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="10" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="10" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="10" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>11. Walking 600 feet (2 blocks)?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="11" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="11" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="11" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="11" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="11" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>12. Walking 900 feet (3 blocks)?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="12" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="12" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="12" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="12" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="12" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>13. Walking 1500 feet (5 blocks)?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="13" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="13" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="13" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="13" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="13" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>14. Walking 1 block at an average speed?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="14" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="14" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="14" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="14" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="14" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-sm-7">
                  <p>15. Climbing a flight of stairs?</p>
                </div>
                <div class="col-sm-auto mx-md-2 mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="15" value="4" required />
                    <label class="form-check-label">
                      4
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="15" value="3" required />
                    <label class="form-check-label">
                      3
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="15" value="2" required />
                    <label class="form-check-label">
                      2
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="15" value="1" required />
                    <label class="form-check-label">
                      1
                    </label>
                  </div>
                </div>
                <div class="col-sm-auto mx-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="15" required />
                    <label class="form-check-label">
                      0
                    </label>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please Select one option.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-5 mt-5">
            <div class="row">
              <div class="col-sm-4">
                <p>Patient Signature</p>
              </div>
              <div class="col-sm-7">
                <div class="input-group">
                  <input type="file" class="form-control" name="Patient Signature" required />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">
                    Please choose a Patient Signature.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mt-5">
            <div class="row">
              <div class="col-sm-auto">
                <p>Date</p>
              </div>
              <dov class="col-sm-9">
                <div class="input-group">
                  <input type="date" class="form-control" placeholder="MM/DD/YYYY" name="submiteddate" required />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please Select Date.</div>
                </div>
              </dov>
            </div>
          </div>
          <div class="col-sm-5 mt-3">
            <div class="row">
              <div class="col-sm-4">
                <p>Physician Signature</p>
              </div>
              <div class="col-sm-7">
                <div class="input-group">
                  <input type="file" class="form-control" name="Physician Signature" required />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">
                    Please choose a Physician Signature.
                  </div>
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
<?php include "footer.php" ?>