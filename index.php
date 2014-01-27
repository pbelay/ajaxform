<!DOCTYPE HTML>
<html
<head>
	<title>#NuncaMaisLumes</title>
	<link rel="stylesheet" href="estilos.css" />
</head>
<body>
<div class="header">
	 #NuncaMaisLumes
</div>
	<div id="barra-lateral"> 
	
	
	<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '#Sosfragasdoeume',
  interval: 30000,
  title: 'Sos Fragas do Eume',
  subject: '#NuncaMaisLumes en Galicia',
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#939799',
      color: '#fff5ff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#6aa2d4'
    }
  },
  features: {
    scrollbar: false,
    loop: true,
    live: true,
    behavior: 'default'
  }
}).render().start();
</script>
	
	</div>
	<form method="post" class="contacto">
	<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>

 	    <fieldset>
			<div><label>Nome:</label><input type="text" class="nombre" name="nome" /></div>
			<div><label>O teu Email: *</label><input type="text" class="email" name="email" /></div>
			<div> <label>Mail Destino:</label><input type="text" class="telefono" name="email" value="secretaria.presidente@xunta.es" DISABLED /></div>
			<div><label>Mensaxe:</label><textarea rows="15" class="mensaje" name="mensaje" >Quero amosar a miña enorme preocupación polo incendio que está a afectar ao Parque Natural das Fragas do Eume, un espazo único en Galicia e en Europa que está sendo gravemente danado.			
As únicas explicacións para o desastres como este son:
 -O desartellamento  dos dispositivos de brigadas forestais 
 -A elimininación das medidas preventivas
 -A ausencia de políticas de valoración do monte.

A presenza e actuación dos incendiarios no monte galego non é un dato novo, como quere facer ver o presidente Feijóo para exculpar a súa inacción e irresponsabillidade. O novo dato son os comportamentos e decisións dun goberno ausente que para xustificar o seu non facer só se dedica a realizar declaracións incendiarias e demagóxicas.
			</textarea></div>
 	        <div class="ultimo">
				<img src="ajax.gif" class="ajaxgif hide" />
				<div class="msg"></div>
				<button class="boton_envio">Enviar Mensaxe</button>
			</div>
 	    </fieldset>
 	 </form>


<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="funciones.js"></script>


        <div class="footer">
		<?
            include 'lecturaEnvios.php'; 
			?>
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://mocidadenacionalistagalega.org/nuncamaislumes/" data-via="mngalega" data-lang="es" data-hashtags="sosfragasdoeume">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
       


	   </div>
<?
include("contador.php");
?>

</body>
</html>