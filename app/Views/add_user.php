<?php $session = \Config\Services::session(); ?>

<div id="wrap" class="container">
    <!--wrap start-->
    <div id="wrap2" class="row">
        <!--wrap2 start-->
        <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-3 mb-3 bg-white form-wrapper ">
            <div class="container">
                <center>
                    <h3>Registration</h3>
                </center>
                <hr>
                <?php if ($session->getTempdata('success')) { ?>

                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show text-center">
                        <span class="badge badge-pill badge-success">Success</span>
                        <?php echo $session->getTempdata('success'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php } ?>

                <?php if ($session->getTempdata('error')) { ?>

                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show text-center">
                        <span class="badge badge-pill badge-danger">Unsuccess</span>
                        <?php echo $session->getTempdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                <?php } ?>
                <form action="<?php echo base_url('/register/addUser') ?>" method="post" id="register_form" enctype="multipart/form-data">

                    <div class="form-group"><label for="username">User Name:</label> <input name="username" type="text" class="form-control" /> <span class="val_uname"></span></div>

                    <div class="form-group"> <label for="email">Email:</label> <input name="email" type="email" value="" class="form-control" /> <span class="val_email"></span> </div>

                    <div class="form-group"><label for="password">Password:</label> <input name="password" type="password" class="form-control" /> <span class="val_pass"></span></div>

                    <div class="form-group"><label for="gender">Gender:</label> <input name="gender" type="radio" value="male" /> Male <input name="gender" type="radio" value="female" /> Female <span class="val_gen"></span> </div>

                    <div class="form-group">
                        <label for="hubby">Hobby:</label>
                        <label class="form-check-label">
                            <input type="checkbox" name="hobby[]" class="hobby ml-2" value="singing"> Singing
                        </label>
                        <label class="form-check-label">
                            <input type="checkbox" name="hobby[]" class="hobby ml-2" value="playing"> Playing
                        </label>
                        <label class="form-check-label">
                            <input type="checkbox" name="hobby[]" class="hobby ml-2" value="coding"> coding
                        </label>

                        <label class="form-check-label">
                            <input type="checkbox" name="hobby[]" class="hobby ml-2" value="hunting"> Hunting
                        </label>
                        <span id="" class="val_hobby"></span>
                    </div> <!-- /.form-group -->

                    <div class="form-group">
                        <label for="city">City:</label>

                        <select class="form-control" name="city">
                            <option value="">Please Select</option>
                            <option value="bahamas">Bahamas</option>
                            <option value="cambodia">Cambodia</option>
                            <option value="denmark">Denmark</option>
                            <option value="ecuador">Ecuador</option>
                            <option value="fiji">Fiji</option>
                            <option value="gabon">Gabon</option>
                            <option value="haiti">Haiti</option>
                        </select>

                        <span class="val_city"></span>
                    </div> <!-- /.form-group -->

                    <div class="form-group">
                        <label for="birthDate">Date of Birth:</label>
                        <input type="date" id="birthDate" class="form-control" name="bday">
                        <span class="val_dob"></span>
                    </div>


                    <div class="form-group">
                        <label for="password">Address:</label>
                        <textarea id="txtArea" rows="4" cols="4" placeholder="address" class="form-control" name="address"></textarea>
                        <span class="val_address"></span>
                    </div>

                    <div class="form-group">
                        <label for="profile_pic" class="col-sm-3 control-label">Profile Pic:</label>
                        <input type="file" id="profile_pic" name="myfile" accept=".jpg, .png, .jpeg">
                        <span class="val_file"></span>
                    </div>

                    <div class="row pb-2">
                        <div class="col-12 col-sm-8 text-left">
                            <input type="submit" name="submit" value="Resister" class="btn btn-danger">
                        </div>
                        <div class="col-12 col-sm-4 text-right"> <a href="<?= base_url() ?>" class="btn
btn-primary">Log In</a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--wrap2
end-->
</div>
<!--wrap start-->