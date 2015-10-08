<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FailureType StructType
 * @subpackage Structs
 */
class FailureType extends AbstractStructBase
{
    /**
     * The ETGError
     * Meta informations extracted from the WSDL
     * - documentation: Placeholder for general status report. To be filled out before sending a response back to the originator.
     * @var \Autovista\Identification\StructType\ETGStatus
     */
    public $ETGError;
    /**
     * The ETGWarning
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Placeholder for general status report. To be filled out before sending a response back to the originator.
     * @var \Autovista\Identification\StructType\ETGStatus
     */
    public $ETGWarning;
    /**
     * Constructor method for FailureType
     * @uses FailureType::setETGError()
     * @uses FailureType::setETGWarning()
     * @param \Autovista\Identification\StructType\ETGStatus $eTGError
     * @param \Autovista\Identification\StructType\ETGStatus $eTGWarning
     */
    public function __construct(\Autovista\Identification\StructType\ETGStatus $eTGError = null, \Autovista\Identification\StructType\ETGStatus $eTGWarning = null)
    {
        $this
            ->setETGError($eTGError)
            ->setETGWarning($eTGWarning);
    }
    /**
     * Get ETGError value
     * @return \Autovista\Identification\StructType\ETGStatus|null
     */
    public function getETGError()
    {
        return $this->ETGError;
    }
    /**
     * Set ETGError value
     * @param \Autovista\Identification\StructType\ETGStatus $eTGError
     * @return \Autovista\Identification\StructType\FailureType
     */
    public function setETGError(\Autovista\Identification\StructType\ETGStatus $eTGError = null)
    {
        $this->ETGError = $eTGError;
        return $this;
    }
    /**
     * Get ETGWarning value
     * @return \Autovista\Identification\StructType\ETGStatus|null
     */
    public function getETGWarning()
    {
        return $this->ETGWarning;
    }
    /**
     * Set ETGWarning value
     * @param \Autovista\Identification\StructType\ETGStatus $eTGWarning
     * @return \Autovista\Identification\StructType\FailureType
     */
    public function setETGWarning(\Autovista\Identification\StructType\ETGStatus $eTGWarning = null)
    {
        $this->ETGWarning = $eTGWarning;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\FailureType
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
