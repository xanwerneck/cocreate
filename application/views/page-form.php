<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=$this->config->item('assets');?>css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?=$this->config->item('assets');?>css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?=$this->config->item('assets');?>css/bootstrap-theme.css" />
	<script src = "<?=$this->config->item('assets');?>js/jquery-2.0.3.min.js" type="text/javascript"></script>
	<script src = "<?=$this->config->item('assets');?>js/bootstrap.min.js" type="text/javascript"></script>
	<script src = "<?=$this->config->item('assets');?>js/waypoint/waypoints.js" type="text/javascript"></script>
	<script src = "<?=$this->config->item('assets');?>js/waypoint/shortcuts/sticky-elements/waypoints-sticky.js"></script>
	<script src = "<?=$this->config->item('assets');?>js/smooth_scroll.js"></script>
	<title>Beeziness - Foco no que importa</title>

	<script type="text/javascript">

	function validateEmail(){
		if($("#email").val().length == 0){
			alert("Por favor, preencha o email.");
			return false;
		}	

		return true;
	}

	</script>

</head>
<body>

	<!-- logo --> 
	<section id="cta" class="top">
		<div class="container">
			<div class="row">
				<div id="citacao" class="col-xs-12 col-sm-12 col-md-12" align="center">
						<cite>"O <strong>Beeziness</strong> é o primeiro passo para qualquer relacionamento profissional."
						</cite>
				</div>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div align="center">
						<!-- Colocar logo da tela splash -->
						<img src="<?=$this->config->item('assets');?>images/beez_logo.png" width="240" height="278" alt="Beeziness - Foco no que importa" title="Beeziness - Foco no que importa">
					</div>
					<div align="center">
						<div class ="focus"> 
							<h4><em> Foco no que importa </em></h4>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">

					<!-- botões da apple & google -->
					<div id="stores" align="center">
						<form id="form-email" name="form-email" method="post" action="<?=$this->config->item('basic_url');?>Launch/completeSubscription">
							<input type="hidden" name="code" value="<?=$code?>"/>
							<p>Digite seu email: <input type="email" id="email" name="email" max-length=100 /></p>
							<br />
							<input align="center" type="submit" onClick="return validateEmail()" value="Cadastrar" /> 
						</form>
					</div>	
				</div>
			</div>
		</div>
	</section>
	
<!-- menu -->
	<header class="menu">
		<form NAME="form1">
			<!-- <input style: position:fixed;> -->
			<nav id="menuprincipal" class="container" role="navigation">
				<div class="container">
					<div class="navbar-header">
						 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#beeziness-navbar-collapse-1">
	        				 <span class="sr-only">Toggle navigation</span>
	       					 <span class="icon-bar"></span>
	       					 <span class="icon-bar"></span>
	       					 <span class="icon-bar"></span>
    					  </button>
						<a href="#cta"><img src="<?=$this->config->item('assets');?>images/Beeziness_horizontal_logo.png" width="107" height="34"/></a>
					</div>
					<div class="collapse navbar-collapse" id="beeziness-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
					    	<li><a href="#practical">Praticidade</a></li>
							<li><a href="#objective">Objetividade</a></li>
							<li><a href="#stylish">Estilo</a></li>
							<!--<li><a href="#"><img src="images/apple_logo.png" width="23" height="26"/></a></li>-->
							<!--<li><a href="https://play.google.com/store/apps/details?id=app.com.beeziness&hl=pt_BR"><img src="images/gplay.png" width="26" height="26"/></a> 
							</li> -->
					    </ul>
					</div>
				</div>
		    </nav>
	</form>
	</header>  

	<section class="bee_practical">
		<!-- Praticidade-->
		<a name="practical"></a>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4">
					<h2>Praticidade</h2>
					<p> 
						O Beeziness localiza pessoas próximas naturalmente e registra esses encontros. Você poderá descobrir pessoas interessantes por perto e trocar contatos quando quiser. 
					</p>
						<!-- <a href="Praticidade/praticidade.html">
							<button>
								Veja o recurso 
							</button>
						</a> -->
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8" align="right">
					<img src="<?=$this->config->item('assets');?>images/network.png" style="max-width:100%;height:auto;">
				</div>
			</div>
		</div>
		
	</section>

	<section class="bee_objective">
		<!-- Objetividade -->
		<a name="objective"></a>
		<div class="container">
			<div class="row">
				<div align="left" class="col-xs-12 col-sm-12 col-md-8">
					<img src="<?=$this->config->item('assets');?>images/card_rain.png" style="max-width:100%;height:auto;">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<h2>Objetividade</h2>
					<p> 
						Fez muito networking em algum evento? Nunca mais se preocupe em organizar e atualizar seus contatos, será um prazer cuidar disso pra você focar no que realmente importa. 
					</p>
						<!--<a href="Objetividade/objetivedade.html">
							<button>
								Veja o recurso 
							</button>
						</a>-->
				</div>
			</div>
		</div>
	</section>

	<section class="bee_stylish">
		<!-- Estilo --> 
		<a name="stylish"></a>
		<div class="container">
			<div class="row">
				
				<div class="col-xs-12 col-sm-12 col-md-4">
					<h2>Estilo</h2>
					<p> 
						Esqueça sobre softwares, gráficas, preços. No Beeziness você pode criar e recriar o seu cartão do seu jeito. Escolha a cor, fonte, importe sua logo - deixe-o com a cara da sua empresa.
					</p>
						<!--<a href="Estilo/estilo.html">
							<button>
								Veja o recurso 
							</button>-->
						</a>
				</div>
				<div id="image=style" align="right" class="col-xs-12 col-sm-12 col-md-8">
					<img src="<?=$this->config->item('assets');?>images/Fabulous_paul.png" style="max-width:100%;height:auto;">
				</div>
			</div>
		</div>
	</section>

	<!-- Footer --> 
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-1">
					<img src="<?=$this->config->item('assets');?>images/logo_white.png" width="80" height="93">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-11 vision">
					<p>
						<strong>Agora que chegou até aqui, que tal conhecer nossa visão? </strong> <br />
						Queremos ser reconhecidos como uma empresa brasileira que muda paradigmas globais, conectando pessoas para gerar valor sem desperdiçar recursos naturais.
					</p>
					<!--<ul class="navigation_bar">
				    	<li><a href="#">Nossa História</a>
						<li><a href="#">Ajuda</a>
						<li><a href="#">Termos de uso</a>
				    </ul>-->
				</div>
				<!--<div class="col-md-3">
					<img class="social_media_icon" src="images/Icon_face.png" width="35" height="35"/>
					<img class="social_media_icon" src="images/Icon_twitter.png" width="35" height="35"/>
					<img class="social_media_icon" src="images/Icon_email.png" onmouseout="this.src='images/Icon_email.png'" onmouseover="this.src='images/Icon_email_hover.png'" width="35" height="35"/>
					<br />
					<img class="social_media_icon" src="images/Icon_picasa.png" width="35" height="35"/>
					<img class="social_media_icon" src="images/Icon_instagram.png" width="35" height="35"/>
					<img class="social_media_icon" src="images/Icon_g+.png" width="35" height="35"/>
					<img class="social_media_icon" src="images/Icon_skype.png" width="35" height="35"/> -->
				</div>
			</div>
	</footer>

<script type="text/javascript">
$(document).ready(function() {
	$('.menu').waypoint('sticky');
});
</script>
</body>
</html>