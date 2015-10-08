<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Body StructType
 * @subpackage Structs
 */
class Body extends AbstractStructBase
{
    /**
     * The BodyStyleDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common type to represent different lookup data
     * @var \Autovista\Identification\StructType\ETGlookupType
     */
    public $BodyStyleDescription;
    /**
     * The DoorsNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $DoorsNumber;
    /**
     * Constructor method for Body
     * @uses Body::setBodyStyleDescription()
     * @uses Body::setDoorsNumber()
     * @param \Autovista\Identification\StructType\ETGlookupType $bodyStyleDescription
     * @param int $doorsNumber
     */
    public function __construct(\Autovista\Identification\StructType\ETGlookupType $bodyStyleDescription = null, $doorsNumber = null)
    {
        $this
            ->setBodyStyleDescription($bodyStyleDescription)
            ->setDoorsNumber($doorsNumber);
    }
    /**
     * Get BodyStyleDescription value
     * @return \Autovista\Identification\StructType\ETGlookupType|null
     */
    public function getBodyStyleDescription()
    {
        return $this->BodyStyleDescription;
    }
    /**
     * Set BodyStyleDescription value
     * @param \Autovista\Identification\StructType\ETGlookupType $bodyStyleDescription
     * @return \Autovista\Identification\StructType\Body
     */
    public function setBodyStyleDescription(\Autovista\Identification\StructType\ETGlookupType $bodyStyleDescription = null)
    {
        $this->BodyStyleDescription = $bodyStyleDescription;
        return $this;
    }
    /**
     * Get DoorsNumber value
     * @return int|null
     */
    public function getDoorsNumber()
    {
        return $this->DoorsNumber;
    }
    /**
     * Set DoorsNumber value
     * @param int $doorsNumber
     * @return \Autovista\Identification\StructType\Body
     */
    public function setDoorsNumber($doorsNumber = null)
    {
        $this->DoorsNumber = $doorsNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\Body
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
