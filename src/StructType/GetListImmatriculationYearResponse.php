<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListImmatriculationYearResponse StructType
 * @subpackage Structs
 */
class GetListImmatriculationYearResponse extends AbstractStructBase
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
     * The ImmatriculationYearList
     * Meta informations extracted from the WSDL
     * - documentation: List of Immatriculation years available in vehicle database
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Autovista\Identification\StructType\VehicleImmatriculationYearListType
     */
    public $ImmatriculationYearList;
    /**
     * Constructor method for GetListImmatriculationYearResponse
     * @uses GetListImmatriculationYearResponse::setSettings()
     * @uses GetListImmatriculationYearResponse::setImmatriculationYearList()
     * @param \Autovista\Identification\StructType\ETGsettingType $settings
     * @param \Autovista\Identification\StructType\VehicleImmatriculationYearListType
     * $immatriculationYearList
     */
    public function __construct(\Autovista\Identification\StructType\ETGsettingType $settings = null, \Autovista\Identification\StructType\VehicleImmatriculationYearListType $immatriculationYearList = null)
    {
        $this
            ->setSettings($settings)
            ->setImmatriculationYearList($immatriculationYearList);
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
     * @return \Autovista\Identification\StructType\GetListImmatriculationYearResponse
     */
    public function setSettings(\Autovista\Identification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get ImmatriculationYearList value
     * @return \Autovista\Identification\StructType\VehicleImmatriculationYearListType
     */
    public function getImmatriculationYearList()
    {
        return $this->ImmatriculationYearList;
    }
    /**
     * Set ImmatriculationYearList value
     * @param \Autovista\Identification\StructType\VehicleImmatriculationYearListType
     * $immatriculationYearList
     * @return \Autovista\Identification\StructType\GetListImmatriculationYearResponse
     */
    public function setImmatriculationYearList(\Autovista\Identification\StructType\VehicleImmatriculationYearListType $immatriculationYearList = null)
    {
        $this->ImmatriculationYearList = $immatriculationYearList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\GetListImmatriculationYearResponse
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
