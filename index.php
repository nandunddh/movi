<?php include "header.php" ?>

  <!-- BOARDING SLIP  Form 1-->
  <div class="container my-5">
    <div class="row">
      <div class="col-sm-12 col-lg-12 col-md-12">
        <p class="text-center fw-bold fs-3 mb-5">BOARDING SLIP</p>
        <div>
          <form class="row g-3 needs-validation" novalidate id="form1">
            <div class="row">
              <div class="col-sm-8">
                <div class="row">
                  <div class="col-md-3 text-md-end">
                    <label class="form-label" for="validationCustom01">Patient’s Name</label>
                  </div>
                  <div class="col-md-9">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Type Patient Name" required
                        name="Patient Name" />
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
                  <div class="col-md-2 text-md-end">
                    <label for="basic-url" class="form-label">DOB</label>
                  </div>
                  <div class="col-md-10">
                    <div class="input-group mb-3">
                      <input type="date" class="form-control" placeholder="MM/DD/YYYY" required name="DOB" />
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
              <div class="col-sm-8">
                <div class="row">
                  <div class="col-md-3 text-md-end">
                    <label for="basic-url" class="form-label">Physician</label>
                  </div>
                  <div class="col-md-9">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Type Physician" required name="Physician" />
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
                  <div class="col-md-3 text-md-end">
                    <label for="basic-url" class="form-label">Procedure Date</label>
                  </div>
                  <div class="col-md-9">
                    <div class="input-group mb-3">
                      <input type="date" class="form-control" placeholder="MM/DD/YYYY" required name="Procedure Date" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Select Procedure Date.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 text-md-end">
                <label for="basic-url" class="form-label">Procedure</label>
              </div>
              <div class="col-md-10">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Type Procedure" name="Procedure" required />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please Type Procedure.</div>
                </div>
              </div>
            </div>
            <div class="row my-3">
              <div class="col-sm-1 mr-5"></div>
              <div class="col-sm-11">
                <p class="fw-bold">
                  REQUIRED DOCUMENTATION FOR SCHEDULING APPOINTMENTS:
                </p>
                <ul>
                  <li>
                    Procedure Order - <strong>MUST INCLUDE DIAGNOSIS</strong>
                  </li>
                  <li>Demographics/Face Sheet</li>
                  <li>
                    History and physical within 30 days of procedure -
                    <strong>MUST BE FILLED OUT COMPLETELY</strong>
                  </li>
                  <li class="align-middle">
                    <div class="row">
                      <div class="col-sm-auto align-self-center">
                        List of patient’s current medications &
                        <strong>Allergies:</strong>
                      </div>
                      <div class="col-sm-7 px-0">
                        <div class="input-group">
                          <input type="text" class="form-control"
                            placeholder="Type List of patient’s current medications & Allergies" required
                            name="Allergies" />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type List of patient’s current medications
                            & Allergies.
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    Recent procedures and test results related to this visit
                  </li>
                  <li>Most recent office visit note</li>
                  <li>Walking Assessment Questionnaire</li>
                  <li>
                    Recent labs: BUN, Creatinine, CBC, Electrolytes, PT/INR,
                    Pregnancy test for all female patients under 50 within 2
                    weeks of procedure
                  </li>
                  <li>
                    If blood work is not yet available, please provide the
                    name of the lab and when the patient was ordered to have
                    them drawn:
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Type name of the lab" required
                        name="labs names" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type name of the lab.
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-auto">
                        <label for="basic-url" class="form-label fw-bold">Insurance information</label>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Type Insurance information"
                            name="Insurance" required />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Insurance information.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 text-md-end">
                        <label for="basic-url" class="form-label fw-bold">Primary Insurance:</label>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Type Primary Insurance" required
                            name="Primary Insurance" />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Primary Insurance.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 text-md-end">
                        <label for="basic-url" class="form-label fw-bold">Policy Number:</label>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Type Policy Number"
                            name="Primary Policy Number" required />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Policy Number.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 text-md-end">
                        <label for="basic-url" class="form-label fw-bold">Secondary Insurance:</label>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Type Secondary Insurance"
                            name="Secondary Insurance" />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Secondary Insurance.
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2 text-md-end">
                        <label for="basic-url" class="form-label fw-bold">Policy Number:</label>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Type Policy Number" aria-label="Username"
                            aria-describedby="basic-addon1" name="Secondary Policy Number" />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Policy Number.
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-auto">
                        <label for="basic-url" class="form-label fw-bold">AUTHORIZATION #</label>
                      </div>
                      <div class="col-md-9">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Type AUTHORIZATION" required
                            name="Authorazation" />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type AUTHORIZATION.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-auto text-md-end">
                        <label for="basic-url" class="form-label fw-bold">Requested Date/Pending:</label>
                      </div>
                      <div class="col-md-5">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Type Requested Date/Pending"
                            name="requested date" required />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Requested Date/Pending.
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-auto text-md-end">
                        <label for="basic-url" class="form-label">Patient’s language preference:</label>
                      </div>
                      <div class="col-md-5">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Type Patient’s language preference"
                            name="Patients language" required />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Patient’s language preference.
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-md-auto text-md-end">
                        <label for="basic-url" class="form-label fw-bold">Does this patient require transportation?
                        </label>
                      </div>
                      <div class="col-md-auto">
                        <div class="row">
                          <div class="col-sm-auto">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="patients transportation" value="yes"
                                required />
                              <label class="form-check-label">
                                Yes
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-auto">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="patients transportation" value="no"
                                required />
                              <label class="form-check-label">
                                No
                              </label>
                            </div>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">
                              Please Select Yes or No.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    Instruct patient to HOLD Lasix Day of Procedure; If the
                    patient is on Xarelto, Pradaxa, Eliquis HOLD 2 DAYS BEFORE
                    PROCEDURE, If patient is on METFORMIN HOLD FOR 2 DAYS
                    BEFORE & 2 DAYS AFTER PROCEDURE.
                  </li>
                  <li>
                    Email MOVI at
                    <a href="mailto:amanis@movidearborn.com">amanis@movidearborn.com</a>
                    to request boarding
                  </li>
                  <li>Contact patient to confirm scheduling</li>
                </ul>
                <p>FOR DIALYSIS PATIENTS, WE ALSO REQUIRE:</p>
                <ul>
                  <li>Name of the dialysis center</li>
                  <li>Most recent labs</li>
                  <li>
                    Patients are to be scheduled on non-dialysis days, if
                    possible. If not possible, ideally, procedure should be in
                    the morning following dialysis
                  </li>
                </ul>
                <div class="row">
                  <div class="col-sm-7">
                    <div class="row">
                      <div class="col-sm-auto">
                        <p>Sender’s signature</p>
                      </div>
                      <div class="col-sm-8">
                        <div class="input-group mb-3">
                          <input type="file" class="form-control" name="signature" required />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please choose a signature.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="row">
                      <div class="col-sm-auto">
                        <p>Date</p>
                      </div>
                      <dov class="col-sm-9">
                        <div class="input-group mb-3">
                          <input type="date" class="form-control" placeholder="MM/DD/YYYY" name="submited date"
                            required />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Select Date.
                          </div>
                        </div>
                      </dov>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-5 text-md-end">
                        <p>Contact phone number</p>
                      </div>
                      <div class="col-sm-7">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Type Contact phone number"
                            name="contact number" required />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Contact phone number.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="row">
                      <div class="col-sm-3 text-md-end">
                        <p>Fax number</p>
                      </div>
                      <div class="col-sm-8">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Type Fax number" name="fax number" required />
                          <div class="valid-feedback">Looks good!</div>
                          <div class="invalid-feedback">
                            Please Type Fax number.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row my-5">
              <p class="fw-bold text-center">
                *WE CAN NOT PROCESS ANY INFORMATION WITHOUT A SIGNATURE FROM
                THE SENDER & A CONTACT NUMBER*
              </p>
              <p class="fw-bold text-center">
                *WE CAN NOT SCHEDULE APPOINTMENTS WITHOUT THE NECESSARY
                DOCUMENTATION LISTED ABOVE*
              </p>
            </div>

            <div class="row">
              <div class="col-sm-12 text-center">
                <button class="btn btn-primary" type="submit">Save & Continue</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php include "footer.php" ?>