<html>
<body>
<?php
$number = $_GET['number'];

unset($artikelen[$number]);

$artikelen = array(
				1 => "https://contents.mediadecathlon.com/p1287990/k$54dedc009a70b7ce3b844acde450671c/Fiets+16+inch+4+6+jaar+500+Docto+Girl+1287990.jpg",
				2 => "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUSEhIVFRUXFhgVGBgYGBYWGBgXFRgXFxUXFRgYHSggGBolHRYXITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGyslHyUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0vLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tN//AABEIALABHwMBIgACEQEDEQH/xAAcAAACAgIDAAAAAAAAAAAAAAAABwUGAwQBAgj/xABLEAACAQMABwQFCAgEBAUFAAABAgMABBEFBhIhMUFRBxNhcSIygZGhQlJykqKxwdEUIzNDYoKywhVT0vA0RFThCBdjg+IWdJSks//EABkBAQEBAQEBAAAAAAAAAAAAAAABAgMFBP/EACkRAQEBAAEDAgQGAwAAAAAAAAABEQISITED8EFRobEEE3GRwdFhgfH/2gAMAwEAAhEDEQA/AHjRRRQFFFFAUUUUBRRRQFR105S4ibPoyAxHptjLxn3CQe0VI1HawQM0DlBl0xKni8RDqPaVx7avHynLwkaKw2dyskaSKcq6hwfBgCPvrNUUUUUUBRRRQFFFFAUUUUBRRRQFFFFAUUUUBRRRQFFFFAUUUUBRRRQFFFFAUUUUBRRRQFFFakt6OC8aDbrgmqDrX2m2lkxiLNNMNxjiwdk9JHPor5bz4UvNKdsV7J+wgihHVszN8cLn2GriafzTAc66NP0Un3/lXmG6110rL615NjogWMfYUVC3N7cOf1k87fSkkP3mr0mvUuiYmgi7rIYBnK5yNlGYsqeOyDjPhWwbibkU+ox/uryPFFtZPxrYR2Xeruv0WZfuNXGdx6tM83zl+qfxNde/m+cPqivNui9c9IW5BivJcD5LnvVPgRJnd5EU3Oz/ALQ0vT3EyiK5xkAH0JcDLGLJyGABJQ53bwTg4lmNSyrt383zh9UV1Ms/+Z9lfyqpdp2tF1YxxPbxoVkYo0jqXCNjKrsggZYbW8/NpcP2i6SbjdhfoRRD+2oU8++n+ePqigXFx85T5ofwIpDNrren1ryc+RC/0isR1kmb1ri5P/vSD7mqh+m8uekZ/lf/AFUf4nOOMSnyLD8DSBXSZPrTXX/5M/8ArokdjvW4uvZcS59xJq9mT9/xyQetbn2N+YFcrrLH8uOVPNQw+yTXn39f8m/vEPjIzfiK4abSy/sb2abwViX9iNna9mauT5G35vSNrpWGT1JFJ6Hcfcd9bteVBrvpFCQ9wxKnBWSKPII5HK5BqxaD7XLuIgOI5F5jehx4cR8KnTPgdV+L0TRVP1Q7QrW+wgbu5f8ALcgE/R5N7M+yrhWbMal0UUUVFFFFFAUUUUBRRRQFFFFAUUUUBRRWO4mCKWPAf7xQYr65CL4nh+dLPX3W4QkWcMyxTyLtNITjuozuGyTu71t+OgBPTMprnrStrA9w+Gb1Y0+e59VfojifAGvO15dPNK8sr7TvtOzHmx6eHIDkAK14Z8mLq/qpaSvs/pETYG02JFY4zvxvyTk8TVzj1d0dHgbEGf4mUk+81U9XNXRFaBogI7qSE/rTklS/pDyA3DcOVLbSlu6OyynMiuyuclssDx2jvNW8sTD+/wABszwigPsSlTrpo+OOWdo9yA7Cgbxk4B+Oaj9SNOvDcKjOTEwYFSSQCFLKRngcjHtqud6WLOeLEsfNiSfvqdTU4rJq3ovvVPi4Qfj94qw636ChjlCQoFCoA2CTlzk78npj31WtWNIvFPF+sZYlJkcA7sIpY7vEgD211utbLhjtMUYsSx2l6ncMqR5VepOkS2BrHFG6MrxsUdSGRhuIYbwQa5GspPrQr/KxHwINcHTsZ4xuPqn8avVE6ae2rukodM6PeOZQGI7qdBxSUAFXTPsdTy3jlSM0xo6S0uJLab142xnkyne",
				3 => "https://www.google.nl/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwjv-rX4munZAhWB2aQKHcE7BN0QjRwIBg&url=https%3A%2F%2Fwww.kijkmagazine.nl%2Ftech%2F116168%2F&psig=AOvVaw0wGv2jat4wXRZWjh9eIf-P&ust=1521027449104820",
				4 => "https://i.ytimg.com/vi/vzLeq2pRgIY/maxresdefault.jpg",
				5 => "https://d2z1a14d3feyr7.cloudfront.net/app/uploads/2017/10/21200234/gebouwx-560x358.jpg",
);

foreach($artikelen as $row => $value)
{
	echo "	
				<form method='GET'>
				<img src='$value' style='width:250px; height:250px;'>
				<input type='hidden' name='number' value='$row'>
				<input type='submit' name='verwijderen' value='verwijderen'>
</form>
";
}

?>
</body>
</html>
