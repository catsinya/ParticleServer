<?php

namespace Particle;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\entity\Entity;
use pocketmine\event\player\PlayerJoinEvent;

class EventListener implements Listener{

	public function Join(PlayerJoinEvent $event){
		$player = $event->getPlayer();
	}

}