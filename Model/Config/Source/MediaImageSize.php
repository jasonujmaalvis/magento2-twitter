<?php
/**
 * Jason Alvis Twitter
 *
 * @category    JasonAlvis
 * @package     JasonAlvis_Twitter
 * @author      Jason Alvis
 * @copyright   Copyright (c) 2016 Jason Alvis (http://jasonalvis.co.uk)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
namespace JasonAlvis\Twitter\Model\Config\Source;

class MediaImageSize implements \Magento\Framework\Option\ArrayInterface
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
