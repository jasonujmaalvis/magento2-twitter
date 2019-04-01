<?php
/**
 * Alvis Twitter
 *
 * @category    Alvis
 * @package     Alvis_Twitter
 * @author      Jason Ujma-Alvis
 * @copyright   Copyright (c) 2019 Jason Ujma-Alvis (https://jason.codes)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
namespace Alvis\Twitter\Block;

use \Magento\Framework\View\Element\Template;

class Tweets extends Template
{
    /**
     * @var \Alvis\Twitter\Helper\Data
     */
    protected $_helper;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array                                            $data
     * @param \Alvis\Twitter\Helper\Data                  $helper
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Alvis\Twitter\Helper\Data $helper
    ) {
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * Enabled
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->_helper->getEnabled();
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
        return $this->_helper->getNumberOfTweets();
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
     * Latest tweets
     * @return string
     */
    public function getLatestTweets()
    {
        return $this->_helper->getLatestTweets($this->getNumberOfTweets());
    }

    /**
     * Mentions tweets
     * @return string
     */
    public function getMentionsTweets()
    {
        return $this->_helper->getMentionsTweets($this->getNumberOfTweets());
    }

    /**
     * Search tweets
     * @return string
     */
    public function getSearchTweets($query = null)
    {
        return $this->_helper->getSearchTweets($this->getNumberOfTweets(), $query);
    }
}
