<?php

// file_pathが存在したらprefixとsuffixをつけてechoする
function loadIfExist($prefix, $file_path, $suffix)
{
	if(file_exists($file_path)) echo $prefix.$file_path.$suffix;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title>テンプレート</title>
	
	<meta name="keywords" content="" lang="ja" xml:lang="ja"> 
	<meta name="description" content="" lang="ja" xml:lang="ja">
	<meta name="copyright" content=""> 
	
	<!-- ---- STYLE ---- -->
	<link rel="stylesheet" type="text/css" href="lib/style/html5reset-1.6.1.css">
	<link rel="stylesheet" type="text/css" href="lib/style/reset.css">
	<link rel="stylesheet" type="text/css" href="lib/style/general.css">
	<link rel="stylesheet" type="text/css" href="style/common.css">
	<?php loadIfExist('<link rel="stylesheet" type="text/css" href="','style/'.$_GET["page"].'.css','">'); ?>
	
	<!-- ---- SCRIPT ---- -->
	<!--[if IE]>
	<script src="lib/script/html5.js"></script>
	<![endif]-->
	<!--[if lte IE 6]>
	<script type="text/javascript" src="design_tmpl/js/lib/DD_belatedPNG.js"></script>
	<script type="text/javascript">DD_belatedPNG.fix('.png');</script>
	<![endif]--> 
	<script src="lib/script/jquery-1.5.min.js"></script>
	<script src="lib/script/jquery.easing.1.3.js"></script>
	<!-- <script src="lib/script/smartRollover.js"></script> -->
	<script src="script/common.js"></script>
	<?php loadIfExist('<script src="','script/'.$_GET["page"].'.js','"></script>'; ?>
</head>

<body id="<?php echo $_GET["page"]; ?>">

<?php include("pages/".$_GET["page"].".php") ?>

</body>
</html>
