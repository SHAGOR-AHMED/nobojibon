<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Tables</a>
        </li>
    </ul>
</div>

<?php 
    if(!empty($message)){
?>
    <div class="alert alert-block alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <i class="ace-icon fa fa-times"></i>
        </button>

        <i class="ace-icon fa fa-check green"></i>
        <?php echo $message; ?>
    </div>

<?php } ?>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-user"></i> <a href="<?php echo base_url('Review/add_review');?>"><button class="btn btn-primary">Add Program</button></a></h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Program Type</th>
                        <th>Description</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php
                        $i=1;
                        foreach($all_review as $val){ ?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td class="center"><?php echo $val->review_type;?></td>
                        <td class="center"><?php echo $val->description;?></td>
                        <td class="center">
                            <img src="<?= base_url($val->photo);?>" height="100px" width="100px">
                        </td>
                        
                        <td class="center">
                            
                            <a class="btn btn-info" href="<?php echo base_url();?>Review/edit_review/<?php echo $val->review_id?>" title="Edit">
                                <i class="icon-edit icon-white"></i>                                              
                            </a>

                            <a class="btn btn-danger" href="<?php echo base_url();?>Review/delete_review/<?php echo $val->review_id?>" title="Delete" onclick="return confirm('Are you sure?');">
                                <i class="icon-trash icon-white"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table> 
			
        </div>
    </div><!--/span-->
</div><!--/row-->