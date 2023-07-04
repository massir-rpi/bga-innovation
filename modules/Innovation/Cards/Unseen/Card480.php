<?php

namespace Innovation\Cards\Unseen;

use Innovation\Cards\Card;

class Card480 extends Card
{

  // Espionage:
  //   - I DEMAND you reveal a card in your hand! If you do, and I have no card in my hand of the
  //     same color, transfer it to my hand, then repeat this effect!

  public function initialExecution()
  {
    self::setMaxSteps(1);
  }

  public function getInteractionOptions(): array
  {
    return [
      'location_from' => 'hand',
      'location_to'   => 'revealed',
    ];
  }

  public function handleCardChoice(array $card)
  {
    $cardsInHand = $this->game->getCardsInHand(self::getLauncherId());
    $hasColor = false;
    if (count($cardsInHand) > 0) {
      $this->game->revealHand(self::getLauncherId());
      $hasColor = self::hasCardWithColor($cardsInHand, $card['color']);
    }
    if ($hasColor) {
      self::putInHand($card);
    } else {
      self::putInHand($card, self::getLauncherId());
      self::setNextStep(1);
    }
  }

  private function hasCardWithColor(array $cards, int $color): bool{
    foreach ($cards as $card) {
      if ($card['color'] == $color) {
        return true;
      }
    }
    return false;
  }
}