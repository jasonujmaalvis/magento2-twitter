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

class NumberOfTweets implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 1, 'label' => __('1')],
            ['value' => 2, 'label' => __('2')],
            ['value' => 3, 'label' => __('3')],
            ['value' => 4, 'label' => __('4')],
            ['value' => 5, 'label' => __('5')],
            ['value' => 6, 'label' => __('6')],
            ['value' => 7, 'label' => __('7')],
            ['value' => 8, 'label' => __('8')],
            ['value' => 9, 'label' => __('9')],
            ['value' => 10, 'label' => __('10')],
            ['value' => 11, 'label' => __('11')],
            ['value' => 12, 'label' => __('12')],
            ['value' => 13, 'label' => __('13')],
            ['value' => 14, 'label' => __('14')],
            ['value' => 15, 'label' => __('15')],
            ['value' => 16, 'label' => __('16')],
            ['value' => 17, 'label' => __('17')],
            ['value' => 18, 'label' => __('18')],
            ['value' => 19, 'label' => __('19')],
            ['value' => 20, 'label' => __('20')]
        ];
    }
}
