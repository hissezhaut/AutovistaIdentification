<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleListType StructType
 * @subpackage Structs
 */
class VehicleListType extends AbstractStructBase
{
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\Vehicle
     */
    public $Vehicle;
    /**
     * Constructor method for VehicleListType
     * @uses VehicleListType::setVehicle()
     * @param \Autovista\Identification\StructType\Vehicle $vehicle
     */
    public function __construct(\Autovista\Identification\StructType\Vehicle $vehicle = null)
    {
        $this
            ->setVehicle($vehicle);
    }
    /**
     * Get Vehicle value
     * @return \Autovista\Identification\StructType\Vehicle|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Autovista\Identification\StructType\Vehicle $vehicle
     * @return \Autovista\Identification\StructType\VehicleListType
     */
    public function setVehicle(\Autovista\Identification\StructType\Vehicle $vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\VehicleListType
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
