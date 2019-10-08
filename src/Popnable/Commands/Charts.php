<?php

namespace Popnable\Commands;

use Popnable\API;

/**
 * An instance of this class represents the Popnable Charts set of APIs
 * @author Popnable <support@popnable.com>
 */
class Charts extends API
{
    /**
     * Returns a list of Artist Chart
     *
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function getArtistChart(array $params = array())
    {
        return $this->client->send('getArtistChart', $params);
    }

    /**
     * Returns a list of Yearly Chart
     *
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function getYearEndChart(array $params = array())
    {
        return $this->client->send('getYearEndChart', $params);
    }

    /**
     * Returns a list of Monthly Chart
     *
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function getMonthlyChart(array $params = array())
    {
        return $this->client->send('getMonthlyChart', $params);
    }

    /**
     * Returns a list of Weekly Chart
     *
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function getWeeklyChart(array $params = array())
    {
        return $this->client->send('getWeeklyChart', $params);
    }

    /**
     * Returns a list of Daily Chart
     *
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function getDailyChart(array $params = array())
    {
        return $this->client->send('getDailyChart', $params);
    }


}
