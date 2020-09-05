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
            <h2><i class="icon-edit"></i> Add Useful Links</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url('Common/save_link');?>" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Link Title</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="link_title" value="">
                            <div class="help-block"><?php echo form_error('link_title'); ?></div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Link Url</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="url" value="">
                            <div class="help-block"><?php echo form_error('url'); ?></div>
                        </div>
                    </div>
                   
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->