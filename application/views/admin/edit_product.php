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
            <h2><i class="icon-edit"></i>Update Product</h2>
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
            <form name="editForm" id="editForm" class="form-horizontal" action="<?php echo base_url('Review/update_product');?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Category</label>
                        <div class="controls">
                            <select name="category_id">
                                <option value="0">--Select Category--</option>
                                <?= getAlltype();?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Product Title</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="title" value="<?= $selected_info->title ?>" >
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="description" id="textarea2" rows="3">
                                <?= $selected_info->description ?>
                            </textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Existing Image</label>
                        <div class="controls">
                            <img src="<?= base_url($selected_info->photo);?>" height="100px" width="100px">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Image</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" name="photo" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Existing PDF</label>
                        <div class="controls">
                            <img src="<?= base_url('assets/admin/pdf-icon.png');?>" height="100px" width="100px">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Upload PDF</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" name="pdf_file" >
                        </div>
                    </div>

                    <input type="hidden" class="span6 typeahead" name="review_id" value="<?= $selected_info->review_id ?>" >

                    <div class="form-actions">
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->
</div><!--/row-->

<script type="text/javascript">
    document.forms['editForm'].elements['category_id'].value='<?php echo $selected_info->category_id?>';
</script>