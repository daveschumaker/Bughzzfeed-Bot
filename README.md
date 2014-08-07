Bughzzfeed Bot
==============

This is my experiment with creating a Twitter bot in PHP that automatically generates Buzzfeed style headlines every so often (based on a cron job).

e.g., "29 Ridiculously Amazing Examples of Horrible Code that will make you cry."

This script uses the awesome Twitter OAuth PHP library created by Abraham Williams: https://github.com/abraham/twitteroauth

To use, enter your Twitter OAuth details in _twitter_auth.php_. Then point some sort of cron job to index.php using something like curl and then watch the post post away!

There is currently some wacky behavior happening in terms of how certain sentence structures are generated, but it's something I'd like to figure out in the future.

You can see the bot in action here: http://twitter.com/bughzzfeed