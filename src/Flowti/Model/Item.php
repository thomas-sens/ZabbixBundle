<?php

namespace Flowti\ZabbixBundle\Model;

use Flowti\ZabbixBundle\Service\FlowtiZabbixClient;

class Item
{
    private $zabbixClient;

    public function __construct(FlowtiZabbixClient $zabbixClient)
    {
        $this->zabbixClient = $zabbixClient;
    }

    public function get(string $params) {
        if ($this->zabbixClient->isAutenticated()) {
            return $this->zabbixClient->callEndpoint('item.get', $params);
        }
    }
    
}