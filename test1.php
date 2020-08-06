<?php
$mpeg = new KTaglib_MPEG_File('AA (2).mp3');
echo $mpeg->getID3v1Tag()->getTitle();
?> 
