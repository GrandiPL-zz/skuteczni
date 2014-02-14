	<html>

		<head>
			<script src="//code.jquery.com/jquery-1.10.2.js"></script>
			<link rel="stylesheet" type="text/css" href="main.css"/>
		</head>
		<body>
			<div id="bg-top"> <!-- Top background -->
				<div id="container-top">
					<div id="logo">
						<img src="../images/logo.png" width="169" height="230" />
					</div>
					<div id="to">
						<div id="top-center-bg">
							<img id="top-center-photo" src="../images/top1-u593.png" width="643" height="286" />
						</div>
					</div>
					<div id="contact-logo">
						<img src="../images/kontakt.png" width="247" height="58" />
					</div>
					<div id="menu">
						<ul>
							<li><p>Skuteczni</p></li>
							<li><p>Marketing polityczny</p></li>
							<li><p>Projekty graficzne</p></li>
							<li><p>PR i marketing korporacyjny</p></li>
							<li><p>Media relations</p></li>
							<li><p>Szkolenia</p></li>
							<li><p>Dzia³alno¶æ spo³eczna</p></li>
							<li><p>Organizacja eventów</p></li>
							<li><p>Nasz zespó³</p></li>
							<li><p>Kontakt</p></li>
							<script>
								$('li').click(function() {
									if($(this).hasClass("hover")){
					  					$(this).removeClass("hover");
					  				}
					  				$(this).addClass("selected").siblings().removeClass("selected");
								});
								$('li').mouseover(function(){
									if($(this).hasClass("selected")){

									}else{
										$(this).addClass("hover");
									}
								});
								$('li').mouseout(function(){
									if($(this).hasClass("hover")){
										$(this).removeClass("hover");
									}
								});
							</script>
						</ul>
					</div>
					<div id="site">
						<?php 
							if(file_exists($_GET['s'].'.php'))
								include $_GET['s'].'.php';
							else
								include 'a.php';	
						?>
					</div>						
				</div>
			</div>
		</body>
		
	</html>