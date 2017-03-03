<?php Template::load('admin/header'); ?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1><?php echo $run->name; ?> </h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-2">
				<?php Template::load('admin/run/menu'); ?>
			</div>
			<div class="col-md-10">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Run Overview </h3>
					</div>
					<div class="box-body">
						<?php Template::load('public/alerts'); ?>
						
						<?php if (!empty($overview_script)): ?>
							<div>
								<h4><i class="fa fa-eye"></i> <?= $overview_script->title ?> </h4>
								<h5>
									<?= $user_overview['users_finished'] ?>  finished users,
									<?= $user_overview['users_active'] ?> active users, 
									<?= $user_overview['users_waiting'] ?> <abbr title="inactive for at least a week">waiting</abbr> users
								</h5>
								<?php echo $overview_script->parseBodySpecial(); ?>
							</div>
						<?php else: ?>
							<p> <a href="<?= admin_run_url($run->name, 'settings') ?>"class="btn btn-default"><i class="fa fa-plus-circle"></i> Add an overview script</a></p>
						<?php endif; ?>

					</div>

				</div>
			</div>
		</div>

		<div class="clear clearfix"></div>
	</section>
	<!-- /.content -->
</div>

<?php Template::load('admin/footer'); ?>