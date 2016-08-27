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
namespace Jasonalvis\Twitter\Model\Config\Source;

class TypeOfFeed implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'latest-tweets', 'label' => __('Latest Tweets')],
            ['value' => 'mentions-tweets', 'label' => __('Mentioned Tweets')],
            ['value' => 'search-tweets', 'label' => __('Search Tweets')]
        ];
    }
}