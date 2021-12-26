<div class="panel panel-primary">
    <div class="panel-heading">
        Update Provider
        <?php
        echo $this->Html->link(
            'List Providers',
            '/list-providers',
            ['class' => 'btn btn-warning pull-right', 'style' => 'margin-top:-7px']
        );
        ?>
    </div>
    <div class="panel-body">
        <form action="javascript:void(0)" id="frm-edit-provider" method="post">

            <input type="hidden" name="provider_ID" value="<?= $provider->ID ?>">

            <div class="row custom-padding">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" value="<?= $provider->Name ?>" required class="form-control" placeholder="Name" name="Name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Status</label>
                        <label for="status">Status:</label>
                        <select id="status" name="Status" required class="form-control" placeholder="Status" value="<?= $provider->Status ?>">
                        <option value="" selected disabled hidden><?php if ($provider->Status==0) 
                             echo 'Inactive';
                            else echo 'Active';                
                        ?></option>
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
                        <input type="text" value="<?= $provider->Phone ?>" required class="form-control" placeholder="Phone" name="Phone">
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