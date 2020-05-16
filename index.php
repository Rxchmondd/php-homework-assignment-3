<?php
  require("processResults.php");
  require("db.php");
 ?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
<!-- form user info -->
          <div class="card card-outline-secondary mt-3">
            <div class="card-header">
              <h3 class="mb-0">COVID-19 Survey</h3>
            </div>
            <div class="card-body">
              <form autocomplete="off" class="form" role="form" method="POST">
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">First name</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="text" value="Jane" name="fname">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="text" value="Bishop" name="lname">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Email</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="email" name="email">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Company</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="text" name="company">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">How do you feel about COVID-19?</label>
                  <div class="col-lg-9">
                    <div class="btn-group" data-toggle="buttons">
                       <label class="btn btn-secondary">
 												<input autocomplete="off" checked value="1" name="options" type="radio">
 												I dont' care!
 											</label>
 											<label class="btn btn-secondary">
 												<input autocomplete="off" name="options" value="2" type="radio">
 												I'm scared!
 											</label>
 											<label class="btn btn-secondary">
 												<input autocomplete="off"  name="options" value="3" type="radio">
 													I'm just fine!
 											</label>
 											<label class="btn btn-secondary">
 												<input autocomplete="off" name="options" value="4" type="radio">
 													I'm so over this!
 											</label>

                     </div>
                  </div>
                </div>


                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Username</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="text" name="uname">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Password</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="password" name="pword">
                      <small class="form-text text-muted" id="passwordHelpBlock">Your password must be 8-20 characters long and contain letters and numbers.</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Confirm</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="password" name="cpass">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label"></label>
                  <div class="col-lg-9">
                    <input class="btn btn-secondary" type="reset" value="Cancel">
                    <input class="btn btn-primary" type="submit" name="submit" value="Save Changes">
                  </div>
                </div>


              </form>
            </div>
          </div><!-- /form user info -->
        </div>
        </body>
  </html>
