<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListTypeByCertificateID StructType
 * @subpackage Structs
 */
class GetListTypeByCertificateID extends AbstractStructBase
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
     * The Certification
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Identification\StructType\VehicleHomologationType
     */
    public $Certification;
    /**
     * Constructor method for GetListTypeByCertificateID
     * @uses GetListTypeByCertificateID::setSettings()
     * @uses GetListTypeByCertificateID::setCertification()
     * @param \Autovista\Identification\StructType\ETGsettingType $settings
     * @param \Autovista\Identification\StructType\VehicleHomologationType
     * $certification
     */
    public function __construct(\Autovista\Identification\StructType\ETGsettingType $settings = null, \Autovista\Identification\StructType\VehicleHomologationType $certification = null)
    {
        $this
            ->setSettings($settings)
            ->setCertification($certification);
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
     * @return \Autovista\Identification\StructType\GetListTypeByCertificateID
     */
    public function setSettings(\Autovista\Identification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get Certification value
     * @return \Autovista\Identification\StructType\VehicleHomologationType
     */
    public function getCertification()
    {
        return $this->Certification;
    }
    /**
     * Set Certification value
     * @param \Autovista\Identification\StructType\VehicleHomologationType
     * $certification
     * @return \Autovista\Identification\StructType\GetListTypeByCertificateID
     */
    public function setCertification(\Autovista\Identification\StructType\VehicleHomologationType $certification = null)
    {
        $this->Certification = $certification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\GetListTypeByCertificateID
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
