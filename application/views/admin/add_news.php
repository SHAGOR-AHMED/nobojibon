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
            <h2><i class="icon-edit"></i> Add News & Event</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url('News/save_news');?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">News & Event Date</label>
                        <div class="controls">
                            <input type="date" class="span6 typeahead" name="date" value="">
                            <div class="help-block"><?php echo form_error('date'); ?></div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">News & Event Title</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="title" value="">
                            <div class="help-block"><?php echo form_error('title'); ?></div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">News & Event Title Description</label>
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
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->