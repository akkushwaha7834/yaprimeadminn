<div class="container-fluid">
  <div class="container-fluid">

    <div class="card">
    <div class="card-body"> 
           <div class="card-header">
        <h5>View</h5>
        <a href="<?= base_url('admin/users/add'); ?>">
          <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add</button>
        </a>
      </div>

      <table id="table_id" class="table table-striped" style="width: 100%; overflow: scroll">
        <thead>
          <tr>
            <th>Sr No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile No.</th>
            <th>Role</th>
            <th style="width: 150px;" class="text-right">Option</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $c = 1;
          foreach ($all_users as $row) : ?>
            <tr>
              <td><?= $c++; ?></td>
              <td><?= $row['firstname']; ?></td>
              <td><?= $row['lastname']; ?></td>
              <td><?= $row['email']; ?></td>
              <td><?= $row['mobile_no']; ?></td>
              <td><span class="btn  btn-primary btn-sm"><?= $row['role_name']; ?><span></td>
              <td class="text-right">
                <!-- <a href="<?= base_url('admin/users/edit/' . $row['id']); ?>" class="ti ti-edit" style="font-size:40px; color:blue;"></a> -->
              <a href="<?= base_url('admin/users/del/' . $row['id']); ?>" class="ti ti-trash <?= ($row['is_admin'] == 1) ? 'disabled' : '' ?>" style="font-size:40px; color:red;" onclick="return confirm('Are you sure want to delete ?');"></a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>
    </div>
    <!-- [ sample-page ] end -->
  </div>
  <!-- [ Main Content ] end -->
</div>
</div>
<script>
  jQuery(document).ready(function($) {
    $('#table_id').DataTable();
  });
</script>