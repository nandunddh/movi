<?php include "header.php" ?>

  <div class="container py-5 my-4">
    <div class="row">
      <p class="text-center fw-bold fs-3">
        Order for Blood Work- Provide to patient.
      </p>
      <p class="text-center fw-bold fs-3">
        Please have labs drawn 1-2 weeks prior to your scheduled procedure.
      </p>
    </div>
    <div class="row mt-5">
      <div class="col-sm-12">
        <div class="col-sm-5">
          <div class="row">
            <div class="col-md-6 text-md-end">
              <label for="basic-url" class="form-label">Patient Name</label>
            </div>
            <div class="col-md-6">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Type Patient Name" required name="Patient Name" />
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please Type Patient Name.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="row">
          <div class="col-md-6 text-md-end">
            <label for="basic-url" class="form-label">Date of Birth</label>
          </div>
          <div class="col-md-6">
            <div class="input-group mb-3">
              <input type="date" class="form-control" placeholder="MM/DD/YYYY" required name="Date of Birth" />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please Select Date of Birth.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-9">
            <p>Diagnosis: I70.213– Peripheral Arterial Disease</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-9">
            <p>Please Draw:</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-9">
            <p class="fw-bold">
              CBC with diff<br />
              PT & INR<br />
              Comprehensive Metabolic Panel
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-1 text-end"></div>
          <div class="col-sm-2 text-end">
            <p>Physician Signature</p>
          </div>
          <div class="col-sm-7">
            <div class="input-group mb-3">
              <input type="file" class="form-control" name="Physician Signature" required />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">
                Please choose a Physician Signature.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-1 text-end"></div>
          <div class="col-sm-2 text-end">
            <p>Dr</p>
          </div>
          <div class="col-sm-7">
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="Physician Signature" required />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">
                Please choose a Physician Signature.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 mt-5">
        <p class="text-center fw-bold fs-1">Please fax results to 313-359-8305</p>
      </div>
      <div class="row mt-5">
        <div class="col-sm-12 text-center">
          <button class="btn btn-primary" type="submit">Save & Continue</button>
        </div>
      </div>
    </div>
<?php include "footer.php" ?>