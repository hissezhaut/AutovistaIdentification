<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleImmatriculationYearListType StructType
 * @subpackage Structs
 */
class VehicleImmatriculationYearListType extends AbstractStructBase
{
    /**
     * The ImmatriculationYear
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var gYear
     */
    public $ImmatriculationYear;
    /**
     * Constructor method for VehicleImmatriculationYearListType
     * @uses VehicleImmatriculationYearListType::setImmatriculationYear()
     * @param gYear $immatriculationYear
     */
    public function __construct($immatriculationYear = null)
    {
        $this
            ->setImmatriculationYear($immatriculationYear);
    }
    /**
     * Get ImmatriculationYear value
     * @return gYear|null
     */
    public function getImmatriculationYear()
    {
        return $this->ImmatriculationYear;
    }
    /**
     * Set ImmatriculationYear value
     * @param gYear $immatriculationYear
     * @return \Autovista\Identification\StructType\VehicleImmatriculationYearListType
     */
    public function setImmatriculationYear($immatriculationYear = null)
    {
        $this->ImmatriculationYear = $immatriculationYear;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\VehicleImmatriculationYearListType
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
