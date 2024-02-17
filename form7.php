<?php include "header.php" ?>
  <div class="container my-5">
  <form class="row g-3 needs-validation" novalidate id="form7">
    <div class="col-sm-12">
      <p class="fw-bold text-center fs-4">MEDICATION RECONCILIATION</p>
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="row mb-3">
            <div class="col-sm-auto">
              <label class="form-check-label">
                Source provided by:
              </label>
            </div>
            <div class="col-sm-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="Source" value="PATIENT" required />
                <label class="form-check-label">
                  PATIENT
                </label>
              </div>
            </div>
            <div class="col-sm-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" value="SPOUSE" name="Source" required />
                <label class="form-check-label">
                  SPOUSE
                </label>
              </div>
            </div>
            <div class="col-sm-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" value="CAREGIVER" name="Source" required />
                <label class="form-check-label">
                  CAREGIVER
                </label>
              </div>
            </div>
            <div class="col-sm-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" value="PHARMACY" name="Source" required />
                <label class="form-check-label">
                  PHARMACY
                </label>
              </div>
            </div>
            <div class="col-sm-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" value="CHART NOTES" name="Source" id="flexRadioDefault1"
                  required />
                <label class="form-check-label">
                  CHART NOTES
                </label>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please Select one option.</div>
              </div>
            </div>
            <div class="col-sm-auto">
              <div class="row">
                <div class="col-sm-auto">
                  <label class="form-check-label">
                    OTHER
                  </label>
                </div>
                <div class="col-sm-auto">
                  <div class="form-check">
                    <input type="text" class="form-control" placeholder="Type Patient Name" aria-label="Username"
                      aria-describedby="basic-addon1" name="source Other" />
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
                      <textarea class="form-control border-0 form-control-sm" aria-label="With textarea"
                        rows="1" name="allergie-1"></textarea>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="input-group input-group-sm">
                      <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="allergie-2"></textarea>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="input-group input-group-sm">
                      <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="allergie-3"></textarea>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="input-group input-group-sm">
                      <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="allergie-4"></textarea>
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
              <th class="border">HOLD day of procedure?<br /> Y / N</th>
              <th class="border">RHESUME SAME DAY or other:<br /> Y / N</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0 form-control-sm" aria-label="With textarea"
                    rows="1" name="medication-1"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0 form-control-sm" aria-label="With textarea"
                    rows="1" name="dose-1"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0 form-control-sm" aria-label="With textarea"
                    rows="1" name="direction-1"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0 form-control-sm" aria-label="With textarea"
                    rows="1" name="hold-1"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0 form-control-sm" aria-label="With textarea"
                    rows="1" name="rhesume-1"></textarea>
                </div>
              </td>
            </tr>
            <tr>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="medication-2"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="dose-2"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="direction-2"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="hold-2"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="rhesume-2"></textarea>
                </div>
              </td>
            </tr>
            <tr>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="medication-3"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="dose-3"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="direction-3"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="hold-3"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="rhesume-3"></textarea>
                </div>
              </td>
            </tr>
            <tr>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="medication-4"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="dose-4"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="direction-4"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="hold-4"></textarea>
                </div>
              </td>
              <td class="border">
                <div class="input-group input-group-sm">
                  <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="rhesume-4"></textarea>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">

        <div class="row mt-5">
          <div class="col-sm-12">
            <div class="row mb-3">
              <div class="col-sm-auto">
                <p>DISCONTINUEMEDICATIONS</p>
              </div>
              <div class="col-sm-9">
                <div class="input-group">
                  <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1"
                    name="DISCONTINUEMEDICATIONS" placeholder="Type DISCONTINUEMEDICATIONS" name="DISCONTINUEMEDICATIONS"/>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">
                    Please type DISCONTINUEMEDICATIONS.
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
                    <textarea class="form-control border-0 form-control-sm" aria-label="With textarea"
                      rows="1" name="new medication-1"></textarea>
                  </div>
                </td>
                <td class="border">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control border-0 form-control-sm" aria-label="With textarea"
                      rows="1" name="new dose-1"></textarea>
                  </div>
                </td>
                <td class="border">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control border-0 form-control-sm" aria-label="With textarea"
                      rows="1" name="new direction-1"></textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="border">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="new medication-2"></textarea>
                  </div>
                </td>
                <td class="border">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="new dose-2"></textarea>
                  </div>
                </td>
                <td class="border">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="new direction-2"></textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="border">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="new medication-3"></textarea>
                  </div>
                </td>
                <td class="border">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="new dose-3"></textarea>
                  </div>
                </td>
                <td class="border">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="new direction-3"></textarea>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="border">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="new medication-4"></textarea>
                  </div>
                </td>
                <td class="border">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="new dose-4"></textarea>
                  </div>
                </td>
                <td class="border">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control border-0" aria-label="With textarea" rows="1" name="new direction-4"></textarea>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-sm-auto mb-3">
            <div class="row">
              <div class="col-sm-auto">
                <label class="form-check-label">
                  PHARMACY
                </label>
              </div>
              <div class="col-sm-auto">
                <div class="form-check">
                  <input type="text" class="form-control" placeholder="Type PHARMACY" aria-label="Username"
                    aria-describedby="basic-addon1" required name="PHARMACY" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-auto">
            <div class="row">
              <div class="col-sm-auto">
                <label class="form-check-label">
                  NUMBER
                </label>
              </div>
              <div class="col-sm-auto">
                <div class="form-check">
                  <input type="text" class="form-control" placeholder="Type NUMBER" aria-label="Username"
                    aria-describedby="basic-addon1" required name="NUMBER" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-auto">
            <div class="row">
              <div class="col-sm-auto">
                <label class="form-check-label">
                  called in by
                </label>
              </div>
              <div class="col-sm-auto">
                <div class="form-check">
                  <input type="text" class="form-control" placeholder="Type called in by" aria-label="Username"
                    aria-describedby="basic-addon1" required name="called in by" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-auto">
            <div class="row">
              <div class="col-sm-auto">
                <label class="form-check-label">
                  date/time
                </label>
              </div>
              <div class="col-sm-auto">
                <div class="form-check">
                  <input type="date" class="form-control" placeholder="DD-MM-YYYY" required name="date_time" />
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
      </div>

      <div id="successMessageContainer" class="text-center text-success fw-bold"></div>
      
    </form>
  </div>
<?php include "footer.php" ?>