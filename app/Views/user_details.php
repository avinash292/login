<?php
if (!$user_details) { ?>
  <div class="sufee-alert alert with-close alert-success alert-dismissible fade show text-center">
    No Records found ! <a href="<?= base_url() ?>/users/signup" class="btn btn-success">Add User</a>
  </div>
<?php } else {
?>
  <?php $session = \Config\Services::session(); ?>
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
  <form action="<?php echo base_url('/users/delUser/'); ?>" name="user_details" method="post" id="user_details">
    <table class="table table-striped">
      <thead>

        <tr align="right">
          <th colspan="18">
            <a href="javascript:printout()" style="color: orange" title="Click To Print">Print ||</a>
            <a href="javascript:delete_all();" style="color: orange" title="Click To Delete All"> Delete All ||</a>
            <a class="" href="<?= base_url() ?>/users/signup" style="color: orange" title="Click To Add user"> Add User</a>
        </tr>
        <tr class="bg-dark text-white">
          <!-- <th><input type="checkbox" name="selectAll" class="text-center"> Select All</th> -->
          <th><abbr title="Select All"><input type="checkbox" onclick="mark_All(this);"/></abbr> All</th>
          <th class="text-center">Profile</th>
          <th class="text-center">Email ID</th>
          <th class="text-center">User Name</th>
          <th class="text-center">Password</th>
          <th class="text-center">Gender</th>
          <th class="text-center">Hobby</th>
          <th class="text-center">City</th>
          <th class="text-center">Birthday</th>
          <th class="text-center">Address</th>
          <th class="text-center">Options</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($user_details as $u_detail) { ?>
          <tr>
            <td><input type="checkbox" value="<?php echo $u_detail->id;?>" name="user_id[]" class="text-center"></td>
            <td class="text-center"><img src="<?php echo base_url('uploads/'.$u_detail->pic);?>" height="50px" width="50px" style="border-radius:50%" alt="<?php echo $u_detail->pic;?>"></td>
            <td class="text-center"><?php echo $u_detail->username; ?></td>
            <td class="text-center"><?php echo $u_detail->email; ?></td>
            <td class="text-center"><?php echo $u_detail->password; ?></td>
            <td class="text-center"><?php echo $u_detail->gender; ?></td>
            <td class="text-center"><?php echo $u_detail->hobby; ?></td>
            <td class="text-center"><?php echo $u_detail->city; ?></td>
            <td class="text-center"><?php echo $u_detail->dob; ?></td>
            <td class="text-center"><?php echo $u_detail->address; ?></td>
            <td class="text-center"><a href="<?php echo base_url(); ?>/users/editUser/<?php echo $u_detail->id; ?>">Edit</a> || <a href="javascript:delete_user(<?php echo $u_detail->id; ?>);" class=""><abbr title="Click To Delete All"></abbr>Delete</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <input type="hidden" name="act" id="act" />
    <input type="hidden" name="u_id" id="u_id" />
  </form>
<?php } ?>