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

class MediaImageSize implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'thumb', 'label' => __('Thumbnail')],
            ['value' => 'small', 'label' => __('Small')],
            ['value' => 'medium', 'label' => __('Medium')],
            ['value' => 'large', 'label' => __('Large')]
        ];
    }
}
