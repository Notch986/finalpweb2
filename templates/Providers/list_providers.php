
<div class="panel panel-primary">
  <div class="panel-heading">
    List Providers
    <?php
    echo $this->Html->link(
      'Add Provider',
      '/add-provider',
      ['class' => 'btn btn-warning pull-right', 'style' => 'margin-top:-7px']
    );
    ?>
  </div>
  <div class="panel-body">

    <table id="tbl-providers-list" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Status</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (count($providers) > 0) {
          foreach ($providers as $index => $data) {
        ?>
            <tr>
              <td><?= $data->ID ?></td>
              <td><?php echo $data->Name ?></td>
              <td><?php if ($data->Status==0) 
                echo 'Inactive';
                else echo 'Active';                
                ?>
                </td>
              <td><?= $data->Phone ?></td>
              <td>
                <a href="<?= $this->Url->build('/edit-provider/' . $data->ID, ['fullBase' => true]) ?>" class="btn btn-warning">Edit</a>

                <a href="javascript:void(0)" class="btn btn-danger btn-delete-provider" data-id="<?= $data->ID?>" data-name="<?= $data->Name?>">Delete</a>
              </td>
            </tr>
        <?php
          }
        }
        ?>
      </tbody>
    </table>
  </div>
</div>