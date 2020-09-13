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

<script type="text/javascript">
    function validate(){
        if( document.authform.category_id.value == "0" ){

            alert( "Please Select a Category" );
            return false;
        }
        return( true );
    }
</script>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Add Product</h2>
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
            <form name="authform" onsubmit="return(validate());" class="form-horizontal" action="<?php echo base_url('Review/save_product');?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Category Name</label>
                        <div class="controls">
                            <select name="category_id">
                                <option value="0">Select Category...</option>
                                <?php getAlltype();?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Product Title</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="title" >
                        </div>
                        <div class="help-block"><?php echo form_error('title'); ?></div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Product Description</label>
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

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Upload PDF</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" name="pdf_file" >
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