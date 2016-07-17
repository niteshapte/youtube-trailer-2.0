<html>
<title>YouTube trailer</title>
<head>


<script type="text/javascript" src="jscript/jquery.js"></script>

<link rel="stylesheet" type="text/css"
	href="jscript/fancybox/jquery.fancybox-1.2.6.css" media="screen" />
<script type="text/javascript"
	src="jscript/fancybox/jquery.fancybox-1.2.6.js"></script>


<script type="text/javascript">
        $(document).ready(function() {
            $("a.zoom").fancybox();

            $("a.zoom1").fancybox({
                'overlayOpacity' : 0.7,
                'overlayColor' : '#000'
            });

            $("a.zoom2").fancybox({
                'zoomSpeedIn' : 500,
                'zoomSpeedOut' : 500
            });
        });
    </script>
</head>
<body>

<a href="trailer.php?movie=Zombieland&year=2009&language=en"
	style="text-decoration: none" class="zoom1"><font color="#1E67A8"
	title="Click to watch trailer of 'Zombieland'">Zombieland</font></a>
</body>
</html>