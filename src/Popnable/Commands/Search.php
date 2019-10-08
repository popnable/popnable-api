<?php

namespace Popnable\Commands;

use Popnable\API;

/**
 * An instance of this class represents the Popnable Search set of APIs
 * @author Popnable <support@popnable.com>
 */
class Search extends API
{
    /**
     * Returns search data by keyword
     *
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function search(array $params = array())
    {
        return $this->client->send('search', $params);
    }

}
