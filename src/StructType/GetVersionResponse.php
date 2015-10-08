<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVersionResponse StructType
 * @subpackage Structs
 */
class GetVersionResponse extends AbstractStructBase
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
     * The VersionInformation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Identification\StructType\ETGversionInformationType
     */
    public $VersionInformation;
    /**
     * Constructor method for GetVersionResponse
     * @uses GetVersionResponse::setSettings()
     * @uses GetVersionResponse::setVersionInformation()
     * @param \Autovista\Identification\StructType\ETGsettingType $settings
     * @param \Autovista\Identification\StructType\ETGversionInformationType
     * $versionInformation
     */
    public function __construct(\Autovista\Identification\StructType\ETGsettingType $settings = null, \Autovista\Identification\StructType\ETGversionInformationType $versionInformation = null)
    {
        $this
            ->setSettings($settings)
            ->setVersionInformation($versionInformation);
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
     * @return \Autovista\Identification\StructType\GetVersionResponse
     */
    public function setSettings(\Autovista\Identification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get VersionInformation value
     * @return \Autovista\Identification\StructType\ETGversionInformationType
     */
    public function getVersionInformation()
    {
        return $this->VersionInformation;
    }
    /**
     * Set VersionInformation value
     * @param \Autovista\Identification\StructType\ETGversionInformationType
     * $versionInformation
     * @return \Autovista\Identification\StructType\GetVersionResponse
     */
    public function setVersionInformation(\Autovista\Identification\StructType\ETGversionInformationType $versionInformation = null)
    {
        $this->VersionInformation = $versionInformation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\GetVersionResponse
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
