<?php

namespace Particle;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;

class Main extends PluginBase implements Listener{

	public static $instance = null;

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents(new EventListener($this),$this);
		self::$instance = $this;
	}

	public static function getInstance(){
		return self::$instance;
	}
	
	public function onDisable(){

	}

}