<div class="container-fluid">
  <div class="container-fluid">

    <div class="card">
      <div class="card-body">
        <div class="card-header">
        <h5>View</h5>
            <a href="<?= base_url('admin/blog_detail/add_blog_detail'); ?>">
              <button type="button" c class="btn btn-primary toggle-btn mb-4 mr-2" style="margin-left: 80.5%;">Add</button>
            </a>
          </div>
          <div class="card-body">
            <table id="table_id" class="table table-striped">
              <thead>
                <tr>
                  <th>SR NO</th>
                  <th>SEO TITLE </th>
                  <th>SEO KEYWORDS</th>
                  <th>SEO DESCRIPTION</th>
                  <th>BLOG NAME</th>
                  <th>BLOG IMAGE</th>
                  <th>BLOG CATEGORY</th>
                  <th>BLOG AUTHOR</th>
                  <th>BLOG DATE</th>
                  <th>BLOG DESCRIPTION</th>
                  <th>LONG DESCRIPTION </th>
                  <th style="width: 150px;" class="text-right">OPTION</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $c = 1;
                foreach ($blog_detail_view as $row) : ?>
                  <tr>
                    <td><?= $c++; ?></td>
                    <td><?= $row->seo_title ?></td>
                    <td><?= $row->seo_keywords ?></td>
                    <td><?= $row->seo_desc ?></td>
                    <td><?= $row->blog_name ?></td>
                    <td>
                      <?php if ($row->blog_image) { ?>
                        <img src="<?php echo base_url('uploads/') . $row->blog_image; ?>" style="width:50px;height:80px">
                      <?php } ?>
                    </td>
                    <td><?= $row->blog_category ?></td>
                    <td><?= $row->blog_author ?></td>
                    <td><?= $row->blog_date ?></td>
                    <td><?= $row->blog_desc ?></td>
                    <td><?= $row->long_desc ?></td>

                    <td class="text-right"><a href="<?= base_url('admin/blog_detail/blog_detail_edit/' . $row->id); ?>" class="ti ti-edit" style="font-size:40px; color:blue;"style="font-size:15px; padding:0px;"></a><a href="<?= base_url('admin/blog_detail/blog_detail_delete/' . $row->id); ?>" class="ti ti-trash" style="font-size:40px; color:red;" onclick="return confirm('Are you sure want to delete ?');"style="font-size:15px; padding:0px;"></a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>

            </table>
        </div>
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