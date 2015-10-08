<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CertificateIDByRegistrationNumberPlate StructType
 * @subpackage Structs
 */
class CertificateIDByRegistrationNumberPlate extends AbstractStructBase
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
     * The VehicleInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\VehicleInformationType
     */
    public $VehicleInformation;
    /**
     * Constructor method for CertificateIDByRegistrationNumberPlate
     * @uses CertificateIDByRegistrationNumberPlate::setRegistrationNumberPlate()
     * @uses CertificateIDByRegistrationNumberPlate::setSettings()
     * @uses CertificateIDByRegistrationNumberPlate::setVehicleInformation()
     * @param string $registrationNumberPlate
     * @param \Autovista\Identification\StructType\ETGsettingType $settings
     * @param \Autovista\Identification\StructType\VehicleInformationType
     * $vehicleInformation
     */
    public function __construct($registrationNumberPlate = null, \Autovista\Identification\StructType\ETGsettingType $settings = null, \Autovista\Identification\StructType\VehicleInformationType $vehicleInformation = null)
    {
        $this
            ->setRegistrationNumberPlate($registrationNumberPlate)
            ->setSettings($settings)
            ->setVehicleInformation($vehicleInformation);
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
     * \Autovista\Identification\StructType\CertificateIDByRegistrationNumberPlate
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
     * \Autovista\Identification\StructType\CertificateIDByRegistrationNumberPlate
     */
    public function setSettings(\Autovista\Identification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get VehicleInformation value
     * @return \Autovista\Identification\StructType\VehicleInformationType|null
     */
    public function getVehicleInformation()
    {
        return $this->VehicleInformation;
    }
    /**
     * Set VehicleInformation value
     * @param \Autovista\Identification\StructType\VehicleInformationType
     * $vehicleInformation
     * @return
     * \Autovista\Identification\StructType\CertificateIDByRegistrationNumberPlate
     */
    public function setVehicleInformation(\Autovista\Identification\StructType\VehicleInformationType $vehicleInformation = null)
    {
        $this->VehicleInformation = $vehicleInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return
     * \Autovista\Identification\StructType\CertificateIDByRegistrationNumberPlate
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
