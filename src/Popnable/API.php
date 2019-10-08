<?php
namespace Popnable;
/**
 * Popnable API main class.
 *
 * @package Popnable
 * @author Popnable <support@popnable.com>
 */
abstract class API
{
    protected $client;

    /**
     * Sets the Popnable client
     *
     * @param Popnable\Client $client
     */
    public function __construct(\Popnable\Client $client)
    {
        $this->client = $client;
    }
}

