<?php

namespace Innovation\Cards\Unseen;

use Innovation\Cards\Card;

class Card591 extends Card
{

  // Escape Room:
  //   - I DEMAND you draw, reveal, and score an [11]! Score a card from your hand of the same
  //     color as the drawn card! If you don't, you lose!
  //   - Score four top non-yellow cards each with a [EFFICIENCY] of different colors on your board.

  public function initialExecution()
  {
    if (self::isDemand()) {
      $card = self::drawAndReveal(11);
      self::setAuxiliaryValue($card['color']); // Tracks which color needs to be scored
      self::score($card);
    }
    self::setMaxSteps(1);
  }

  public function getInteractionOptions(): array
  {
    if (self::isDemand()) {
      return [
        'options' => [
          'location_from' => 'hand',
          'score_keyword' => true,
          'color' => [self::getAuxiliaryValue()],
        ],
      ];
    } else {
      return [
        'n' => 4,
        'location_from' => 'board',
        'score_keyword' => true,
        'color' => self::getAllColorsOtherThan($this->game::YELLOW),
        'with_icon' => $this->game::EFFICIENCY,
      ];
    }
  }

  public function afterInteraction()
  {
    if (self::isDemand()) {
      if (self::getNumChosen() === 0) {
        $this->game->revealHand(self::getPlayerId());
        self::lose();
      }
    }
  }

}