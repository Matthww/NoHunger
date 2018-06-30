<?php

namespace Matthww\NoHunger;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerExhaustEvent;
use pocketmine\plugin\PluginBase;

class NoHunger extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function Hunger(PlayerExhaustEvent $exhaustEvent) {
        $exhaustEvent->setCancelled(true);
    }
}
