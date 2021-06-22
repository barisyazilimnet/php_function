	function OzelKarakterTemizle($veri)
{
$veri =str_replace("`","",$veri);
$veri =str_replace("=","",$veri);
$veri =str_replace("&","",$veri);
$veri =str_replace("%","",$veri);
$veri =str_replace("!","",$veri);
$veri =str_replace("#","",$veri);
$veri =str_replace("<","",$veri);
$veri =str_replace(">","",$veri);
$veri =str_replace("*","",$veri);
$veri =str_replace("And","",$veri);
$veri =str_replace("'","",$veri);
$veri =str_replace("chr(34)","",$veri);
$veri =str_replace("chr(39)","",$veri);
return $veri;
}