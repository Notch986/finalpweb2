<div class="panel panel-primary">
  <div class="panel-heading">
    Add Provider
    <?php
    echo $this->Html->link(
        'List Providers',
        '/list-providers',
        ['class' => 'btn btn-warning pull-right', 'style' => 'margin-top:-7px']
    );
    ?>
  </div>
  <div class="panel-body">
  <form action="javascript:void(0)" id="frm-add-provider" method="post">
    <div class="row custom-padding">
        <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
                <label>Name</label>
                <input type="text" required class="form-control" placeholder="Name" name="Name">
            </div>
        </div>
        <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
                    <label for="status">Status:</label>
                    <select id="status" name="Status" required class="form-control" placeholder="Status">
                    <option value="0">Inactive</option>
                    <option value="1">Active</option>                   
                    </select>                
            </div>
        </div>
        </div>
        <div class="row custom-padding">
        <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
                <label>Phone</label>
                <input type="text" required class="form-control" placeholder="Phone" name="Phone">
            </div>
        </div>
        </div>
        <div class="row custom-padding">
        <div class="col-sm-6">
            <!-- Select multiple-->
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
        </div>
    </form>
  </div>
</div>