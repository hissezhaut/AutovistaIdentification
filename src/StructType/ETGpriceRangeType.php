<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGpriceRangeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Common data type for range and exact value representation (double values)
 * @subpackage Structs
 */
class ETGpriceRangeType extends AbstractStructBase
{
    /**
     * The RequestedLowerBound
     * Meta informations extracted from the WSDL
     * - default: 0.00
     * - documentation: Double value lower boundary
     * - minOccurs: 0
     * @var double
     */
    public $RequestedLowerBound;
    /**
     * The RequestedUpperBound
     * Meta informations extracted from the WSDL
     * - documentation: Double value upper boundary
     * - minOccurs: 0
     * @var double
     */
    public $RequestedUpperBound;
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - documentation: Exact double value within "upper-lower" range
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\ETGpriceType
     */
    public $Price;
    /**
     * Constructor method for ETGpriceRangeType
     * @uses ETGpriceRangeType::setRequestedLowerBound()
     * @uses ETGpriceRangeType::setRequestedUpperBound()
     * @uses ETGpriceRangeType::setPrice()
     * @param double $requestedLowerBound
     * @param double $requestedUpperBound
     * @param \Autovista\Identification\StructType\ETGpriceType $price
     */
    public function __construct($requestedLowerBound = 0, $requestedUpperBound = null, \Autovista\Identification\StructType\ETGpriceType $price = null)
    {
        $this
            ->setRequestedLowerBound($requestedLowerBound)
            ->setRequestedUpperBound($requestedUpperBound)
            ->setPrice($price);
    }
    /**
     * Get RequestedLowerBound value
     * @return double|null
     */
    public function getRequestedLowerBound()
    {
        return $this->RequestedLowerBound;
    }
    /**
     * Set RequestedLowerBound value
     * @param double $requestedLowerBound
     * @return \Autovista\Identification\StructType\ETGpriceRangeType
     */
    public function setRequestedLowerBound($requestedLowerBound = 0)
    {
        $this->RequestedLowerBound = $requestedLowerBound;
        return $this;
    }
    /**
     * Get RequestedUpperBound value
     * @return double|null
     */
    public function getRequestedUpperBound()
    {
        return $this->RequestedUpperBound;
    }
    /**
     * Set RequestedUpperBound value
     * @param double $requestedUpperBound
     * @return \Autovista\Identification\StructType\ETGpriceRangeType
     */
    public function setRequestedUpperBound($requestedUpperBound = null)
    {
        $this->RequestedUpperBound = $requestedUpperBound;
        return $this;
    }
    /**
     * Get Price value
     * @return \Autovista\Identification\StructType\ETGpriceType|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @param \Autovista\Identification\StructType\ETGpriceType $price
     * @return \Autovista\Identification\StructType\ETGpriceRangeType
     */
    public function setPrice(\Autovista\Identification\StructType\ETGpriceType $price = null)
    {
        $this->Price = $price;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\ETGpriceRangeType
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
