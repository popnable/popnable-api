<?php

namespace Popnable;
/**
 * This class handles a Popnable API response
 *
 * @author Popnable <support@popnable.com>
 */
class Response
{
    /**
     * @var string
     */
    private $raw;

    public function __construct($response)
    {
        $this->raw = $response;
    }

    /**
     * Returns the response status (text representation)
     *
     * @return string NULL
     */
    public function getStatus()
    {

        $array = $this->decode();
        if (is_array($array) && array_key_exists('error', $array)) {
            return $array['error'];
        }

        return null;
    }

    /**
     * Returns the response status (HTTP code)
     *
     * @return string NULL
     */
    public function getStatusCode()
    {

        $array = $this->decode();
        if (is_array($array) && array_key_exists('response_code', $array)) {
            return $array['response_code'];
        }

        return null;
    }

    /**
     * Returns errors (represented as Popnable CODE) contained in the response
     *
     * @return string NULL
     */
    public function getErrors()
    {
        $array = $this->decode();
        if (is_array($array) && array_key_exists('error_number', $array)) {
            return $array['error_number'];
        }

        return null;
    }

    /**
     * Returns PHP Array of the result
     *
     * @return array NULL
     */
    public function getArray()
    {
        $array = $this->decode();
        if (is_array($array) && array_key_exists('result', $array)) {
            return $array['result'];
        }

        return null;
    }

    /**
     * Returns Units.
     *
     * @return array NULL
     */
    public function getUnits()
    {
        $array = $this->decode();
        if (is_array($array) && array_key_exists('units', $array)) {
            return $array['units'];
        }

        return null;
    }

    /**
     * Returns Decoded JSON Response.
     *
     * @return array NULL
     */
    private function decode()
    {
        return json_decode($this->raw, true);
    }

}
