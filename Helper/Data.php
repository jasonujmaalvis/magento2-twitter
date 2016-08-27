<?php
/**
 * Jason Alvis Twitter
 *
 * @category    Jasonalvis
 * @package     Jasonalvis_Twitter
 * @author      Jason Alvis <hello@jasonalvis.co.uk>
 * @copyright   Copyright (c) 2016 Jason Alvis (http://jasonalvis.co.uk)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
namespace Jasonalvis\Twitter\Helper;

use Abraham\TwitterOAuth\TwitterOAuth;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Core store config
     *
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

    private $consumerKey;
    private $consumerSecret;
    private $accessToken;
    private $accessTokenSecret;

    CONST CONFIG_ENABLED             = 'jasonalvis_twitter/config/enabled';
    CONST CONFIG_SCREEN_NAME         = 'jasonalvis_twitter/config/screen_name';
    CONST CONFIG_CONSUMER_KEY        = 'jasonalvis_twitter/config/consumer_key';
    CONST CONFIG_CONSUMER_KEY_SECRET = 'jasonalvis_twitter/config/consumer_key_secret';
    CONST CONFIG_ACCESS_TOKEN        = 'jasonalvis_twitter/config/access_token';
    CONST CONFIG_ACCESS_TOKEN_SECRET = 'jasonalvis_twitter/config/access_token_secret';

    CONST DISPLAY_NUMBER_OF_TWEETS   = 'jasonalvis_twitter/display/number_of_tweets';
    CONST DISPLAY_SHOW_FOLLOW        = 'jasonalvis_twitter/display/show_follow';
    CONST DISPLAY_SHOW_SCREEN_NAME   = 'jasonalvis_twitter/display/show_screen_name';
    CONST DISPLAY_SHOW_AVATAR        = 'jasonalvis_twitter/display/show_avatar';
    CONST DISPLAY_SHOW_LINKS         = 'jasonalvis_twitter/display/show_links';
    CONST DISPLAY_SHOW_REPLY         = 'jasonalvis_twitter/display/show_reply';
    CONST DISPLAY_SHOW_RETWEET       = 'jasonalvis_twitter/display/show_retweet';
    CONST DISPLAY_SHOW_FAVORITE      = 'jasonalvis_twitter/display/show_favorite';
    CONST DISPLAY_USE_NOFOLLOW       = 'jasonalvis_twitter/display/use_nofollow';
    CONST DISPLAY_HASH_TAGS          = 'jasonalvis_twitter/display/hash_tags';
    CONST DISPLAY_AT_TAGS            = 'jasonalvis_twitter/display/at_tags';
    CONST DISPLAY_NEW_WINDOW         = 'jasonalvis_twitter/display/new_window';

    CONST MEDIA_SHOW                 = 'jasonalvis_twitter/media/show_media';
    CONST MEDIA_SHOW_LINKS           = 'jasonalvis_twitter/media/show_links';
    CONST MEDIA_SHOW_IMAGES          = 'jasonalvis_twitter/media/show_images';
    CONST MEDIA_IMAGE_SIZE           = 'jasonalvis_twitter/media/image_size';

    CONST SEARCH_QUERY               = 'jasonalvis_twitter/search/query';

    /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface
    ) {
        $this->_scopeConfig = $scopeInterface;
    }

    /**
     * Enabled
     * @return boolean
     */
    public function getEnabled()
    {
        $enabled = $this->_scopeConfig->getValue(self::CONFIG_ENABLED);

        if($enabled) {
            return true;
        }

        return false;
    }

    /**
     * Screen name
     * @return string
     */
    public function getScreenName()
    {
        return $this->_scopeConfig->getValue(self::CONFIG_SCREEN_NAME);
    }

    /**
     * Consumer key
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->_scopeConfig->getValue(self::CONFIG_CONSUMER_KEY);
    }

    /**
     * Consumer key secret
     * @return string
     */
    public function getConsumerKeySecret()
    {
        return $this->_scopeConfig->getValue(self::CONFIG_CONSUMER_KEY_SECRET);
    }

    /**
     * Access token
     * @return string
     */
    public function getAccessToken()
    {
        return $this->_scopeConfig->getValue(self::CONFIG_ACCESS_TOKEN);
    }

    /**
     * Access token secret
     * @return string
     */
    public function getAccessTokenSecret()
    {
        return $this->_scopeConfig->getValue(self::CONFIG_ACCESS_TOKEN_SECRET);
    }

    /**
     * Number of tweets to show
     * @return integer
     */
    public function getNumberOfTweets()
    {
        return $this->_scopeConfig->getValue(self::DISPLAY_NUMBER_OF_TWEETS);
    }

    /**
     * Show follow button
     * @return boolean
     */
    public function getShowFollow()
    {
        return $this->_scopeConfig->getValue(self::DISPLAY_SHOW_FOLLOW);
    }

    /**
     * Show screen name
     * @return boolean
     */
    public function getShowScreenName()
    {
        return $this->_scopeConfig->getValue(self::DISPLAY_SHOW_SCREEN_NAME);
    }

    /**
     * Show avatar
     * @return boolean
     */
    public function getShowAvatar()
    {
        return $this->_scopeConfig->getValue(self::DISPLAY_SHOW_AVATAR);
    }

    /**
     * Show links in tweets
     * @return boolean
     */
    public function getShowLinks()
    {
        return $this->_scopeConfig->getValue(self::DISPLAY_SHOW_LINKS);
    }

    /**
     * Show reply link
     * @return boolean
     */
    public function getShowReply()
    {
        return $this->_scopeConfig->getValue(self::DISPLAY_SHOW_REPLY);
    }

    /**
     * Show retweet link
     * @return boolean
     */
    public function getShowRetweet()
    {
        return $this->_scopeConfig->getValue(self::DISPLAY_SHOW_RETWEET);
    }

    /**
     * Show favorite link
     * @return boolean
     */
    public function getShowFavorite()
    {
        return $this->_scopeConfig->getValue(self::DISPLAY_SHOW_FAVORITE);
    }

    /**
     * Use nofollow tag in links
     * @return boolean
     */
    public function getUseNoFollow()
    {
        return $this->_scopeConfig->getValue(self::DISPLAY_USE_NOFOLLOW);
    }

    /**
     * Link # tags
     * @return boolean
     */
    public function getHashTags()
    {
        return $this->_scopeConfig->getValue(self::DISPLAY_HASH_TAGS);
    }

    /**
     * Link @ tags
     * @return boolean
     */
    public function getAtTags()
    {
        return $this->_scopeConfig->getValue(self::DISPLAY_AT_TAGS);
    }

    /**
     * Open links in a new window
     * @return boolean
     */
    public function getNewWindow()
    {
        return $this->_scopeConfig->getValue(self::DISPLAY_NEW_WINDOW);
    }

    /**
     * Show media
     * @return boolean
     */
    public function getShowMedia()
    {
        return $this->_scopeConfig->getValue(self::MEDIA_SHOW);
    }

    /**
     * Show media links
     * @return boolean
     */
    public function getShowMediaLinks()
    {
        return $this->_scopeConfig->getValue(self::MEDIA_SHOW_LINKS);
    }

    /**
     * Show media images
     * @return boolean
     */
    public function getShowMediaImages()
    {
        return $this->_scopeConfig->getValue(self::MEDIA_SHOW_IMAGES);
    }

    /**
     * Search query
     * @return boolean
     */
    public function getSearchQuery()
    {
        return $this->_scopeConfig->getValue(self::SEARCH_QUERY);
    }

    /**
     * Media image size
     * @return string
     */
    public function getMediaImageSize()
    {
        if($size = $this->_scopeConfig->getValue(self::MEDIA_IMAGE_SIZE)) {
            $size = $size;
        } else {
            $size = "thumb";
        }

        return $size;
    }

    /**
     * Has keys
     * @return boolean
     */
    private function getHasKeys()
    {
        $consumerKey       = $this->getConsumerKey();
        $consumerSecret    = $this->getConsumerKeySecret();
        $accessToken       = $this->getAccessToken();
        $accessTokenSecret = $this->getAccessTokenSecret();

        if($consumerKey && $consumerSecret && $accessToken && $accessTokenSecret) {
            return true;
        }

        return false;
    }

    /**
     * Change link according to the config
     * @param  string  $text
     * @param  boolean $showLinks
     * @param  boolean $nofollow
     * @param  boolean $newwindow
     * @return string
     */
    private function changeLink($text, $showLinks, $nofollow, $newwindow)
    {
        if(!$showLinks){
            $text = strip_tags($text);
        }

        if($nofollow){
            $text = str_replace('<a ','<a rel="nofollow"', $text);
        }

        if($newwindow){
            $text = str_replace('<a ','<a target="_blank"', $text);
        }

        return $text;
    }

    /**
     * Format the time
     * @param  string $time
     * @return string
     */
    private function getRelativeTime($time)
    {
        $tweetTime = strtotime($time);
        $nowtime   = time();
        $timeago   = ($nowtime - $tweetTime);
        $hours     = floor($timeago / 3600);
        $minutes   = floor($timeago / 60);
        $days      = floor($timeago / 86400);

        if($minutes < 60) {
            if($minutes < 1) {
                $result = "Less than 1 minute ago";
            } else if($minutes == 1) {
                $result = $minutes . " minute ago";
            } else {
                $result = $minutes . " minutes ago";
            }
        } else if($minutes > 60 && $days < 1) {
            if($hours == 1) {
                $result = $hours . " hour ago";
            } else {
                $result = $hours . " hours ago";
            }
        } else {
            if($days == 1) {
                $result = $days . " day ago";
            } else {
                $result = $days . " days ago";
            }
        }

        return $result;
    }

    /**
     * Create a new OAuth connection
     * @return object
     */
    private function twitterDevAuth()
    {
        $this->consumerKey       = $this->getConsumerKey();
        $this->consumerSecret    = $this->getConsumerKeySecret();
        $this->accessToken       = $this->getAccessToken();
        $this->accessTokenSecret = $this->getAccessTokenSecret();

        return new TwitterOAuth($this->consumerKey, $this->consumerSecret, $this->accessToken, $this->accessTokenSecret);
    }

    /**
     * Get tweets checking our config along the way
     * @param  $tweets array
     * @return array
     */
    private function getTweets($tweets)
    {
        $t = array();
        $i = 0;

        foreach ($tweets as $tweet) {
            $text     = $tweet->text;
            $urls     = $tweet->entities->urls;
            $mentions = $tweet->entities->user_mentions;
            $hashtags = $tweet->entities->hashtags;

            // If we have any urls
            if($urls){
                foreach($urls as $url) {
                    if(strpos($text, $url->url) !== false) {
                        $text = str_replace($url->url, '<a href="' . $url->url . '">' . $url->url . '</a>', $text);
                    }
                }
            }

            // If we have any mentions and we want to show @ tags
            if($mentions && $this->getAtTags()) {
                foreach($mentions as $mention) {
                    if(strpos($text, $mention->screen_name) !== false) {
                        $text = str_replace("@" . $mention->screen_name . " ", '<a href="http://twitter.com/' . $mention->screen_name . '">@' . $mention->screen_name . '</a> ', $text);
                    }
                }
            }

            // If we have any hashtags and we want to show # tags
            if($hashtags && $this->getHashTags()) {
                foreach($hashtags as $hashtag) {
                    if(strpos($text, $hashtag->text) !== false) {
                        $text = str_replace('#'. $hashtag->text . " ", '<a href="http://twitter.com/hashtag/' . $hashtag->text . '?src=hash">#' . $hashtag->text . '</a> ', $text);
                    }
                }
            }

            // If we have any media
            if(isset($tweet->entities->media)) {
                $media = $tweet->entities->media[0];

                // Remove media url if we dont want to show it
                if(!$this->getShowMedia()) {
                    if(strpos($text, $media->url) !== false) {
                        $text = str_replace($media->url, '', $text);
                    }
                // Show media as link
                } else if($this->getShowMedia() && $this->getShowMediaLinks()) {
                    if(strpos($text, $media->url) !== false) {
                        $text = str_replace($media->url, '<a href="' . $media->url . '">' . $media->url . '</a>', $text);
                    }
                // Show media as image
                } else if($this->getShowMedia() && $this->getShowMediaImages()) {
                    if(strpos($text, $media->url) !== false) {
                        $t[$i]["media_url"]       = $media->url;
                        $t[$i]["media_image_url"] = $media->media_url;

                        // Remove the media url from tweet text
                        $text = str_replace($media->url, '', $text);
                    }
                }
            }

            // Store our data into the tweet
            $t[$i]["screen_name"] = '<a target="_blank" href="http://twitter.com/@' . $tweet->user->screen_name . '">@' . $tweet->user->screen_name . '</a>';
            $t[$i]["user_name"]   = $tweet->user->name;
            $t[$i]["user_image"]  = $tweet->user->profile_image_url;
            $t[$i]["tweet"]       = trim($this->changeLink($text, $this->getShowLinks(), $this->getUseNoFollow(), $this->getNewWindow()));
            $t[$i]["time"]        = trim($this->getRelativeTime($tweet->created_at));
            $t[$i]["id"]          = $tweet->id;

            // Increment counter
            $i++;
        }

        return $t;
    }

    /**
     * Latest tweets
     * @param  integer $count number of tweets to show
     * @return string
     */
    public function getLatestTweets($count)
    {
        $keys       = $this->getHasKeys();
        $enabled    = $this->getEnabled();
        $screenName = $this->getScreenName();
        $count      = ($count ? $count : $this->getNumberOfTweets());

        // If no keys or no screen name do nothing
        if (!$keys || !$screenName) {
            return false;
        }

        $connection = $this->twitterDevAuth();

        $result = $connection->get("statuses/user_timeline", array(
            "screen_name" => $screenName,
            "count" => $count
        ));

        // Check an array is returned (object is returned if there are errors)
        if(is_array($result)) {
            return $this->getTweets($result);
        }
    }

    /**
     * Mentions tweets
     * @param  integer $count number of tweets to show
     * @return string
     */
    public function getMentionsTweets($count)
    {
        $keys  = $this->getHasKeys();
        $count = ($count ? $count : $this->getNumberOfTweets());

        // If no keys do nothing
        if (!$keys) {
            return false;
        }

        $connection = $this->twitterDevAuth();

        $result = $connection->get("statuses/mentions_timeline", array(
            "count" => $count
        ));

        // Check an array is returned (object is returned if there are errors)
        if(is_array($result)) {
            return $this->getTweets($result);
        }
    }

    /**
     * Search tweets
     * @param  integer $count number of tweets to show
     * @param  string  $query search string
     * @return string
     */
    public function getSearchTweets($count, $query)
    {
        $keys  = $this->getHasKeys();
        $count = ($count ? $count : $this->getNumberOfTweets());
        $query = ($query ? $query : $this->getSearchQuery());

        // If no keys or there is no query do nothing
        if (!$keys || !$query) {
            return false;
        }

        $connection = $this->twitterDevAuth();

        $result = $connection->get("search/tweets", array(
            "q" => $query,
            "result_type" => "recent",
            "count" => $count
        ));

        // Check the object has statuses
        if($result->statuses) {
            return $this->getTweets($result->statuses);
        }
    }
}
