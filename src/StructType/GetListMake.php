<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListMake StructType
 * @subpackage Structs
 */
class GetListMake extends AbstractStructBase
{
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\Identification\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * The VehicleList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Identification\StructType\VehicleListType
     */
    public $VehicleList;
    /**
     * Constructor method for GetListMake
     * @uses GetListMake::setSettings()
     * @uses GetListMake::setVehicleList()
     * @param \Autovista\Identification\StructType\ETGsettingType $settings
     * @param \Autovista\Identification\StructType\VehicleListType $vehicleList
     */
    public function __construct(\Autovista\Identification\StructType\ETGsettingType $settings = null, \Autovista\Identification\StructType\VehicleListType $vehicleList = null)
    {
        $this
            ->setSettings($settings)
            ->setVehicleList($vehicleList);
    }
    /**
     * Get Settings value
     * @return \Autovista\Identification\StructType\ETGsettingType
     */
    public function getSettings()
    {
        return $this->Settings;
    }
    /**
     * Set Settings value
     * @param \Autovista\Identification\StructType\ETGsettingType $settings
     * @return \Autovista\Identification\StructType\GetListMake
     */
    public function setSettings(\Autovista\Identification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get VehicleList value
     * @return \Autovista\Identification\StructType\VehicleListType
     */
    public function getVehicleList()
    {
        return $this->VehicleList;
    }
    /**
     * Set VehicleList value
     * @param \Autovista\Identification\StructType\VehicleListType $vehicleList
     * @return \Autovista\Identification\StructType\GetListMake
     */
    public function setVehicleList(\Autovista\Identification\StructType\VehicleListType $vehicleList = null)
    {
        $this->VehicleList = $vehicleList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\GetListMake
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
