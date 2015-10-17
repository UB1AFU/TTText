<?php

namespace TTText;

use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\math\Vector3;

class Main extends PluginBase implements Listener{


     public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("TTText enabled!");
     }

     public function onDisable(){
        $this->getLogger()->info("TTText disabled!");
     }
 
     public function onPlayerJoin(PlayerJoinEvent $event){
        $player = $event->getPlayer();
        $level = $player->getLevel();
        $vector = new Vector3(109.5, 15, 126.50);
        $level->addParticle(new FloatingTextParticle($vector->add(0.5, 0.0, -0.5), TakeTwo . "\n" . Parkour)); 
     }
}
