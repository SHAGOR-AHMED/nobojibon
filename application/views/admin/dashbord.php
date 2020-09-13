<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>
<div class="sortable row-fluid">
    <a data-rel="tooltip" title="<?= count($total_admin); ?> Admin" class="well span3 top-block" href="<?= base_url('Super_admin/manageAdmin'); ?>">
        <span class="icon32 icon-red icon-user"></span>
        <div>Total Admin</div>
        <div><?= count($total_admin); ?></div>
        <span class="notification">1</span>
    </a>

    <a data-rel="tooltip" title="<?= count($total_product); ?> Product" class="well span3 top-block" href="<?= base_url('Review'); ?>">
        <span class="icon32 icon-color icon-cart"></span>
        <div>Total Product</div>
        <div><?= count($total_product); ?></div>
        <span class="notification green">2</span>
    </a>

    <a data-rel="tooltip" title="<?= count($total_photo); ?> File" class="well span3 top-block" href="<?= base_url('Photo'); ?>">
        <span class="icon32 icon-color icon-book"></span>
        <div>Total Media File</div>
        <div><?= count($total_photo); ?></div>
        <span class="notification yellow">3</span>
    </a>
</div>