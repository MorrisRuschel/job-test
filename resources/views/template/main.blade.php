<!doctype html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Partnership Test</title>
	<link rel="icon" type="image/png" sizes="16x16" href="/static/img/favicon.png">
	<link rel="stylesheet" href="/static/theme/adminpress/css/libs/bootstrap.min.css">
	<link rel="stylesheet" href="/static/theme/adminpress/css/style.css">
</head>
<body>
	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<header class="topbar">
			<nav class="navbar top-navbar navbar-expand-md navbar-light">
				<!-- ============================================================== -->
				<!-- Logo -->
				<!-- ============================================================== -->
				<div class="navbar-header">
					<a class="navbar-brand" href="/">
						<h2>Partnership Test</h2>
					</a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse">
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav mr-auto mt-md-0">
						<!-- This is  -->
						<li class="nav-item">
							<a class="nav-link nav-toggler hidden-md-up text-muted" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
						</li>
						<li class="nav-item m-l-10">
							<a class="nav-link sidebartoggler hidden-sm-down text-muted" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<aside class="left-sidebar">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav">
						<li>
							<a class="has-arrow" href="/articles" aria-expanded="false"><i class="fa fa-industry text-success"></i><span class="hide-menu">Notícias</span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="/articles">Gerenciar</a></li>
								<li><a href="/articles/create">Cadastrar</a></li>
							</ul>
						</li>
						<li class="nav-devider"></li>
						<li>
							<a class="has-arrow" href="/categories" aria-expanded="false"><i class="fa fa-microchip text-success"></i><span class="hide-menu">Categorias</span></a>
							<ul aria-expanded="false" class="collapse">
								<li><a href="/categories">Gerenciar</a></li>
								<li><a href="/categories/create">Cadastrar</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</aside>
		<!-- ============================================================== -->
		<!-- End Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- Page wrapper  -->
		<!-- ============================================================== -->
		<div class="page-wrapper">
			<div class="row page-titles">
				<div class="col-md-5 align-self-center">
					<h3>@yield( 'title' )</h3>
				</div>
			</div>

			<!-- ============================================================== -->
			<!-- Container fluid  -->
			<!-- ============================================================== -->
			<div class="container-fluid">
				<!-- ============================================================== -->
				<!-- Start Page Content -->
				<!-- ============================================================== -->
				<section>
					@if ( Session::has( 'message' ) )
						<div class="alert alert-info">
							{{ Session::get( 'message' ) }}
			                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                	<span aria-hidden="true">×</span>
			                </button>
			            </div>
					@endif

					@yield( 'content' )

				</section>
				<!-- ============================================================== -->
				<!-- End Page Content -->
				<!-- ============================================================== -->
			</div>
			<!-- ============================================================== -->
			<!-- End Container fluid  -->
			<!-- ============================================================== -->
			<!-- ============================================================== -->
			<!-- footer -->
			<!-- ============================================================== -->
			<footer class="footer">
				© <?php echo( Date( 'Y' ) ); ?> Partnership Test
			</footer>
			<!-- ============================================================== -->
			<!-- End footer -->
			<!-- ============================================================== -->
		</div>
		<!-- ============================================================== -->
		<!-- End Page wrapper  -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Main wrapper  -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="/static/theme/adminpress/js/libs/jquery.min.js"></script>
	<script src="/static/theme/adminpress/js/libs/popper.min.js"></script>
	<script src="/static/theme/adminpress/js/libs/bootstrap.min.js"></script>
	<script src="/static/theme/adminpress/js/libs/jquery.slimscroll.js"></script>
	<script src="/static/theme/adminpress/js/sidebarmenu.js"></script>
	<script src="/static/theme/adminpress/js/custom.js"></script>
</body>
</html>