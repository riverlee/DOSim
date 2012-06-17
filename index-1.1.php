<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>R: DOSim package</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<style type="text/css">
			/*<![CDATA[*/
			body {
				background-color: #fff;
				color: #000;
				font-size: 0.9em;
				font-family: sans-serif,helvetica;
				margin: 0;
				padding: 0;
			}
			:link {
				color: #c00;
			}
			:visited {
				color: #c00;
			}
			a:hover {
				color: #f50;
			}
			h1 {
				text-align: center;
				margin: 0;
				padding: 0.6em 2em 0.4em;
				background-color: #900;
				color: #fff;
				font-weight: normal;
				font-size: 1.75em;
				border-bottom: 2px solid #000;
			}
			h1 strong {
				font-weight: bold;
			}
			h2 {
				font-size: 1.1em;
				font-weight: bold;
			}
			
			.content {
				padding: 1em 5em;
			}
			.content-columns {
				/* Setting relative positioning allows for 
				absolute positioning for sub-classes */
				position: relative;
				padding-top: 1em;
			 }
			.content-column-left {
				/* Value for IE/Win; will be overwritten for other browsers */
				width: 47%;
				padding-right: 3%;
				float: left;
				padding-bottom: 2em;
			}
			.content-column-left hr {
				display: none;
			}
			.content-column-right {
				/* Values for IE/Win; will be overwritten for other browsers */
				width: 47%;
				padding-left: 3%;
				float: left;
				padding-bottom: 2em;
			}
			.content-columns>.content-column-left, .content-columns>.content-column-right {
				/* Non-IE/Win */
			}
			img {
				border: 2px solid #fff;
				padding: 2px;
				margin: 2px;
			}
			a:hover img {
				border: 2px solid #f50;
			}
			/*]]>*/
		</style>
		
		<link rel="stylesheet" type="text/css"href="css/R.css">
	</head>

	<body>
		<h1><strong>DOSim package</strong></h1>

		<div class="content">
			<?php require "top.php"; ?>	

			<hr />
			<h3>Description</h3>

<p>
<!--
This package implements several functions useful for computing
similarities between DO terms and gene products based on their DO annotation.
Moreover it allows for computing a DO enrichment analysis and provide basic
disease ontology annotation.
-->
<?php require "desc.php" ; ?>
</p>
<table border="0" width="100%">
<tr>
<td width="60%">

<h3>Summary</h3>

<p>

</p>
<table  border=1 width="100%">
<tr>
 <td align="left">
Package: </td><td align="left"> DOSim</td>

</tr>
<tr>
 <td align="left">
Depends: </td><td align="left">RBGL, graph, stats</td>
</tr>
<tr>
 <td align="left">
Version: </td><td align="left"> 1.1</td>
</tr>

<tr>
 <td align="left">
Date: </td><td align="left"> 2010-06-21</td>
</tr>
<tr>
 <td align="left">
License: </td><td align="left"> GPL (&gt;= 2)</td>
</tr>

<tr>
 <td align="left">
LazyLoad: </td><td align="left"> yes</td>
</tr>

</table>


<h3>Author(s)</h3>

<p>
Name: Jiang Li
</p>
<p>
Email:<a href="mailto:riverlee2008@gmail.com">riverlee2008@gmail.com</a>

</p>

<p>
</p>


<h3>Package Downloads</h3>
<table  border=1 width="100%">
<tr>
 <td align="left">
Package source: </td><td align="left"> <a href="packages/DOSim_1.1.tar.gz">DOSim_1.1.tar.gz</a></td>
</tr>
<tr>
 <td align="left">
Windows 32-bit binary: </td><td align="left"> <a href="packages/DOSim_1.1.zip">DOSim_1.1.zip</a></td>
</tr>
<tr>
 <td align="left">
MacOS X binary: </td><td align="left"> <a href="packages/DOSim_1.1.tgz">DOSim_1.1.tgz</a></td>
</tr>
</table>

<h3>Documentation</h3>
<ul>
<li>Reference manual: <a href="manual/DOSim-manual_1.1.pdf">DOSim-manual</a></li>
<li>Vignettes: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="vignette/DOSim_1.1.pdf">DOSim-usage</a></li>

</ul>
<h3>Other Versions</h3>
<a href="versions.php">list all versions</a>
<p align="center"><img src="figure2.jpeg" alt="module" width=500 /><br/>
	 		<strong>Application for gene module detction</strong>
	 </p>
</td>
<td valign="top" align="left">
	 <?php require "main_right.php" ;?>
</td>
</tr>
</tr>
</table>



			
		<br><br><br>

		<center>
		<?php
			echo "Visted:";
			require("count/count.php");
		?>
		</center>
		<hr />
		<center><a href="http://bioinfo.hrbmu.edu.cn/" target="_blank"> The Colleage of Bioinformatics Science and Technology </a><br>

  Copyright(C) 2009 The Harbin Mecidical University. All Rights Reserved</center>
		</div>
	</body>
</html>
