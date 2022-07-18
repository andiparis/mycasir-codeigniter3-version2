<!-- Content Header (Page header) -->
<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="breadcrumb-item text-primary"><b>Units</b>
						<small class="breadcrumb-item active">Satuan Barang</small>
					</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">
							<a href="#" class="nav-icon fas fa-tachometer-alt text-primary"></a>
						</li>
						<li class="breadcrumb-item active">Products</li>
						<li class="breadcrumb-item active">Units</li>
					</ol>
				</div>
			</div>
		</div>
</section>

<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h3 class="card-title"><b><?=ucfirst($page)?> Unit</b></h3>
						<div class="float-sm-right">
							<a href="<?=site_url('unit')?>" class="btn btn-warning">
								<i class="fas fa-undo"></i> Back
							</a>
						</div>
					</div>

					<div class="card-body pad table-responsive">
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<form action="<?=site_url('unit/process')?>" method="post">
									<div class="form-group">
										<label>Unit Name *</label>
										<input type="hidden" name="id" value="<?=$row->unit_id?>">
										<input type="text" name="unit_name" value="<?=$row->name?>" class="form-control" required>
									</div>
									<div class="form-group">
										<button type="submit" name="<?=$page?>" class="btn btn-success">
											<i class="fas fa-paper-plane">Save</i>
										</button>
										<button type="reset" class="btn btn-secondary">
											Reset
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>