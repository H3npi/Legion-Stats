<?php

namespace App\Controller;

/**
 * Blizzard API Controller
 *
 * @author Daniel Henze
 */
class BapiController extends \App\Controller {
    
    // config file
    private $config = null;
    
    // GuzzleHttp Client
    private $client;

    public function __construct() {
        !is_file(parent::$configFile)  ?: $this->config = require_once(parent::$configFile);
        // $this->debug($this->config);
        $this->client = new \GuzzleHttp\Client();
    }
    
    public function getCharacterInformations() {
        $res = $this->client->request('GET', 'https://eu.api.battle.net/wow/character/Destromath/Slato?locale=de_DE&apikey=77xg7zbfzn465vvxtrfq254wt6vw7c2c');
        echo "<pre>";
        echo $res->getStatusCode()."<br>";
        echo $res->getHeaderLine('content-type')."<br>";
        echo $res->getBody();
    }
    
    /**
     * @param string $url BAPI-Call URL naked
     * @return string prepared BAPI-Call
     *      
     */
    private function prepare($url) {
        return str_replace($search, $replace, $subject);
    }

}
