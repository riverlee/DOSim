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
			.changelog{
				padding-left: 3%;
				border: .1em solid #3875D7; padding: 0 10px; margin: 1.5em 0 0 1em;
				width: 47%;
			}
			.changelog h3 {border-bottom: .05em solid #3875D7; margin: 0 -10px 0 -10px; padding: .6em 10px .55em 10px;  background: #e9effa; }
			/*]]>*/
		</style>
		
		<link rel="stylesheet" type="text/css"href="css/R.css">
	</head>

	<body>
		<h1><strong>DOSim package</strong></h1>

		<div class="content">
			<table border="0" width="100%">
				<tr>
					<td aligh="left">
						<div align="left" style='font-family:"Nimbus Mono L","Monospace","DejaVu Sans Mono","Luxi Mono"'>
							Emali:<a href="mailto:riverlee2008@gmail.com">riverlee2008@gmail.com</a><br>
							MSN:&nbsp;&nbsp;riverlee2008@live.cn<br>
							Tel:&nbsp;&nbsp;+86-13936514493<br>
							ADD:&nbsp;&nbsp;Harbin Medical University<br>
						</div>
					</td>
				
					<td align="right">
						<img src="me.jpg" width="100",height="120"/>
						
					</td>
				</tr>
			</table>	

			<hr />
			<h3>Available versions</h3>
			<ul>
			<li>Version 1.0, created on 2010/04/05---------------------<a href="index-1.0.php">go</a> </li>
			
			<div class="changelog">
				<h3>Change Log:</h3>
				
				Initial version of DOSim,Using Disease Ontology version 31 (timestamp:2009/01/16) and define the functions for computation of similarities between DO terms and gene products, etc. 
				
			</div>
			<Br/>
			<li>Version 1.1, created on 2010/06/21---------------------<a href="index-1.1.php">go</a> </li>
			<div class="changelog">
				<h3>Change Log:</h3>
				
				1). Update the Disease Ontology to version 926 (timestamp:2010/04/06);<br/>
				2). Update the vignette file;<br/>
				3). Modify the function calcTermSim, getTermSim,getGSim, and getGeneSim, etc.
				
			</div>
			<Br/>
			<li>Version 1.2, created on 2010/07/15---------------------<a href="index-1.2.php">go</a> </li>
			<div class="changelog">
				<h3>Change Log:</h3>
				
				1). Modify the function DOEnrichment by adding multiple test correlation for raw pvalue using different methods (e.g., bofferroni, fdr etc.) <br/>
				2). Update the vignette file and help document;<br/>
				
				
			</div>
			<Br/>
			<li>Version 2.0, created on 2010/08/05---------------------<a href="index-2.0.php">go</a> </li>
			<div class="changelog">
				<h3>Change Log:</h3>
				
				1). Add module detecting (detectModule) and multilayer annotation for gene sets(annoModule). And add some functions applied on the result process of gene modules (viewModule,saveModule,saveAnnoModule).<br/>
				2). Modify the function DOEnrichment by adding  depth control for DO terms, and fix the enrichment analysis method to hypergeometric test and FDR for multiple testing correlations. <br/>
				3). Remove some similarity measures for DO terms and some methods on the computation of genes similarity. In this version, we use 10 similarity measures for DO terms and 5 methods on the computation of genes similarity.<br/>
				
				4). Re-write the vignette file.<br/>
				
				
			</div>
			
			</ul>
			
			<br/><br/><br/><br/><br/><br/><br/>
		<hr />
		<center><a href="http://bioinfo.hrbmu.edu.cn/" target="_blank"> The Colleage of Bioinformatics Science and Technology </a><br>

  Copyright(C) 2009 The Harbin Mecidical University. All Rights Reserved</center>
		</div>
	</body>
</html>
