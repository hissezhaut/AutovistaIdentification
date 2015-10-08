<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListCertificateID StructType
 * @subpackage Structs
 */
class GetListCertificateID extends AbstractStructBase
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
     * The NationalVehicleCode
     * @var long
     */
    public $NationalVehicleCode;
    /**
     * The RegistrationNumberPlate
     * @var string
     */
    public $RegistrationNumberPlate;
    /**
     * Constructor method for GetListCertificateID
     * @uses GetListCertificateID::setSettings()
     * @uses GetListCertificateID::setNationalVehicleCode()
     * @uses GetListCertificateID::setRegistrationNumberPlate()
     * @param \Autovista\Identification\StructType\ETGsettingType $settings
     * @param long $nationalVehicleCode
     * @param string $registrationNumberPlate
     */
    public function __construct(\Autovista\Identification\StructType\ETGsettingType $settings = null, $nationalVehicleCode = null, $registrationNumberPlate = null)
    {
        $this
            ->setSettings($settings)
            ->setNationalVehicleCode($nationalVehicleCode)
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
     * @return \Autovista\Identification\StructType\GetListCertificateID
     */
    public function setSettings(\Autovista\Identification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get NationalVehicleCode value
     * @return long|null
     */
    public function getNationalVehicleCode()
    {
        return $this->NationalVehicleCode;
    }
    /**
     * Set NationalVehicleCode value
     * @param long $nationalVehicleCode
     * @return \Autovista\Identification\StructType\GetListCertificateID
     */
    public function setNationalVehicleCode($nationalVehicleCode = null)
    {
        $this->NationalVehicleCode = $nationalVehicleCode;
        return $this;
    }
    /**
     * Get RegistrationNumberPlate value
     * @return string|null
     */
    public function getRegistrationNumberPlate()
    {
        return $this->RegistrationNumberPlate;
    }
    /**
     * Set RegistrationNumberPlate value
     * @param string $registrationNumberPlate
     * @return \Autovista\Identification\StructType\GetListCertificateID
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
     * @return \Autovista\Identification\StructType\GetListCertificateID
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
