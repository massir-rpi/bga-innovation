<?php

namespace Innovation\Utils;

/* Class used to handle notifications */
class Notifications
{

  protected \Innovation $game;

  function __construct(\Innovation $game)
  {
    $this->game = $game;
  }

  public function notifyPresenceOfIcon(int $icon)
  {
    self::notifyGeneralInfo(clienttranslate('It has a ${icon}.'), ['icon' => self::getIconSquare($icon)]);
  }

  public function notifyAbsenceOfIcon(int $icon)
  {
    self::notifyGeneralInfo(clienttranslate('It does not have a ${icon}.'), ['icon' => self::getIconSquare($icon)]);
  }

  public function notifyIconChoice(int $icon, int $playerId)
  {
    $iconSquare = $this->getIconSquare($icon);
    self::notifyPlayer($playerId, 'log', clienttranslate('${You} choose ${icon}.'), ['You' => 'You', 'icon' => $iconSquare]);
    self::notifyAllPlayersBut($playerId, 'log', clienttranslate('${player_name} chooses ${icon}.'), ['player_name' => self::getColoredPlayerName($playerId), 'icon' => $iconSquare]);
  }

  public function notifyValueChoice(int $value, int $playerId)
  {
    self::notifyPlayer($playerId, 'log', clienttranslate('${You} choose the value ${age}.'), array('You' => 'You', 'age' => self::getAgeSquare($value)));
    self::notifyAllPlayersBut($playerId, 'log', clienttranslate('${player_name} chooses the value ${age}.'), ['player_name' => self::getColoredPlayerName($playerId), 'age' => self::getAgeSquare($value)]);
  }

  public function notifyPlayerChoice(int $chosenPlayerId, int $playerId) {
    self::notifyPlayer(
      $playerId,
      'log',
      clienttranslate('${You} choose the player ${player_choice}.'),
      array(
        'You'           => 'You',
        'player_choice' => self::getColoredPlayerName($chosenPlayerId)
      )
    );
    self::notifyAllPlayersBut(
      $playerId,
      'log',
      clienttranslate('${player_name} chooses the player ${player_choice}.'),
      array(
        'player_name'   => self::getColoredPlayerName($playerId),
        'player_choice' => self::getColoredPlayerName($chosenPlayerId)
      )
    );
  }

  public function notifySafeIsFull(int $playerId)
  {
    self::notifyPlayer($playerId, 'log', clienttranslate('${Your} safe was already full so the card was not transferred to your safe.'), ['Your' => 'Your']);
    self::notifyAllPlayersBut($playerId, 'log', clienttranslate('${player_name}\'s safe was already full so the card was not transferred to his safe.'), ['player_name' => self::getColoredPlayerName($playerId)]);
  }

  private function getIconSquare(int $icon): string
  {
    return $this->game->getIconSquare($icon);
  }

  private function getAgeSquare(int $age): string
  {
    return $this->game->getAgeSquare($age);
  }

  function getColoredText($text, $playerId): string
  {
    $color = $this->game->getPlayerColorFromId($playerId);
    return "<span style='font-weight: bold; color:#" . $color . ";'>" . $text . "</span>";
  }

  function getColoredPlayerName($playerId): string
  {
    return self::getColoredText($this->game->getPlayerNameFromId($playerId), $playerId);
  }

  function notifyPlayerLoses(int $playerId): void
  {
    self::notifyPlayer($playerId, 'log', clienttranslate('${You} lose.'),  ['You' => 'You']);
    self::notifyAllPlayersBut($playerId, 'log', clienttranslate('${player_name} loses.'), array(
      'player_name' => self::getColoredPlayerName($playerId)
    ));
  }

  function notifyTeamLoses(int $playerId1, int $playerId2): void
  {
    $this->game->notifyPlayer($playerId1, 'log', clienttranslate('${Your} team loses.'), ['Your' => 'Your']);
    $this->game->notifyPlayer($playerId2, 'log', clienttranslate('${Your} team loses.'), ['Your' => 'Your']);
    $this->game->notifyAllPlayersBut([$playerId1, $playerId2], 'log', clienttranslate('The other team loses.'));
  }

  function notifyPlayer($playerId, $type, $message, $args)
  {
    $this->game->notifyPlayer($playerId, $type, $message, $args);
  }

  function notifyAllPlayersBut($playerId, $type, $message, $args)
  {
    $this->game->notifyAllPlayersBut($playerId, $type, $message, $args);
  }

  function notifyGeneralInfo($message, $args)
  {
    $this->game->notifyGeneralInfo($message, $args);
  }
}