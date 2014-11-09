<?php
    $url="https://www.googleapis.com/youtube/v3/activities?part=snippet&channelId=".$channelId."&maxResults=".$videoLimit."&key=AIzaSyAuu8pP6n8uc0Hs8aKzZaLBhNdEqnjukkc";
    $json = file_get_contents($url,0,null,null);
    $json_output = json_decode($json);

 ?>
        <?php  foreach ( $json_output->items as $data ){ 


        	$id = explode("/", $data->snippet->thumbnails->medium->url);

        	//print_r($id[4]);

        	?>

<div class=" col_12 col_md_4 col_lg_3">
        <div class="news-article ">
        <a href="https://www.youtube.com/embed/<?php echo $id[4]?>?rel=0&wmode=transparent" class="youtube cboxElement">

            <div class="image"><img src="<?php echo "{$data->snippet->thumbnails->medium->url}";?>"></div>
                 <h4><?php echo substr($data->snippet->title,0, 200);?></h4>
             </a>
        </div>
    </div>

    <?php }
    ?>
