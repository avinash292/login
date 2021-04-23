    <?php $session = \Config\Services::session(); ?>

    <div id="wrap" class="container">
        <!--wrap start-->
        <div id="wrap2" class="row">
            <!--wrap2 start-->
            <div class="col-12 col-sm8 offset-sm-2 col-md-6 offset-md-3 mt-3 mb-3 bg-white form-wrapper">
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

                    <?php }
                    foreach ($user_details as $u_detail) { ?>

                        <form action="<?php echo base_url('/users/update_user') ?>" method="post" id="register_form" enctype="multipart/form-data">

                            <div class="form-group"><label for="username">User Name:</label> <input name="username" type="text" class="form-control" value="<?php echo $u_detail->username; ?>" /> <span class="val_uname"></span></div>

                            <div class="form-group"> <label for="email">Email:</label> <input name="email" type="email" class="form-control" value="<?php echo $u_detail->email; ?>" /> <span class="val_email"></span> </div>

                            <div class="form-group"><label for="password">Password:</label> <input name="password" type="password" class="form-control" value="<?php echo $u_detail->password; ?>" /> <span class="val_pass"></span></div>

                            <div class="form-group"><label for="gender">Gender:</label> <input name="gender" type="radio" value="male" <?php if ($u_detail->gender == "male") { echo "checked"; } ?> /> Male <input name="gender" type="radio" value="female" <?php if ($u_detail->gender == "female") { echo "checked";}?>/>
                                                        
                            <div class="form-group">
                                <label for="hubby">Hobby:</label>
                                <?php
                                $hob = explode(",", $u_detail->hobby);
                                $hobby = array("singing", "playing", "coding", "hunting");
                                for ($i = 0; $i < count($hobby); $i++) {
                                    if (in_array($hobby[$i], $hob)) {
                                ?>
                                        <label class="form-check-label">
                                            <input checked="checked" type="checkbox" name="hobby[]" class="hobby ml-2" value="<?php echo $hobby[$i]; ?>" /><?php echo $hobby[$i]; ?></label>
                                    <?php
                                    } else {
                                    ?>
                                        <label class="form-check-label">
                                            <input type="checkbox" name="hobby[]" class="hobby ml-2" value="<?php echo $hobby[$i]; ?>" /><?php echo $hobby[$i]; ?></label>
                                <?php
                                    }
                                }

                                ?>
                                <span id="" class="val_hobby"></span>
                            </div> <!-- /.form-group -->

                            <div class="form-group">
                                <label for="city">City:</label>

                                <select class="form-control" name="city">
                                    <option value="">Please Select</option>
                                    <option value="Bahamas" <?php if ($u_detail->city == "bahamas") {
                                                                echo "selected";
                                                            } ?>>Bahamas</option>
                                    <option value="cambodia" <?php if ($u_detail->city == "cambodia") {
                                                                    echo "selected";
                                                                } ?>>cambodia</option>
                                    <option value="Denmark" <?php if ($u_detail->city == "denmark") {
                                                                echo "selected";
                                                            } ?>>Denmark</option>
                                    <option value="Ecuador" <?php if ($u_detail->city == "ecuador") {
                                                                echo "selected";
                                                            } ?>>Ecuador</option>
                                    <option value="fiji" <?php if ($u_detail->city == "fiji") {
                                                                echo "selected";
                                                            } ?>>fiji</option>
                                    <option value="Gabon" <?php if ($u_detail->city == "gabon") {
                                                                echo "selected";
                                                            } ?>>Gabon</option>
                                    <option value="Haiti" <?php if ($u_detail->city == "haiti") {
                                                                echo "selected";
                                                            } ?>>Haiti</option>
                                </select>

                                <span class="val_city"></span>
                            </div> <!-- /.form-group -->

                            <div class="form-group">
                                <label for="birthDate">Date of Birth:</label>
                                <input type="date" id="birthDate" class="form-control" name="bday" value="<?php echo $u_detail->dob; ?>">
                                <span class="val_dob"></span>
                            </div>


                            <div class="form-group">
                                <label for="password">Address:</label>
                                <textarea id="txtArea" rows="4" cols="4" placeholder="address" class="form-control" name="address"><?php echo $u_detail->address; ?></textarea>
                                <span class="val_address"></span>
                            </div>

                            <div class="form-group">
                                <label for="profile_pic" class="col-sm-3 control-label">Profile Pic:</label>
                                <input type="file" id="profile_pic" name="myfile" value="<?php echo $u_detail->pic;?>">
                                <img src="<?php echo base_url('uploads/'.$u_detail->pic);?>" height="50px" width="50px" style="border-radius:50%" alt="<?php echo $u_detail->pic; ?>" />
                                <span class="val_file"></span>
                            </div>
                            <div class="row pb-2">
                                <div class="col-12 col-sm-8 text-left">
                                    <input type="hidden" name="u_id" id="u_id" value="<?php echo $u_detail->id; ?>" />
                                    <input type="submit" name="submit" value="Update" class="btn btn-danger">
                                </div>
                                <div class="col-12 col-sm-4 text-right"> <a href="<?= base_url() ?>" class="btn
        btn-primary">Log In</a> </div>
                            </div>
                        </form> <?php } ?>
                </div>
            </div>
        </div>
        <!--wrap2
        end-->
    </div>
    <!--wrap start-->