<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGmeasurement StructType
 * Meta informations extracted from the WSDL
 * - documentation: Common value/unit data type (double value type)
 * @subpackage Structs
 */
class ETGmeasurement extends AbstractStructBase
{
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var double
     */
    public $Value;
    /**
     * The Unit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Unit;
    /**
     * Constructor method for ETGmeasurement
     * @uses ETGmeasurement::setValue()
     * @uses ETGmeasurement::setUnit()
     * @param double $value
     * @param string $unit
     */
    public function __construct($value = null, $unit = null)
    {
        $this
            ->setValue($value)
            ->setUnit($unit);
    }
    /**
     * Get Value value
     * @return double
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param double $value
     * @return \Autovista\Identification\StructType\ETGmeasurement
     */
    public function setValue($value = null)
    {
        $this->Value = $value;
        return $this;
    }
    /**
     * Get Unit value
     * @return string
     */
    public function getUnit()
    {
        return $this->Unit;
    }
    /**
     * Set Unit value
     * @uses \Autovista\Identification\EnumType\ISOunitType::valueIsValid()
     * @uses \Autovista\Identification\EnumType\ISOunitType::getValidValues()
     * @param string $unit
     * @return \Autovista\Identification\StructType\ETGmeasurement
     */
    public function setUnit($unit = null)
    {
        if (!\Autovista\Identification\EnumType\ISOunitType::valueIsValid($unit)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $unit, implode(', ', \Autovista\Identification\EnumType\ISOunitType::getValidValues())), __LINE__);
        }
        $this->Unit = $unit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\ETGmeasurement
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
