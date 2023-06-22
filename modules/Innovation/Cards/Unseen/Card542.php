<?php

namespace Innovation\Cards\Unseen;

use Innovation\Cards\Card;
use Innovation\Cards\ExecutionState;

class Card542 extends Card
{

  // Sabotage:
  //   - I DEMAND you draw a [6]! Reveal the cards in your hand! Return the card of my choice from
  //     your hand! Tuck the top card from your board and all cards from your score pile of the
  //     same color as the returned card!

  public function initialExecution(ExecutionState $state)
  {
    self::draw(6);
    foreach ($this->game->getCardsInHand(self::getPlayerId()) as $card) {
      self::reveal($card);
      self::setMaxSteps(2);
    }
  }

  public function getInteractionOptions(Executionstate $state): array
  {
    if ($state->getCurrentStep() == 1) {
      return [
        'player_id'     => $state->getLauncherId(),
        'location_from' => 'revealed',
        'location_to'   => 'deck',
      ];
    } else {
      return [
        'n'             => 'all',
        'location_from' => 'score',
        'location_to'   => 'board',
        'bottom_to'     => true,
        'color'         => [self::getLastSelectedColor()],
      ];
    }
  }

  public function afterInteraction(Executionstate $state)
  {
    if ($state->getNumChosen() > 0 && $state->getCurrentStep() == 1) {
      self::tuck(self::getTopCardOfColor(self::getLastSelectedColor()));
      $this->game->gamestate->changeActivePlayer(self::getPlayerId());
      foreach ($this->game->getCardsInLocation(self::getPlayerId(), 'revealed') as $card) {
        self::putInHand($card);
      }
    }
  }

}