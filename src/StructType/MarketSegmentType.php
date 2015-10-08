<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarketSegmentType StructType
 * @subpackage Structs
 */
class MarketSegmentType extends AbstractStructBase
{
    /**
     * The MarketSegmentDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Common type to represent different lookup data
     * @var \Autovista\Identification\StructType\ETGlookupType
     */
    public $MarketSegmentDescription;
    /**
     * Constructor method for MarketSegmentType
     * @uses MarketSegmentType::setMarketSegmentDescription()
     * @param \Autovista\Identification\StructType\ETGlookupType
     * $marketSegmentDescription
     */
    public function __construct(\Autovista\Identification\StructType\ETGlookupType $marketSegmentDescription = null)
    {
        $this
            ->setMarketSegmentDescription($marketSegmentDescription);
    }
    /**
     * Get MarketSegmentDescription value
     * @return \Autovista\Identification\StructType\ETGlookupType|null
     */
    public function getMarketSegmentDescription()
    {
        return $this->MarketSegmentDescription;
    }
    /**
     * Set MarketSegmentDescription value
     * @param \Autovista\Identification\StructType\ETGlookupType
     * $marketSegmentDescription
     * @return \Autovista\Identification\StructType\MarketSegmentType
     */
    public function setMarketSegmentDescription(\Autovista\Identification\StructType\ETGlookupType $marketSegmentDescription = null)
    {
        $this->MarketSegmentDescription = $marketSegmentDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\MarketSegmentType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
