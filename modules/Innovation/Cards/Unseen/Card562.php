<?php

namespace Innovation\Cards\Unseen;

use Innovation\Cards\Card;

class Card562 extends Card
{

  // Shangri-La:
  //   - Draw and tuck an [8]. If it has a [INDUSTRY], score it. Otherwise, draw and meld an [8].
  //     If you do, repeat this effect.

  public function initialExecution()
  {
    while (true) {
      $card = self::drawAndTuck(8);
      if ($this->game->hasRessource($card, $this->game::INDUSTRY)) {
        self::score($card);
        break;
      } else {
        if (self::drawAndMeld(8)['age'] != 8) {
          break;
        }
      }
    }
  }

}