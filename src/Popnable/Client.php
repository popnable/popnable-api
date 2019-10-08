<?php

namespace Popnable;

use Popnable\Response;

/**
 * Client class which sends the Popnable API calls
 *
 * @author Popnable <support@popnable.com>
 */
class Client
{
    /**
     * @var string Popnable API url
     */
    private $api_url;

    /**
     * @var string Popnable API Key
     */
    private $api_key;

    public function __construct($api_key)
    {
        $this->api_key = $api_key;

        $this->api_url = 'https://popnable.com/api/v2';
    }

    /**
     * Send the api command to Popnable
     *
     * @param string $command
     * @param array $params
     *
     * @return \Popnable\Response
     */
    public function send($command, $params = array())
    {

        $params['key'] = $this->api_key;
        $url = "{$this->api_url}/{$command}?" . http_build_query($params);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_USERAGENT, "Popnable SDK - API KEY: {$this->api_key}");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            print_r(curl_error($ch));
        }

        curl_close($ch);

        return new Response($response);
    }

}
