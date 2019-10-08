<?php

namespace Popnable\Commands;

use Popnable\API;

/**
 * An instance of this class represents the Popnable Artists set of APIs
 * @author Popnable <support@popnable.com>
 */
class Artists extends API
{
    /**
     * Returns a list of artists
     *
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function getArtists(array $params = array())
    {
        return $this->client->send('getArtists', $params);
    }

    /**
     * Returns a list of artists by a trend
     *
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function getArtistByTrend(array $params = array())
    {
        return $this->client->send('getArtistByTrend', $params);
    }



}
