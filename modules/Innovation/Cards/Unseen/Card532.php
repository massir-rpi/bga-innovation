<?php

namespace Innovation\Cards\Unseen;

use Innovation\Cards\AbstractCard;

class Card532 extends AbstractCard
{

  // Museum:
  //   - If you have a [2] in your score pile, draw a [6].
  //   - If you have a [1] in your score pile, draw a [7]. Otherwise, draw a [5].

  public function initialExecution()
  {
    $cardCounts = self::countCardsKeyedByValue('score');
    if (self::getEffectNumber() === 1) {
      if ($cardCounts[2] > 0) {
        self::draw(6);
      }
    } else {
      if ($cardCounts[1] > 0) {
        self::draw(7);
      } else {
        self::draw(5);
      }
    }
  }

}