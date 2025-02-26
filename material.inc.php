<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * Innovationnewgraphics implementation : © Jean Portemer <jportemer@gmail.com>
 * 
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * material.inc.php
 *
 * Innovation game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *   
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */

$this->textual_card_infos = array(

/* Age 1 */

0 => array('name' => clienttranslate('Pottery'),
    'non_demand_effect_1' => clienttranslate('You may return up to three cards from your hand. If you returned any cards, draw and score a card of value equal to the number of cards you returned.'),
    'non_demand_effect_2' => clienttranslate('Draw a ${age_1}.'),
),

1 => array('name' => clienttranslate('Tools'),
    'non_demand_effect_1' => clienttranslate('You may return three cards from your hand. If you do, draw and meld a ${age_3}.'),
    'non_demand_effect_2' => clienttranslate('You may return a ${age_3} from your hand. If you do, draw three ${age_1}.'),
),

2 => array('name' => clienttranslate('Writing'),
    'non_demand_effect_1' => clienttranslate('Draw a ${age_2}.'),
),

3 => array('name' => clienttranslate('Archery'),
    'i_demand_effect_1' => clienttranslate('${I demand} you draw a ${age_1}, then transfer the highest card in your hand to my hand!'),
),

4 => array('name' => clienttranslate('Metalworking'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_1}. If it has a ${icon_4}, score it and repeat this dogma effect. Otherwise, keep it.'),
),

5 => array('name' => clienttranslate('Oars'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a card with a ${icon_1} from your hand to my score pile! If you do, draw a ${age_1}, and repeat this dogma effect!'),
    'i_demand_effect_1_alt' => clienttranslate('${I demand} you transfer a card with a ${icon_1} from your hand to my score pile! If you do, draw a ${age_1}!'),
    'non_demand_effect_1' => clienttranslate('If no cards were transferred due to this demand, draw a ${age_1}.'),
),

6 => array('name' => clienttranslate('Clothing'),
    'non_demand_effect_1' => clienttranslate('Meld a card from your hand of different color from any card on your board.'),
    'non_demand_effect_2' => clienttranslate('Draw and score a ${age_1} for each color present on your board not present on any opponent\'s board.'),
),

7 => array('name' => clienttranslate('Sailing'),
    'non_demand_effect_1' => clienttranslate('Draw and meld a ${age_1}.'),
),

8 => array('name' => clienttranslate('The wheel'),
    'non_demand_effect_1' => clienttranslate('Draw two ${age_1}.'),
),

9 => array('name' => clienttranslate('Agriculture'),
    'non_demand_effect_1' => clienttranslate('You may return a card from your hand. If you do, draw and score a card of value one higher than the card you returned.'),
),

10 => array('name' => clienttranslate('Domestication'),
    'non_demand_effect_1' => clienttranslate('Meld the lowest card in your hand. Draw a ${age_1}.'),
),

11 => array('name' => clienttranslate('Masonry'),
    'non_demand_effect_1' => clienttranslate('You may meld any number of cards from your hand, each with a ${icon_4}. If you melded four or more cards in this way, claim the Monument achievement.'),
),

12 => array('name' => clienttranslate('City states'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a top card with a ${icon_4} from your board to my board if you have at least four ${icon_4} on your board! If you do, draw a ${age_1}!'),
),

13 => array('name' => clienttranslate('Code of laws'),
    'non_demand_effect_1' => clienttranslate('You may tuck a card from your hand of the same color as any card on your board. If you do, you may splay that color of your cards left.'),
),

14 => array('name' => clienttranslate('Mysticism'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_1}. If it is the same color as any card on your board, meld it and draw a ${age_1}.'),
),

/* Age 2 */

15 => array('name' => clienttranslate('Calendar'),
    'non_demand_effect_1' => clienttranslate('If you have more cards in your score pile than in your hand, draw two ${age_3}.'),
),

16 => array('name' => clienttranslate('Mathematics'),
    'non_demand_effect_1' => clienttranslate('You may return a card from your hand. If you do, draw and meld a card of value one higher than the card your returned.'),
),

17 => array('name' => clienttranslate('Construction'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer two cards from your hand to my hand! Draw a ${age_2}!'),
    'non_demand_effect_1' => clienttranslate('If you are the only player with five top cards, claim the Empire achievement.'),
),

18 => array('name' => clienttranslate('Road building'),
    'non_demand_effect_1' => clienttranslate('Meld one or two cards from your hand. If you melded two, you may transfer your top red card to another player board. If you do, transfer that player\'s top green card to your board.'),
),

19 => array('name' => clienttranslate('Currency'),
    'non_demand_effect_1' => clienttranslate('You may return any number of cards from your hand. If you do, draw and score a ${age_2} for every different value of card you returned.'),
),

20 => array('name' => clienttranslate('Mapmaking'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a ${age_1} from your score pile, if it has any, to my score pile!'),
    'non_demand_effect_1' => clienttranslate('If any card was transferred due to the demand, draw and score a ${age_1}.'),
),

21 => array('name' => clienttranslate('Canal building'),
    'non_demand_effect_1' => clienttranslate('You may exchange all the highest cards in your hand with all the highest cards in your score pile.'),
),

22 => array('name' => clienttranslate('Fermenting'),
    'non_demand_effect_1' => clienttranslate('Draw a ${age_2} for every color on your board with one or more ${icon_2}.'),
    'non_demand_effect_1_alt' => clienttranslate('Draw a ${age_2} for every two ${icon_2} on your board.'),
),

23 => array('name' => clienttranslate('Monotheism'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a top card on your board of different color from any card on my board to my score pile! If you do, draw and tuck a ${age_1}!'),
    'non_demand_effect_1' => clienttranslate('Draw and tuck a ${age_1}.'),
),

24 => array('name' => clienttranslate('Philosophy'),
    'non_demand_effect_1' => clienttranslate('You may splay left any one color of your cards.'),
    'non_demand_effect_2' => clienttranslate('You may score a card from your hand.'),
),

/* Age 3 */

25 => array('name' => clienttranslate('Alchemy'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_4} for every three ${icon_4} on your board. If any of the drawn cards are red, return the cards drawn and all cards in your hand. Otherwise, keep them.'),
    'non_demand_effect_2' => clienttranslate('Meld a card from your hand, then score a card from your hand.'),
),

26 => array('name' => clienttranslate('Translation'),
    'non_demand_effect_1' => clienttranslate('You may meld all the cards in your score pile. If you meld one, you must meld them all.'),
    'non_demand_effect_2' => clienttranslate('If each top card on your board has a ${icon_1}, claim the World achievement.'),
),

27 => array('name' => clienttranslate('Engineering'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer all top cards with a ${icon_4} from your board to my score pile!'),
    'non_demand_effect_1' => clienttranslate('You may splay your red cards left.'),
),

28 => array('name' => clienttranslate('Optics'),
    'non_demand_effect_1' => clienttranslate('Draw an meld a ${age_3}. If it has a ${icon_1}, draw and score a ${age_4}. Otherwise, transfer a card from your score pile to the score pile of an opponent with fewer points than you.'),
),

29 => array('name' => clienttranslate('Compass'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a top non-green card with a ${icon_2} from your board to my board, and then you transfer a top card without a ${icon_2} from my board to your board!'),
),

30 => array('name' => clienttranslate('Paper'),
    'non_demand_effect_1' => clienttranslate('You may splay your green or blue cards left.'),
    'non_demand_effect_2' => clienttranslate('Draw a ${age_4} for every color you have splayed left.'),
),

31 => array('name' => clienttranslate('Machinery'),
    'i_demand_effect_1' => clienttranslate('${I demand} you exchange all the cards in your hand with all the highest cards in my hand!'),
    'non_demand_effect_1' => clienttranslate('Score a card from your hand with a ${icon_4}. You may splay your red cards left.'),
),

32 => array('name' => clienttranslate('Medicine'),
    'i_demand_effect_1' => clienttranslate('${I demand} you exchange the highest card in your score pile with the lowest card in my score pile!'),
),

33 => array('name' => clienttranslate('Education'),
    'non_demand_effect_1' => clienttranslate('You may return the highest card from your score pile. If you do, draw a card of value two higher than the highest card remaining in your score pile.'),
),

34 => array('name' => clienttranslate('Feudalism'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a card with a ${icon_4} from your hand to my hand! If you do, unsplay that color of your cards!'),
    'i_demand_effect_1_alt' => clienttranslate('${I demand} you transfer a card with a ${icon_4} from your hand to my hand!'),
    'non_demand_effect_1' => clienttranslate('You may splay your yellow or purple cards left.'),
),

/* Age 4 */

35 => array('name' => clienttranslate('Experimentation'),
    'non_demand_effect_1' => clienttranslate('Draw and meld a ${age_5}.'),
),

36 => array('name' => clienttranslate('Printing press'),
    'non_demand_effect_1' => clienttranslate('You may return a card from your score pile. If you do, draw a card of value two higher than the top purple card on your board.'),
    'non_demand_effect_2' => clienttranslate('You may splay your blue cards right.'),
),

37 => array('name' => clienttranslate('Colonialism'),
    'non_demand_effect_1' => clienttranslate('Draw and tuck a ${age_3}. If it has a ${icon_1}, repeat this dogma effect.'),
),

38 => array('name' => clienttranslate('Gunpowder'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a top card with a ${icon_4} from your board to my score pile!'),
    'non_demand_effect_1' => clienttranslate('If any card was transfered due to the demand, draw and score a ${age_2}.'),
),

39 => array('name' => clienttranslate('Invention'),
    'non_demand_effect_1' => clienttranslate('You may splay right any one color of your card currently splayed left. If you do, draw and score a ${age_4}.'),
    'non_demand_effect_2' => clienttranslate('If you have five colors splayed, each in any direction, claim the Wonder achievement.'),
),

40 => array('name' => clienttranslate('Navigation'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a ${age_2} or ${age_3} from your score pile, if it has any, to my score pile!'),
),

41 => array('name' => clienttranslate('Anatomy'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return a card from your score pile! If you do, return a top card of equal value from your board!'),
),

42 => array('name' => clienttranslate('Perspective'),
    'non_demand_effect_1' => clienttranslate('You may return a card from your hand. If you do, score a card from your hand for every two ${icon_3} on your board.'),
),

43 => array('name' => clienttranslate('Enterprise'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a top non-purple card with a ${icon_1} from your board to my board! If you do, draw and meld a ${age_4}!'),
    'non_demand_effect_1' => clienttranslate('You may splay your green cards right.'),
),

44 => array('name' => clienttranslate('Reformation'),
    'non_demand_effect_1' => clienttranslate('You may tuck a card from your hand for every two ${icon_2} on your board.'),
    'non_demand_effect_2' => clienttranslate('You may splay your yellow or purple cards right.'),
),

/* Age 5 */

45 => array('name' => clienttranslate('Chemistry'),
    'non_demand_effect_1' => clienttranslate('You may splay your blue cards right.'),
    'non_demand_effect_2' => clienttranslate('Draw and score a card of value one higher than the highest top card on your board and then return a card from your score pile.'),
),

46 => array('name' => clienttranslate('Physics'),
    'non_demand_effect_1' => clienttranslate('Draw three ${age_6} and reveal them. If two or more of the drawn cards are the same color, return the drawn cards and all cards in your hand. Otherwise, keep them.'),
),

47 => array('name' => clienttranslate('Coal'),
    'non_demand_effect_1' => clienttranslate('Draw and tuck a ${age_5}.'),
    'non_demand_effect_2' => clienttranslate('You may splay your red cards right.'),
    'non_demand_effect_3' => clienttranslate('You may score any one of your top cards. If you do, also score the card beneath it.'),
),

48 => array('name' => clienttranslate('The pirate code'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer two cards of value ${age_4} or less from your score pile to my score pile!'),
    'non_demand_effect_1' => clienttranslate('If any card was transferred due to the demand, score the lowest top card with a ${icon_1} from your board.'),
),

49 => array('name' => clienttranslate('Banking'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a top non-green card with a ${icon_5} from your board to my board. If you do, draw and score a ${age_5}!'),
    'non_demand_effect_1' => clienttranslate('You may splay your green cards right.'),
),

50 => array('name' => clienttranslate('Measurement'),
    'non_demand_effect_1' => clienttranslate('You may reveal and return a card from your hand. If you do, splay that color of your cards right, and draw a card of value equal to the number of cards of that color on your board.'),
    'non_demand_effect_1_alt' => clienttranslate('You may return a card from your hand. If you do, choose a color. Splay that color of your cards right, and draw a card of value equal to the number of cards of that color on your board.'),
),

51 => array('name' => clienttranslate('Statistics'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer all the highest cards in your score pile to your hand!'),
    'i_demand_effect_1_alt' => clienttranslate('${I demand} you transfer the highest card in your score pile to your hand! If you do, and have only one card in your hand afterwards, repeat this demand!'),
    'non_demand_effect_1' => clienttranslate('You may splay your yellow cards right.'),
),

52 => array('name' => clienttranslate('Steam engine'),
    'non_demand_effect_1' => clienttranslate('Draw and tuck two ${age_4}, then score your bottom yellow card.'),
),

53 => array('name' => clienttranslate('Astronomy'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_6}. If the card is green or blue, meld it and repeat this dogma effect.'),
    'non_demand_effect_2' => clienttranslate('If all non-purple top cards on your board are value ${age_6} or higher, claim the Universe achievement.'),
),

54 => array('name' => clienttranslate('Societies'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a card with a ${icon_3} higher than my top card of the same color from your board to my board! If you do, draw an ${age_5}!'),
    'i_demand_effect_1_alt' => clienttranslate('${I demand} you transfer a top non-purple card with a ${icon_3} from your board to my board! If you do, draw an ${age_5}!'),
),

/* Age 6 */

55 => array('name' => clienttranslate('Atomic theory'),
    'non_demand_effect_1' => clienttranslate('You may splay your blue cards right.'),
    'non_demand_effect_2' => clienttranslate('Draw and meld a ${age_7}.'),
),

56 => array('name' => clienttranslate('Encyclopedia'),
    'non_demand_effect_1' => clienttranslate('You may meld all the highest cards in your score pile. If you meld one of the highest, you must meld all of the highest.'),
),

57 => array('name' => clienttranslate('Industrialization'),
    'non_demand_effect_1' => clienttranslate('Draw and tuck a ${age_6} for every color on your board with one or more ${icon_5}.'),
    'non_demand_effect_1_alt' => clienttranslate('Draw and tuck a ${age_6} for every two ${icon_5} on your board.'),
    'non_demand_effect_2' => clienttranslate('You may splay your red or purple cards right.'),
),

58 => array('name' => clienttranslate('Machine tools'),
    'non_demand_effect_1' => clienttranslate('Draw and score a card of value equal to the highest card in your score pile.'),
),

59 => array('name' => clienttranslate('Classification'),
    'non_demand_effect_1' => clienttranslate('Reveal the color of a card in your hand. Take into your hand all cards of that color from all opponent\'s hands. Then meld all cards of that color from your hand.'),
),

60 => array('name' => clienttranslate('Metric system'),
    'non_demand_effect_1' => clienttranslate('If your green cards are splayed right, you may splay any one color of your cards right.'),
    'non_demand_effect_2' => clienttranslate('You may splay your green cards right.'),
),

61 => array('name' => clienttranslate('Canning'),
    'non_demand_effect_1' => clienttranslate('You may draw and tuck a ${age_6}. If you do, score all your top cards without a ${icon_5}.'),
    'non_demand_effect_2' => clienttranslate('You may splay your yellow cards right.'),
),

62 => array('name' => clienttranslate('Vaccination'),
    'i_demand_effect_1' => clienttranslate('${I demand} your return all the lowest cards in your score pile! If you returnd any, draw and meld a ${age_6}!'),
    'non_demand_effect_1' => clienttranslate('If any card was returned as a result of the demand, draw and meld a ${age_7}.'),
),

63 => array('name' => clienttranslate('Democracy'),
    'non_demand_effect_1' => clienttranslate('You may return any number of cards from your hand. If you have returned more cards than any other player due to Democracy so far during this dogma action, draw and score a ${age_8}.'),
),

64 => array('name' => clienttranslate('Emancipation'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a card from your hand to my score pile! If you do, draw a ${age_6}!'),
    'non_demand_effect_1' => clienttranslate('You may splay your red or purple cards right.'),
),

/* Age 7 */

65 => array('name' => clienttranslate('Evolution'),
    'non_demand_effect_1' => clienttranslate('You may choose to either draw and score a ${age_8} and then return a card from your score pile, or draw a card of value one higher than the highest card in your score pile.'),
),

66 => array('name' => clienttranslate('Publications'),
    'non_demand_effect_1' => clienttranslate('You may rearrange the order of one color of cards on your board.'),
    'non_demand_effect_2' => clienttranslate('You may splay your yellow or blue cards up.'),
),

67 => array('name' => clienttranslate('Combustion'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer one card from your score pile to my score pile for every four ${icon_1} on my board!'),
    'i_demand_effect_1_alt' => clienttranslate('${I demand} you transfer two cards from your score pile to my score pile!'),
    'non_demand_effect_1' => clienttranslate('Return your bottom red card.'),
    'non_demand_effect_1_alt' => null, /* No non-demand effect in the first edition*/
),

68 => array('name' => clienttranslate('Explosives'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer the three highest cards from your hand to my hand! If you transferred any, and then have no card in hand, draw a ${age_7}!'),
),

69 => array('name' => clienttranslate('Bicycle'),
    'non_demand_effect_1' => clienttranslate('You may exchange all the cards in your hand with all the cards in your score pile. If you exchange one, you must exchange them all.'),
),

70 => array('name' => clienttranslate('Electricity'),
    'non_demand_effect_1' => clienttranslate('Return all your top cards without a ${icon_5}, then draw an ${age_8} for each card you returned.'),
),

71 => array('name' => clienttranslate('Refrigeration'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return half (rounded down) of the cards in your hand!'),
    'non_demand_effect_1' => clienttranslate('You may score a card from your hand.'),
),

72 => array('name' => clienttranslate('Sanitation'),
    'i_demand_effect_1' => clienttranslate('${I demand} you exchange the two highest cards in your hand with the lowest card in my hand!'),
),

73 => array('name' => clienttranslate('Lighting'),
    'non_demand_effect_1' => clienttranslate('You may tuck up to three cards from your hand. If you do, draw and score a ${age_7} for every different value of card you tucked.'),
),

74 => array('name' => clienttranslate('Railroad'),
    'non_demand_effect_1' => clienttranslate('Return all cards from your hand, then draw three ${age_6}.'),
    'non_demand_effect_2' => clienttranslate('You may splay up any one color of your cards currently splayed right.'),
),

/* Age 8 */

75 => array('name' => clienttranslate('Quantum theory'),
    'non_demand_effect_1' => clienttranslate('You may return up to two cards from your hand. If you return two, draw a ${age_10} and then draw and score a ${age_10}.'),
),

76 => array('name' => clienttranslate('Rocketry'),
    'non_demand_effect_1' => clienttranslate('Return a card in any opponent\'s score pile for every two ${icon_6} on your board.'),
),

77 => array('name' => clienttranslate('Flight'),
    'non_demand_effect_1' => clienttranslate('If your red cards are splayed up, you may splay any one color of your cards up.'),
    'non_demand_effect_2' => clienttranslate('You may splay your red cards up.'),
),

78 => array('name' => clienttranslate('Mobility'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer the two highest non-red top cards without a ${icon_5} from your board to my score pile! If you transferred any cards, draw an ${age_8}!'),
),

79 => array('name' => clienttranslate('Corporations'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a top non-green card with a ${icon_5} from your board to my score pile! If you do, draw and meld a ${age_8}!'),
    'non_demand_effect_1' => clienttranslate('Draw and meld a ${age_8}.'),
),

80 => array('name' => clienttranslate('Mass media'),
    'non_demand_effect_1' => clienttranslate('You may return a card from your hand. If you do, choose a value, and return all cards of that value from all score piles.'),
    'non_demand_effect_2' => clienttranslate('You may splay your purple cards up.'),
),

81 => array('name' => clienttranslate('Antibiotics'),
    'non_demand_effect_1' => clienttranslate('You may return up to three cards from your hand? For every different value of card that your returned, draw two ${age_8}.'),
),

82 => array('name' => clienttranslate('Skyscrapers'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a top non-yellow card with a ${icon_6} from your board to my board! If you do, score the card beneath it, and return all other cards from that pile!'),
),

83 => array('name' => clienttranslate('Empiricism'),
    'non_demand_effect_1' => clienttranslate('Choose two colors, then draw and reveal a ${age_9}. If it is either of the colors you choose, meld it and you may splay your cards of that color up.'),
    'non_demand_effect_2' => clienttranslate('If you have twenty or more ${icon_3} on your board, you win.'),
),

84 => array('name' => clienttranslate('Socialism'),
    'non_demand_effect_1' => clienttranslate('You may tuck all cards from your hand. If you tuck one, you must tuck them all. If you tucked at least one purple card, take all the lowest cards in each other player\'s hand into your hand.'),
),

/* Age 9 */

85 => array('name' => clienttranslate('Computers'),
    'non_demand_effect_1' => clienttranslate('You may splay your red cards or your green cards up.'),
    'non_demand_effect_2' => clienttranslate('Draw and meld a ${age_10}, then execute each of its non-demand effects. Do not share them.'),
),

86 => array('name' => clienttranslate('Genetics'),
    'non_demand_effect_1' => clienttranslate('Draw and meld a ${age_10}. Score all cards beneath it.'),
),

87 => array('name' => clienttranslate('Composites'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer all but one card from your hand to my hand! Also, transfer the highest card from your score pile to my score pile!'),
),

88 => array('name' => clienttranslate('Fission'),
    'i_demand_effect_1' => clienttranslate('${I demand} you draw a ${age_10}! If it is red, remove all hands, boards, and score piles from the game! If this occurs, the dogma action is complete.'),
    'non_demand_effect_1' => clienttranslate('Return a top card other than Fission from any player board. Draw a ${age_10}.'),
    'non_demand_effect_1_alt' => clienttranslate('Return a top card other than Fission from any player board.'),
),

89 => array('name' => clienttranslate('Collaboration'),
    'i_demand_effect_1' => clienttranslate('${I demand} you draw two ${age_9} and reveal them! Transfer the card of my choice to my board, and meld the other!'),
    'non_demand_effect_1' => clienttranslate('If you have ten or more green cards on your board, you win.'),
),

90 => array('name' => clienttranslate('Satellites'),
    'non_demand_effect_1' => clienttranslate('Return all cards from your hand, and draw three ${age_8}.'),
    'non_demand_effect_2' => clienttranslate('You may splay your purple cards up.'),
    'non_demand_effect_3' => clienttranslate('Meld a card from your hand and then execute each of its non-demand dogma effects. Do not share them.'),
),

91 => array('name' => clienttranslate('Ecology'),
    'non_demand_effect_1' => clienttranslate('You may return a card from your hand. If you do, score a card from your hand and draw two ${age_10}.'),
),

92 => array('name' => clienttranslate('Suburbia'),
    'non_demand_effect_1' => clienttranslate('You may tuck any number of cards from your hand. Draw and score a ${age_1} for each card you tucked.'),
),

93 => array('name' => clienttranslate('Services'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer all the highest cards from your score pile to my hand! If you transferred any cards, then transfer a top card from my board without a ${icon_2} to your hand!'),
),

94 => array('name' => clienttranslate('Specialization'),
    'non_demand_effect_1' => clienttranslate('Reveal a card from your hand. Take into your hand the top card of that color from all other player\'s boards.'),
    'non_demand_effect_2' => clienttranslate('You may splay your yellow or blue cards up.'),
),

/* Age 10 */

95 => array('name' => clienttranslate('Bioengineering'),
    'non_demand_effect_1' => clienttranslate('Transfer a top card with a ${icon_2} from any opponent\'s board to your score pile.'),
    'non_demand_effect_2' => clienttranslate('If any player has fewer than three ${icon_2} on their board, the single player with the most ${icon_2} on their board wins.'),
),

96 => array('name' => clienttranslate('Software'),
    'non_demand_effect_1' => clienttranslate('Draw and score a ${age_10}.'),
    'non_demand_effect_2' => clienttranslate('Draw and meld two ${age_10}, then execute each of the second card\'s non dogma effects. Do not share them.'),
),

97 => array('name' => clienttranslate('Miniaturization'),
    'non_demand_effect_1' => clienttranslate('You may return a card from your hand. If you returned a ${age_10}, draw a ${age_10} for every different value of card in your score pile.'),
),

98 => array('name' => clienttranslate('Robotics'),
    'non_demand_effect_1' => clienttranslate('Score your top green card. Draw and meld a ${age_10}, then execute each of its non-demand dogma effects. Do not share them.'),
),

99 => array('name' => clienttranslate('Databases'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return half (rounded up) of the cards in your score pile!'),
),

100 => array('name' => clienttranslate('Self service'),
    'non_demand_effect_1' => clienttranslate('Execute each of the non-demand dogma effects of any other top card on your board. Do not share them.'),
    'non_demand_effect_2' => clienttranslate('If you have more achievements than each other player, you win.'),
),

101 => array('name' => clienttranslate('Globalization'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return a top card with a ${icon_2} on your board!'),
    'non_demand_effect_1' => clienttranslate('Draw and score a ${age_6}. If no player has more ${icon_2} than ${icon_5} on their board, the single player with the most points wins.'),
),

102 => array('name' => clienttranslate('Stem cells'),
    'non_demand_effect_1' => clienttranslate('You may score all cards from your hand. If you score one, you must score them all.'),
),

103 => array('name' => clienttranslate('A. I.'),
    'non_demand_effect_1' => clienttranslate('Draw and score a ${age_10}.'),
    'non_demand_effect_2' => clienttranslate('If Robotics and Software are top cards on any board, the single player with the lowest score wins.'),
),

104 => array('name' => clienttranslate('The internet'),
    'non_demand_effect_1' => clienttranslate('You may splay your green cards up.'),
    'non_demand_effect_2' => clienttranslate('Draw and score a ${age_10}.'),
    'non_demand_effect_3' => clienttranslate('Draw and meld a ${age_10} for every two ${icon_6} on your board.'),
),

/* Special achievements */

105 => array('name' => clienttranslate('Empire'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you have three or more icons of all six types: ${icons_1_to_6}'),
    'alternative_condition_for_claiming' => clienttranslate('May also be claimed via ${age_2} Construction.')),

106 => array('name' => clienttranslate('Monument'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you tuck six or score six cards during a single turn.'),
    'alternative_condition_for_claiming' => clienttranslate('May also be claimed via ${age_1} Masonry.')),

107 => array('name' => clienttranslate('Wonder'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you have five colors on your board, and each is splayed either up or right.'),
    'alternative_condition_for_claiming' => clienttranslate('May also be claimed via ${age_4} Invention.')),

108 => array('name' => clienttranslate('World'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you have twelve or more ${icon_6} on your board.'),
    'alternative_condition_for_claiming' => clienttranslate('May also be claimed via ${age_3} Translation.')),

109 => array('name' => clienttranslate('Universe'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you have five top cards, and each is of value ${age_8} or higher.'),
    'alternative_condition_for_claiming' => clienttranslate('May also be claimed via ${age_5} Astronomy.')),

/* Artifacts - Age 1 */

110 => array('name' => clienttranslate('Treaty of Kadesh'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to return all top cards from your board with a demand effect!'),
    'i_demand_effect_1_is_compel' => true,
    'non_demand_effect_1' => clienttranslate('Score a top, non‑blue card from your board with a demand effect.'),
),

111 => array('name' => clienttranslate('Sibidu Needle'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_1}. If you have a top card of matching color and value to the drawn card, score the drawn card and repeat this effect.'),
),

112 => array('name' => clienttranslate('Basur Hoyuk Tokens'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_4}. If you have a top card of the drawn card\'s color that comes before it in the alphabet, return the drawn card and all cards from your score pile.'),
),

113 => array('name' => clienttranslate('Holmegaard Bows'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer the highest top card with a ${icon_4} on your board to my hand!'),
    'i_demand_effect_1_is_compel' => true,
    'non_demand_effect_1' => clienttranslate('Draw a ${age_2}.'),
),

114 => array('name' => clienttranslate('Papyrus of Ani'),
    // NOTE: Chris gave us permission to use the word 'set' instead of 'type'. See https://boardgamegeek.com/thread/1632784/article/40687757#40687757.
    'non_demand_effect_1' => clienttranslate('Return a purple card from your hand. If you do, draw and reveal a card of any type of value two higher. If the drawn card is purple, meld it and execute each of its non‑demand dogma effects. Do not share them.'),
),

115 => array('name' => clienttranslate('Pavlovian Tusk'),
    'non_demand_effect_1' => clienttranslate('Draw three cards of value equal to your top green card. Return one of the drawn cards. Score one of the drawn cards.'),
),

116 => array('name' => clienttranslate('Priest‑King'),
    'non_demand_effect_1' => clienttranslate('Score a card from your hand. If you have a top card matching its color, execute each of the top card\'s non‑demand dogma effects. Do not share them.'),
    'non_demand_effect_2' => clienttranslate('Claim an achievement, if eligible.'),
),

117 => array('name' => clienttranslate('Electrum Stater of Efesos'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_3}. If you do not have a top card of the drawn card\'s color, meld it and repeat this effect.'),
),

118 => array('name' => clienttranslate('Jiskairumoko Necklace'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to return a card from your score pile! If you do, transfer an achievement of the same value from your achievements to mine!'),
    'i_demand_effect_1_is_compel' => true,
),

119 => array('name' => clienttranslate('Dancing Girl'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer Dancing Girl to your board!'),
    'i_demand_effect_1_is_compel' => true,
    'non_demand_effect_1' => clienttranslate('If Dancing Girl has been on every board during this action, and it started on your board, you win.'),
),

120 => array('name' => clienttranslate('Lurgan Canoe'),
    'non_demand_effect_1' => clienttranslate('Meld a card from your hand. Score all other cards of the same color from your board. If you scored at least one card, repeat this effect.'),
),

121 => array('name' => clienttranslate('Xianrendong Shards'),
    // NOTE: Carl clarified the intended wording of this card in https://boardgamegeek.com/thread/2913636/xianrendong-shards-when-less-2-cards-are-scored.
    'non_demand_effect_1' => clienttranslate('Reveal three cards from your hand. Score two, then tuck the other. If you score two cards of the same color, draw three ${age_1}s.'),
),

122 => array('name' => clienttranslate('Mask of Warka'),
    'non_demand_effect_1' => clienttranslate('Choose a color. Each player reveals all cards of that color from their hand. If you are the only player to reveal cards, return them and claim all achievements of value matching those cards, ignoring eligibility.'),
),

123 => array('name' => clienttranslate('Ark of the Covenant'),
    'non_demand_effect_1' => clienttranslate('Return a card from your hand. Transfer all cards of the same color from the boards of all players with no top Artifacts to your score pile. If Ark of the Covenant is a top card on any board, transfer it to your hand.'),
),

124 => array('name' => clienttranslate('Tale of the Shipwrecked Sailor'),
    'non_demand_effect_1' => clienttranslate('Choose a color. Draw a ${age_1}. Meld a card of the chosen color from your hand. If you do, splay that color left.'),
),

/* Artifacts - Age 2 */

125 => array('name' => clienttranslate('Seikilos Epitaph'),
    'non_demand_effect_1' => clienttranslate('Draw and meld a ${age_3}. Meld your bottom card of the drawn card\'s color. Execute its non‑demand dogma effects. Do not share them.'),
),

126 => array('name' => clienttranslate('Rosetta Stone'),
    // NOTE: Chris gave us permission to use the word 'set' instead of 'type'. See https://boardgamegeek.com/thread/1632784/article/40687757#40687757.
    'non_demand_effect_1' => clienttranslate('Choose a card set. Draw two ${age_2}s from that set. Meld one and transfer the other to an opponent\'s board.'),
),

127 => array('name' => clienttranslate('Chronicle of Zuo'),
    'non_demand_effect_1' => clienttranslate('If you have the least ${icon_4}, draw a ${age_2}. If you have the least ${icon_1}, draw a ${age_3}. If you have the least ${icon_3}, draw a ${age_4}.'),
),

128 => array('name' => clienttranslate('Babylonian Chronicles'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer a top non‑red card with a ${icon_4} from your board to my board!'),
    'i_demand_effect_1_is_compel' => true,
    'non_demand_effect_1' => clienttranslate('Draw and score a ${age_3}.'),
),

129 => array('name' => clienttranslate('Holy Lance'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer a top Artifact from your board to my board!'),
    'i_demand_effect_1_is_compel' => true,
    'non_demand_effect_1' => clienttranslate('If Holy Grail is a top card on your board, you win.'),
),

130 => array('name' => clienttranslate('Baghdad Battery'),
    // NOTE: Chris gave us permission to use the word 'set' instead of 'type'. See https://boardgamegeek.com/thread/1632784/article/40687757#40687757.
    'non_demand_effect_1' => clienttranslate('Meld two cards from your hand. If you melded two of the same color and they are from different sets, draw and score five ${age_2}s.'),
),

131 => array('name' => clienttranslate('Holy Grail'),
    'non_demand_effect_1' => clienttranslate('Return a card from your hand. Claim an achievement of matching value ignoring eligibility.'),
),

132 => array('name' => clienttranslate('Terracotta Army'),
    // NOTE: We added the words "on your board" after Carl made a clarification in https://boardgamegeek.com/thread/2901660).
    'i_demand_effect_1' => clienttranslate('${I compel} you to return a top card on your board with no ${icon_4}!'),
    'i_demand_effect_1_is_compel' => true,
    'non_demand_effect_1' => clienttranslate('Score a card from your hand with no ${icon_4}.'),
),

133 => array('name' => clienttranslate('Dead Sea Scrolls'),
    'non_demand_effect_1' => clienttranslate('Draw an Artifact of value equal to the value of your highest top card.'),
),

134 => array('name' => clienttranslate('Cyrus Cylinder'),
    'non_demand_effect_1' => clienttranslate('Choose any other top purple card on any player\'s board. Execute its non‑demand dogma effects. Do not share them. Splay left a color on any player\'s board.'),
),

/* Artifacts - Age 3 */

135 => array('name' => clienttranslate('Dunhuang Star Chart'),
    'non_demand_effect_1' => clienttranslate('Return all cards from your hand. Draw a card of value equal to the number of cards returned.'),
),

136 => array('name' => clienttranslate('Charter of Liberties'),
    'non_demand_effect_1' => clienttranslate('Tuck a card from your hand. If you do, splay left its color, then choose a splayed color on any player\'s board. Execute all of that color\'s top card\'s non‑demand effects, without sharing.'),
),

137 => array('name' => clienttranslate('Excalibur'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer a top card of higher value than my top card of the same color from your board to my board!'),
    'i_demand_effect_1_is_compel' => true,
),

138 => array('name' => clienttranslate('Mjolnir Amulet'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to choose a top card on your board! Transfer all cards of that card\'s color from your board to my score pile!'),
    'i_demand_effect_1_is_compel' => true,
),

139 => array('name' => clienttranslate('Philosopher\'s Stone'),
    'non_demand_effect_1' => clienttranslate('Return a card from your hand. Score a number of cards from your hand equal to the value of the card returned.'),
),

140 => array('name' => clienttranslate('Beauvais Cathedral Clock'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_4}. Splay right the color matching the drawn card.'),
),

141 => array('name' => clienttranslate('Moylough Belt Shrine'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to reveal all cards in your hand and transfer the card of my choice to my board!'),
    'i_demand_effect_1_is_compel' => true,
),

142 => array('name' => clienttranslate('Along the River during the Qingming Festival'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_4}. If it is yellow, tuck it. If it is purple, score it. Otherwise, repeat this effect.'),
),

143 => array('name' => clienttranslate('Necronomicon'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_3}. If it is: Yellow: Return all cards in your hand. Green: Unsplay all your stacks. Red: Return all cards in your score pile. Blue: Draw a ${age_9}.'),
),

144 => array('name' => clienttranslate('Shroud of Turin'),
    'non_demand_effect_1' => clienttranslate('Return a card from your hand. If you do, return a top card from your board and a card from your score pile of the returned card\'s color. If you did all three, claim an achievement ignoring eligibility.'),
),

/* Artifacts - Age 4 */

145 => array('name' => clienttranslate('Petition of Right'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer a card from your score pile to my score pile for each top card with a ${icon_4} on your board!'),
    'i_demand_effect_1_is_compel' => true,
),

146 => array('name' => clienttranslate('Delft Pocket Telescope'),
    'non_demand_effect_1' => clienttranslate('Return a card from your score pile. If you do, draw a ${age_5} and a ${age_6}, then reveal one of the drawn cards that has a symbol in common with the returned card. If you cannot, return the drawn cards and repeat this effect.'),
),

147 => array('name' => clienttranslate('East India Company Charter'),
    'non_demand_effect_1' => clienttranslate('Choose a value other than ${age_5}. Return all cards of that value from all score piles. For each player that returned cards, draw and score a ${age_5}.'),
),

148 => array('name' => clienttranslate('Tortugas Galleon'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer all the highest cards from your score pile to my score pile! If you transfered any, transfer a top card on your board of that value to my board!'),
    'i_demand_effect_1_is_compel' => true,
),

149 => array('name' => clienttranslate('Molasses Reef Caravel'),
    'non_demand_effect_1' => clienttranslate('Return all cards from your hand. Draw three ${age_4}s. Meld a blue card from your hand. Score a card from your hand. Return a card from your score pile.'),
),

150 => array('name' => clienttranslate('Hunt‑Lenox Globe'),
    'non_demand_effect_1' => clienttranslate('If you have fewer than four cards in your hand, return all non‑green top cards from your board. Draw a ${age_5} for each card returned. Meld a card from your hand.'),
),

151 => array('name' => clienttranslate('Moses'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer all top cards with a ${icon_1} from your board to my score pile!'),
    'i_demand_effect_1_is_compel' => true,
    // NOTE: We added the words "on your board" after Carl made a clarification in https://boardgamegeek.com/thread/2901660).
    'non_demand_effect_1' => clienttranslate('Score a top card on your board with a ${icon_1}.'),
),

152 => array('name' => clienttranslate('Mona Lisa'),
    'non_demand_effect_1' => clienttranslate('Choose a number and a color. Draw five ${age_4}, then reveal your hand. If you have exactly that many cards of that color, score them, and splay right your cards of that color. Otherwise, return all cards from your hand.'),
),

153 => array('name' => clienttranslate('Cross of Coronado'),
    'non_demand_effect_1' => clienttranslate('Reveal your hand. If you have exactly five cards and five colors in your hand, you win.'),
),

154 => array('name' => clienttranslate('Abell Gallery Harpsichord'),
    'non_demand_effect_1' => clienttranslate('For each value of top card on your board appearing exactly once, draw and score a card of that value in ascending order.'),
),

/* Artifacts - Age 5 */

155 => array('name' => clienttranslate('Boerhavve Silver Microscope'),
    'non_demand_effect_1' => clienttranslate('Return the lowest card in your hand and the lowest top card on your board. Draw and score a card of value equal to the sum of the values of the cards returned.'),
),

156 => array('name' => clienttranslate('Principia'),
    'non_demand_effect_1' => clienttranslate('Return all non‑blue top cards from your board. For each card returned, draw and meld a card of value one higher than the value of the returned card, in ascending order.'),
),

157 => array('name' => clienttranslate('Bill of Rights'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to choose a color where you have more visible cards than I do! Transfer all cards of that color from your board to my board, from the bottom up!'),
    'i_demand_effect_1_is_compel' => true,
),

158 => array('name' => clienttranslate('Ship of the Line Sussex'),
    'non_demand_effect_1' => clienttranslate('If you have no cards in your score pile, choose a color and score all cards of that color from your board. Otherwise, return all cards from your score pile.'),
),

159 => array('name' => clienttranslate('Barque‑Longue La Belle'),
    'non_demand_effect_1' => clienttranslate('Draw and meld a ${age_5}. If the drawn card is not green, repeat this effect.'),
),

160 => array('name' => clienttranslate('Hudson\'s Bay Company Archives'),
    'non_demand_effect_1' => clienttranslate('Score the bottom card of every color on your board. Meld a card from your score pile. Splay right the color of the melded card.'),
),

161 => array('name' => clienttranslate('Gujin Tushu Jinsheng'),
    'non_demand_effect_1' => clienttranslate('If Gujin Tushu Jinsheng is on your board, choose any other top card on any other board. Execute the effects on the chosen card as if they were on this card. Do not share them.'),
),

162 => array('name' => clienttranslate('The Daily Courant'),
    'non_demand_effect_1' => clienttranslate('Draw a card of any value, then place it on top of the draw pile of its age. You may execute the effects of one of your other top cards as if they were on this card. Do not share them.'),
),

163 => array('name' => clienttranslate('Sandham Room Cricket Bat'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_6}. If it is red, claim an achievement, ignoring eligibility.'),
),

164 => array('name' => clienttranslate('Almira, Queen of the Castle'),
    'non_demand_effect_1' => clienttranslate('Meld a card from your hand. Claim an achievement of matching value, ignoring eligibility.'),
),

/* Artifacts - Age 6 */

165 => array('name' => clienttranslate('Kilogram of the Archives'),
    'non_demand_effect_1' => clienttranslate('Return a card from your hand. Return a top card from your board. If you returned two cards and their values sum to ten, draw and score a ${age_10}.'),
),

166 => array('name' => clienttranslate('Puffing Billy'),
    'non_demand_effect_1' => clienttranslate('Return a card from your hand. Draw a card of value equal to the highest number of symbols of the same type visible in that color on your board. Splay right that color.'),
),

167 => array('name' => clienttranslate('Frigate Constitution'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to reveal a card in your hand! If you do, and its value is equal to the value of any of my top cards, return it and all cards of its color from your board!'),
    'i_demand_effect_1_is_compel' => true,
),

168 => array('name' => clienttranslate('U.S. Declaration of Independence'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer the highest card in your hand to my hand, the highest card in your score pile to my score pile, and the highest top card with a ${icon_5} from your board to my board!'),
    'i_demand_effect_1_is_compel' => true,
),

169 => array('name' => clienttranslate('The Wealth of Nations'),
    'non_demand_effect_1' => clienttranslate('Draw and score a ${age_1}. Add up the values of all the cards in your score pile, divide by five, and round up. Draw and score a card of value equal to the result.'),
),

170 => array('name' => clienttranslate('Buttonwood Agreement'),
    'non_demand_effect_1' => clienttranslate('Choose three colors. Draw and reveal a ${age_8}. If the drawn card is one of the chosen colors, score it and splay up that color. Otherwise, return all cards of the drawn card\'s color from your score pile, and unsplay that color.'),
),

171 => array('name' => clienttranslate('Stamp Act'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer a card of value equal to the top yellow card on your board from your score pile to mine! If you do, return a card from your score pile of value equal to the top green card on your board!'),
    'i_demand_effect_1_is_compel' => true,
),

172 => array('name' => clienttranslate('Pride and Prejudice'),
    'non_demand_effect_1' => clienttranslate('Draw and meld a ${age_6}. If the drawn card\'s color is the color with the fewest (or tied) number of visible cards on your board, score the melded card, and repeat this effect.'),
),

173 => array('name' => clienttranslate('Moonlight Sonata'),
    'non_demand_effect_1' => clienttranslate('Choose a color on your board having the highest top card. Meld the bottom card on your board of that color. Claim an achievement, ignoring eligibility.'),
),

174 => array('name' => clienttranslate('Marcha Real'),
    'non_demand_effect_1' => clienttranslate('Reveal and return two cards from your hand. If they have the same value, draw a card of value one higher. If they have the same color, claim an achievement, ignoring eligibility.'),
),

/* Artifacts - Age 7 */

175 => array('name' => clienttranslate('Periodic Table'),
    'non_demand_effect_1' => clienttranslate('Choose two top cards on your board of the same value. If you do, draw a card of value one higher and meld it. If it melded over one of the chosen cards, repeat this effect.'),
),

176 => array('name' => clienttranslate('Corvette Challenger'),
    'non_demand_effect_1' => clienttranslate('Draw and tuck an ${age_8}. Splay up the color of the tucked card. Draw and score a card of value equal to the number of cards of that color visible on your board.'),
),

177 => array('name' => clienttranslate('Submarine H. L. Hunley'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to draw and meld a ${age_7}! Reveal the bottom card on your board of the melded card\'s color! If the revealed card is a ${age_1}, return all cards of its color from your board!'),
    'i_demand_effect_1_is_compel' => true,
),

178 => array('name' => clienttranslate('Jedlik\'s Electromagnetic Self‑Rotor'),
    'non_demand_effect_1' => clienttranslate('Draw and score an ${age_8}. Draw and meld an ${age_8}. Claim an achievement of value 8 if it is available, ignoring eligibility.'),
),

179 => array('name' => clienttranslate('International Prototype Metre Bar'),
    'non_demand_effect_1' => clienttranslate('Choose a value. Draw and meld a card of that value. Splay up the color of the melded card. If the number of cards of that color visible on your board is exactly equal to the card\'s value, you win. Otherwise, return the melded card.'),
),

180 => array('name' => clienttranslate('Hansen Writing Ball'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to draw four ${age_7}! Meld a blue card, then transfer all cards in your hand to my hand!'),
    'i_demand_effect_1_is_compel' => true,
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_7}. If it has no ${icon_6}, tuck it and repeat this effect.'),
),

181 => array('name' => clienttranslate('Colt Paterson Revolver'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to reveal your hand! Draw a ${age_7}! If the color of the drawn card matches the color of any other cards in your hand, return all cards in your hand and all cards in your score pile!'),
    'i_demand_effect_1_is_compel' => true,
),

182 => array('name' => clienttranslate('Singer Model 27'),
    'non_demand_effect_1' => clienttranslate('Tuck a card from your hand. If you do, splay up its color, and then tuck all cards from your score pile of that color.'),
),

183 => array('name' => clienttranslate('Roundhay Garden Scene'),
    'non_demand_effect_1' => clienttranslate('Meld the highest card from your score pile. Draw and score two cards of value equal to the melded card. Execute the effects of the melded card as if they were on this card. Do not share them.'),
),

184 => array('name' => clienttranslate('The Communist Manifesto'),
    'non_demand_effect_1' => clienttranslate('For each player in the game, draw and reveal a ${age_7}. Transfer one of the drawn cards to each player\'s board. Execute the non‑demand effects of your card. Do not share them.'),
),

/* Artifacts - Age 8 */

185 => array('name' => clienttranslate('Parnell Pitch Drop'),
    'non_demand_effect_1' => clienttranslate('Draw and meld a card of value one higher than the highest top card on your board. If the melded card has three ${icon_6}, you win.'),
),

186 => array('name' => clienttranslate('Earhart\'s Lockheed Electra 10E'),
    'non_demand_effect_1' => clienttranslate('For each value below nine, return a top card of that value from your board, in descending order. If you return eight cards, you win. Otherwise, claim an achievement, ignoring eligibility.'),
),

187 => array('name' => clienttranslate('Battleship Bismarck'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to draw and reveal an ${age_8}! Return all cards of the drawn card\'s color from your board!'),
    'i_demand_effect_1_is_compel' => true,
),

188 => array('name' => clienttranslate('Battleship Yamato'),
),

189 => array('name' => clienttranslate('Ocean Liner Titanic'),
    'non_demand_effect_1' => clienttranslate('Score all bottom cards from your board.'),
),

190 => array('name' => clienttranslate('Meiji‑Mura Stamp Vending Machine'),
    'non_demand_effect_1' => clienttranslate('Return a card from your hand. Draw and score three cards of the returned card\'s value.'),
),

191 => array('name' => clienttranslate('Plush Beweglich Rod Bear'),
    'non_demand_effect_1' => clienttranslate('Choose a value. Splay up each color with a top card of the chosen value. Return all cards of the chosen value from all score piles.'),
),

192 => array('name' => clienttranslate('Time'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer a non‑yellow top card with a ${icon_6} from your board to my board! If you do, repeat this effect!'),
    'i_demand_effect_1_is_compel' => true,
),

193 => array('name' => clienttranslate('Garland\'s Ruby Slippers'),
    'non_demand_effect_1' => clienttranslate('Meld an ${age_8} from your hand. If the melded card has no effects, you win. Otherwise, execute the effects of the melded card as if they were on this card. Do not share them.'),
),

194 => array('name' => clienttranslate('\'30 World Cup Final Ball'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to return one of your achievements!'),
    'i_demand_effect_1_is_compel' => true,
    'non_demand_effect_1' => clienttranslate('Draw and reveal an ${age_8}. The single player with the highest top card of the drawn card\'s color achieves it, ignoring eligibility. If that happens, repeat this effect.'),
),

/* Artifacts - Age 9 */

195 => array('name' => clienttranslate('Yeager\'s Bell X‑1A'),
    'non_demand_effect_1' => clienttranslate('Draw and meld a ${age_9}. Execute the effects of the melded card as if they were on this card, without sharing. If that card has a ${icon_6}, repeat this effect.'),
),

196 => array('name' => clienttranslate('Luna 3'),
    'non_demand_effect_1' => clienttranslate('Return all cards from your score pile. Draw and score a card of value equal to the number of cards returned.'),
),

197 => array('name' => clienttranslate('United Nations Charter'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer all top cards on your board with a demand effect to my score pile!'),
    'i_demand_effect_1_is_compel' => true,
    'non_demand_effect_1' => clienttranslate('If you have a top card on your board with a demand effect, draw a ${age_10}.'),
),

198 => array('name' => clienttranslate('Velcro Shoes'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to transfer a ${age_9} from your hand to my hand! If you do not, transfer a ${age_9} from your score pile to my score pile! If you do neither, I win!'),
    'i_demand_effect_1_is_compel' => true,
),

199 => array('name' => clienttranslate('Philips Compact Cassette'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to unsplay all splayed colors on your board!'),
    'i_demand_effect_1_is_compel' => true,
    'non_demand_effect_1' => clienttranslate('Splay up two colors on your board.'),
),

200 => array('name' => clienttranslate('Syncom 3'),
    'non_demand_effect_1' => clienttranslate('Return all cards from your hand. Draw and reveal five ${age_9}s. If you revealed all five colors, you win.'),
),

201 => array('name' => clienttranslate('Rock Around the Clock'),
    'non_demand_effect_1' => clienttranslate('For each top card on your board with a ${icon_6}, draw and score a ${age_9}.'),
),

202 => array('name' => clienttranslate('Magnavox Odyssey'),
    'non_demand_effect_1' => clienttranslate('Draw and meld two ${age_10}s. If they are the same color, you win.'),
),

203 => array('name' => clienttranslate('The Big Bang'),
    'non_demand_effect_1' => clienttranslate('Execute the non‑demand effects of your top blue card, without sharing. If this caused any change to occur, draw and remove a ${age_10} from the game, then repeat this effect.'),
),

204 => array('name' => clienttranslate('Marilyn Diptych'),
    'non_demand_effect_1' => clienttranslate('You may score a card from your hand. You may transfer any card from your score pile to your hand. If you have exactly 25 points, you win.'),
),

/* Artifacts - Age 10 */

205 => array('name' => clienttranslate('Rover Curiosity'),
    'non_demand_effect_1' => clienttranslate('Draw and meld an Artifact ${age_10}. Execute the effects of the melded card as if they were on this card. Do not share them.'),
),

206 => array('name' => clienttranslate('Higgs Boson'),
    'non_demand_effect_1' => clienttranslate('Transfer all cards on your board to your score pile.'),
),

207 => array('name' => clienttranslate('Exxon Valdez'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to remove all cards from your hand, score pile, board, and achievements from the game! You lose! If there is only one player remaining in the game, that player wins!'),
    'i_demand_effect_1_is_compel' => true,
),

208 => array('name' => clienttranslate('Maldives'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to return all cards in your hand but two! Return all cards in your score pile but two!'),
    'i_demand_effect_1_is_compel' => true,
    'non_demand_effect_1' => clienttranslate('Return all cards in your score pile but four.'),
),

209 => array('name' => clienttranslate('Maastricht Treaty'),
    'non_demand_effect_1' => clienttranslate('If you have the most cards in your score pile, you win.'),
),

210 => array('name' => clienttranslate('Seikan Tunnel'),
    // NOTE: Chris provided this clearer wording in https://boardgamegeek.com/thread/1937834/article/40821205#40821205.
    'non_demand_effect_1' => clienttranslate('If you have a color with the most visible cards out of all the colors on all boards, you win.'),
),

211 => array('name' => clienttranslate('Dolly the Sheep'),
    'non_demand_effect_1' => clienttranslate('You may score your bottom yellow card. You may draw and tuck a ${age_1}. If your bottom yellow card is Domestication, you win. Otherwise, meld the highest card in your hand, then draw a ${age_10}.'),
),

212 => array('name' => clienttranslate('Where\'s Waldo?'),
    'non_demand_effect_1' => clienttranslate('You win.'),
),

213 => array('name' => clienttranslate('DeLorean DMC‑12'),
    'non_demand_effect_1' => clienttranslate('If DeLorean DMC‑12 is a top card on any board, remove all top cards on all boards and all cards in all hands from the game.'),
),

214 => array('name' => clienttranslate('Twister'),
    'i_demand_effect_1' => clienttranslate('${I compel} you to reveal your score pile! For each color, meld a card of that color from your score pile!'),
    'i_demand_effect_1_is_compel' => true,
),

/* Artifacts - Relics */

215 => array('name' => clienttranslate('Timbuktu'),
),

216 => array('name' => clienttranslate('Complex Numbers'),
    'non_demand_effect_1' => clienttranslate('You may reveal a card from your hand having exactly the same icons, in type and number, as a top card on your board. If you do, claim an achievement of matching value, ignoring eligibility.'),
),

217 => array('name' => clienttranslate('Newton‑Wickins Telescope'),
    'non_demand_effect_1' => clienttranslate('You may return any number of cards from your score pile. If you do, draw and meld a card of value equal to the number of cards returned. If the melded card has a ${icon_6}, return it.'),
),

// TODO(FIGURES): When implementing Figures, we need to transcribe this relic.
// TODO(FIGURES): Make sure we read https://boardgamegeek.com/thread/1811482/article/27436133#27436133 when implementing this card.
218 => array('name' => clienttranslate('Ching Shih'),
),

219 => array('name' => clienttranslate('Safety Pin'),
    'echo_effect_1' => clienttranslate('Draw and score a ${age_7}.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return all cards of value higher than ${age_6} from your hand! Draw a ${age_6}!'),
),

/* Cities - Age 1 */
220 => array('name' => clienttranslate('Yin')),
221 => array('name' => clienttranslate('Troy')),
222 => array('name' => clienttranslate('Atlantis')),
223 => array('name' => clienttranslate('Thebes')),
224 => array('name' => clienttranslate('Chang\' An')),
225 => array('name' => clienttranslate('Athens')),
226 => array('name' => clienttranslate('Jerusalem')),
227 => array('name' => clienttranslate('Memphis')),
228 => array('name' => clienttranslate('Babylon')),
229 => array('name' => clienttranslate('Uruk')),
230 => array('name' => clienttranslate('Damascus')),
231 => array('name' => clienttranslate('Linzi')),
232 => array('name' => clienttranslate('Hattusa')),
233 => array('name' => clienttranslate('Mohenjo‑Daro')),
234 => array('name' => clienttranslate('Ephesus')),

/* Cities - Age 2 */
235 => array('name' => clienttranslate('Alexandria')),
236 => array('name' => clienttranslate('Carthage')),
237 => array('name' => clienttranslate('Sparta')),
238 => array('name' => clienttranslate('Tikal')),
239 => array('name' => clienttranslate('Nanjing')),
240 => array('name' => clienttranslate('Marseille')),
241 => array('name' => clienttranslate('Teotihuacan')),
242 => array('name' => clienttranslate('Nineveh')),
243 => array('name' => clienttranslate('Luoyang')),
244 => array('name' => clienttranslate('Rome')),

/* Cities - Age 3 */
245 => array('name' => clienttranslate('Hangzhou')),
246 => array('name' => clienttranslate('Cordoba')),
247 => array('name' => clienttranslate('Barcelona')),
248 => array('name' => clienttranslate('Delhi')),
249 => array('name' => clienttranslate('Baghdad')),
250 => array('name' => clienttranslate('Venice')),
251 => array('name' => clienttranslate('Kaifeng')),
252 => array('name' => clienttranslate('Jakarta')),
253 => array('name' => clienttranslate('Mecca')),
254 => array('name' => clienttranslate('Constantinople')),

/* Cities - Age 4 */
255 => array('name' => clienttranslate('Frankfurt')),
256 => array('name' => clienttranslate('Madrid')),
257 => array('name' => clienttranslate('Tenochtitlan')),
258 => array('name' => clienttranslate('Milan')),
259 => array('name' => clienttranslate('Manila')),
260 => array('name' => clienttranslate('Calicut')),
261 => array('name' => clienttranslate('Beijing')),
262 => array('name' => clienttranslate('Lisbon')),
263 => array('name' => clienttranslate('Florence')),
264 => array('name' => clienttranslate('Seville')),

/* Cities - Age 5 */
265 => array('name' => clienttranslate('Naples')),
266 => array('name' => clienttranslate('Boston')),
267 => array('name' => clienttranslate('Zurich')),
268 => array('name' => clienttranslate('Algiers')),
269 => array('name' => clienttranslate('Amsterdam')),
270 => array('name' => clienttranslate('Stockholm')),
271 => array('name' => clienttranslate('Hoi An')),
272 => array('name' => clienttranslate('Osaka')),
273 => array('name' => clienttranslate('Gdansk')),
274 => array('name' => clienttranslate('Tokyo')),

/* Cities - Age 6 */
275 => array('name' => clienttranslate('Berlin')),
276 => array('name' => clienttranslate('Edinburgh')),
277 => array('name' => clienttranslate('Philadelphia')),
278 => array('name' => clienttranslate('Tehran')),
279 => array('name' => clienttranslate('Bombay')),
280 => array('name' => clienttranslate('Rio De Janeiro')),
281 => array('name' => clienttranslate('Paris')),
282 => array('name' => clienttranslate('Dublin')),
283 => array('name' => clienttranslate('Vienna')),
284 => array('name' => clienttranslate('New York City')),

/* Cities - Age 7 */
285 => array('name' => clienttranslate('Munich')),
286 => array('name' => clienttranslate('Johannesburg')),
287 => array('name' => clienttranslate('Lyon')),
288 => array('name' => clienttranslate('Montreal')),
289 => array('name' => clienttranslate('London')),
290 => array('name' => clienttranslate('Toronto')),
291 => array('name' => clienttranslate('St. Petersburg')),
292 => array('name' => clienttranslate('Melbourne')),
293 => array('name' => clienttranslate('Washington')),
294 => array('name' => clienttranslate('San Francisco')),

/* Cities - Age 8 */
295 => array('name' => clienttranslate('Chongqing')),
296 => array('name' => clienttranslate('Kiev')),
297 => array('name' => clienttranslate('Kuala Lumpur')),
298 => array('name' => clienttranslate('Los Angeles')), 
299 => array('name' => clienttranslate('Hamburg')),
300 => array('name' => clienttranslate('São Paulo')),
301 => array('name' => clienttranslate('Chicago')),
302 => array('name' => clienttranslate('Shanghai')),
303 => array('name' => clienttranslate('Buenos Aires')),
304 => array('name' => clienttranslate('Vancouver')),

/* Cities - Age 9 */
305 => array('name' => clienttranslate('Houston')),
306 => array('name' => clienttranslate('Taipei')),
307 => array('name' => clienttranslate('Dallas')),
308 => array('name' => clienttranslate('Perth')),
309 => array('name' => clienttranslate('Santiago')),
310 => array('name' => clienttranslate('Sydney')),
311 => array('name' => clienttranslate('Guadalajara')),
312 => array('name' => clienttranslate('Miami')),
313 => array('name' => clienttranslate('Hong Kong')),
314 => array('name' => clienttranslate('Moscow')),

/* Cities - Age 10 */
315 => array('name' => clienttranslate('Bangalore')),
316 => array('name' => clienttranslate('Atlanta')),
317 => array('name' => clienttranslate('Singapore')),
318 => array('name' => clienttranslate('Seoul')),
319 => array('name' => clienttranslate('Tel Aviv')),
320 => array('name' => clienttranslate('Bangkok')),
321 => array('name' => clienttranslate('Copenhagen')),
322 => array('name' => clienttranslate('Dubai')),
323 => array('name' => clienttranslate('Brussels')),
324 => array('name' => clienttranslate('Essen')),

/* Cities Special achievements */

325 => array('name' => clienttranslate('Legend'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you meld a city with a ${icon_11} on a color already splayed left.'),
),

326 => array('name' => clienttranslate('Repute'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you meld a city with a ${icon_12} on a color already splayed right.'),
),

327 => array('name' => clienttranslate('Fame'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you meld a city with a ${icon_13} on a color already splayed up.'),
),

328 => array('name' => clienttranslate('Glory'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you tuck a city with a ${icon_8}.'),
),

329 => array('name' => clienttranslate('Victory'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you tuck a city with a ${icon_9}.'),
),
    
/* Echoes - Age 1 */

330 => array('name' => clienttranslate('Dice'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_1}. If the card has a bonus, draw and meld a card of value equal to its bonus.'),
),

331 => array('name' => clienttranslate('Perfume'),
    'echo_effect_1' => clienttranslate('Draw and tuck a ${age_1}.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a top card of different value from any top card on my board from your board to mine! If you do, draw and meld a card of equal value!'),
),
    
332 => array('name' => clienttranslate('Ruler'),
    'echo_effect_1' => clienttranslate('Draw a ${age_2}.'),
    'non_demand_effect_1' => clienttranslate('No effect.'),
),    

333 => array('name' => clienttranslate('Bangle'),
    'echo_effect_1' => clienttranslate('Tuck a red card from your hand.'),
    'non_demand_effect_1' => clienttranslate('Draw and foreshadow a ${age_3}.'),
),

334 => array('name' => clienttranslate('Candles'),
    'echo_effect_1' => clienttranslate('If every other player has a higher score than you, draw a ${age_3}.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a card with a ${icon_4} from your hand to my hand! If you do, draw a ${age_1}!'),
),    

335 => array('name' => clienttranslate('Plumbing'),
    'echo_effect_1' => clienttranslate('Score a bottom card from your board.'),
    'non_demand_effect_1' => clienttranslate('No effect.'),
),

336 => array('name' => clienttranslate('Comb'),
    'non_demand_effect_1' => clienttranslate('Choose a color, then draw and reveal five ${age_1}s. Keep all cards that match the color chosen. Return the rest of the drawn cards.'),
),

337 => array('name' => clienttranslate('Ice Skates'),
    'non_demand_effect_1' => clienttranslate('Return up to three cards from your hand. For each card returned, either draw and meld a ${age_2}, or draw and foreshadow a ${age_3}. Return your highest top card.'),
),

338 => array('name' => clienttranslate('Umbrella'),
    'echo_effect_1' => clienttranslate('You may meld a card from your hand.'),
    'non_demand_effect_1' => clienttranslate('Return any number of cards from your hand. Score two cards from your hand for every card you returned.'),
),    

339 => array('name' => clienttranslate('Chopsticks'),
    'echo_effect_1' => clienttranslate('Draw a ${age_1}.'),
    'non_demand_effect_1' => clienttranslate('If the ${age_1} deck has at least one card, you may transfer its bottom card to the available achievements.'),
),

340 => array('name' => clienttranslate('Noodles'),
    'non_demand_effect_1' => clienttranslate('If you have more ${age_1}s in your hand than every other player, draw and score a ${age_2}.'),
    'non_demand_effect_2' => clienttranslate('Draw and reveal a ${age_1}. If it is yellow, score all ${age_1}s from your hand.'),
),

341 => array('name' => clienttranslate('Soap'),
    'non_demand_effect_1' => clienttranslate('Choose a color. You may tuck any number of cards of that color from your hand. If you tucked at least three, you may achieve (if eligible) a card from your hand.'),
),

342 => array('name' => clienttranslate('Bell'),
    'echo_effect_1' => clienttranslate('You may score a card from your hand.'),
    'non_demand_effect_1' => clienttranslate('Draw and foreshadow a ${age_2}.'),
),

343 => array('name' => clienttranslate('Flute'),
    'echo_effect_1' => clienttranslate('You may splay one color of your cards left.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return a card with a bonus from your hand!'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_1}. If it has a bonus, draw a ${age_1}.'),
),

344 => array('name' => clienttranslate('Puppet'),
    'non_demand_effect_1' => clienttranslate('No effect.'),
),  

/* Echoes - Age 2 */

345 => array('name' => clienttranslate('Lever'),
    'echo_effect_1' => clienttranslate('Draw two ${age_2}s.'),
    'non_demand_effect_1' => clienttranslate('You may return any number of cards from your hand. For every two cards of matching value returned, draw a card of value one higher.'),
),  

346 => array('name' => clienttranslate('Linguistics'),
    'echo_effect_1' => clienttranslate('Draw a ${age_3} OR Draw and foreshadow a ${age_4}.'),
    'non_demand_effect_1' => clienttranslate('Draw a card of value equal to a bonus on your board, if you have any.'),
),  

347 => array('name' => clienttranslate('Crossbow'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a card with a bonus from your hand to my score pile!'),
    'non_demand_effect_1' => clienttranslate('Transfer a card from your hand to any other player\'s board.'),
),  

348 => array('name' => clienttranslate('Horseshoes'),
    'echo_effect_1' => clienttranslate('Draw and foreshadow a ${age_2}.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a top card without a ${icon_4} or ${icon_5} from your board to my board! If you do, draw and meld a ${age_2}!'),
),

349 => array('name' => clienttranslate('Glassblowing'),
    'echo_effect_1' => clienttranslate('Score a card with a bonus from your hand.'),
    'non_demand_effect_1' => clienttranslate('Draw and foreshadow a card of value three higher than the lowest non-green top card on your board.'),
), 

350 => array('name' => clienttranslate('Scissors'),
    'echo_effect_1' => clienttranslate('Take a bottom card from your board into your hand.'),
    'non_demand_effect_1' => clienttranslate('You may choose up to two cards from your hand. For each card chosen, either meld it or score it.'),
    'non_demand_effect_2' => clienttranslate('If Paper is a top card on any player\'s board, transfer it to your score pile.'),
),

351 => array('name' => clienttranslate('Toothbrush'),
    'echo_effect_1' => clienttranslate('Tuck all cards of one present value from your hand.'),
    'non_demand_effect_1' => clienttranslate('You may splay any one color of your cards left.'),
    'non_demand_effect_2' => clienttranslate('If the ${age_2} deck has at least one card, you may transfer its bottom card to the available achievements.'),
),  

352 => array('name' => clienttranslate('Watermill'),
    'non_demand_effect_1' => clienttranslate('Tuck a card with a bonus from your hand. If you do, draw a card of value equal to that card\'s bonus. If the drawn card also has a bonus, you may return a card from your hand to repeat this dogma effect.'),
),  
    
353 => array('name' => clienttranslate('Pagoda'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_3}. If you have a card of matching color in your hand, tuck the card from your hand and meld the drawn card. Otherwise, foreshadow the drawn card.'),
),    

354 => array('name' => clienttranslate('Chaturanga'),
    'non_demand_effect_1' => clienttranslate('Meld a card with a bonus from your hand. If you do, draw two cards of value equal to that card\'s bonus. Otherwise, draw and foreshadow a card of value equal to the number of top cards on your board.'),
),    

/* Echoes - Age 3 */

355 => array('name' => clienttranslate('Almanac'),
    'echo_effect_1' => clienttranslate('Draw and foreshadow a ${age_4}.'),
    'non_demand_effect_1' => clienttranslate('You may return a card from your forecast with a bonus. If you do, draw and score a card of value one higher than that bonus.'),
),    

356 => array('name' => clienttranslate('Magnifying Glass'),
    'echo_effect_1' => clienttranslate('Draw a ${age_4} then return a card from your hand.'),
    'non_demand_effect_1' => clienttranslate('You may return three cards of equal value from your hand. If you do, draw a card of value two higher than the cards you returned.'),
    'non_demand_effect_2' => clienttranslate('You may splay your yellow or blue cards left.'),
),    

357 => array('name' => clienttranslate('Liquid Fire'),
    'i_demand_effect_1' => clienttranslate('${I demand} you draw a card of value equal to the highest bonus on your board! Transfer it to my forecast! If it is red, transfer all cards from your hand to my score pile!'),
),

358 => array('name' => clienttranslate('Katana'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer two top cards with a ${icon_4} from your board to my score pile! If you transferred any, draw a card of value equal to the total number of ${icon_4} on those cards and transfer it to my forecast!'),
),

359 => array('name' => clienttranslate('Charitable Trust'),
    'echo_effect_1' => clienttranslate('Draw a ${age_3} or ${age_4}.'),
    'non_demand_effect_1' => clienttranslate('You may meld the card you drew due to Charitable Trust\'s echo effect. If you do, either return or achieve (if eligible) your top green card.'),
),   

360 => array('name' => clienttranslate('Homing Pigeons'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return two cards from your score pile whose values each match at least one card in my hand!'),
    'non_demand_effect_1' => clienttranslate('You may splay your red or green cards left.'),
), 

361 => array('name' => clienttranslate('Deoderant'),
    'echo_effect_1' => clienttranslate('Draw and meld a ${age_3}.'),
    'non_demand_effect_1' => clienttranslate('If you have a top card with a ${icon_4}, draw and meld a ${age_3}. Otherwise, draw a ${age_4}.'),
),   

362 => array('name' => clienttranslate('Sandpaper'),
    'non_demand_effect_1' => clienttranslate('You may return any number of cards from your hand. Draw that many ${age_3}s, and then meld a card from your hand.'),
),

363 => array('name' => clienttranslate('Novel'),
    'echo_effect_1' => clienttranslate('Draw a ${age_3}.'),
    'non_demand_effect_1' => clienttranslate('Draw a ${age_3}. You may splay your purple cards left.'),
    'non_demand_effect_2' => clienttranslate('If all your non-purple top cards share a common icon other than ${icon_1}, claim the Supremacy achievement.'),
),   

364 => array('name' => clienttranslate('Sunglasses'),
    'echo_effect_1' => clienttranslate('Score a card from your hand of a color you have splayed.'),
    'non_demand_effect_1' => clienttranslate('You may either splay your purple cards in the direction one of your other cards is splayed, or you may splay one of your other colors in the direction that your purple cards are splayed.'),
),   

/* Echoes - Age 4 */       
    
365 => array('name' => clienttranslate('Slide Rule'),
    'non_demand_effect_1' => clienttranslate('You may splay your yellow cards right.'),
    'non_demand_effect_2' => clienttranslate('Draw a card of value equal to the value of your lowest top card plus the number of colors you have splayed.'),
),    

366 => array('name' => clienttranslate('Telescope'),
    'echo_effect_1' => clienttranslate('Draw and foreshadow a ${age_5}.'),
    'non_demand_effect_1' => clienttranslate('You may place a card from your forecast on top of its deck. If you do, achieve a card from your forecast if you meet the requirements to do so.'),
),       

367 => array('name' => clienttranslate('Kobukson'),
    'echo_effect_1' => clienttranslate('Splay left one color on any player\'s board.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return all your top cards with a ${icon_4}! Draw and tuck a ${age_4}!'),
    'non_demand_effect_1' => clienttranslate('For every two cards returned as a result of the demand, draw and tuck a ${age_4}.'),
),      
    
368 => array('name' => clienttranslate('Shuriken'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a top non-red card with a ${icon_4} or ${icon_3} from your board to my board! If you do, draw a ${age_4}!'),
    'non_demand_effect_1' => clienttranslate('You may splay your purple cards right.'),
),       

369 => array('name' => clienttranslate('Chintz'),
    'non_demand_effect_1' => clienttranslate('Draw a ${age_4}.'),
    'non_demand_effect_2' => clienttranslate('If you have exactly one card in your hand, draw a ${age_4}, then draw and score a ${age_4}.'),
),    

370 => array('name' => clienttranslate('Globe'),
    'non_demand_effect_1' => clienttranslate('You may return up to three cards from hand of the same color. If you return one, splay any color left; two, right; three, up. If you returned at least one card, draw and foreshadow a ${age_6}.'),
),       

371 => array('name' => clienttranslate('Barometer'),
    'echo_effect_1' => clienttranslate('Transfer a ${age_5} from your forecast to your hand.'),
    'non_demand_effect_1' => clienttranslate('Draw and foreshadow a card of value two higher than a bonus on any board.'),
    'non_demand_effect_2' => clienttranslate('You may reveal and return all cards in your forecast. If any were blue, claim the Destiny achievement.'),
),       

372 => array('name' => clienttranslate('Pencil'),
    'echo_effect_1' => clienttranslate('Draw a ${age_5}.'),
    'non_demand_effect_1' => clienttranslate('You may return up to three cards from your hand. If you do, draw that many cards of value one higher than the highest card you returned. Foreshadow one of them, and return the rest of the drawn cards.'),
),

373 => array('name' => clienttranslate('Clock'),
    'echo_effect_1' => clienttranslate('You may splay your color with the most cards right.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you draw and reveal three ${age_10}s, total the number of ${icon_6} on them, and then return them! Transfer all cards of that value from your hand and score pile to my score pile!'),
),       

374 => array('name' => clienttranslate('Toilet'),
    'echo_effect_1' => clienttranslate('Draw and tuck a ${age_4}.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return all cards from your score pile of value matching the highest bonus on my board!'),
    'non_demand_effect_1' => clienttranslate('You may return a card in your hand and draw a card of the same value.'),
),
    
/* Echoes - Age 5 */    

375 => array('name' => clienttranslate('Lightning Rod'),
    'echo_effect_1' => clienttranslate('Draw and tuck a ${age_5}.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you draw and tuck a ${age_5}! Return your top card of the tucked card\'s color!'),
    'non_demand_effect_1' => clienttranslate('Draw and tuck a ${age_5}. You may return a top card from your board.'),
),
    
376 => array('name' => clienttranslate('Thermometer'),
    'echo_effect_1' => clienttranslate('Meld your bottom green card. Maintain its splay.'),
    'non_demand_effect_1' => clienttranslate('Draw and meld a card of value one higher than the value of your top yellow card. If the melded card is yellow, repeat this dogma effect.'),
),
    
377 => array('name' => clienttranslate('Coke'),
    'echo_effect_1' => clienttranslate('Draw and tuck a ${age_4}.'),
    'non_demand_effect_1' => clienttranslate('Draw and reveal a ${age_6}. If it has a ${icon_5}, meld it and repeat this dogma effect. Otherwise, foreshadow it.'),
), 
  
378 => array('name' => clienttranslate('Octant'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer a top non-red card with a ${icon_2} or ${icon_5} from your board to my board! If you do, draw and foreshadow a ${age_6}!'),
    'non_demand_effect_1' => clienttranslate('Draw and foreshadow a ${age_6}.'),
),

379 => array('name' => clienttranslate('Palampore'),
    'non_demand_effect_1' => clienttranslate('Draw and score a card of value equal to a bonus that occurs more than once on your board, if you have such a bonus.'),
    'non_demand_effect_2' => clienttranslate('You may splay your purple cards right.'),
    'non_demand_effect_3' => clienttranslate('If you have six or more bonuses on your board, claim the Wealth achievement.'),
),   

380 => array('name' => clienttranslate('Seed Drill'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return a top card from your board of value less than ${age_3}!'),
    'non_demand_effect_1' => clienttranslate('Choose the ${age_3}, ${age_4}, or ${age_5} deck. If there is at least one card in that deck, you may transfer its bottom card to the available achievements.'),
),  

381 => array('name' => clienttranslate('Pressure Cooker'),
    'non_demand_effect_1' => clienttranslate('Return all cards from your hand. For each top card on your board with a bonus, draw a card of value equal to that bonus.'),
),  

382 => array('name' => clienttranslate('Stove'),
    'echo_effect_1' => clienttranslate('Score a top card from your board without a ${icon_5}.'),
    'non_demand_effect_1' => clienttranslate('Draw and tuck a ${age_4}. If your top card of the tucked card\'s color has value less than ${age_4}, draw and score a ${age_4}.'),
    'non_demand_effect_2' => clienttranslate('You may splay your green cards right.'),
),     

383 => array('name' => clienttranslate('Piano'),
    'echo_effect_1' => clienttranslate('Draw a card of a value present in any player\'s hand.'),
    'non_demand_effect_1' => clienttranslate('If you have five top cards, each with a different value, return five cards from your score pile and then draw and score a card of each of your top card\'s values in ascending order.'),
),      
    
384 => array('name' => clienttranslate('Tuning Fork'),
    'echo_effect_1' => clienttranslate('Look at the top card of any deck, then place it back on top.'),
    'non_demand_effect_1' => clienttranslate('Return a card from your hand. If you do, draw and reveal a card of the same value, and meld it if it is higher than a top card of the same color on your board. Otherwise, return it. You may repeat this dogma effect.'),
),         

/* Echoes - Age 6 */   

385 => array('name' => clienttranslate('Bifocals'),
    'echo_effect_1' => clienttranslate('Draw and foreshadow a card of any value.'),
    'non_demand_effect_1' => clienttranslate('You may return a card from your forecast. If you do, draw and foreshadow a card of equal value to the card returned.'),
    'non_demand_effect_2' => clienttranslate('You may splay your green cards right.'),
), 

386 => array('name' => clienttranslate('Stethoscope'),
    'echo_effect_1' => clienttranslate('Meld a blue or yellow card from your hand.'),
    'non_demand_effect_1' => clienttranslate('Draw a ${age_7}. If you melded a blue card due to Stethoscope\'s echo effect, draw an ${age_8}.'),
    'non_demand_effect_2' => clienttranslate('You may splay your yellow cards right.'),
),

387 => array('name' => clienttranslate('Loom'),
    'echo_effect_1' => clienttranslate('Score your lowest top card.'),
    'non_demand_effect_1' => clienttranslate('You may return two cards of different value from your score pile. If you do, draw and tuck three ${age_6}s.'),
    'non_demand_effect_2' => clienttranslate('If you have five or more ${icon_0} visible on your board in one color, claim the Heritage achievement.'),
), 

388 => array('name' => clienttranslate('Shrapnel'),
    'i_demand_effect_1' => clienttranslate('${I demand} you draw and tuck a ${age_6}! Transfer the top two cards of its color from your board to my score pile! Transfer the bottom card of its color from my board to your score pile!'),
), 

389 => array('name' => clienttranslate('Hot Air Balloon'),
    'echo_effect_1' => clienttranslate('Draw and score a ${age_7}.'),
    'non_demand_effect_1' => clienttranslate('You may achieve (if eligible) a top card from any other player\'s board if they have an achievement of matching value. If you do, transfer your top green card to that player\'s board. Otherwise, draw and meld a ${age_7}.'),
), 

390 => array('name' => clienttranslate('Steamboat'),
    'i_demand_effect_1' => clienttranslate('${I demand} you draw and reveal a ${age_6}! If it is blue or yellow, transfer it and all cards in your hand to my hand! If it is red or green, keep it and transfer two cards from your score pile to mine! If it is purple, keep it!'),
),     
    
391 => array('name' => clienttranslate('Dentures'),
    'echo_effect_1' => clienttranslate('Draw and tuck a ${age_6}.'),
    'non_demand_effect_1' => clienttranslate('Score the top two non-bottom cards of the color of the last card you tucked due to Dentures. If there are none to score, draw and tuck a ${age_6}, then repeat this dogma effect.'),
    'non_demand_effect_2' => clienttranslate('You may splay your blue cards right.'),
),     
    
392 => array('name' => clienttranslate('Morphine'),
    'echo_effect_1' => clienttranslate('Score an odd-valued card from your hand.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return all odd-valued cards in your hand! Draw a ${age_6}!'),
    'non_demand_effect_1' => clienttranslate('Draw a card of value one higher than the highest card returned due to the demand, if any were returned.'),
    'non_demand_effect_2' =>clienttranslate('You may splay your red cards right.'),
),

393 => array('name' => clienttranslate('Indian Clubs'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return two cards from your score pile!'),
    'non_demand_effect_1' => clienttranslate('For every value of card you have in your score pile, score a card from your hand of that value.'),
),  

394 => array('name' => clienttranslate('Kaleidoscope'),
    'non_demand_effect_1' => clienttranslate('Draw and meld a ${age_7}. You may splay your cards of that color right.'),
),   
   
/* Echoes - age 7 */

395 => array('name' => clienttranslate('Photography'),
    'echo_effect_1' => clienttranslate('Meld a card from your forecast.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you take the highest top card from your board into your hand!'),
    'non_demand_effect_1' => clienttranslate('If you have at least three echo effects visible in one color, claim the History achievement.'),
),

396 => array('name' => clienttranslate('Typewriter'),
    'non_demand_effect_1' => clienttranslate('Return all cards from your hand. Draw a ${age_6}. For each color of card returned, draw a card of the next higher value.'),
),

397 => array('name' => clienttranslate('Machine Gun'),
    'echo_effect_1' => clienttranslate('If you have five top cards, draw and score a ${age_7}.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer all of your top cards with a bonus to my score pile! If you transfered any, draw a ${age_7}!'),
    'non_demand_effect_1' => clienttranslate('Return all your top non-red cards.'),
),

398 => array('name' => clienttranslate('Rubber'),
    'echo_effect_1' => clienttranslate('Draw and tuck two ${age_8}s.'),
    'non_demand_effect_1' => clienttranslate('Score a top card from your board without a bonus.'),
    'non_demand_effect_2' => clienttranslate('You may splay your red cards up.'),
),

399 => array('name' => clienttranslate('Jeans'),
    'echo_effect_1' => clienttranslate('Draw two ${age_9}s. Return one, foreshadow the other.'),
    'non_demand_effect_1' => clienttranslate('Choose two different values less than ${age_7}. Draw and reveal a card of each value. Meld one, and return the other.'),
),

400 => array('name' => clienttranslate('Telegraph'),
    'non_demand_effect_1' => clienttranslate('You may choose an opponent and a color. Match your splay in that color to theirs.'),
    'non_demand_effect_2' => clienttranslate('You may splay your blue cards up.'),
),

401 => array('name' => clienttranslate('Elevator'),
    'echo_effect_1' => clienttranslate('Score your top or bottom green card.'),
    'non_demand_effect_1' => clienttranslate('Choose a value present in your score pile. Choose to transfer all cards of the chosen value from either all other players\' hands or all their score piles to your score pile.'),
),

402 => array('name' => clienttranslate('Fertilizer'),
    'non_demand_effect_1' => clienttranslate('You may return a card from your hand. If you do, transfer all cards from all score piles to your hand of value equal to the returned card.'),
    'non_demand_effect_2' => clienttranslate('Draw and foreshadow a card of any value.'),
),

403 => array('name' => clienttranslate('Ice Cream'),
    'echo_effect_1' => clienttranslate('Score a non-purple top card from your board without a bonus.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you draw and meld a ${age_1}!'),
    'non_demand_effect_1' => clienttranslate('Choose the ${age_6}, ${age_7}, ${age_8}, or ${age_9} deck. If there is at least one card in that deck, you may transfer its bottom card to the available achievements.'),
),

404 => array('name' => clienttranslate('Saxophone'),
    'non_demand_effect_1' => clienttranslate('You may splay your purple cards up.'),
    'non_demand_effect_2' => clienttranslate('If the ${music_note} for Bell, Flute, Piano, and Saxophone are visible anywhere, you win. Otherwise, draw a ${age_7} for each ${music_note} that is visible.'),
),

/* Echoes - Age 8 */

405 => array('name' => clienttranslate('Radio Telescope'),
    'non_demand_effect_1' => clienttranslate('For every two ${icon_3} on your board, draw a ${age_9}. Meld one of the cards drawn and return the rest. If you meld A. I. due to this dogma effect, you win.'),
),

406 => array('name' => clienttranslate('X-Ray'),
    'echo_effect_1' => clienttranslate('Draw and tuck an ${age_8}.'),
    'non_demand_effect_1' => clienttranslate('For every three ${icon_2} on your board, draw and foreshadow a card of any value.'),
    'non_demand_effect_2' => clienttranslate('You may splay your yellow cards up.'),
),    
    
407 => array('name' => clienttranslate('Bandage'),
    'echo_effect_1' => clienttranslate('Meld a card from hand with a ${icon_2}.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return the highest card in your score pile for which you do not have a card of matching value in your hand! Return a top card from your board with a ${icon_6}!'),
),

408 => array('name' => clienttranslate('Parachute'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer all cards without a ${icon_6} from your hand to my hand!'),
),

409 => array('name' => clienttranslate('Nylon'),
    'non_demand_effect_1' => clienttranslate('Draw and tuck an ${age_8} for every three ${icon_5} on your board. If any of the tucked cards were green, repeat this dogma effect.'),
    'non_demand_effect_2' => clienttranslate('You may splay your red cards up.'),
),    

410 => array('name' => clienttranslate('Sliced Bread'),
    'echo_effect_1' => clienttranslate('Return all cards from your hand and draw two ${age_8}s.'),
    'non_demand_effect_1' => clienttranslate('Return a card from your score pile. Draw and score two cards of value one less than the value of the card returned.'),
),

411 => array('name' => clienttranslate('Air Conditioner'),
    'echo_effect_1' => clienttranslate('You may score a card from your hand.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return all cards from your score pile of value matching any of your top cards!'),
),

412 => array('name' => clienttranslate('Tractor'),
    'echo_effect_1' => clienttranslate('Draw a ${age_7}.'),
    'non_demand_effect_1' => clienttranslate('Draw and score a ${age_7}. Draw a ${age_7}.'),
),

413 => array('name' => clienttranslate('Crossword'),
    'non_demand_effect_1' => clienttranslate('For each visible bonus on your board, draw a card of that value.'),
),

414 => array('name' => clienttranslate('Television'),
    'echo_effect_1' => clienttranslate('Draw and meld an ${age_8}.'),
    'non_demand_effect_1' => clienttranslate('Choose a value and an opponent. Transfer a card of that value from their score pile to their board. If they have an achievement of the same value, achieve (if eligible) a card of that value from their score pile.'),
),

/* Echoes - Age 9 */

415 => array('name' => clienttranslate('Calculator'),
    'non_demand_effect_1' => clienttranslate('Score two bottom non-blue cards from your board. If you scored two and they have a total value less than 11, draw a card of that total value and repeat this dogma effect (once only).'),
    'non_demand_effect_2' => clienttranslate('You may splay your blue cards up.'),
),

416 => array('name' => clienttranslate('Laser'),
    'non_demand_effect_1' => clienttranslate('Return all unclaimed standard achievements. Then, return half (rounded up) of the cards in your score pile. Draw and meld two ${age_10}s.'),
),    
    
417 => array('name' => clienttranslate('Helicopter'),
    'non_demand_effect_1' => clienttranslate('Transfer a top card other than Helicopter from any player\'s board to its owner\'s score pile. You may return a card from your hand which shares an icon with the transferred card. If you do, repeat this dogma effect.'),
),    
    
418 => array('name' => clienttranslate('Jet'),
    'echo_effect_1' => clienttranslate('Meld a card from your hand.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return your top card of the color I melded due to Jet\'s echo effect!'),
),

419 => array('name' => clienttranslate('Credit Card'),
    'echo_effect_1' => clienttranslate('Draw and foreshadow a ${age_9}.'),
    'non_demand_effect_1' => clienttranslate('You may take a top non-green card from your board into your hand. If you do, draw and score a card of equal value.'),
    'non_demand_effect_2' => clienttranslate('You may splay your green cards up.'),
),

420 => array('name' => clienttranslate('Email'),
    'echo_effect_1' => clienttranslate('Draw and foreshadow a ${age_10}.'),
    'non_demand_effect_1' => clienttranslate('Draw and foreshadow a ${age_9}.'),
    'non_demand_effect_2' => clienttranslate('Execute all non-demand dogma effects on your lowest non-green top card. Do not share them.'),
),

421 => array('name' => clienttranslate('ATM'),
    'echo_effect_1' => clienttranslate('Draw and score a card of any value.'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer the highest top non-yellow card without a ${icon_1} from your board to my board!'),
    'non_demand_effect_1' => clienttranslate('You may splay your purple cards up.'),
),

422 => array('name' => clienttranslate('Wristwatch'),
    'echo_effect_1' => clienttranslate('Take a non-yellow top card from your board and tuck it.'),
    'non_demand_effect_1' => clienttranslate('For each visible bonus on your board, draw and tuck a card of that value, in ascending order.'),
),   

423 => array('name' => clienttranslate('Karaoke'),
    'echo_effect_1' => clienttranslate('Draw and meld a card of value less than ${age_10}.'),
    'non_demand_effect_1' => clienttranslate('Execute all of the non-demand dogma effects of the card you melded due to Karaoke\'s echo effect. Do not share them.'),
    'non_demand_effect_2' => clienttranslate('You may take a bottom card from your board into your hand.'),
),

424 => array('name' => clienttranslate('Rock'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer your top green card to my hand! If Scissors is your new top green card, I win!'),
    'non_demand_effect_1' => clienttranslate('You may score a top card from your board. If Paper is your top green card, you win.'),
),

/* Echoes - Age 10 */

425 => array('name' => clienttranslate('Artificial Heart'),
    'non_demand_effect_1' => clienttranslate('Claim one standard achievement, if eligible. Your current score is doubled for the purpose of checking eligibility.'),
),

426 => array('name' => clienttranslate('Human Genome'),
    'non_demand_effect_1' => clienttranslate('You may draw and score a card of any value. Take a bottom card from your board into your hand. If the values of all of the cards in your hand match the values of all the cards in your score pile exactly, you win.'),
),

427 => array('name' => clienttranslate('Camcorder'),
    'i_demand_effect_1' => clienttranslate('${I demand} you transfer all cards in your hand to my hand! Draw a ${age_9}!'),
    'non_demand_effect_1' => clienttranslate('Meld all ${age_9}s from your hand. Return all other cards from your hand. Draw three ${age_9}s.'),
),    
    
428 => array('name' => clienttranslate('Social Networking'),
    'i_demand_effect_1' => clienttranslate('${I demand} you choose an icon type! Transfer all top cards without that icon from your board to my score pile!'),
    'non_demand_effect_1' => clienttranslate('If you have fewer ${icon_5}, fewer ${icon_1}, and ${icon_4} than each other player, you win.'),
),

429 => array('name' => clienttranslate('GPS'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return all cards from your forecast!'),
    'non_demand_effect_1' => clienttranslate('Draw and foreshadow three ${age_10}s.'),
    'non_demand_effect_2' => clienttranslate('You may splay your yellow cards up.'),
),

430 => array('name' => clienttranslate('Flash Drive'),
    'i_demand_effect_1' => clienttranslate('${I demand} you return four cards from your score pile!'),
    'non_demand_effect_1' => clienttranslate('Return a card from your score pile. If you do, you may splay any one color of your cards up.'),
), 
    
431 => array('name' => clienttranslate('Cell Phone'),
    'non_demand_effect_1' => clienttranslate('Draw a ${age_10} for every two ${icon_6} on your board.'),
    'non_demand_effect_2' => clienttranslate('You may splay your green cards up.'),
    'non_demand_effect_3' => clienttranslate('You may tuck any number of cards with a ${icon_6} from your hand, splaying up each color you tucked into.'),
),   

432 => array('name' => clienttranslate('MP3'),
    'non_demand_effect_1' => clienttranslate('Return any number of cards from your hand. For each card returned, claim two standard achievements for which you are eligible.'),
    'non_demand_effect_2' => clienttranslate('Draw and score a card of value equal to a bonus on your board.'),
),   

433 => array('name' => clienttranslate('Puzzle Cube'),
    'non_demand_effect_1' => clienttranslate('You may score the bottom card or two bottom cards of one color from your board. If all the colors on your board contain the same number of visible cards (unsplayed = 1), you win.'),
    'non_demand_effect_2' => clienttranslate('Draw and meld a ${age_10}.'),
),

434 => array('name' => clienttranslate('Sudoku'),
    'non_demand_effect_1' => clienttranslate('Draw and meld a card of any value. If you have at least nine different bonus values visible on your board, you win. Execute each of the melded card\'s non-demand dogma effects. Do not share them.'),
),

/* Echoes - Special achievements */

435 => array('name' => clienttranslate('Wealth'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you have eight or more bonuses visible on your board.'),
    'alternative_condition_for_claiming' => clienttranslate('May also be claimed via ${age_5} Palampore.')),

436 => array('name' => clienttranslate('Destiny'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you have seven or more cards in your forecast.'),
    'alternative_condition_for_claiming' => clienttranslate('May also be claimed via ${age_4} Barometer.')),

437 => array('name' => clienttranslate('Heritage'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you have eight or more ${icon_0} visible in one color.'),
    'alternative_condition_for_claiming' => clienttranslate('May also be claimed via ${age_6} Loom.')),

438 => array('name' => clienttranslate('History'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you have a color with four or more visible echo effects.'),
    'alternative_condition_for_claiming' => clienttranslate('May also be claimed via ${age_7} Photography.')),

439 => array('name' => clienttranslate('Supremacy'),
    'condition_for_claiming' => clienttranslate('Claim this special achievement ${immediately} if you have three icons or more of the same icon type visible in each of four different colors. (Each color has to have the same icon as the other colors.)'),
    'alternative_condition_for_claiming' => clienttranslate('May also be claimed via ${age_3} Novel.')),

);

