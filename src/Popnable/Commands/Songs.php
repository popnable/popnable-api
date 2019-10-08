<?php

namespace Popnable\Commands;

use Popnable\API;

/**
 * An instance of this class represents the Popnable Songs set of APIs
 * @author Popnable <support@popnable.com>
 */
class Songs extends API
{
    /**
     * Returns a list of songs
     *
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function getSongs(array $params = array())
    {
        return $this->client->send('getSongs', $params);
    }

    /**
     * Returns a list of songs by a trend
     *
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function getSongsByTrend(array $params = array())
    {
        return $this->client->send('getSongsByTrend', $params);
    }

    /**
     * Returns a video by YT Code
     *
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function getVideos(array $params = array())
    {
        return $this->client->send('getVideos', $params);
    }

}
