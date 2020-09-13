
<script type="text/javascript">
    function validate(){
        if( document.authform.type.value == "0" ){

            alert( "Please Select a Type" );
            return false;
        }
        return( true );
    }
</script>

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
            <form name="authform" class="form-horizontal" action="<?php echo base_url('Photo/save_photo');?>" method="post" enctype="multipart/form-data" onsubmit="return(validate());">
                <fieldset>
                    <legend></legend>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">Photo Type</label>
                        <div class="controls">
                            <select name="type">
                                <option value="0">Select Type...</option>
                                <option value="1">Slider</option>
                                <option value="2">Our Principals</option>
                                <option value="3">Support Team</option>
                                <option value="4">Certificates</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Upload Image</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" name="photo" >
                        </div>
                        <span style="color:red;">Slider:1366x510,Principal:235x120,Support Team:845x485,Certificate:785x1070</span>
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