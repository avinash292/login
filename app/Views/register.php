<div class="container">
  <div class="row">
    <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-3 mb-3 bg-white form-wrapper">
      <div class="container">
        <center>
          <h3>Registration</h3>
        </center>
        <hr>
        <form action="#" role="form" method="post" onsubmit="return validate();" id="form_submission_ajax">
          <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="text" name="email" id="email" value="<?= set_value('email') ?>" class="form-control">
            <span id="email_error" class="error"></span>
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="" class="form-control">
            <span id="password_error" class="error"></span>
          </div>

          <div class="form-group form-check form-check-inline">
            <label for="gender">Gender:</label>
            <label for="male" class="ml-2">
              <input type="radio" id="male" name="gender" value="male" class="ml-2"> Male</label>
            <label for="female">
              <input type="radio" id="female" name="gender" value="female" class="ml-3"> Female</label>
            <span id="gender_error" class="error"></span>
          </div>


          <div class="form-group form-check form-check-inline">
            <label for="gender">Hobby:</label>
            <div class="form-check">
              <label class="form-check-label" for="gridCheck" class="ml-2">
                <input class="form-check-input" type="checkbox" id="singing" name='singing'>
                Singing
              </label>
              <label class="form-check-label" for="gridCheck" class="ml-2">
                <input class="form-check-input" type="checkbox" id="coding" name='coding' class="ml-2">
                Coding
              </label>
              <label class="form-check-label" for="gridCheck" class="ml-2">
                <input class="form-check-input" type="checkbox" id="music" name="music" class="ml-2">
                Music
              </label>
              <label class="form-check-label" for="gridCheck" class="ml-2">
                <input class="form-check-input" type="checkbox" id="cricket">
                Cricket
              </label>
            </div>
          </div>
          <span id="hobby_error" class="error form-group"></span>
          <div class="form-group">
            <label for="city">City</label>

            <select id="city" class="form-control">
              <option>Please Select</option>
              <option>Bahamas</option>
              <option>Cambodia</option>
              <option>Denmark</option>
              <option>Ecuador</option>
              <option>Fiji</option>
              <option>Gabon</option>
              <option>Haiti</option>
            </select>

            <span id="city_error" class="error"></span>
          </div> <!-- /.form-group -->

          <div class="form-group">
            <label for="birthDate">Date of Birth</label>
            <input type="date" id="birthDate" class="form-control">
            <span id="dob_error" class="error"></span>
          </div>


          <div class="form-group">
            <label for="password">Address:</label>
            <textarea id="txtArea" rows="4" cols="4" placeholder="address" class="form-control"></textarea>
            <span id="address_error" class="error"></span>
          </div>

          <div class="form-group">
            <label for="profile_pic" class="col-sm-3 control-label">Profile Pic:</label>
            <input type="file" id="profile_pic" name="myfile">
            <span id="pic_error" class="error"></span>
          </div>

          <div class="row pb-2">
            <div class="col-12 col-sm-8 text-left">
              <a href="/register" class="btn btn-danger">Registration</a>
            </div>
            <div class="col-12 col-sm-4 text-right">
              <button type="submit" class="btn btn-primary">LogIn</button>

            </div>

          </div>
        </form>
      </div>

    </div>

  </div>
</div>