<?php include "header.php" ?>
  <div class="container my-5">
    <div class="row">
      <div class="col-sm-12 col-lg-12 col-md-12">
        <p class="text-center fw-bold fs-3 mb-5">HISTORY AND PHYSICAL</p>
        <div>
          <form class="row g-3 needs-validation" novalidate id="form2">
            <div class="row mb-3">
              <div class="col-sm-8">
                <div class="row">
                  <div class="col-md-2">
                    <label class="form-label">Patient</label>
                  </div>
                  <div class="col-md-10">
                    <div class="input-group">
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
            <div class="row mb-3">
              <div class="col-sm-7">
                <div class="row">
                  <div class="col-md-2">
                    <label for="basic-url" class="form-label">Physician</label>
                  </div>
                  <div class="col-md-10">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type Physician" required name="Physician" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">
                        Please Type Physician.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="row">
                  <div class="col-md-auto">
                    <label for="basic-url" class="form-label">Desired Date of Procedure</label>
                  </div>
                  <div class="col-md-auto">
                    <div class="input-group">
                      <input type="date" class="form-control" placeholder="MM/DD/YYYY" required name="Procedure Date" />
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
    <label for="basic-url" class="form-label fw-bold">PROCEDURE:</label>
  </div>

  <div class="col-md-auto">
    <select class="form-select" aria-label="Default select example" name="PROCEDURE" required onchange="showPROCEDURE_others(this)">
      <option value="" disabled selected>Select</option>
      <option value="Upper/Lower Ext Angio/Intervention">Upper/Lower Ext Angio/Intervention</option>
      <option value="Carotid Angio">Carotid Angio</option>
      <option value="Loop Recorder Implant/Explant">Loop Recorder Implant/Explant</option>
      <option value="Cardiac Catheterization">Cardiac Catheterization</option>
      <option value="Pacemaker/ ICD">Pacemaker/ ICD</option>
      <option value="others">others</option>
    </select>
    <div class="valid-feedback">Looks good!</div>
    <div class="invalid-feedback">Please Select Option.</div>
  </div>

  <div class="col-sm-12 my-3 hidden" id="PROCEDURE_others">
    <div class="row">
      <div class="col-md-1 text-md-end">
        <label for="basic-url" class="form-label">Other:</label>
      </div>
      <div class="col-md-10">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Type Others" name="Procedure Others" />
          <div class="valid-feedback">Looks good!</div>
          <div class="invalid-feedback">Please Type Others.</div>
        </div>
      </div>
    </div>
  </div>
</div>

            <div class="row mb-3">
              <div class="col-md-auto">
                <label for="basic-url" class="form-label fw-bold">INDICATION:
                </label>
              </div>
              <div class="col-sm-auto">
                <select class="form-select" name="INDICATION" required onchange="showInputField(this)">
                  <option selected>Select</option>
                  <option value="Lifestyle Limiting Claudication">
                    Lifestyle Limiting Claudication
                  </option>
                  <option value="Critical renal stenosis (greater than 90%)">
                    Critical renal stenosis (greater than 90%)
                  </option>
                  <option value="Critical Limb Ischemia (rest pain, ulceration, gangrene)">
                    Critical Limb Ischemia (rest pain, ulceration, gangrene)
                  </option>
                  <option value="Coronary Artery Disease">
                    Coronary Artery Disease
                  </option>
                  <option value="AV Block">AV Block</option>
                  <option value="Pulmonary edema, unstable angina, CHF associated with renal artery stenosis.">
                    Pulmonary edema, unstable angina, CHF associated with
                    renal artery stenosis.
                  </option>
                  <option value="Afib">Afib</option>
                  <option value="Bradycardia">Bradycardia</option>
                  <option value="NO KNOWN ALLERGIES">
                    NO KNOWN ALLERGIES
                  </option>
                  <option value="Symptomatic, high risk surgical candidate previous CVA/TIA">
                    Symptomatic, high risk surgical candidate previous CVA/TIA
                  </option>
                  <option value="Pacemaker/ ICD">Pacemaker/ ICD</option>
                  <option value="others">others</option>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please Select Option.</div>
                </select>
                <div class="col-sm-12 my-3 hidden" id="othersInput">
                  <div class="row">
                    <div class="col-md-1 text-md-end">
                      <label for="basic-url" class="form-label">Other:</label>
                    </div>
                    <div class="col-md-10">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type Others" name="Indication Others" />
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

            <div class="row mb-3">
              <div class="col-sm-4">
                <label for="basic-url" class="form-label fw-bold">History of Present Illness</label>
              </div>
              <div class="col-sm-8">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Type History of Present Illness"
                    name="History of Present Illness" required width="100%" />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">
                    Please Type History of Present Illness.
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-4">
                <label class="form-label fw-bold">Past Medical/Surgical History
                </label>
              </div>
              <div class="col-sm-auto">
                <select class="form-select" name="Past Medical/Surgical History" required onchange="Past_Medical(this)">
                  <option selected>Select</option>
                  <option value="CHF">CHF</option>
                  <option value="MI">MI</option>
                  <option value="Unstable angina">Unstable angina</option>
                  <option value="Prev PCI">Prev PCI</option>
                  <option value="Prev CABG">Prev CABG</option>
                  <option value="AFib">AFib</option>
                  <option value="Valvular heart dx">Valvular heart dx</option>
                  <option value="PPM">PPM</option>
                  <option value="AICD">AICD</option>
                  <option value="COPD">COPD</option>
                  <option value="CRF">CRF</option>
                  <option value="Recent GI bleed">Recent GI bleed</option>
                  <option value="CVA/TIA">CVA/TIA</option>
                  <option value="others">others</option>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please Select Option.</div>
                </select>
              </div>
              <div class="col-sm-12 my-3 hidden" id="Past_Medical">
                <div class="row">
                  <div class="col-md-1 text-md-end">
                    <label for="basic-url" class="form-label">Other:</label>
                  </div>
                  <div class="col-md-10">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type Others" name="Indication Others" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type Others.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-md-4">
                    <label class="form-label fw-bold">Previous Peripheral Vascular Intervention</label>
                  </div>
                  <div class="col-md-8">
                    <div class="input-group">
                      <input type="text" class="form-control"
                        placeholder="Type Previous Peripheral Vascular Intervention"
                        name="Previous Peripheral Vascular Intervention" required />
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
                  <div class="col-md-4">
                    <label class="form-label fw-bold">Previous Angiogram</label>
                  </div>
                  <div class="col-md-8">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type Previous Angiogram"
                        name="Previous Angiogram" required />
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
              <div class="col-md-4">
                <label class="form-label fw-bold">Risk Factors:
                </label>
              </div>

              <div class="col-sm-auto">
                <select class="form-select" name="Risk Factors" required onchange="Risk_Factors(this)">
                  <option selected>Select</option>
                  <option value="HTN">HTN</option>
                  <option value="Current smoking">Current smoking</option>
                  <option value="Inactivity">Inactivity</option>
                  <option value="DM">DM</option>
                  <option value="Obesity">Obesity</option>
                  <option value="Previous smoking">Previous smoking</option>
                  <option value="Hyperlipidemia">Hyperlipidemia</option>
                  <option value="Fam. Hx">Fam. Hx</option>
                  <option value="others">others</option>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please Select Option.</div>
                </select>
              </div>
              <div class="col-sm-12 my-3 hidden" id="Risk_Factors">
                <div class="row">
                  <div class="col-md-1 text-md-end">
                    <label for="basic-url" class="form-label">Other:</label>
                  </div>
                  <div class="col-md-10">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type Others" name="Risk Factors Others" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type Others.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-4">
                <label class="form-label fw-bold">Medications:
                </label>
              </div>
              <div class="col-sm-auto">
                <select class="form-select" name="Medications" required onchange="show_Medications(this)">
                  <option selected>Select</option>
                  <option value="ASA">ASA</option>
                  <option value="Plavix">Plavix</option>
                  <option value="Coumadin">Coumadin</option>
                  <option value="Pletal">Pletal</option>
                  <option value="Ca + Chan Blocker">Ca + Chan Blocker</option>
                  <option value="Beta Blocker">Beta Blocker</option>
                  <option value="ACE">ACE</option>
                  <option value="ARB">ARB</option>
                  <option value="Nitrate">Nitrate</option>
                  <option value="Digoxin">Digoxin</option>
                  <option value="Diuretic">Diuretic</option>
                  <option value="Statin">Statin</option>
                  <option value="Trental">Trental</option>
                  <option value="others">others</option>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Please Select Option.</div>
                </select>
              </div>
              <div class="col-sm-12 my-3 hidden" id="Medications">
                <div class="row">
                  <div class="col-md-1 text-md-end">
                    <label class="form-label">Other:</label>
                  </div>
                  <div class="col-md-10">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type Others" name="Medications Others" />
                      <div class="valid-feedback">Looks good!</div>
                      <div class="invalid-feedback">Please Type Others.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="form-label fw-bold">Labs:
                </label>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-md-4 text-md-end">
                      <label class="form-label">K+ (potassium)</label>
                    </div>
                    <div class="col-md-8">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Type K+ (potassium)" name="LabsK"
                          required />
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
                        <input type="text" class="form-control" placeholder="Type BUN" name="BUN" required />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please Type BUN.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-md-4 text-md-end">
                      <label for="basic-url" class="form-label">Glucose</label>
                    </div>
                    <div class="col-md-8">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Type Glucose" name="Glucose" required />
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
                      <label for="basic-url" class="form-label">Creatnine</label>
                    </div>
                    <div class="col-md-8">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Type Creatnine" name="Creatnine"
                          required />
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
                    <div class="col-md-auto text-md-end">
                      <label for="basic-url" class="form-label">(if greater than 1.2, was Mucomyst given?)</label>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control"
                          placeholder="Type (if greater than 1.2, was Mucomyst given?)" name="Mucomystgiven" required />
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
                      <label for="basic-url" class="form-label">Impression</label>
                    </div>
                    <div class="col-md-8">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Type Impression" name="Impression"
                          required />
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
                        <input type="text" class="form-control" placeholder="Type Plan" name="Plan" required />
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
                <label for="basic-url" class="form-label fw-bold">Physical Exam and Review of Systems:
                </label>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-md-3 text-md-end">
                      <label for="basic-url" class="form-label">BP (Right)</label>
                    </div>
                    <div class="col-md-9">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type BP (Right)" name="BP(Right)"
                          required />
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
                      <label for="basic-url" class="form-label">BP (Left)</label>
                    </div>
                    <div class="col-md-9">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Type BP (Left)" name="BP(Left)" required />
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
                        <input type="text" class="form-control" placeholder="Type P" name="P" required />
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
                        <input type="text" class="form-control" placeholder="Type RB" name="RB" required />
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
                        <input type="text" class="form-control" placeholder="Type HFENT" name="HFENT" required />
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
                        <input type="text" class="form-control" placeholder="Type Lungs" name="Lungs" required />
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
                        <input type="text" class="form-control" placeholder="Type Abd" name="Abd" required />
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
                        <input type="text" class="form-control" placeholder="Type Skin" name="Skin" required />
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
                        <input type="text" class="form-control" placeholder="Type Heart" name="Heart" required />
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
                        <input type="text" class="form-control" placeholder="Type Ext" name="Ext" required />
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
                            <input class="form-check-input" type="radio" name="JVD" value="Yes" required />
                            <label class="form-check-label">
                              Yes
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-auto">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="JVD" value="No" required />
                            <label class="form-check-label">
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
                      <label for="basic-url" class="form-label">Carotid Bruit</label>
                    </div>
                    <div class="col-md-auto">
                      <div class="row">
                        <div class="col-sm-auto">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="CarotidBruit" value="Yes" required />
                            <label class="form-check-label">
                              Yes
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-auto">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="CarotidBruit" value="No" required />
                            <label class="form-check-label">
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
                      <label for="basic-url" class="form-label">Renal Brui</label>
                    </div>
                    <div class="col-md-auto">
                      <div class="row">
                        <div class="col-sm-auto">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="RenalBrui" value="Yes" required />
                            <label class="form-check-label">
                              Yes
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-auto">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="RenalBrui" value="No" required />
                            <label class="form-check-label">
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
                <label for="basic-url" class="form-label fw-bold">Pulses:
                </label>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-2">
                      <label for="basic-url" class="form-label">
                        <li>Radial/Brachial</li>
                      </label>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label">Right</label>
                        </div>
                        <div class="col-md-5">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type Radial/Brachial Right"
                              name="Radial/Brachial Right" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">
                              Please Type Radial/Brachial Right.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label">Left</label>
                        </div>
                        <div class="col-md-5">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type Radial/Brachial Left"
                              name="Radial/Brachial Left" required />
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
                      <label for="basic-url" class="form-label">
                        <li>Femoral</li>
                      </label>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label">Right</label>
                        </div>
                        <div class="col-md-5">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type Femoral Right"
                              name="Femoral Right" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">
                              Please Type Femoral Right.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label">Left</label>
                        </div>
                        <div class="col-md-5">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type Femoral Left" name="Femoral Left"
                              required />
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
                      <label for="basic-url" class="form-label">
                        <li>Popliteal</li>
                      </label>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label">Right</label>
                        </div>
                        <div class="col-md-5">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type Popliteal Right"
                              name="Popliteal Right" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">
                              Please Type Popliteal Right.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label">Left</label>
                        </div>
                        <div class="col-md-5">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type Popliteal Left"
                              name="Popliteal Left" required />
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
                      <label for="basic-url" class="form-label">
                        <li>Pedal</li>
                      </label>
                    </div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label">Right DP</label>
                        </div>
                        <div class="col-md-5">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type Pedal Right DP"
                              name="Pedal Right DP" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">
                              Please Type Pedal Right DP.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label">Left DP</label>
                        </div>
                        <div class="col-md-5">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type Pedal Left DP"
                              name="Pedal Left DP" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">
                              Please Type Pedal Left DP.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label">Right PT</label>
                        </div>
                        <div class="col-md-5">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type Pedal Right PT"
                              name="Pedal Right PT" required />
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">
                              Please Type Pedal Right PT.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-1 text-md-end">
                          <label for="basic-url" class="form-label">Left PT</label>
                        </div>
                        <div class="col-md-5">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Type Pedal Left PT"
                              name="Pedal Left PT" required />
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
                    <label for="basic-url" class="form-label fw-bold">ABI:
                    </label>
                  </div>
                  <div class="col-sm-10">
                    <div class="row">
                      <div class="col-md-1 text-md-end">
                        <label for="basic-url" class="form-label">Right</label>
                      </div>
                      <div class="col-md-5">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Type ABI Right" name="ABI Right"
                            required />
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
                          <input type="text" class="form-control" placeholder="Type ABI Left" name="ABI Left"
                            required />
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
                    <label for="basic-url" class="form-label fw-bold">Rutherford Class:
                    </label>
                  </div>
                  <div class="col-sm-auto">
                    <select class="form-select" aria-label="Default select example" name="Rutherford Class" required>
                      <option selected>Select</option>
                      <option value="0 (asymptomatic)">
                        0 (asymptomatic)
                      </option>
                      <option value="1 (mild claudication)">
                        1 (mild claudication)
                      </option>
                      <option value="2 (moderate claudication)">
                        2 (moderate claudication)
                      </option>
                      <option value="3 (severe claudication)">
                        3 (severe claudication)
                      </option>
                      <option value="4 (rest pain)">4 (rest pain)</option>
                      <option value="5 (minor tissue loss)">
                        5 (minor tissue loss)
                      </option>
                      <option value="6 (major tissue loss)">
                        6 (major tissue loss)
                      </option>
                    </select>
                  </div>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-2">
                    <label for="basic-url" class="form-label fw-bold">VENDOR REQUEST:
                    </label>
                  </div>
                  <div class="col-md-10">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Type VENDOR REQUEST" name="Vendor Request"
                        required />
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
                    <label for="basic-url" class="form-label fw-bold">SPECIAL INSTRUCTIONS:
                    </label>
                  </div>
                  <div class="col-md-10">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Type SPECIAL INSTRUCTIONS:"
                        name="Special Instruction" required />
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
                      <input type="file" class="form-control" name="Physician Signature" required />
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
                      <input type="date" class="form-control" placeholder="MM/DD/YYYY" name="submited date" required />
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
                      <input type="time" class="form-control" name="submited time" required />
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
  <?php include "footer.php" ?>