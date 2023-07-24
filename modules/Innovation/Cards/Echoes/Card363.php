<?php

namespace Innovation\Cards\Echoes;

use Innovation\Cards\Card;

class Card363 extends Card
{

  // Novel
  // - 3rd edition:
  //   - ECHO: Draw a [3].
  //   - Draw a [3]. You may splay your purple cards left.
  //   - If all your non-purple top cards share a common icon other than [PROSPERITY], claim the Supremacy achievement.
  // - 4th edition:
  //   - ECHO: Return all cards from your forecast.
  //   - Draw a [3].
  //   - You may splay your purple cards left.
  //   - If all your non-purple top cards share a common icon other than [PROSPERITY], claim the Supremacy achievement.

  public function initialExecution()
  {
    if (self::isFirstOrThirdEdition()) {
      if (self::isEcho()) {
        self::draw(3);
      } else if (self::getEffectNumber() === 1) {
        self::draw(3);
        self::setMaxSteps(1);
      } else {
        self::claimSupremacyIfEligible();
      }
    } else {
      if (self::isEcho()) {
        self::setMaxSteps(1);
      } else if (self::getEffectNumber() === 1) {
        self::draw(3);
      } else if (self::getEffectNumber() === 2) {
        self::setMaxSteps(1);
      } else {
        self::claimSupremacyIfEligible();
      }
    }
  }

  public function getInteractionOptions(): array
  {
    if (self::isEcho()) {
      return [
        'n'             => 'all',
        'location_from' => 'forecast',
        'location_to'   => 'deck',
      ];
    } else {
      return [
        'can_pass'        => true,
        'splay_direction' => $this->game::LEFT,
        'color'           => [$this->game::PURPLE],
      ];
    }
  }

  private function claimSupremacyIfEligible()
  {
    // TODO(4E): Re-work which icons should be included. This might also affect 3rd edition.
    for ($icon = 1; $icon <= 7; $icon++) {
      if ($icon === $this->game::PROSPERITY) {
        continue;
      }
      $numCards = 0;
      $hasCommonIcon = true;
      foreach (self::getAllColorsOtherThan($this->game::PURPLE) as $color) {
        $topCard = self::getTopCardOfColor($color);
        if ($topCard !== null) {
          if (!self::hasIcon($topCard, $icon)) {
            $hasCommonIcon = false;
          }
          $numCards++;
        }
      }
      if ($numCards > 0 && $hasCommonIcon) {
        $this->game->claimSpecialAchievement(self::getPlayerId(), 439);
        return;
      }
    }
  }


}