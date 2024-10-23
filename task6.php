<p style="text-align: center">Images</p>
<div style="width: 80%; margin: auto">
<?php

// папка с картинками
$images_dir = 'img/';
//$count = 1;

if(is_dir($images_dir)){
    if($h = opendir($images_dir)){
        while(($file = readdir($h)) !== false){
            if(preg_match("#\.(jpg|gif|png)$#i", $file)){
                echo "<img src='$images_dir$file' alt='img' width='24%' style='margin: 2px'>";
            }
        }
    }
}

?>
</div>