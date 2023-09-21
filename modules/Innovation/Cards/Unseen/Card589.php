<?php

namespace Innovation\Cards\Unseen;

use Innovation\Cards\AbstractCard;
use Innovation\Enums\Colors;

class Card589 extends AbstractCard
{

  // Green Hydrogen:
  //   - Score all non-top green cards on your board. Draw and tuck an [11] for each card scored.

  public function initialExecution()
  {
    $topGreenCard = self::getTopCardOfColor(Colors::GREEN);
    $numScored = 0;
    foreach (self::getStack(Colors::GREEN) as $card) {
      if ($card['id'] != $topGreenCard['id']) {
        self::score($card);
        $numScored++;
      }
    }
    for ($i = 0; $i < $numScored; $i++) {
      self::drawAndTuck(11);
    }
  }

}