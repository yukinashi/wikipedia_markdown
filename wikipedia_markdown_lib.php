<?php
function wikipedia_markdown($text){
if(preg_match("/(^#REDIRECT|^#転送)/", $)){
$text = preg_replace("/\\n/","new_line_replace",$text);
$text = preg_replace("#(\\s|^.*?\'\'\'|\'\'\'|\[http.+?\]|\{[^\{\}]+?=[^\{\}]+?\}|\[|\]|\{|\}|\||==.+|<.+?>.+?<.+?>|<.+?>|-shor|-Hans|\*)#","",$text);
$right = array("lang-en","lang-ru","lang-fr","lang-ar","lang-de","lang-el","lang-es","lang-it",'lang-ko','lang-zh',"IPA-fr","IPA-en","new_line_replace");
$correct = array("英：","露：","仏：","剌：","独：",'希：','西：','伊：',"韓：","中：","国際音声-仏：","国際音声-英：","\n");
$text = str_replace($right,$correct,$text);
}
return($text);
}
