<?php

namespace Innovation\Cards\Artifacts;

use Innovation\Cards\Card;

class Card154 extends Card
{

  // Abell Gallery Harpsichord
  //   - For each value of top card on your board appearing exactly once, draw and score a card of
  //     that value in ascending order.

  public function initialExecution()
  {
    $values = [];
    foreach (self::getTopCards() as $card) {
      $values[] = $card['faceup_age'];
    }
    asort($values);
    foreach (array_count_values($values) as $value => $count) {
      if ($count === 1) {
        self::drawAndScore($value);
      }
    }
  }

}