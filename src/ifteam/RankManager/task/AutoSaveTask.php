<?php
//
namespace ifteam\RankManager\task;

use pocketmine\scheduler\PluginTask;
use pocketmine\plugin\Plugin;

class AutoSaveTask extends PluginTask {
	protected $owner;
	public function __construct(Plugin $owner) {
		parent::__construct ( $owner );
	}
	public function onRun(int $currentTick) {
		$this->getOwner ()->save ( true );
	}
}
?>