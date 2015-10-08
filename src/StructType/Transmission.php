<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transmission StructType
 * @subpackage Structs
 */
class Transmission extends AbstractStructBase
{
    /**
     * The DriveType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common type to represent different lookup data
     * @var \Autovista\Identification\StructType\ETGlookupType
     */
    public $DriveType;
    /**
     * The GearBox
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\GearBox
     */
    public $GearBox;
    /**
     * Constructor method for Transmission
     * @uses Transmission::setDriveType()
     * @uses Transmission::setGearBox()
     * @param \Autovista\Identification\StructType\ETGlookupType $driveType
     * @param \Autovista\Identification\StructType\GearBox $gearBox
     */
    public function __construct(\Autovista\Identification\StructType\ETGlookupType $driveType = null, \Autovista\Identification\StructType\GearBox $gearBox = null)
    {
        $this
            ->setDriveType($driveType)
            ->setGearBox($gearBox);
    }
    /**
     * Get DriveType value
     * @return \Autovista\Identification\StructType\ETGlookupType|null
     */
    public function getDriveType()
    {
        return $this->DriveType;
    }
    /**
     * Set DriveType value
     * @param \Autovista\Identification\StructType\ETGlookupType $driveType
     * @return \Autovista\Identification\StructType\Transmission
     */
    public function setDriveType(\Autovista\Identification\StructType\ETGlookupType $driveType = null)
    {
        $this->DriveType = $driveType;
        return $this;
    }
    /**
     * Get GearBox value
     * @return \Autovista\Identification\StructType\GearBox|null
     */
    public function getGearBox()
    {
        return $this->GearBox;
    }
    /**
     * Set GearBox value
     * @param \Autovista\Identification\StructType\GearBox $gearBox
     * @return \Autovista\Identification\StructType\Transmission
     */
    public function setGearBox(\Autovista\Identification\StructType\GearBox $gearBox = null)
    {
        $this->GearBox = $gearBox;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\Transmission
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
