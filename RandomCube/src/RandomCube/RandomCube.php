<?php

namespace RandomCube;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\block\Block;
use pocketmine\item\Item;
use poketmine\event\Event;
use pocketmine\math\Vector3;
use pocketmine\Player;


class RandomCube extends PluginBase implements Listener {
	public function onLoad() {
				$this->getLogger()->info("§3✿ RandomCube on Loading ✿");
      }
      public function onEnable() {
		 $this->getLogger()->info("§3✿ RandomCube on Enable ✿");
		 $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
   }

public function playerInteract(PlayerInteractEvent $event) {
  if($event->getBlock ()->getId () == 41) {
    switch (mt_rand) {
      case 'pack1':
        $event->getPlayer()->getInventory()->addItem(new Item(272, 0, 1));
        $event->sendMessage ("§3[ 서버 ] 낡은 큐브에서 '돌 검' 아이템을 얻었습니다 !");
        $this->getServer()->broadcastMessage($sender->getName(). "님이 낡은 큐브에서 '돌 검'을(를) 얻었습니다!");
        break;

        case 'pack2':
        $event->getPlayer()->getInventory()->addItem(new Item(268, 0, 1));
        $event->sendMessage ("§3[ 서버 ] 낡은 큐브에서 '나무 검' 아이템을 얻었습니다 !");
        $this->getServer()->broadcastMessage($sender->getName(). "님이 낡은 큐브에서 '나무 검'을(를) 얻었습니다!");
          break;

          case 'pack3':
          $event->getPlayer()->getInventory()->addItem(new Item(274, 0, 1));
          $event->sendMessage ("§3[ 서버 ] 낡은 큐브에서 '돌 곡괭이' 아이템을 얻었습니다 !");
          $this->getServer()->broadcastMessage($sender->getName(). "님이 낡은 큐브에서 '돌 곡괭이'을(를) 얻었습니다!");
            break;

            case 'pack4':
            $event->getPlayer()->getInventory()->addItem(new Item(298, 0, 1));
            $event->sendMessage ("§3[ 서버 ] 낡은 큐브에서 '가죽 모자' 아이템을 얻었습니다 !");
            $this->getServer()->broadcastMessage($sender->getName(). "님이 낡은 큐브에서 '가죽 모자'을(를) 얻었습니다!");
              break;

              case 'pack5':
              $event->getPlayer()->getInventory()->addItem(new Item(299, 0, 1));
              $event->sendMessage ("§3[ 서버 ] 낡은 큐브에서 '가죽 튜닉' 아이템을 얻었습니다 !");
              $this->getServer()->broadcastMessage($sender->getName(). "님이 낡은 큐브에서 '가죽 튜닉'을(를) 얻었습니다!");
                break;

             default: 'pack6':
                $event->getPlayer()->getInventory()->addItem(new Item(339, 0, 1));
                $event->sendMessage ("§3[ 서버 ] 낡은 큐브에서 '일반 확성기' 아이템을 얻었습니다 !");
                $this->getServer()->broadcastMessage($sender->getName(). "님이 낡은 큐브에서 '일반 확성기'을(를) 얻었습니다!");
    }
  }
 }
}
