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
namespace Jasonalvis\Twitter\Block\Widget;

class Tweets extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    /**
     * @var \Jasonalvis\Twitter\Helper\Data
     */
    protected $_helper;

    /**
     * @var string
     */
    protected $_template = 'widget/tweets.phtml';

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array                                            $data
     * @param \Jasonalvis\Twitter\Helper\Data                  $helper
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Jasonalvis\Twitter\Helper\Data $helper
    ) {
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * Screen name
     * @return string
     */
    public function getScreenName()
    {
        return $this->_helper->getScreenName();
    }

    /**
     * Number of tweets to show
     * @return integer
     */
    private function getNumberOfTweets()
    {
        return $this->getData('number_of_tweets');
    }

    /**
     * Show follow button
     * @return boolean
     */
    public function getShowFollow()
    {
        return $this->_helper->getShowFollow();
    }

    /**
     * Show screen name
     * @return boolean
     */
    public function getShowScreenName()
    {
        return $this->_helper->getShowScreenName();
    }

    /**
     * Show avatar
     * @return boolean
     */
    public function getShowAvatar()
    {
        return $this->_helper->getShowAvatar();
    }

    /**
     * Show reply link
     * @return boolean
     */
    public function getShowReply()
    {
        return $this->_helper->getShowReply();
    }

    /**
     * Show retweet link
     * @return boolean
     */
    public function getShowRetweet()
    {
        return $this->_helper->getShowRetweet();
    }

    /**
     * Show favorite link
     * @return boolean
     */
    public function getShowFavorite()
    {
        return $this->_helper->getShowFavorite();
    }

    /**
     * Show media
     * @return boolean
     */
    public function getShowMedia()
    {
        return $this->_helper->getShowMedia();
    }

    /**
     * Show media images
     * @return boolean
     */
    public function getShowMediaImages()
    {
        return $this->_helper->getShowMediaImages();
    }

    /**
     * Media image size
     * @return string
     */
    public function getMediaImageSize()
    {
        return $this->_helper->getMediaImageSize();
    }

    /**
     * Search query
     * @return string
     */
    private function getSearchQuery()
    {
        $search_query = $this->getData('search_query');

        if($search_query) {
            return $search_query;
        } else {
            return $this->_helper->getSearchQuery();
        }
    }

    /**
     * Title
     * @return string
     */
    public function getTitle()
    {
        $title = $this->getData('title');

        if($title) {
            return $title;
        }

        return false;
    }

    /**
     * Type of feed to show
     * @return string
     */
    private function getTypeOfFeed()
    {
        return $this->getData('type_of_feed');
    }

    /**
     * Get tweets depending what the feed type is
     * @return string
     */
    public function getTweets()
    {
        $type_of_feed = $this->getTypeOfFeed();
        $query        = $this->getSearchQuery();
        $count        = $this->getNumberOfTweets();

        if($type_of_feed == 'mentions-tweets') {
            return $this->_helper->getMentionsTweets($count);
        } elseif($type_of_feed == 'search-tweets') {
            return $this->_helper->getSearchTweets($count, $query);
        }

        return $this->_helper->getLatestTweets($count);
    }

    /**
     * Render block html
     * @return string
     */
    protected function _toHtml()
    {
        $this->setTemplate($this->_template);
        return parent::_toHtml();
    }
}