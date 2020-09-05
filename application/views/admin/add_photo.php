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
            <h2><i class="icon-edit"></i>Add Photo</h2>
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
            <form class="form-horizontal" action="<?php echo base_url('Photo/save_photo');?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Photo Type</label>
                        <div class="controls">
                            <select name="type">
                                <option value="0">Select Type...</option>
                                <option value="1">Banner</option>
                                <option value="2">About Us</option>
                                <option value="4">Achievement</option>
                                <option value="5">Program</option>
                                <option value="6">Donar</option>
                                <option value="7">Publication</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Photo Title</label>
                        
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="photo_title" >
                        </div>
                        <div class="help-block"><?php echo form_error('photo_title'); ?></div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="description" id="textarea2" rows="3"></textarea>
                        </div>
                        <div class="help-block"><?php echo form_error('description'); ?></div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Image</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" name="photo" >
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->
</div><!--/row-->