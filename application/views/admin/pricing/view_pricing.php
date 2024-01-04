<div class="container-fluid">
  <div class="container-fluid">

    <div class="card">
      <div class="card-body">
        <div class="card-header">
        <h5>View pricing</h5>
            <a href="<?= base_url('admin/pricing/add_pricing'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add Blog Detail</button>
            </a>
          </div>
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>SR NO</th>
                  <th>NAME</th>
                  <th>DESCRIPTION</th>
                  <th>PRICE</th>
                  <th style="width: 150px;" class="text-right">OPTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($pricing_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->name ?></td>
                    <td><?= $row->description ?></td>
                    <td><?= $row->price ?></td>                    

                    <td class="text-right"><a href="<?= base_url('admin/pricing/pricing_edit/' . $row->id); ?>" class="ti ti-edit" style="font-size:40px; color:blue;"style="font-size:15px; padding:0px;"></a><a href="<?= base_url('admin/pricing/pricing_delete/' . $row->id); ?>" class="ti ti-trash" style="font-size:40px; color:red;" onclick="return confirm('Are you sure want to delete ?');"style="font-size:15px; padding:0px;"></a></td>
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
<style>
  .container-fluid{
    width:auto;
    position: relative;
    clear: both;
    overflow: scroll;
  }
</style>