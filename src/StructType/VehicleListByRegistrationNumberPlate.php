<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleListByRegistrationNumberPlate StructType
 * @subpackage Structs
 */
class VehicleListByRegistrationNumberPlate extends AbstractStructBase
{
    /**
     * The RegistrationNumberPlate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RegistrationNumberPlate;
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\Identification\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\Vehicle
     */
    public $Vehicle;
    /**
     * Constructor method for VehicleListByRegistrationNumberPlate
     * @uses VehicleListByRegistrationNumberPlate::setRegistrationNumberPlate()
     * @uses VehicleListByRegistrationNumberPlate::setSettings()
     * @uses VehicleListByRegistrationNumberPlate::setVehicle()
     * @param string $registrationNumberPlate
     * @param \Autovista\Identification\StructType\ETGsettingType $settings
     * @param \Autovista\Identification\StructType\Vehicle $vehicle
     */
    public function __construct($registrationNumberPlate = null, \Autovista\Identification\StructType\ETGsettingType $settings = null, \Autovista\Identification\StructType\Vehicle $vehicle = null)
    {
        $this
            ->setRegistrationNumberPlate($registrationNumberPlate)
            ->setSettings($settings)
            ->setVehicle($vehicle);
    }
    /**
     * Get RegistrationNumberPlate value
     * @return string
     */
    public function getRegistrationNumberPlate()
    {
        return $this->RegistrationNumberPlate;
    }
    /**
     * Set RegistrationNumberPlate value
     * @param string $registrationNumberPlate
     * @return
     * \Autovista\Identification\StructType\VehicleListByRegistrationNumberPlate
     */
    public function setRegistrationNumberPlate($registrationNumberPlate = null)
    {
        $this->RegistrationNumberPlate = $registrationNumberPlate;
        return $this;
    }
    /**
     * Get Settings value
     * @return \Autovista\Identification\StructType\ETGsettingType|null
     */
    public function getSettings()
    {
        return $this->Settings;
    }
    /**
     * Set Settings value
     * @param \Autovista\Identification\StructType\ETGsettingType $settings
     * @return
     * \Autovista\Identification\StructType\VehicleListByRegistrationNumberPlate
     */
    public function setSettings(\Autovista\Identification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
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
     * @return
     * \Autovista\Identification\StructType\VehicleListByRegistrationNumberPlate
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
     * @return
     * \Autovista\Identification\StructType\VehicleListByRegistrationNumberPlate
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
