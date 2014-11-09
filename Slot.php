<?php
/**
 * Created by Urbanway.
 * User: Flakerimi
 */

namespace Plugin\Youtube;

class Slot
{

    public static function Youtube()
    {

        return self::getYoutubeView('activities');
    }

    private static function getYoutubeView($view)
    {

        $apiKey = Model::getYoutubeApiKey();
        $channelId = Model::getYoutubeChannelId();
		$videoLimit = Model::getYoutubeVideoLimit();

        if ($apiKey) {
            $data['apiKey'] = $apiKey;
            $data['channelId'] = $channelId;
            $data['videoLimit'] = $videoLimit;
            return ipView('view/' . $view . '.php', $data)->render();
        } else {
            if (ipIsManagementState()) {
                return ipView('view/error.php')->render();
            }
            return false;
        }
    }

}