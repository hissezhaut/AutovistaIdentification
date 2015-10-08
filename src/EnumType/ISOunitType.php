<?php

namespace Autovista\Identification\EnumType;

/**
 * This class stands for ISOunitType EnumType
 * @subpackage Enumerations
 */
class ISOunitType
{
    /**
     * Constant for value 'm'
     * @return string 'm'
     */
    const VALUE_M = 'm';
    /**
     * Constant for value 'mm'
     * @return string 'mm'
     */
    const VALUE_MM = 'mm';
    /**
     * Constant for value 'kg'
     * @return string 'kg'
     */
    const VALUE_KG = 'kg';
    /**
     * Constant for value 'ccm'
     * @return string 'ccm'
     */
    const VALUE_CCM = 'ccm';
    /**
     * Constant for value 'HP'
     * @return string 'HP'
     */
    const VALUE_HP = 'HP';
    /**
     * Constant for value 'KW'
     * @return string 'KW'
     */
    const VALUE_KW = 'KW';
    /**
     * Constant for value 'L'
     * @return string 'L'
     */
    const VALUE_L = 'L';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_M
     * @uses self::VALUE_MM
     * @uses self::VALUE_KG
     * @uses self::VALUE_CCM
     * @uses self::VALUE_HP
     * @uses self::VALUE_KW
     * @uses self::VALUE_L
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_M,
            self::VALUE_MM,
            self::VALUE_KG,
            self::VALUE_CCM,
            self::VALUE_HP,
            self::VALUE_KW,
            self::VALUE_L,
        );
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
