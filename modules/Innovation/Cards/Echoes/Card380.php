<?php

namespace Innovation\Cards\Echoes;

use Innovation\Cards\Card;
use Innovation\Utils\Arrays;

class Card380 extends Card
{

  // Seed Drill
  // - 3rd edition:
  //   - I DEMAND you return a top card from your board of value less than [3]!
  //   - Choose the [3], [4], or [5] deck. If there is at least one card in that deck, you may
  //     transfer its bottom card to the available achievements.
  // - 4th edition:
  //   - I DEMAND you return a top card from your board of value less than [3]!
  //   - Choose the [3], [4], or [5] deck. You may junk all cards in the chosen deck. If you do,
  //     achieve the highest junked card if eligible.

  public function initialExecution()
  {
    self::setMaxSteps(1);
  }

  public function getInteractionOptions(): array
  {
    if (self::isDemand()) {
      return [
        'location_from'  => 'board',
        'return_keyword' => true,
        'age_min'        => 1,
        'age_max'        => 2,
      ];
    } else if (self::getCurrentStep() === 1) {
      return [
        'choose_value' => true,
        'age'          => [3, 4, 5],
      ];
    } else if (self::getCurrentStep() === 2) {
      return [
        'can_pass' => true,
        'choices'  => [1],
      ];
    } else {
      return [
        'location_from'                   => 'junk',
        'achieve_keyword'                 => true,
        'require_achievement_eligibility' => true,
        'age'                             => self::getMaxValueInLocation('junk'),
      ];
    }
  }

  public function getSpecialChoicePrompt(): array
  {
    if (self::getCurrentStep() === 1) {
      return self::getPromptForValueChoice();
    } else if (self::isFirstOrThirdEdition()) {
      return self::getPromptForChoiceFromList([
        1 => [
          clienttranslate('Transfer bottom card from ${age} deck to the available achievements'),
          'age' => $this->game->getAgeSquare(self::getAuxiliaryValue2()),
        ],
      ]);
    } else {
      return self::getPromptForChoiceFromList([
        1 => [clienttranslate('Junk ${age} deck'), 'age' => $this->game->getAgeSquare(self::getAuxiliaryValue2())],
      ]);
    }
  }

  public function handleSpecialChoice($choice)
  {
    if (self::getCurrentStep() === 1) {
      if ($this->game->countCardsInLocationKeyedByAge(0, 'deck', $this->game::BASE) > 0) {
        self::setAuxiliaryValue2($choice); // Track which deck was chosen
        self::setMaxSteps(2);
      }
    } else if (self::isFirstOrThirdEdition()) {
      $this->game->executeDraw(0, /*age=*/self::getAuxiliaryValue2(), 'achievements', /*bottom_to=*/false, 0, /*bottom_from=*/true);
    } else {
      self::junkBaseDeck(self::getAuxiliaryValue2());
      self::setMaxSteps(3);
    }
  }

}