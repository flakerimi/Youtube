<?php
/**
 * Created by PhpStorm.
 * User: Marijus
 * Date: 5/27/14
 * Time: 10:03 AM
 */
namespace Plugin\Youtube;

class Model{

    public static function getYoutubeApiKey(){

        $apiKey = ipGetOption('Youtube.apiKey');

        return $apiKey;
    }
   public static function getYoutubeChannelId(){

        $channelId = ipGetOption('Youtube.channelId');

        return $channelId;
    }

   public static function getYoutubeVideoLimit(){

        $videoLimit = ipGetOption('Youtube.videoLimit');

        return $videoLimit;
    }

}
