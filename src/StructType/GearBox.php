<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GearBox StructType
 * @subpackage Structs
 */
class GearBox extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common type to represent different lookup data
     * @var \Autovista\Identification\StructType\ETGlookupType
     */
    public $Type;
    /**
     * The GearsNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $GearsNumber;
    /**
     * Constructor method for GearBox
     * @uses GearBox::setType()
     * @uses GearBox::setGearsNumber()
     * @param \Autovista\Identification\StructType\ETGlookupType $type
     * @param int $gearsNumber
     */
    public function __construct(\Autovista\Identification\StructType\ETGlookupType $type = null, $gearsNumber = null)
    {
        $this
            ->setType($type)
            ->setGearsNumber($gearsNumber);
    }
    /**
     * Get Type value
     * @return \Autovista\Identification\StructType\ETGlookupType|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param \Autovista\Identification\StructType\ETGlookupType $type
     * @return \Autovista\Identification\StructType\GearBox
     */
    public function setType(\Autovista\Identification\StructType\ETGlookupType $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get GearsNumber value
     * @return int|null
     */
    public function getGearsNumber()
    {
        return $this->GearsNumber;
    }
    /**
     * Set GearsNumber value
     * @param int $gearsNumber
     * @return \Autovista\Identification\StructType\GearBox
     */
    public function setGearsNumber($gearsNumber = null)
    {
        $this->GearsNumber = $gearsNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\GearBox
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
