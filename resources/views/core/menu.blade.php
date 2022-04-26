<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">

			<div class="pull-left info">
				<p></p>
				<a href="#"><i class="fa fa-circle text-online"></i>Online</a>
			</div>
		</div><br>
		<ul class="sidebar-menu">

			<li class="treeview">
				<a href="{{ route('dashboard') }}"> <i class="fa fa-dashboard"></i> <span>Dashboard</span> </a>
			</li>

			<li class="treeview">
				<a href="{{ route('add-order') }}"> <i class="glyphicon glyphicon-shopping-cart"></i> <span>Transaksi</span> <span class="pull-right-container"> </span> </a>
			</li>

			<li class="treeview">
				<a href="#"> <i class="glyphicon glyphicon-inbox"></i> <span>Order</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
				<ul class="treeview-menu">
					<li>
						<a href="{{ route('order') }}"><i class="fa fa-circle-o"></i>Data Order</a>
					</li>
				</ul>
			</li>

			<li class="treeview">
				<a href="#"> <i class="glyphicon glyphicon-alert"></i> <span>Status</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
				<ul class="treeview-menu">
					<li>
						<a href="{{ route('status') }}"><i class="fa fa-circle-o"></i>Status</a>
					</li>
				</ul>
			</li>
			
			<li class="treeview">
				<a href="#"> <i class="glyphicon glyphicon-folder-close"></i> <span>Pelanggan</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
				<ul class="treeview-menu">
					<li>
						<a href="{{ route('pelanggan') }}"><i class="fa fa-circle-o"></i>Data Pelanggan</a>
					</li>
					<li>
						<a href="{{ route('add-pelanggan') }}"><i class="fa fa-circle-o"></i>Tambah Pelanggan</a>
					</li>
				</ul>
			</li>
			

			<li class="treeview">
				<a href="#"> <i class="glyphicon glyphicon-pushpin"></i> <span>Jenis Layanan</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
				<ul class="treeview-menu">
					<li>
						<a href="{{ route('jenis') }}"><i class="fa fa-circle-o"></i>Data Jenis</a>
					</li>
					<li>
						<a href="{{ route('add-jenis') }}"><i class="fa fa-circle-o"></i>Tambah Jenis</a>
					</li>
				</ul>
			</li>

			<li class="treeview">
				<a href="#"> <i class="glyphicon glyphicon-comment"></i> <span>Komplain</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
				<ul class="treeview-menu">
					<li>
						<a href="#"><i class="fa fa-circle-o"></i>Komplain</a>
					</li>
				</ul>
			</li>

			<li class="treeview">
				<a href="#"> <i class="glyphicon glyphicon-stats"></i> <span>Laporan</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
				<ul class="treeview-menu">
					<li>
						<a href="{{ route('laporan') }}"><i class="fa fa-circle-o"></i>Laporan Transaksi / Order</a>
					</li>
				</ul>
			</li>

			<li class="treeview">
				<a href="#"> <i class="glyphicon glyphicon-user"></i> <span>User</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i> </span> </a>
				<ul class="treeview-menu">
					<li>
						<a href="user.php"><i class="fa fa-circle-o"></i>Data User</a>
					</li>
					<li>
						<a href="add_user.php"><i class="fa fa-circle-o"></i>Tambah User</a>
					</li>
				</ul>
			</li>

		</ul>
	</section>
</aside>
