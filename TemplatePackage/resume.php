<?php include 'contact_variables.php'; ?>
<?php include 'class_project.php'; ?>
<?php include 'class_job.php'; ?>

 <!-- EXPORT BUTTON -->
<style>
 .input-button {
	background-color: #5468ff;
	color: white;
	cursor:pointer;
	border: 1px solid transparent;
	padding: .375rem .75rem;
	border-radius: .25rem;
	font-size:13px;
	transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
	font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
 }

 .input-button:focus {
	box-shadow: none;
	outline:none;
 }

 form {
	font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
	color:white !important;
	font-size:13px;
	line-height:18px;
	justify-content:center;
	display:flex;
 }

 a {
	color:white !important;
	font-size:13px;
	line-height:18px;
 }

 form a:link {
	text-decoration:none;
 }
</style>

<form name="export-button" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
  <input type="submit" name="submit_docs" value="Download Resume - PC" class="input-button" /> $nbsp;
  <a href="resume.php" download="<?php echo $contactName; ?> Resume.doc" class="input-button">Download Resume - Mac</a>
</form>
<br><br>

<!-- END EXPORT BUTTON -->

<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List href="ResDoc_files/filelist.xml">
<link rel=Edit-Time-Data href="ResDoc_files/editdata.mso">
<title><?php echo $contactName; ?> | Resume</title>

<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
 @font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536859905 -1073732485 9 0 511 0;}
 @font-face
	{font-family:"Raleway Light";
	panose-1:2 11 4 3 3 1 1 6 0 3;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-1610611969 1342185563 0 0 151 0;}
 @font-face
	{font-family:"Times New Roman \(Headings CS\)";
	panose-1:0 0 0 0 0 0 0 0 0 0;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:auto;
	mso-font-signature:0 0 0 0 0 0;}
 @font-face
	{font-family:"Source Sans Pro";
	panose-1:2 11 5 3 3 4 3 2 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:1610613495 33554433 0 0 415 0;}
 @font-face
	{font-family:"Times New Roman \(Body CS\)";
	panose-1:0 0 0 0 0 0 0 0 0 0;
	mso-font-alt:"Times New Roman";
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:auto;
	mso-font-signature:0 0 0 0 0 0;}
 @font-face
	{font-family:"Yu Gothic Light";
	panose-1:2 11 3 0 0 0 0 0 0 0;
	mso-font-charset:128;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 717749759 22 0 131231 0;}
 @font-face
	{font-family:"\@Yu Gothic Light";
	mso-font-charset:128;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 717749759 22 0 131231 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;}
 p.MsoTitle, li.MsoTitle, div.MsoTitle
	{mso-style-priority:10;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Title Char";
	mso-style-next:Normal;
	margin:0in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:widow-orphan;
	font-size:28.0pt;
	font-family:"Calibri Light",sans-serif;
	mso-ascii-font-family:"Calibri Light";
	mso-ascii-theme-font:major-latin;
	mso-fareast-font-family:"Yu Gothic Light";
	mso-fareast-theme-font:major-fareast;
	mso-hansi-font-family:"Calibri Light";
	mso-hansi-theme-font:major-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:major-bidi;
	letter-spacing:-.5pt;
	mso-font-kerning:14.0pt;}
 p.MsoTitleCxSpFirst, li.MsoTitleCxSpFirst, div.MsoTitleCxSpFirst
	{mso-style-priority:10;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Title Char";
	mso-style-next:Normal;
	mso-style-type:export-only;
	margin:0in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:widow-orphan;
	font-size:28.0pt;
	font-family:"Calibri Light",sans-serif;
	mso-ascii-font-family:"Calibri Light";
	mso-ascii-theme-font:major-latin;
	mso-fareast-font-family:"Yu Gothic Light";
	mso-fareast-theme-font:major-fareast;
	mso-hansi-font-family:"Calibri Light";
	mso-hansi-theme-font:major-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:major-bidi;
	letter-spacing:-.5pt;
	mso-font-kerning:14.0pt;}
 p.MsoTitleCxSpMiddle, li.MsoTitleCxSpMiddle, div.MsoTitleCxSpMiddle
	{mso-style-priority:10;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Title Char";
	mso-style-next:Normal;
	mso-style-type:export-only;
	margin:0in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:widow-orphan;
	font-size:28.0pt;
	font-family:"Calibri Light",sans-serif;
	mso-ascii-font-family:"Calibri Light";
	mso-ascii-theme-font:major-latin;
	mso-fareast-font-family:"Yu Gothic Light";
	mso-fareast-theme-font:major-fareast;
	mso-hansi-font-family:"Calibri Light";
	mso-hansi-theme-font:major-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:major-bidi;
	letter-spacing:-.5pt;
	mso-font-kerning:14.0pt;}
 p.MsoTitleCxSpLast, li.MsoTitleCxSpLast, div.MsoTitleCxSpLast
	{mso-style-priority:10;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Title Char";
	mso-style-next:Normal;
	mso-style-type:export-only;
	margin:0in;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	mso-pagination:widow-orphan;
	font-size:28.0pt;
	font-family:"Calibri Light",sans-serif;
	mso-ascii-font-family:"Calibri Light";
	mso-ascii-theme-font:major-latin;
	mso-fareast-font-family:"Yu Gothic Light";
	mso-fareast-theme-font:major-fareast;
	mso-hansi-font-family:"Calibri Light";
	mso-hansi-theme-font:major-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:major-bidi;
	letter-spacing:-.5pt;
	mso-font-kerning:14.0pt;}
 a:link, span.MsoHyperlink
	{mso-style-priority:99;
	color:#6B9F25;
	mso-themecolor:hyperlink;
	text-decoration:underline;
	text-underline:single;}
 a:visited, span.MsoHyperlinkFollowed
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:#8C8C8C;
	mso-themecolor:followedhyperlink;
	text-decoration:underline;
	text-underline:single;}
 p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:9.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;}
 p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	mso-style-link:"No Spacing Char";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;}
 span.MsoSubtleEmphasis
	{mso-style-priority:19;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	color:#404040;
	mso-themecolor:text1;
	mso-themetint:191;
	font-style:italic;}
 span.MsoIntenseEmphasis
	{mso-style-priority:21;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	color:#E32D91;
	mso-themecolor:accent1;
	font-style:italic;}
 span.TitleChar
	{mso-style-name:"Title Char";
	mso-style-priority:10;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Title;
	mso-ansi-font-size:28.0pt;
	mso-bidi-font-size:28.0pt;
	font-family:"Calibri Light",sans-serif;
	mso-ascii-font-family:"Calibri Light";
	mso-ascii-theme-font:major-latin;
	mso-fareast-font-family:"Yu Gothic Light";
	mso-fareast-theme-font:major-fareast;
	mso-hansi-font-family:"Calibri Light";
	mso-hansi-theme-font:major-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:major-bidi;
	letter-spacing:-.5pt;
	mso-font-kerning:14.0pt;}
 p.Emphasis-Small, li.Emphasis-Small, div.Emphasis-Small
	{mso-style-name:"Emphasis - Small";
	mso-style-update:auto;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"No Spacing";
	mso-style-link:"Emphasis - Small Char";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:9.0pt;
	font-family:"Source Sans Pro",sans-serif;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;
	color:#6663E3;
	font-style:italic;
	mso-bidi-font-style:normal;}
 span.NoSpacingChar
	{mso-style-name:"No Spacing Char";
	mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"No Spacing";}
 span.Emphasis-SmallChar
	{mso-style-name:"Emphasis - Small Char";
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-parent:"No Spacing Char";
	mso-style-link:"Emphasis - Small";
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:"Source Sans Pro",sans-serif;
	mso-ascii-font-family:"Source Sans Pro";
	mso-hansi-font-family:"Source Sans Pro";
	color:#6663E3;
	font-style:italic;
	mso-bidi-font-style:normal;}
 span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Balloon Text";
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:"Times New Roman",serif;
	mso-ascii-font-family:"Times New Roman";
	mso-hansi-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
 .MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;}
 .MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:8.0pt;
	line-height:107%;}
 @page WordSection1
	{size:8.5in 11.0in;
	margin:.5in .5in .5in .5in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-paper-source:0;}
 div.WordSection1
	{page:WordSection1;max-width:816px;margin-left:auto;margin-right:auto;}
 @page WordSection2
	{size:8.5in 11.0in;
	margin:.5in .5in .5in .5in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-columns:1 even .5in;
	mso-paper-source:0;}
 div.WordSection2
	{page:WordSection2;}
 /* List Definitions */
 @list l0
	{mso-list-id:1089887273;
	mso-list-type:hybrid;
	mso-list-template-ids:-1528393688 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
 @list l0:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
 @list l0:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
 @list l0:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
 @list l0:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
 @list l0:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
 @list l0:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
 @list l0:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
 @list l0:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
 @list l0:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
 @list l1
	{mso-list-id:2145468961;
	mso-list-type:hybrid;
	mso-list-template-ids:1929252276 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
 @list l1:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
 @list l1:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
 @list l1:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
 @list l1:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
 @list l1:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
 @list l1:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
 @list l1:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
 @list l1:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
 @list l1:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
 ol
	{margin-bottom:0in;}
 ul
	{margin-bottom:0in;}
-->
</style>

<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin-top:0in;
	mso-para-margin-right:0in;
	mso-para-margin-bottom:8.0pt;
	mso-para-margin-left:0in;
	line-height:107%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:Arial;
	mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>


<body lang=EN-US link="#6B9F25" vlink="#8C8C8C" style='tab-interval:.5in'>

<!-- DO NOT TOUCH THE NEXT 11 LINES OF PHP UNLESS YOU KNOW WHAT YOU ARE DOING - REQUIRED FOR DOWNLOAD! -->
<?php
  if(isset($_POST['submit_docs'])){
          header("Content-Type: application/vnd.msword");
          header("Expires: 0");//no-cache
          header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
          header("content-disposition: attachment;filename=Resume.doc");
  	}         
          echo "<html>";
          echo "$doc_body";
          echo "</html>";      
?> 
<!-- Now you may touch. -->

<div class=WordSection1>

	<!-- Resume Name Heading -->
		<p class=MsoTitle align=center style='text-align:center'>
            <span style='font-size:32.0pt;font-family:"Raleway Light",sans-serif;mso-bidi-font-family:"Times New Roman \(Headings CS\)";color:black;mso-themecolor:text1;text-transform:uppercase;letter-spacing:10.0pt'>
			    <?php echo $contactName; ?>
		    </span>
        </p>

        <p class=MsoNoSpacing align=center style='text-align:center'><span
		style='font-size:9.0pt;mso-bidi-font-size:10.0pt;font-family:"Source Sans Pro",sans-serif;
		mso-bidi-font-family:"Times New Roman \(Body CS\)";letter-spacing:1.0pt;
		mso-no-proof:yes'><!--[if gte vml 1]><v:shapetype id="_x0000_t75" coordsize="21600,21600"
		o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe" filled="f"
		stroked="f">
		<v:stroke joinstyle="miter"/>
		<v:formulas>
		<v:f eqn="if lineDrawn pixelLineWidth 0"/>
		<v:f eqn="sum @0 1 0"/>
		<v:f eqn="sum 0 0 @1"/>
		<v:f eqn="prod @2 1 2"/>
		<v:f eqn="prod @3 21600 pixelWidth"/>
		<v:f eqn="prod @3 21600 pixelHeight"/>
		<v:f eqn="sum @0 0 1"/>
		<v:f eqn="prod @6 1 2"/>
		<v:f eqn="prod @7 21600 pixelWidth"/>
		<v:f eqn="sum @8 21600 0"/>
		<v:f eqn="prod @7 21600 pixelHeight"/>
		<v:f eqn="sum @10 21600 0"/>
		</v:formulas>
		<v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
		<o:lock v:ext="edit" aspectratio="t"/>
		</v:shapetype><![endif]--><![if !vml]><![endif]></span>


    <!-- Contact Bar -->
		<p class=MsoNoSpacing align=center style='text-align:center;font-size:9.0pt;mso-bidi-font-size:10.0pt; font-family:"Source Sans Pro",sans-serif;mso-bidi-font-family:"Times New Roman \(Body CS\)"'>
            <span style='position:relative;top:-1.5pt;mso-text-raise:1.5pt'>
                <?php echo $contactLocation; ?> &#124; 
            </span>

            <span>
                <span style='position:relative;top:-1.5pt; mso-text-raise:1.5pt' class='Phone-no'>
                    <?php echo $contactPhone; ?> &#124; 
                </span>

                <span style='position:relative;top:-1.5pt; mso-text-raise:1.5pt'>
                    <?php echo $contactEmail; ?> &#124; 
                </span>

                <span style='position:relative;top:-1.5pt; mso-text-raise:1.5pt'>
                    <?php echo $contactWebsite; ?> &#124; 
                </span>

                <span style='position:relative;top:-1.5pt; mso-text-raise:1.5pt'>
                    <?php echo $contactGithubHandle; ?>
                </span>
            </span>
        </p>

		<!-- Line Break -->
		<p class=MsoNoSpacing align=center style='text-align:center'><span><o:p>&nbsp;</o:p></span></p>

		<!-- Line Break -->
		<p class=MsoNoSpacing align=center style='text-align:center'><span><o:p>&nbsp;</o:p></span></p>

	<!-- Recent Work & Projects -->
		<div style='mso-element:para-border-div;border:none;border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .75pt;padding:0in 0in 1.0pt 0in'>
			<p class=MsoNoSpacing align=center style='text-align:center;border:none;mso-border-bottom-alt:solid windowtext .75pt;padding:0in;mso-padding-alt:0in 0in 1.0pt 0in'>
                <b style='mso-bidi-font-weight:normal'>
                    <span style='font-family:"Source Sans Pro",sans-serif;mso-bidi-font-family:"Times New Roman \(Body CS\)";letter-spacing:4.0pt'>
				        RECENT WORK &amp; PROJECTS
			            <o:p></o:p>
                    </span>
                </b>
            </p>
		</div>

		<!-- Line Break -->
		<p class=MsoNoSpacing><span><o:p>&nbsp;</o:p></span></p>

		<!-- Recent Work and Projects Loop -->
			<!-- Project -->

				<?php
					foreach ($projects as $project) {
						$project->displayProjectWord();
					};
				?>

		<!-- -->

	<!-- Experience -->
		<div style='mso-element:para-border-div;border:none;border-bottom:solid windowtext 1.0pt;mso-border-bottom-alt:solid windowtext .75pt;padding:0in 0in 1.0pt 0in'>
			<p class=MsoNoSpacing align=center style='text-align:center;border:none;mso-border-bottom-alt:solid windowtext .75pt;padding:0in;mso-padding-alt:0in 0in 1.0pt 0in'>
                <b style='mso-bidi-font-weight:normal'>
                    <span style='font-family:"Source Sans Pro",sans-serif; mso-bidi-font-family:"Times New Roman \(Body CS\)";letter-spacing:4.0pt'>
				        EXPERIENCE
			            <o:p></o:p>
                    </span>
                </b>
            </p>
		</div>

		<!-- Line Break -->
		<p class=MsoNoSpacing><span><o:p>&nbsp;</o:p></span></p>

		<!-- Experience Block Loop -->
			<?php
			foreach ($jobs as $key => $job) {
				echo '<p class=MsoNoSpacing style="line-height:115%;tab-stops:right 7.5in">
						<strong>
							<span style="font-size:9.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi">'
								. $job[0] . ' &ndash; ' . $job[1] . 
							'<span style="mso-tab-count:1">
							</span>
							</span>
						</strong>
						<strong>
							<span style="font-size:9.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;font-weight:normal;mso-bidi-font-weight:bold">'
								. $job[2] . ' &ndash; ' . $job[3] . 
							'</span>
						</strong>
						<span style="font-size:9.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif">
							<o:p></o:p>
						</span>
					 </p>';

				if ($job[4] == true) {
					echo '<p class=MsoNoSpacing><span style="font-size:9.0pt;font-family:Source Sans Pro,sans-serif">' . $job[4] . '</p>';
				}

				foreach ($job[6] as $key => $attr) {
					echo '<p class=MsoNoSpacing style="margin-left:.5in;text-indent:-.25in;line-height: 115%;mso-list:l1 level1 lfo2">
							<![if !supportLists]>
								<span style="font-size:9.0pt; mso-bidi-font-size:11.0pt;line-height:115%;font-family:Symbol;mso-fareast-font-family: Symbol;mso-bidi-font-family:Symbol">
									<span style="mso-list:Ignore">
										&bull;<span style="font:7.0pt Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
									</span>
								</span>
							<![endif]>
							<span style="font-size:9.0pt;mso-bidi-font-size: 11.0pt;line-height:115%;font-family:Source Sans Pro,sans-serif">'
							 . $attr . 
								'<o:p></o:p>
							</span>
						</p>';
				}

				if ($job[5] == true) {
					echo '<p class=MsoNoSpacing style="margin-left:.5in;line-height: 115%;"><span style="font-size:9.0pt;font-family:Source Sans Pro,sans-serif"><span class=Emphasis-SmallChar>&nbsp;(' . $job[5] . ')</span>
                    </span>
                    <span style="font-family:Source Sans Pro,sans-serif">
                        <o:p></o:p>
                    </span>
            		</p>';
				}

				echo '<p class=MsoNoSpacing><span><o:p>&nbsp;</o:p></span></p>';
				
			}
			?>
		<!-- -->

	<!-- Section Heading  Education -->
		<div style='mso-element:para-border-div;border:none;border-bottom:solid windowtext 1.0pt; mso-border-bottom-alt:solid windowtext .75pt;padding:0in 0in 1.0pt 0in'>
			<p class=MsoNoSpacing align=center style='text-align:center;border:none; mso-border-bottom-alt:solid windowtext .75pt;padding:0in;mso-padding-alt:0in 0in 1.0pt 0in'>
                <b style='mso-bidi-font-weight:normal'>
                    <span style='font-family:"Source Sans Pro",sans-serif; mso-bidi-font-family:"Times New Roman \(Body CS\)";letter-spacing:4.0pt'>
                        EDUCATION
                        <o:p></o:p>
                    </span>
                </b>
            </p>
		</div>

		<!-- Line Break -->
		<p class=MsoNoSpacing><span><o:p>&nbsp;</o:p></span></p>

		<!-- Education Block -->
			<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height: 115%'>
                <strong>
                    <span style='font-size:9.0pt;line-height:115%;font-family:"Source Sans Pro",sans-serif; mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi'>
				        State University of New York at Oswego &ndash;
			            <o:p></o:p>
                    </span>
                </strong>
                <span style='font-size:9.0pt; line-height:115%;font-family:"Source Sans Pro",sans-serif'>
				    Major in Economics, Minor in Business Administration
				    <o:p></o:p>
                </span>
            </p>

		<!-- Line Break -->
		<p class=MsoNoSpacing><span><o:p>&nbsp;</o:p></span></p>

		<!-- Education Block -->
		    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height: 115%'>
                <strong>
                    <span style='font-size:9.0pt;line-height:115%;font-family:"Source Sans Pro",sans-serif; mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi'>
			            Coursera &ndash; 
		            </span>
                </strong>
                <span style='font-size:9.0pt;line-height:115%;font-family:"Source Sans Pro",sans-serif'>
			        Front End Web Development with React Specialization
                </span>
            </p>

		<!-- Education Block -->
		    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height: 115%'>
                <strong>
                    <span style='font-size:9.0pt;line-height:115%;font-family:"Source Sans Pro",sans-serif; mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi'>
			            Coursera &ndash; 
		            </span>
                </strong>
                <span style='font-size:9.0pt;line-height:115%;font-family:"Source Sans Pro",sans-serif'>
			        Front End JavaScript Frameworks: Angular
                </span>
            </p>

		<!-- Education Block -->
		    <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height: 115%'>
                <strong>
                    <span style='font-size:9.0pt;line-height:115%;font-family:"Source Sans Pro",sans-serif; mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi'>
			            Coursera &ndash; 
		            </span>
                </strong>
                <span style='font-size:9.0pt;line-height:115%;font-family:"Source Sans Pro",sans-serif'>
			        Building Web Applications in PHP
                </span>
            </p>
    </span>

    <strong><span style='font-size:9.0pt;line-height:115%;font-family:"Source Sans Pro",sans-serif;
	mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:
	Arial;mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:
	EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:auto;
	mso-break-type:section-break'>
	</span></strong>

<div class=WordSection2>
    <p class=MsoNoSpacing style='line-height:115%;tab-stops:13.5pt'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:9.0pt;line-height:
    115%;font-family:"Source Sans Pro",sans-serif'><o:p>&nbsp;</o:p></span></b></p>
</div>


</body>
</html>
