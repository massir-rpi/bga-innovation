<?php

namespace Innovation\Cards\Echoes;

use Innovation\Cards\Card;

class Card416 extends Card
{

  // Laser
  // - 3rd edition
  //   - Return all unclaimed standard achievements. Then, return half (rounded up) of the cards in
  //     your score pile. Draw and meld two [10].
  // - 4th edition
  //   - Return half (rounded up) of the cards in your score pile. Return all available standard achievements. 
  //   - Draw and foreshadow an [11]. Draw and meld a [10]. If Laser was foreseen, draw and meld an [11].

  public function initialExecution()
  {
    if (self::isFirstNonDemand()) {
      self::setMaxSteps(2);
    } else {
      self::drawAndForeshadow(11);
      self::drawAndMeld(10);
      if (self::wasForeseen()) {
        self::drawAndMeld(11);
      }
    }
  }

  public function getInteractionOptions(): array
  {
    if (self::isFirstOrThirdEdition() && self::getCurrentStep() === 1 || self::isFourthEdition() && self::getCurrentStep() === 2) {
      return [
        'n' => 'all',
        'owner_from' => 0,
        'location_from' => 'achievements',
        'return_keyword' => true,
      ];
    } else {
      return [
        'n' => ceil(self::countCards('score') / 2),
        'location_from' => 'score',
        'return_keyword' => true,
      ];
    }
  }

  public function afterInteraction()
  {
    if (self::isFirstOrThirdEdition() && self::getCurrentStep() === 2) {
      self::drawAndMeld(10);
      self::drawAndMeld(10);
    }
  }

}