<?php

declare(strict_types=1);

namespace MIN\AnimationHelper;

use pocketmine\network\mcpe\protocol\OnScreenTextureAnimationPacket;
use pocketmine\player\Player;

final class AnimationHelper
{
    public static function setAnimation(Player $player, int $id): void
    {
        $packet = new OnScreenTextureAnimationPacket();
        $packet->effectId = $id;
        $player->getNetworkSession()->sendDataPacket($packet);
    }
}