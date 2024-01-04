<div class="container-fluid">
  <div class="container-fluid">

    <div class="card">
      <div class="card-body">
        <div class="card-header">
          <h5>View Talk to us</h5>
        </div>
          <table id="table_id" class="table table-striped">
            <thead>
              <tr>
                <th>SR NO</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE NUMBER</th>
                <th>LOCATION</th>
                <th>MESSAGE</th>

                <th style="width: 150px;" class="text-right">OPTION</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $c = 1;
              foreach ($talk_to_us_view as $row) : ?>
                <tr>
                  <td><?= $c++; ?></td>
                  <td><?= $row->name ?></td>
                  <td><?= $row->email ?></td>
                  <td><?= $row->phone_number ?></td>
                  <td><?= $row->location ?></td>
                  <td><?= $row->message ?></td>
                  <td class="text-right"><a href="<?= base_url('admin/talk_to_us/talk_to_us_edit/' . $row->id); ?>"><i class ="ti ti-edit" style="font-size:40px; color:blue;"></i></a><a href="<?= base_url('admin/talk_to_us/talk_to_us_delete/' . $row->id); ?>" class="ti ti-trash" style="font-size:40px; color:red;" onclick="return confirm('Are you sure want to delete ?');"></a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>

          </table>
      </div>
    </div>
  </div>
</div>
<script>
  jQuery(document).ready(function($) {
    $('#table_id').DataTable();
  });
</script>