<div id="root" class="clearfix">
	<?php print render($page['page_top']); ?>
	<header id="header" class="clearfix">
		<?php print render($page['header']); ?>
		<?php
		/*
		<?php if ($logo): ?>
			<div id="logo">
				*Logo
				<a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>"/>
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				</a>
			</div>
		<?php endif; ?>
		*/
		?>
		
		<?php if ($site_name): ?>
			<div id="sitename">
				<h1>
					<a href="<?php print $base_path; ?>" title="<?php print t('Sári Zoltán'); ?>">
						<?php print $site_name;?>
					</a>
				</h1>
			</div>	
		<?php endif; ?>
			
		<?php if ($site_slogan): ?>
			<div id="slogan">
				<?php print $site_slogan;?>
			</div>
		<?php endif;?>
		
		<nav id="navigation">
			<div id="main-menu">
				<?php print theme(
					'links__system_main_menu', 
					array(
						'links' => $main_menu, 
						'attributes' => array(
							'id' => array('links', 'menu', 'inline', 'clearfix')
							)
						//,'heading' => t('Main menu')
						)); 
				?>	
			</div>
		</nav>
	</header>
	<!-- 
	<div id="slideshow">
		<?php // print render($page['slideshow']); ?>
	</div>
	-->

	
	<!-- <section></section> -->
	<!-- <aside></aside> -->

	<article id="article"> 
		<?php
		/*
		<div id="breadcrumb">
			*Breadcumb
			<?php if ($breadcrumb): ?>
				<div id="breadcrumb"><?php print $breadcrumb; ?></div>
			<?php endif; ?>
		</div>
		*/ 
		?>
		
		<?php if ($logo): ?>
			<div id="face">
				<img src="<?php print $logo; ?>" alt="<?php print t('Myface'); ?>" />
			</div>
		<?php endif; ?>
		<div id="title">
			<?php print render($title_prefix); ?>
			<?php if ($title): ?>
				<h1 id="page-title">
					<?php //print $title; ?>
				</h1>
			<?php endif; ?>
			<?php print render($title_suffix); ?>
		</div>			
		<?php if ($tabs): ?>
			<div id="tabs">
				<?php print render($tabs); ?>
			</div>
		<?php endif; ?>
		
		<div id="messages">
			<?php print $messages; ?>
		</div>
		<div id="content">
			<?php print render($page['content']); ?> 
		</div>
		
		<aside id="sidebar">
			<?php print render($page['sidebar']); ?> 
		</aside>
					
	</article>


	
	<footer id="footer">
		<div id="social">
			<?php print render($page['social']); ?>	
		</div>
	
		<?php print render($page['footer']); ?>	
	</footer>
	
	<?php print render($page['page_bottom']); ?>
	
</div>

