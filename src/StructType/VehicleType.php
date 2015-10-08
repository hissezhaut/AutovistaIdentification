<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleType StructType
 * @subpackage Structs
 */
class VehicleType extends AbstractStructBase
{
    /**
     * The VehicleTypeCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $VehicleTypeCode;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ShortName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShortName;
    /**
     * The SortCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $SortCode;
    /**
     * Constructor method for VehicleType
     * @uses VehicleType::setVehicleTypeCode()
     * @uses VehicleType::setName()
     * @uses VehicleType::setShortName()
     * @uses VehicleType::setSortCode()
     * @param int $vehicleTypeCode
     * @param string $name
     * @param string $shortName
     * @param int $sortCode
     */
    public function __construct($vehicleTypeCode = null, $name = null, $shortName = null, $sortCode = null)
    {
        $this
            ->setVehicleTypeCode($vehicleTypeCode)
            ->setName($name)
            ->setShortName($shortName)
            ->setSortCode($sortCode);
    }
    /**
     * Get VehicleTypeCode value
     * @return int|null
     */
    public function getVehicleTypeCode()
    {
        return $this->VehicleTypeCode;
    }
    /**
     * Set VehicleTypeCode value
     * @param int $vehicleTypeCode
     * @return \Autovista\Identification\StructType\VehicleType
     */
    public function setVehicleTypeCode($vehicleTypeCode = null)
    {
        $this->VehicleTypeCode = $vehicleTypeCode;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Autovista\Identification\StructType\VehicleType
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ShortName value
     * @return string|null
     */
    public function getShortName()
    {
        return $this->ShortName;
    }
    /**
     * Set ShortName value
     * @param string $shortName
     * @return \Autovista\Identification\StructType\VehicleType
     */
    public function setShortName($shortName = null)
    {
        $this->ShortName = $shortName;
        return $this;
    }
    /**
     * Get SortCode value
     * @return int|null
     */
    public function getSortCode()
    {
        return $this->SortCode;
    }
    /**
     * Set SortCode value
     * @param int $sortCode
     * @return \Autovista\Identification\StructType\VehicleType
     */
    public function setSortCode($sortCode = null)
    {
        $this->SortCode = $sortCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\VehicleType
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
