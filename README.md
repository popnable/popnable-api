# Popnable API #

[Popnable](https://popnable.com) is leading website providing [music charts](https://popnable.com/charts) from all over the world. Webiste contains data about 250K videos, 50K artists, 110 countries, 100K music charts. 

This API is a wrapper for the [Popnable API](https://github.com/popnable/popnable-api/wiki) and allows you to fetch music charts, songs, artists and many others from Popnable Repository.

This library is compatible with Laravel Framework.

## Requirements ##
* PHP 5.3.0 or greater
* CURL
* JSON

### Installation ###

**Composer.json:**

      "require": {
            "popnable/popnable-api": "dev-master"
      }
      
      
**Console command:**  

      composer require "popnable/popnable-api"
  
### Basic Example ###
    <?php
    require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
    
    $api_key = 'YOUR-API-KEY';
    
    $client = new \Popnable\Client($api_key);
    
    $popnable = new \Popnable\Commands\Songs($client);
    $response = $popnable->getSongs([
        'ids' => '2,6,12'
    ])

### Get Started ###
Popnable requires an account to access API Key and manage it. You could generate unlimited API keys in one account. Every request consumes amount of units that could be acquired by two ways:
- free units - gained through contributing content on Popnable
- paid units - purchased by you. It costs $10/1000 units. Please, contact Popnable for more details: support@popnable.com

### Api Keys ###
Popnable implements very basic shield against unnumerous requests. You have to own a key (md5). This key has been limited by amount of units and IP.

### Methods ###
    searchByKeyword()
    getTrends()
    getSongs()
    getSongsByTrend()
    getArtists()
    getArtistByTrend()
    getDailyChart()
    getWeeklyChart()
    getMonthlyChart()
    getYearEndChart()
    getArtistChart()
    getVideos()

### Community ###
**Visit:** https://popnable.com/forums

**Email:** support@popnable.com
