<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListVehicleByRegistrationNumberPlate StructType
 * @subpackage Structs
 */
class GetListVehicleByRegistrationNumberPlate extends AbstractStructBase
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
     * The RegistrationNumberPlate
     * Meta informations extracted from the WSDL
     * - documentation: A vehicle registration plate is a metal or plastic plate attached to a motor vehicle or trailer for official identification purposes. The registration identifier is a numeric or alphanumeric code that uniquely identifies the vehicle
     * within the issuing region's database. In some countries, the identifier is unique within the entire country. In others, it is unique within each state or province. There is also variation on whether the identifier is associated with a vehicle or a
     * person. Depending on the country or region of issue, it may also be referred to as a license plate, number plate, vehicle tag, license tag, or simply tag.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RegistrationNumberPlate;
    /**
     * Constructor method for GetListVehicleByRegistrationNumberPlate
     * @uses GetListVehicleByRegistrationNumberPlate::setSettings()
     * @uses GetListVehicleByRegistrationNumberPlate::setRegistrationNumberPlate()
     * @param \Autovista\Identification\StructType\ETGsettingType $settings
     * @param string $registrationNumberPlate
     */
    public function __construct(\Autovista\Identification\StructType\ETGsettingType $settings = null, $registrationNumberPlate = null)
    {
        $this
            ->setSettings($settings)
            ->setRegistrationNumberPlate($registrationNumberPlate);
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
     * @return
     * \Autovista\Identification\StructType\GetListVehicleByRegistrationNumberPlate
     */
    public function setSettings(\Autovista\Identification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
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
     * \Autovista\Identification\StructType\GetListVehicleByRegistrationNumberPlate
     */
    public function setRegistrationNumberPlate($registrationNumberPlate = null)
    {
        $this->RegistrationNumberPlate = $registrationNumberPlate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return
     * \Autovista\Identification\StructType\GetListVehicleByRegistrationNumberPlate
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
