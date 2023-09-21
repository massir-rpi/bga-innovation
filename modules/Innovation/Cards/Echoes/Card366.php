<?php

namespace Innovation\Cards\Echoes;

use Innovation\Cards\AbstractCard;
use Innovation\Enums\CardTypes;
use Innovation\Enums\Locations;

class Card366 extends AbstractCard
{

  // Telescope
  // - 3rd edition:
  //   - ECHO: Draw and foreshadow a [5].
  //   - You may place a card from your forecast on top of its deck. If you do, achieve a card from
  //     your forecast if you meet the requirements to do so.
  // - 4th edition:
  //   - ECHO: Draw and foreshadow an Echoes [5].
  //   - You may place a card from your forecast on top of its deck. If you do, exchange all cards
  //     in your forecast with an equal number of available standard achievements, and junk all the
  //     cards in the [5] deck.

  public function initialExecution()
  {
    if (self::isEcho()) {
      if (self::isFirstOrThirdEdition()) {
        self::drawAndForeshadow(5);
      } else {
        self::foreshadow(self::drawType(5, CardTypes::ECHOES), [$this, 'transferToHand']);
      }
    } else {
      self::setMaxSteps(1);
    }
  }

  public function getInteractionOptions(): array
  {
    if (self::isFirstInteraction()) {
      return [
        'can_pass'      => true,
        'location_from' => 'forecast',
        'location_to'   => 'deck',
        'bottom_to'     => false, // put on top
      ];
    } else if (self::isFirstOrThirdEdition()) {
      return [
        'location_from'       => 'forecast',
        'achieve_if_eligible' => true,
      ];
    } else {
      self::setAuxiliaryArray(self::getAvailableStandardAchievementIds());
      $forecastCards = self::getCards('forecast');
      foreach ($forecastCards as $card) {
        $this->game->transferCardFromTo($card, 0, 'achievements');
      }
      return [
        'n'                               => count($forecastCards),
        'location_from'                   => Locations::AVAILABLE_ACHIEVEMENTS,
        'location_to'                     => 'forecast',
        'card_ids_are_in_auxiliary_array' => true,
      ];
    }
  }

  public function afterInteraction()
  {
    if (self::isFirstInteraction() && self::getNumChosen() > 0) {
      self::setMaxSteps(2);
    } else if (self::isFourthEdition() && self::isSecondInteraction()) {
      self::junkBaseDeck(5);
    }
  }

  public function handleAbortedInteraction()
  {
    // Still junk the cards in the [5] deck even if there were no cards to exchange
    if (self::isFourthEdition() && self::isSecondInteraction()) {
      self::junkBaseDeck(5);
    }
  }

  private function getAvailableStandardAchievementIds(): array
  {
    $cardIds = [];
    foreach (self::getCards(Locations::AVAILABLE_ACHIEVEMENTS) as $card) {
      if (self::isValuedCard($card)) {
        $cardIds[] = $card['id'];
      }
    }
    return $cardIds;
  }

}