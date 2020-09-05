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
            <h2><i class="icon-edit"></i> Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url('News/update_news');?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Edit News & Event</legend>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">News & Event Date </label>
                        <div class="controls">
                            <input type="date" class="span6 typeahead" name="date" value="<?php echo $news_info->date ?>" >
                        </div>
                    </div>

                     <div class="control-group">
                        <label class="control-label" for="typeahead">News & Event Title</label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" name="title" value="<?php echo $news_info->title ?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="textarea2">News & Event Description</label>
                        <div class="controls">
                            <textarea class="cleditor" name="description" id="textarea2" rows="3">
                                <?= $news_info->description ?>
                            </textarea>
                        </div>
                    </div>

                     <div class="control-group">
                        <label class="control-label" for="typeahead">Existed Image</label>
                        <div class="controls">
                            <img src="<?= base_url($news_info->photo);?>" height="100px" width="100px">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Upload New Image</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" name="photo" >
                        </div>
                    </div>

                    <input type="hidden" class="span6 typeahead" name="news_id" value="<?= $news_info->news_id ?>" >
                   
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->