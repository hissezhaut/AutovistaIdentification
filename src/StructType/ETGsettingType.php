<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGsettingType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Settings for country, language, response format etc.
 * @subpackage Structs
 */
class ETGsettingType extends AbstractStructBase
{
    /**
     * The ISOcountryCode
     * Meta informations extracted from the WSDL
     * - documentation: ISO country code
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ISOcountryCode;
    /**
     * The ISOlanguageCode
     * Meta informations extracted from the WSDL
     * - documentation: ISO language code
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ISOlanguageCode;
    /**
     * The ISOcurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: ISO currency code
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ISOcurrencyCode;
    /**
     * Constructor method for ETGsettingType
     * @uses ETGsettingType::setISOcountryCode()
     * @uses ETGsettingType::setISOlanguageCode()
     * @uses ETGsettingType::setISOcurrencyCode()
     * @param string $iSOcountryCode
     * @param string $iSOlanguageCode
     * @param string $iSOcurrencyCode
     */
    public function __construct($iSOcountryCode = null, $iSOlanguageCode = null, $iSOcurrencyCode = null)
    {
        $this
            ->setISOcountryCode($iSOcountryCode)
            ->setISOlanguageCode($iSOlanguageCode)
            ->setISOcurrencyCode($iSOcurrencyCode);
    }
    /**
     * Get ISOcountryCode value
     * @return string
     */
    public function getISOcountryCode()
    {
        return $this->ISOcountryCode;
    }
    /**
     * Set ISOcountryCode value
     * @uses \Autovista\Identification\EnumType\ISOcountryType::valueIsValid()
     * @uses \Autovista\Identification\EnumType\ISOcountryType::getValidValues()
     * @param string $iSOcountryCode
     * @return \Autovista\Identification\StructType\ETGsettingType
     */
    public function setISOcountryCode($iSOcountryCode = null)
    {
        if (!\Autovista\Identification\EnumType\ISOcountryType::valueIsValid($iSOcountryCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $iSOcountryCode, implode(', ', \Autovista\Identification\EnumType\ISOcountryType::getValidValues())), __LINE__);
        }
        $this->ISOcountryCode = $iSOcountryCode;
        return $this;
    }
    /**
     * Get ISOlanguageCode value
     * @return string
     */
    public function getISOlanguageCode()
    {
        return $this->ISOlanguageCode;
    }
    /**
     * Set ISOlanguageCode value
     * @uses \Autovista\Identification\EnumType\ISOlanguageType::valueIsValid()
     * @uses \Autovista\Identification\EnumType\ISOlanguageType::getValidValues()
     * @param string $iSOlanguageCode
     * @return \Autovista\Identification\StructType\ETGsettingType
     */
    public function setISOlanguageCode($iSOlanguageCode = null)
    {
        if (!\Autovista\Identification\EnumType\ISOlanguageType::valueIsValid($iSOlanguageCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $iSOlanguageCode, implode(', ', \Autovista\Identification\EnumType\ISOlanguageType::getValidValues())), __LINE__);
        }
        $this->ISOlanguageCode = $iSOlanguageCode;
        return $this;
    }
    /**
     * Get ISOcurrencyCode value
     * @return string|null
     */
    public function getISOcurrencyCode()
    {
        return $this->ISOcurrencyCode;
    }
    /**
     * Set ISOcurrencyCode value
     * @uses \Autovista\Identification\EnumType\ISOcurrencyType::valueIsValid()
     * @uses \Autovista\Identification\EnumType\ISOcurrencyType::getValidValues()
     * @param string $iSOcurrencyCode
     * @return \Autovista\Identification\StructType\ETGsettingType
     */
    public function setISOcurrencyCode($iSOcurrencyCode = null)
    {
        if (!\Autovista\Identification\EnumType\ISOcurrencyType::valueIsValid($iSOcurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $iSOcurrencyCode, implode(', ', \Autovista\Identification\EnumType\ISOcurrencyType::getValidValues())), __LINE__);
        }
        $this->ISOcurrencyCode = $iSOcurrencyCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\ETGsettingType
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
