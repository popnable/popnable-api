<?php

namespace Popnable\Commands;

use Popnable\API;

/**
 * An instance of this class represents the Popnable Trends set of APIs
 * @author Popnable <support@popnable.com>
 */
class Trends extends API
{
    /**
     * Returns a list of trends
     *
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function getTrends(array $params = array())
    {
        return $this->client->send('getTrends', $params);
    }

}
