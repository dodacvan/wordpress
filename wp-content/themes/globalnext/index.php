<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
	<title></title>
	<?php wp_head(); ?>
	<?php global $redux_demo;?>
	<title>Global Next demo page</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-3">
					<div class="logo">
						<!-- <?php bloginfo('stylesheet_directory'); ?>/img/logognth.png -->
						<img alt="Logo" class="c_logo" src="<?php echo''.$redux_demo['media-no-url']['url']; ?>" />
					</div>
				</div>
				<div class="col-xs-9">
					<div class="nav">
						<div>
							<div class="languages">
								<ul>
									<li class="active"><a>日本語</a></li>
									<li><a>英語</a></li>
									<li><a>タイ語</a></li>
									<li><a>ベトナム語</a></li>
									<li><a>インドネシア</a></li>
									<li><a>ラオス語</a></li>
								</ul>
							</div>
							<hr>
							<div class="menu">
								<div style="display: inline-block;">
									<ul>
										<li class="active"><a href="#slider">ホーム</a></li>
										<li><a href="#company_info">企業情報</a></li>
										<li><a href="#product">製品情報</a></li>
										<li><a href="#map">地図</a></li>
										<li><a href="#contact">お問い合わせ</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hr"></div>
	</header>
	<div class="container">
		<section id="slider">
			<div id="mainCarousel" class="carousel slide" data-ride="carousel">
				<div class="gradient-panel">
					<div class="left"></div>
					<div class="right"></div>
				</div>

			  	<!-- Wrapper for slides -->
			  <div class="carousel-inner">
			    <div class="item active" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/s1.jpg)">
			      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/s1.jpg">
			    </div>

			    <div class="item" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/s2.jpg)">
			      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/s2.jpg">
			    </div>

			    <div class="item" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/s3.jpg)">
			      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/s3.jpg">
			    </div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#mainCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#mainCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>

			  <!-- Indicators -->
			  <!-- <ol class="carousel-indicators">
			    <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#mainCarousel" data-slide-to="1"></li>
			    <li data-target="#mainCarousel" data-slide-to="2"></li>
			  </ol> -->
			</div>
			<div class="indicators">
				<ul>
					<li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#mainCarousel" data-slide-to="1"></li>
					<li data-target="#mainCarousel" data-slide-to="2"></li>
				</ul>
			</div>
		</section>
		<section id="company_info">
			<h1>企業情報</h1>
			<hr>
			<ul>
				<li><strong>企業名（現地法人名）AMC ASIA CO.,LTD.</strong></li>
				<li>住所： <strong>700/102 M.1 T.Bankao A.Phanthong　Chonburi 20160</strong></li>
				<li>代表者： <strong>佐々木賢</strong></li>
				<li>業種、取扱い製品等： <strong>金型製造業</strong></li>
				<li>資本金： <strong>35,000,000THB</strong></li>
				<li>主要取引先： <strong></strong></li>
				<li>関連企業（本社）： <strong>（株）ノトアロイ　（株）エイ・エム・シィ</strong></li>

			</ul>
			
			<div class="row" id="link">
				<div class="col-xs-12">
					<ul>
						<li><a href="http://www.notoalloy.co.jp" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/Link/1.png"></a></li>
						<li><a href="http://www.amcnoto.jp" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/Link/2.png"></a></li>
					</ul>
				</div>
			</div>
		</section>
		<section id="product">
			<h1>製品情報</h1>
			<hr>

			<div class="row">
				<div class="col-xs-4">
					<div class="p-img" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/製品/金型.jpg);">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/製品/金型.jpg" />
						<div class="note">
							<div>
								カタログのダウンロード
							</div>
						</div>
					</div>
					<h3><a href="<?php bloginfo('stylesheet_directory'); ?>/files/鍛造用金型.pdf" download>鍛造用金型の製造販売</a></h3>
				</div>
				<div class="col-xs-4">
					<div class="p-img" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/製品/設計.jpg);">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/製品/設計.jpg" />
						<div class="note">
							<div>
								カタログのダウンロード
							</div>
						</div>
					</div>
					<h3><a href="<?php bloginfo('stylesheet_directory'); ?>/files/鍛造金型の設計.pdf" download>鍛造金型の設計</a></h3>
				</div>
				<div class="col-xs-4">
					<div class="p-img" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/製品/a.jpg);">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/製品/a.jpg" />
						<div class="note">
							<div>
								カタログのダウンロード
							</div>
						</div>
					</div>
					<h3><a href="<?php bloginfo('stylesheet_directory'); ?>/files/治工具類の製造販売.pdf" download>治工具類の製造販売</a></h3>
				</div>
			</div>
		</section>
		<section id="map">
			<h1>地図</h1>
			<hr>
		</section>
	</div>
	<div class="container-fluid">
		<div class="row">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d36917.992091602355!2d101.02229876467534!3d13.441647010881125!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d3655b52fd159%3A0x1a5342b3b6ed6633!2sAMC+ASIA.CO.%2CLTD.!5e0!3m2!1sja!2s!4v1515988935611&z=5" height="450" frameborder="0" style="border:0;width: 100%"></iframe>
		</div>
	</div>
	<div class="container">
		<section id="contact">
			<h1>お問い合わせ</h1>
			<hr>
			<form>
				<div class="row">
					<div class="col-xs-6">
						<p>Name</p>
						<input type="text" name="name" class="form-control" />
						<hr>
					</div>
					<div class="col-xs-6">
						<p>Phone number</p>
						<input type="text" name="phone" class="form-control" />
						<hr>
					</div>
					<div class="col-xs-6">
						<p>E-mail</p>
						<input type="mail" name="email" class="form-control" />
						<hr>
					</div>
					<div class="col-xs-6">
						<p>Company name</p>
						<input type="mail" name="company" class="form-control" />
						<hr>
					</div>
					<div class="col-xs-12">
						<p>Comments</p>
						<textarea rows="4" class="form-control"></textarea>
						<hr>
						<div style="text-align: center;">
							<button type="submit" class="btn btn-default">Send</button>
						</div>
					</div>
				</div>
			</form>
		</section>
	</div>
	<footer>
		<div class="hr"></div>
		<div class="container">
			<h4>一般社団法人<span style="margin-left: 14px">石川県鉄工機電協会</span></h4>
			<h4>〒920-8203 石川県金沢市鞍月 2-3<span style="margin-left: 28px;">Tel:076-268-0121  Fax:076-268-3577</span></h4>
			<h4>Copyright © association tekkoukiden in ishikawa. All Right Reserved.</h4>
		</div>
	</footer>
</body>
</html>