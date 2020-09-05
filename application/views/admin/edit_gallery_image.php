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
            <h2><i class="icon-edit"></i>Update Photo</h2>
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
            <form name="editGallery" id="editGallery" class="form-horizontal" action="<?php echo base_url('Gallery/update_GalleryImage');?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Album Name</label>
                        
                        <div class="controls">
                            <select name="album_id">
                                <option value="0">Select Album Name...</option>
                                <?= getAllalbum();?>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Existed Image</label>
                        <div class="controls">
                            <img src="<?= base_url($galleryImage_info->photo);?>" height="100px" width="100px">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="typeahead">Upload New Image</label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" name="photo" >
                        </div>
                    </div>

                    <input type="hidden" class="span6 typeahead" name="gimage_id" value="<?= $galleryImage_info->gimage_id ?>" >

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
    document.forms['editGallery'].elements['album_id'].value='<?php echo $galleryImage_info->album_id?>';
</script>