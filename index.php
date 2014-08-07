<?php
  // Bughzzfeed Headline Generator
  // By Dave Schumaker (@davely)
  // 2014.05.13

  /*
  EXAMPLES:
    - 200 Stupidly Simple Foods to Increase Your Productivity
    - 7163 Stupidly Outrageous Tricks To Compromise Your Reputation
    - 632 Rottenly Surprising Beliefs That Will Scare Your Dog
  */

  // IDEAS
  // Break functions down into knowns for people, emotions, etc. So we can go back and call multiple times as needed.

  session_start();

  // Report all PHP errors (see changelog)
  //error_reporting(E_ALL);

  include('wordlist.php');

  function get_word($array, $chances) {
    // Use this to pull a random word from any array that we provide for adjectives, verbs, nouns, or anything else.

    // Chances determine probability of result happening.
    if (is_null($chances)) {
      $chances = 1;
    }

    // Used for instances where we don't want to show a word every time. Maybe 1 in X times WHERE X = total number.
    if ($chances != 1) {
      $mod_chance = rand(1,$chances);
      if ($mod_chance == 1) {
        $result = $array[array_rand($array, 1)] . " ";
      } else {
        $result = "";
      }
    } else {
        $result = $array[array_rand($array, 1)] . " ";
    }

    return $result;
  }

  function add_Hashtag($word) {
    // For Twitterness-sake, randomlly add a hashtag to a word!
    $hashtag_chance = rand(1,5);
    if ($hashtag_chance == 1) {
      $new_word = "#" . $word;
    } else {
      $new_word = $word;
    }

    return $new_word;
  }

  function verb_check($action, $verb) {
    // Sanity check what the verb is and determine whether or not we'll be modifying it later.
    if ($action == "Adopt" || $action == "Eat" || $action == "Enjoy" || $action == "Talk About") {
      $verb = "";
    }
    return $verb;
  }

  // Use this to set up variables that we can pass back to each function (so we can match up proper grammar, etc)
  $how_many = get_num();
  $get_adjmodifier = get_word(get_adjmodifier(),2);
  $get_adjective = get_word(get_adjective(),1);
  $get_noun = get_word(get_noun(),1);
  $get_noun = add_Hashtag($get_noun); // Randomlly add a hashtag to the noun!
  $get_verb = get_word(get_verb(),1);
  $get_Action = get_word(get_Action($get_noun),1);
  $get_WhoElse = get_word(get_WhoElse(),1);
  $get_people = get_word(get_People(),1);
  $get_people = add_Hashtag($get_people); // Randomly add a hashtag to the word.
  $anchor_word = get_word(get_AnchorWord(),1);
  $get_place = get_word(get_Place(),5);
  $get_verbother = get_word(get_VerbOthers(),1);
  $get_verbyou = get_word(get_VerbYou(),1);
  $get_reaction = get_word(get_Reaction(),1);

  // Final sanity check out verb based on our action
  $get_verb = verb_check($get_Action, $get_verb);

  // Sanity check to make sure that we don't have an adjective modifier if there's no adjective.
  if ($get_adjective == "") {
    $get_adjmodifier = "";
  }

  // Other random sanity check stuff that we should move into a function. Probably.
  if ($get_Action == "Talk About") {
    $anchor_word = "To ";
  }

  if ($get_Action == "Play") {
    $anchor_word = "To ";
  }

  if ($get_noun == "Ways " && $anchor_word == "That Will ") {
    $anchor_word = "That Will Make You ";
  }

  if ($get_Action == "Eat " && $anchor_word == "That Can ") {
    $anchor_word = "That You Can ";
  } elseif ($get_Action == "Enjoy" && $anchor_word == "That ") {
    $anchor_word = "That You Can ";
  } elseif ($get_Action == "Enjoy" && $anchor_word == "That Can ") {
    $anchor_word = "That You Can ";
  }

  if ($get_Action == "Adopt " && $anchor_word == "That Can ") {
    $anchor_word = "That You Can ";
  } elseif ($get_Action == "Adopt" && $anchor_word == "That Will ") {
    $anchor_word = "That You Will Want To ";
  }

  if ($get_verb == "Never Tell " && $anchor_word == "That Can ") {
      $anchor_word == "That You Can ";
  }

  if ($get_verb == "Question " && $anchor_word == "That Will ") {
    $anchor_word = "That Will Make You ";
  } elseif ($get_verb == "Question " && $anchor_word == "That Can ") {
    $anchor_word = "That Can Make You ";
  }

  if ($get_WhoElse != "" && $get_verb == "Restore Your Faith ") {
    // I think I screwed this one up...
    //$get_verb = "Restore Your Faith in ";
    //$get_Action = "";
  }

  if ($get_verb == "Make You Laugh ") {
    $get_Action = "";
  }

  // #NEVERFORGET
  if ($get_verb == "Never Forget ") {
    $anchor_word = "To ";
    $get_Action = "";
    $get_WhoElse = "";
  }

  // LET'S DISPLAY OUR BUGHZZFEED HEADLINES!!

  //echo "<p><img src=\"bughzzfeed.jpg\" width=\"100\">";
  echo "<h1>BUGHZZFEED BOT</h1>";
  //echo "</p>";

  echo "<p>An ironic generator that specializes in clickbait headlines</p>";


  // Randomly generate a sentence structure. Hopefully this will improve sentax of headlines.
  $sentence_structure = rand(1,5);
  //$sentence_structure = 4;
  if ($sentence_structure == 1) {

      $get_you = get_word(get_You(),1);

      if ($get_you == "You ") {
          $get_place = get_word(get_Place(),3);
          $get_people = "";
      } else {
          $get_people = get_word(get_People(),1);
          $get_place = get_word(get_Place(),10);
      }

      echo "Case 1<br/>";
      $sentence = $how_many . $get_adjective . $get_noun . "to " . $get_verb . $get_you . $get_people . $get_place;
  } elseif ($sentence_structure == 2) {
    $get_people = get_word(get_People(),1);
    $get_adjective = get_word(get_adjective(),3);
    echo "Case 2<br/>";
    $sentence = $how_many . $get_adjective . $get_noun . "Your " . $get_people . "Can Use to " . $get_verb . "You " . $get_place;
  } elseif ($sentence_structure == 3) {
    echo "Case 3<br/>";
    $sentence = $how_many . $get_adjmodifer . $get_adjective . $get_noun . $anchor_word . $get_verbother . "Your " . $get_people . $get_place;
  } elseif ($sentence_structure == 4) {
    echo "Case 4<br/>";
    $sentence = $how_many . $get_adjmodifer . $get_adjective . $get_noun . $anchor_word . $get_verbyou . "You " . $get_place;
  } else {
    echo "Case 5<br/>";
    $sentence = $how_many . $get_adjmodifier . $get_adjective . $get_noun . $anchor_word . $get_verb . $get_Action . $get_WhoElse . $get_place;
  }

  // Randomly add the #Bughzzfeed Hashtag
  $hashtag_chance = rand(1,5);
  if ($hashtag_chance == 1) {
    $hashtag = " #Bughzzfeed";
  } else {
    $hashtag = "";
  }

  //$_SESSION['session_sentence'] = $sentence . $hashtag; // Store in a session variable so we can potentially tweet this!

  $new_sentence = $sentence . $hashtag;

  echo "<h2>";
  echo $new_sentence;
  echo "</h2>";

  echo "<p>";
  echo "<small>* Any potentially offensive headlines are completely randomly generated.</small>";
  echo "</p>";

  echo "<p>";
  echo "<a href=\"" . $_SERVER['PHP_SELF'] . "\">[GIVE ME ANOTHER HEADLINE, PLEASE]</a>&nbsp;";
  echo "<a href=\"" . $_SERVER['PHP_SELF'] . "?action=tweet\">[TWEET THIS!!]</a>";
  echo "</p>";

  if ((isset($_GET["action"]) && ($_GET["action"] == "tweet"))) {
    //$new_sentence = $_SESSION['session_sentence'];
    echo "SUCCESS!";

  } else {
    //$_SESSION['session_sentence'] = $new_sentence; // Store in a session variable so we can potentially tweet this!
  }

?>
