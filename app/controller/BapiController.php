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
    // api configurations
    private $region = 'eu';
    private $lang = 'en_GB';
    private $server = 'Destromath';
    private $characterName = 'Slato';

    public function __construct($input = null) {
        !is_file(parent::$configFile) ?: $this->config = require_once(parent::$configFile);
        // $this->debug($this->config);
        $this->client = new \GuzzleHttp\Client();

        if ($input !== null) {
            $this->region = $input['region'];
            $this->server = $input['server'];
            $this->characterName = $input['character'];
        }
    }

    public function getCharacterInformations() {
        return $this->client->request('GET', 'https://' . $this->region . '.api.battle.net/wow/character/'
                        . $this->server . '/' . $this->characterName .
                        '?locale=' . $this->lang .
                        '&apikey=' . $this->config['BAPIKEY'])->getBody();
    }
}
