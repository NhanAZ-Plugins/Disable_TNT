<?php

declare(strict_types=1);

namespace pocketmine\entity\object{
	class PrimedTNT{}
}

namespace pocketmine\event{
	interface Listener{}
}

namespace pocketmine\plugin{
	class PluginBase{}
}

namespace pocketmine\event\entity{
	class EntityPreExplodeEvent{
		private bool $blockBreaking = true;

		public function __construct(private object $entity){}

		public function getEntity() : object{
			return $this->entity;
		}

		public function setBlockBreaking(bool $blockBreaking) : void{
			$this->blockBreaking = $blockBreaking;
		}

		public function isBlockBreaking() : bool{
			return $this->blockBreaking;
		}
	}
}

namespace{
	require dirname(__DIR__) . "/src/DisableTNT/Main.php";

	$plugin = new \DisableTNT\Main();
	$tntEvent = new \pocketmine\event\entity\EntityPreExplodeEvent(new \pocketmine\entity\object\PrimedTNT());
	$plugin->onEntityPreExplode($tntEvent);
	if($tntEvent->isBlockBreaking()){
		throw new \RuntimeException("TNT explosions must not break blocks.");
	}

	$otherEvent = new \pocketmine\event\entity\EntityPreExplodeEvent(new \stdClass());
	$plugin->onEntityPreExplode($otherEvent);
	if(!$otherEvent->isBlockBreaking()){
		throw new \RuntimeException("Other entity explosions must keep their block-breaking behavior.");
	}

	echo "TNT-only block protection checks passed.\n";
}
