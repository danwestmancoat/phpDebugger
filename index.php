<!doctype html>
<html lang="en">
<head>

	<meta type="charset" content="UTF-8" />
	<title>PHP Debugger</title>

	<script type="text/javascript" src="scripts/shCore.js"></script>
	<script type="text/javascript" src="scripts/shBrushPhp.js"></script>

	<link type="text/css" rel="stylesheet" href="styles/shCoreDefault.css"/>

	<script type="text/javascript">SyntaxHighlighter.all();</script>

	<style type="text/css">

		.php.string{
			color: #777 !important;
		}

		.php.square-open + .php.string{
			color: #00f !important;
		}

		#dump .line:hover{
			background: #eee !important;
		}

		#dump .spaces + .plain{
			color: #f00 !important;
		}

	</style>

</head>

<body>

	<pre class="brush: php;" id="dump">

		<?php var_dump( (object) $_SERVER  ); ?>

	</pre>

</body>

</html>
