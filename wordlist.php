<?php

  function get_num() {
    // HOW MANY types of AWESOME THINGS are we talking about?
    $how_many = rand(3,900);
    $how_many = $how_many . " "; // Use this to format sentence and put a space at the end of it.
    return $how_many;
  }

  function get_adjmodifier() {
    // Use this when we want to generate an **exceptionally awesome** adjective.
    // i.e., If the adjective is "awesome", this adds something like "exceptionally" in front of it.
    // EXCEPTIONALLY AWESOME.
    $modifier = array(
      "Amazingly",
      "Awesomely",
      "Exceptionally",
      "Greatly",
      "Horribly",
      "Most",
      "Outrageously",
      "Ridiculously",
      "Rottenly",
      "Simply",
      "Stupidly",
      "Surprisingly",
      "Unbelievably"
    );

    return $modifier;
  }

  function get_adjective() {
    // Determine HOW we're going to describe this AWESOME THING!
    $adjectives = array(
      "Adorable",
      "Amazing",
      "Awesome",
      "Awkward",
      "Bad",
      "Beautiful",
      "Cheap",
      "Crazy",
      "Creepy",
      "Cuddly",
      "Cute",
      "Dangerous",
      "Easy",
      "Effective",
      "Efficient",
      "Expensive",
      "Favorite",
      "Funny",
      "Gastly",
      "Great",
      "Gross",
      "Highly Effective",
      "Hilarious",
      "Horrible",
      "Important",
      "Incredible",
      "Innocent",
      "Inappropriate",
      "Illegal",
      "Key",
      "Life Changing",
      "Little-Known",
      "Long",
      "Obvious",
      "Outrageous",
      "Ridiculous",
      "Rotten",
      "Secret",
      "Short",
      "Simple",
      "Stunning",
      "Stupid",
      "Surprising",
      "Tear-jerking",
      "Unbelievable",
      "Unethical",
    );

    // Only use this modifier around 20 percent of the time.
    /*
    $mod_chance = rand(1,8);
    if ($mod_chance == 1) {
      $result = ""; // Return nothing!
    } else {
      $adjmod_result = array_rand($adjectives, 1);
      $result = get_adjmodifier() . $adjectives[$adjmod_result] . " ";
    }
    */

    //$adj_result = array_rand($adjectives, 1);
    return $adjectives;
  }

  function get_noun() {
    // Select WHAT AWESOME THING we're going to be talking about!
    $nouns = array(
      "Activities",
      "Android Phones",
      "Animals",
      "Apps",
      "Bands",
      "Baseball Teams",
      "Behaviors",
      "Beliefs",
      "Books",
      "Boys",
      "Burritos",
      "Cars",
      "Celebrities",
      "Cities",
      "Creatures",
      "Dad Jokes",
      "Dates",
      "Decisions",
      "Democrats",
      "Dinners",
      "Dinosaurs",
      "Dr. Seuss Characters",
      "Facts",
      "Fantasies",
      "Foods",
      "Friends",
      "Gestures",
      "Girls",
      "Goals",
      "Habits",
      "Hacks",
      "Hamburgers",
      "Humans",
      "Ideas",
      "Images",
      "Jokes",
      "Kids",
      "Langauges",
      "Meals",
      //"Means",
      "Methods",
      "Moves",
      "Movies",
      "Musicians",
      "Noises",
      "Outfits",
      "Pants",
      "People",
      "Pets",
      "Pictures",
      "Places",
      "Pranks",
      "Puns",
      "Quotes",
      "Reasons",
      "Republicans",
      "Restaurants",
      "Rules",
      "Scenarios",
      "Situations",
      "Snapchats",
      "Songs",
      "Song Lyrics",
      "Sounds",
      "Sports",
      "Strangers",
      "Television Shows",
      "Things",
      "Tips",
      "Tricks",
      "Tragedies",
      "Tweets",
      "Vacations",
      "Vegetables",
      "Villains",
      "Ways",
      "Websites",
      "Words",
      "Workouts"
    );

    return $nouns;
  }

  function get_Place() {
    $array = array(
      "at Church",
      "at a Zoo",
      "at the Gym",
      "at School",
      "at Work",
      "during a Meeting",
      "in a Coffee Shop",
      "in a Hospital",
      "in a Restaurant",
      "in the Bathroom",
      "in the Bedroom",
      "in a Grocery Store",
      "in the Lockeroom",
      "in the Kitchen",
      "on the Bus",
      "on Facebook",
      "on Twitter",
      "on an Airplane",
      "under the Sheets",
    );

    return $array;
  }

  function get_VerbOthers () {
    // Verbs that affect other people
    $verbs = array(
      "Agitate",
      "Anger",
      "Annoy",
      "Bore",
      "Compromise",
      "Depress",
      "Endanger",
      "Excite",
      "Fire Up",
      "Frustrate",
      "Hurt",
      "Impress",
      "Influence",
      "Inspire",
      "Motivate",
      "Never Share With",
      "Never Tell",
      "Offend",
      "Resonate With",
      "Ruin",
      "Scare",
      "Shame",
      "Surprise",
      "Teach",
      "Turn On",
      "Turn Off",
    );

    return $verbs;
  }

  function get_VerbYou () {
    // Verbs that affect you!
    $verbs = array(
    "Affect",
    "Amaze",
    "Anger",
    "Arouse",
    "Bore",
    "Change",
    "Compromise",
    "Depress",
    "Endanger",
    "Excite",
    "Frustrate",
    "Hurt",
    "Impact",
    "Influence",
    "Inspire",
    "Motivate",
    "Offend",
    "Ruin",
    "Scare",
    "Shame",
    "Surprise",
    );

    return $verbs;
  }

  function get_verb() {
    // Determine the ACTION that we'll use for this AWESOME THING!
    $verbs = array(
      "Affect",
      "Anger",
      "Boost",
      "Change",
      "Compromise",
      "Decrease",
      "Endanger",
      "Enhance",
      "Forget",
      "Frustrate",
      "Question",
      "Impact",
      "Impress",
      "Improve",
      "Increase",
      "Influence",
      "Inspire",
      "Learn",
      "Make You Laugh",
      "Make You Regret",
      "Never Forget",
      "Never Show",
      "Never Tell",
      "Offend",
      "Restore Your Faith In",
      "Ruin",
      "Scare",
      "Share With",
      "Strain",
      "Surprise",
      "Teach",
      "Think About",
      "Turn On",
    );

    return $verbs;
  }

  function get_Action($word) {
    // Finally! What will the AWESOME THINGS act on?! Only rand() knows...
    $actions = array(
      "Adopt",
      "Eat",
      "Enjoy",
      "Play",
      "Talk About",
      "Your Appetite",
      "Your Boss",
      "Your Career",
      "Your Confidence",
      "Your Cat",
      "Your Dog",
      "Your Energy",
      "Your Health",
      "Your Hygiene",
      "Your Life",
      "Your Looks",
      "Your Mom",
      "Your Personality",
      "Your Productivity",
      "Your Reputation",
      "Your Relationship",
      "Your Sexuality",
      "Your Stamina",
      "Your Style",
      "Your Yoga Teacher",
    );

    return $actions;
  }

  function get_People() {
    // A list of random people to utilize
    $array = array(
      "Babysitter",
      "Barista",
      "Boss",
      "Boyfriend",
      "Brother",
      "Bus Driver",
      "Cab Driver",
      "Cat",
      "Coworkers",
      "Doctor",
      "Dog",
      "Friend",
      "Girlfriend",
      "Husband",
      "Love Life",
      "Neighbor",
      "Mom",
      "Mother-in-Law",
      "Therapist",
      //"the President",
      "Sister",
      "Wife",
      "Yoga Teacher",
    );

    return $array;
  }

  function get_You() {
    // Determine You vs. Your
    $array = array(
      "You",
      "Your",
    );

    return $array;
  }

  function get_AnchorWord() {
    // Determine how to structure the sentece. e.g., "Foods *that can* prevent you from starving" vs. "Foods *to* prevent you from starving"
    $anchor_word = array(
      "To",
      //"To Have",
      "That",
      "That Can",
      "That Might",
      "That Should",
      "That Will",
    );

    return $anchor_word;
  }

  function get_Reaction() {
    // Use this if we want to capture a reaction.
    $reaction = array(
      "Cheer",
      "Clap",
      "Cringe",
      "Cry",
      "Jump",
      "Laugh",
      "Scream",
      "Shake",
      "Shiver",
      "Shudder",
      "Squeel",
    );

    return $reaction;
  }

  function get_WhoElse() {
    // Determine whether or not we're going to enjoy this action with someone else or not.
    $who_else = array(
      "At Work",
      "At School",
      "By Yourself",
      "To Others",
      "With Your Family",
      "With Your Coworkers",
      "With Your Mother-in-Law",
      "With Your Boyfriend",
      "With Your Girlfriend",
      "With Your Husband",
      "With Your Wife",
      "With Your Therapist",
      "With Your Brother",
      "With Your Sister",
    );

    // Only use this modified around 20 percent of the time.
    /*
    $mod_chance = rand(1,5);
    if ($mod_chance == 1) {
      $adjmod_result = array_rand($who_else, 1);
      $result = " " . $who_else[$adjmod_result] . " ";
    } else {
      $result = ""; // Return nothing!
    }
    */

    return $who_else;
  }
