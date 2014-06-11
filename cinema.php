
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title>Cinema</title>
<link rel="apple-touch-icon" href="icons/icon_cinema.png"/>
<br>

<script src="js/cinema-script.js"></script>
<link href="css/cinema-style.css" rel="stylesheet" type="text/css" media="screen" />
<h1>Cinema</h1>
<?php
$loc = "vids/top10";
$no=0;
// Open a known directory, and proceed to read its contents
if (is_dir($loc)) {
$ite=new RecursiveDirectoryIterator($loc);


foreach (new RecursiveIteratorIterator($ite) as $filename=>$cur) {
#$no++;
    	    
		
       
        	
        	if($filename != "." && $filename != ".." && (strpos($filename,'.mp4') || strpos($filename,'.m4v')|| strpos($filename,'.mpg')|| strpos($filename,'.MPG')|| strpos($filename,'.wmv')|| strpos($filename,'.mov')|| strpos($filename,'.MOV')|| strpos($filename,'.mkv')|| strpos($filename,'.avi')|| strpos($filename,'.flv'))
   	   && !strpos($filename,'DS_Store')&& !strpos($filename,'svn') 
   && !strpos($filename,'AppleDouble')&& !strpos($filename,'._')) {
            echo "<script>vids_list_arr.push('".basename($filename)."')</script>";
        $no++;
        flush();
        	}
    }
        
}

?>

<body onLoad="showVid();">


<div align="center">
<input type="button" value="Prev" onClick="prevVid();">
<label id="name1"></label>
<input type="button" value="Next" align="right" onClick="nextVid();">
</div>
<div align="center">
<video id="vid_main" src="" align="center" controls>
browser cant play html5 vids</video>

</div>
