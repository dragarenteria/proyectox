<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ventanilla de Emprendiminetos Verdes</title>
	
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>-->
<script src="js/jquery.min.js"  type="text/javascript"></script>
</head>
<body>
	<header >
		<div class="navbar-fixed " style="height: 150px;" id="navbar">
	    	<nav class="white" style="height: 150px;" id="nav">
				<div class="nav-wrapper">

					<a href="#!" class="brand-logo center" id="logo_a"><img id="logo" src="img/logo1.png" style="width: 140px;height: 140px;margin-top: 5px"></a>

					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="small material-icons black-text" style="margin-top: 46px;">menu</i></a>

					<ul id="ul1" class="left hide-on-med-and-down uli" style="margin-top: 30px">
						
						<li><a class="sub_line"  href="index.php?modulo=emprendimientos/inicio">Inicio</a></li>
						<li class="black-text" style="height: 50px;width: 2px;background-color: #b3a0a0;margin-top: 16px;"></li>
						<li><a class="sub_line"  href="index.php?modulo=emprendimientos/q_somos">¿Quienes Somos?</a></li>
						<li class="black-text" style="height: 50px;width: 2px;background-color: #b3a0a0;margin-top: 16px;"></li>
						<li><a class="sub_line"  href="index.php?modulo=emprendimientos/m_verdes">Mercados Verdes</a></li>
						<li class="black-text" style="height: 50px;width: 2px;background-color: #b3a0a0;margin-top: 16px;"></li>
						<li><a class="sub_line"  href="index.php?modulo=emprendimientos/Registro">Registro</a></li>
					</ul>
					<ul id="ul2" class="right hide-on-med-and-down uli" style="margin-top: 30px">
						<li><a class="sub_line"  href="index.php?modulo=emprendimientos/noticias">Noticias</a></li>
						<li class="black-text" style="height: 50px;width: 2px;background-color: #b3a0a0;margin-top: 16px;"></li>
						<li><a class="sub_line"  href="#">Normatividad</a></li>
						<li class="black-text" style="height: 50px;width: 2px;background-color: #b3a0a0;margin-top: 16px;"></li>
						<li><a class="sub_line"  href="#">Documentación</a></li>
					</ul>			     
			    </div>
		  	</nav>   
  		</div>

<ul class="side-nav" id="mobile-demo">
	<li><a class="sub_line"  href="#">Inicio</a></li>
	<li><a class="sub_line"  href="#">¿Quienes Somos?</a></li>
	<li><a class="sub_line"  href="#">Mercados Verdes</a></li>
	<li><a class="sub_line"  href="#">Registro</a></li>
	<li><a class="sub_line"  href="#">Noticias</a></li>
	<li><a class="sub_line"  href="#">Normatividad</a></li>
	<li><a class="sub_line"  href="#">Documentación</a></li>    
</ul>

	
</header>

		<div id="contenedor" style="min-height: 701px;">
      asdfasdfasdgadfgsdfgsdfgs
      <?php 
                   $mod = @$_GET['modulo'];
                   $archivo = $mod.'/index.php';

                    if (file_exists($archivo) and !empty($_GET['modulo'])) {
                       include_once($archivo);
                    }else
                    {
                    include_once("emprendimientos/inicio/index.php");
                   }
    ?>    

    </div>
  		 


<footer class="page-footer" style="background-color: #ffab40">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
</footer>




<script src="js/materialize.min.js"  type="text/javascript"></script>

<script type="text/javascript">
	 $(document).ready(function(){
	 	
	    $(".button-collapse").sideNav();
	    $('select').material_select();
	    $('#slider').slider({height:460},{transition:0.2});//revisar velocidad de este silder
	    $('#slider1').slider({height:450},{transition:1000});
	    $('#slider2').slider({height:400});

	 
	$(window).scroll(function(){
	
	var flag = false;
	var scroll;
	scroll = $(window).scrollTop();

	if(scroll > 100){
		

	$("#logo").css({"margin-left": "10px", "width": "60px","height":"60px","margin-top":"5px"});
	$("#navbar").css({"margin-top": "0px","height":"70px"});
	$("#nav").css({"margin-top": "0px","height":"70px"});
	$(".sub_line").css({"padding-top":"0px"});
	$(".uli").css({"margin-top":"0px"});
	$("#logo_a").removeClass("center").addClass("left");
	$("#ul1").removeClass("left");
	$("#ul2").removeClass("right");
	$(".uli").css({"margin-left":"80px"},{"padding-bottom":"0px"});



	}else{
		
			$("#logo").css({"margin-top": "5px", "width": "140px","height":"140px"});
			$("#navbar").css({"margin-top": "0px","height":"150px"});
			$("#nav").css({"margin-top": "0px","height":"150px"});
			$(".sub_line").css({"padding-top":"10px"});
			$(".uli").css({"margin-top":"30px"});
			$("#logo_a").removeClass("left").addClass("center");
			$("#ul1").addClass("left");
			$("#ul2").addClass("right");
			$(".uli").css({"margin-left":"0px"});

			
	}
	});

});
	   	
</script>
</body>
</html>
