<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGlookupType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Common type to represent different lookup data
 * @subpackage Structs
 */
class ETGlookupType extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Code;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The NameEx
     * Meta informations extracted from the WSDL
     * - documentation: Optional alternative name
     * - minOccurs: 0
     * @var string
     */
    public $NameEx;
    /**
     * Constructor method for ETGlookupType
     * @uses ETGlookupType::setCode()
     * @uses ETGlookupType::setName()
     * @uses ETGlookupType::setNameEx()
     * @param int $code
     * @param string $name
     * @param string $nameEx
     */
    public function __construct($code = null, $name = null, $nameEx = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setNameEx($nameEx);
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Autovista\Identification\StructType\ETGlookupType
     */
    public function setCode($code = null)
    {
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Autovista\Identification\StructType\ETGlookupType
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get NameEx value
     * @return string|null
     */
    public function getNameEx()
    {
        return $this->NameEx;
    }
    /**
     * Set NameEx value
     * @param string $nameEx
     * @return \Autovista\Identification\StructType\ETGlookupType
     */
    public function setNameEx($nameEx = null)
    {
        $this->NameEx = $nameEx;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\ETGlookupType
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
