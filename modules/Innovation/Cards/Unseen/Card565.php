<?php

namespace Innovation\Cards\Unseen;

use Innovation\Cards\Card;

class Card565 extends Card
{

  // Consulting:
  //   - Choose an opponent. Draw and meld two [10]. Self-execute the top card on your board of
  //     that player's choice.

  public function initialExecution()
  {
    self::setMaxSteps(2);
  }

  public function getInteractionOptions(): array
  {
    if (self::isFirstInteraction()) {
      return [
        'choose_player' => true,
        'players'       => $this->game->getActiveOpponents(self::getPlayerId()),
      ];
    } else {
      return [
        'player_id'   => self::getAuxiliaryValue(),
        'choose_from' => 'board',
      ];
    }
  }

  public function handleCardChoice(array $card)
  {
    self::selfExecute($card);
  }

  public function handleSpecialChoice(int $choice): void
  {
    $this->notifications->notifyPlayerChoice($choice, self::getPlayerId());
    self::setAuxiliaryValue($choice);
    self::drawAndMeld(10);
    self::drawAndMeld(10);
  }

}