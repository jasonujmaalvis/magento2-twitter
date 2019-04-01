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
namespace Alvis\Twitter\Model\Config\Source;

use \Magento\Framework\Option\ArrayInterface;

class TypeOfFeed implements ArrayInterface
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
