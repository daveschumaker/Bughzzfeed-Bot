<?php

  // LET'S TWEET SOME SHIT!

  require_once 'libs/twitteroauth.php';


  if (!defined('CONSUMER_KEY'))
  {
      define('CONSUMER_KEY', '');
  }

  if (!defined('CONSUMER_SECRET'))
  {
      define('CONSUMER_SECRET', '');
  }

  if (!defined('OAUTH_TOKEN'))
  {
      define('OAUTH_TOKEN', '');
  }

  if (!defined('OAUTH_SECRET'))
  {
      define('OAUTH_SECRET', '');
  }

  $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_SECRET);
  $content = $connection->get('account/verify_credentials');

  $connection->post('statuses/update', array('status' => $new_sentence));
