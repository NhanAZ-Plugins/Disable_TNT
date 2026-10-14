<?php

declare(strict_types=1);

namespace DisableTNT;

use pocketmine\entity\object\PrimedTNT;
use pocketmine\event\entity\EntityPreExplodeEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

final class Main extends PluginBase implements Listener{
	protected function onEnable() : void{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onEntityPreExplode(EntityPreExplodeEvent $event) : void{
		if($event->getEntity() instanceof PrimedTNT){
			$event->setBlockBreaking(false);
		}
	}
}
