<?php
require_once 'rss_php.php';    

    $rss = new rss_php;
    $rss->load('http://www.espnamerica.com/feeds/leagues?league=MLB'); // <----------- INSERT YOUR RSS FEED HERE //
    $items = $rss->getItems();

    $html = '';
    foreach($items as $index => $item) {
        $html .= '<p><a href="'.$item['link'].'" title="'.$item['title'].'"><strong>'.$item['title'].'</strong></a><br /><br />
                    '.$item['description'].'

                    </p>';
    }
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
<!--
html, body {margin:0; padding:0}
.news
{
	font-size:12px;
	line-height:12px;
	height:95px;
	width:160px;
	overflow:hidden;
	font-family: Arial, Georgia, "Bitstream Charter", serif;
}
-->
</style>


<meta http-equiv="refresh" content="600" />

</head>

<div class="news">
<?php
echo $html;
?>
</div>
</body>
</html>