<?php

namespace Innovation\Cards\Unseen;

use Innovation\Cards\Card;
use Innovation\Enums\Colors;
use Innovation\Enums\Directions;
use Innovation\Enums\Icons;

class Card574 extends Card
{

  // Urban Legend:
  //   - For each color on your board with a INDUSTRY, draw a [9]. If you draw five cards, you win.
  //   - You may splay your yellow or purple cards up.

  public function initialExecution()
  {
    if (self::getEffectNumber() === 1) {
      $numCardsDrawn = 0;
      foreach (Colors::ALL as $color) {
        if ($this->game->countVisibleIconsInPile(self::getPlayerId(), Icons::INDUSTRY, $color) > 0) {
          self::draw(9);
          $numCardsDrawn++;
        }
      }

      if ($numCardsDrawn === 5) {
        self::win();
      }
    } else {
      self::setMaxSteps(1);
    }
  }

  public function getInteractionOptions(): array
  {
    return [
      'can_pass'        => true,
      'splay_direction' => Directions::UP,
      'color'           => [Colors::YELLOW, Colors::PURPLE],
    ];
  }
}