<?php

namespace Innovation\Cards\Unseen;

use Innovation\Cards\Card;
use Innovation\Cards\ExecutionState;

class Card519 extends Card
{

  // Blackmail:
  //   - I DEMAND you reveal your hand! Meld a revealed card of my choice! Reveal your score pile!
  //     Execute the non-demand effects of any revealed card of my choice for yourself only,
  //     replacing 'may' with 'must'!

  public function initialExecution(ExecutionState $state)
  {
    foreach ($this->game->getCardsInHand($state->getPlayerId()) as $card) {
      self::reveal($card);
    }
    self::setMaxSteps(2);
  }

  public function getInteractionOptions(Executionstate $state): array
  {
    if (self::getCurrentStep() == 1) {
      return [
        'player_id'     => self::getLauncherId(),
        'owner_from'    => self::getPlayerId(),
        'location_from' => 'revealed',
        'owner_to'      => self::getPlayerId(),
        'meld_keyword'  => true,
      ];
    } else {
      return [
        'player_id'     => self::getLauncherId(),
        'owner_from'    => self::getPlayerId(),
        'location_from' => 'revealed',
        'owner_to'      => self::getPlayerId(),
        'location_to'   => 'none',
      ];
    }
  }

  public function afterInteraction(Executionstate $state)
  {
    $this->game->gamestate->changeActivePlayer(self::getPlayerId());
    foreach ($this->game->getCardsInLocation($state->getPlayerId(), 'revealed') as $card) {
      self::putInHand($card);
    }
    if (self::getCurrentStep() == 1) {
      foreach ($this->game->getCardsInScorePile($state->getPlayerId()) as $card) {
        self::reveal($card);
      }
    } else {
      $this->game->executeReplacingMayWithMust(self::getLastSelectedCard());
    }
  }

}