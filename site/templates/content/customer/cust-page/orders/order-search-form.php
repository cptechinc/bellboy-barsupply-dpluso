<form action="<?= $orderpanel->pageurl->getUrl(); ?>"  method="get" data-ordertype="sales-orders" data-loadinto="#orders-panel" data-focus="#orders-panel" data-modal="#ajax-modal" class="orders-search-form">
	<input type="hidden" name="filter" value="filter">
	
	<div class="row">
		<div class="col-sm-2">
			<h4>Order Status :</h4>
			<label>New</label>
			<input class="pull-right" type="checkbox" name="status[]" value="New" <?= ($orderpanel->has_filtervalue('status', 'New')) ? 'checked' : ''; ?>></br>
			
			<label>Invoice</label>
			<input class="pull-right" type="checkbox" name="status[]" value="Invoice" <?= ($orderpanel->has_filtervalue('status', 'Invoice')) ? 'checked' : ''; ?>></br>
			
			<label>Pick</label>
			<input class="pull-right" type="checkbox" name="status[]" value="Pick" <?= ($orderpanel->has_filtervalue('status', 'Pick')) ? 'checked' : ''; ?>></br>
			
			<label>Verify</label>
			<input class="pull-right" type="checkbox" name="status[]" value="Verify" <?= ($orderpanel->has_filtervalue('status', 'Verify')) ? 'checked' : ''; ?>>
		</div>
        <div class="col-sm-2">
			<h4>Order #</h4>
			<input class="form-control form-group inline input-sm" type="text" name="orderno[]" value="<?= $orderpanel->get_filtervalue('orderno'); ?>" placeholder="From Order #">
			<input class="form-control form-group inline input-sm" type="text" name="orderno[]" value="<?= $orderpanel->get_filtervalue('orderno', 1); ?>" placeholder="Through Order #">
		</div>
		<div class="col-sm-2">
			<h4>Cust PO</h4>
			<input class="form-control inline input-sm" type="text" name="custpo[]" value="<?= $orderpanel->get_filtervalue('custpo'); ?>" placeholder="Cust PO">
		</div>
		<div class="col-sm-2">
			<h4>Order Total</h4>
			<input class="form-control form-group inline input-sm" type="text" name="ordertotal[]" value="<?= $orderpanel->get_filtervalue('ordertotal'); ?>" placeholder="From Order Total">
			<input class="form-control form-group inline input-sm" type="text" name="ordertotal[]" value="<?= $orderpanel->get_filtervalue('ordertotal', 1); ?>" placeholder="Through Order Total">
		</div>
		<div class="col-sm-2">
            <h4>Order Date</h4>
			<?php $name = 'orderdate[]'; $value = $orderpanel->get_filtervalue('orderdate'); ?>
			<?php include $config->paths->content."common/date-picker.php"; ?>
            <label class="small text-muted">From Date </label>
			<?php $name = 'orderdate[]'; $value = $orderpanel->get_filtervalue('orderdate', 1); ?>
			<?php include $config->paths->content."common/date-picker.php"; ?>
            <label class="small text-muted">Through Date </label>
        </div>
	</div>
	</br>
    <div class="form-group">
    	<button class="btn btn-success btn-block" type="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
	<?php if ($input->get->filter) : ?>
        <div>
            <?= $orderpanel->generate_clearsearchlink(); ?>
        </div>
    <?php endif; ?>
</form>
