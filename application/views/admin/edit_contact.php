<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Forms</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Update Contact Information</h2>
            <h3>
                <?php
                    $msg=$this->session->userdata('message');
                    if($msg){
                        echo $msg;
                        $this->session->unset_userdata('message');
                    }
                ?>
            </h3>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url('Common/update_contact');?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>


                    <div class="control-group">
                        <label class="control-label" for="textarea2">Contact Person</label>
                        <div class="controls">
                            <textarea class="cleditor" name="contact_person" id="textarea2" rows="3">
                                <?= $contact_info->contact_person; ?>
                            </textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Head Office</label>
                        <div class="controls">
                            <textarea class="cleditor" name="head_office" id="textarea2" rows="3">
                                <?= $contact_info->head_office; ?>
                            </textarea>
                        </div>
                    </div>

                    <input type="hidden" class="span6 typeahead" name="contact_id" value="<?= $contact_info->contact_id; ?>" >

                    <div class="form-actions">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->
</div><!--/row-->