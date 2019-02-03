<html>
<head>
<script>
function show(artikel)
{
	document.write("Ontvanger: joe@doe.com");
	document.write("<br>");
	document.write("Onderwerp: De prijs van:" + artikel);
	document.write("<br>");
	document.write("Naam artikel: " + artikel);
	document.write("<br>");
	document.write("Prijs: 50 euro");
}
</script>
<body>

Artikelen
<img style="width:50px; height:50px;" onclick="show('Bal');" src="https://www.dinkeywinkey.nl/wp-content/uploads/2016/06/meubelknop-kinderkamer-voetbal-voorkant.jpg">
<img style="width:50px; height:50px;" onclick="show('Tennisbal');" src="https://www.hetschoenmakertje.nl/7336-tonytheme_large_default/tennisbal-om-te-verbronzen-vertinnen-verzilveren-of-te-vergulden.jpg">
<img style="width:50px; height:50px;" onclick="show('Honkbal');" src="https://upload.wikimedia.org/wikipedia/commons/3/30/Pujols3.jpg">
</script>
</body>
</html>
