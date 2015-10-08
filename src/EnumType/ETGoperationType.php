<?php

namespace Autovista\Identification\EnumType;

/**
 * This class stands for ETGoperationType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: A list of operations that may be available for a vehicle.
 * @subpackage Enumerations
 */
class ETGoperationType
{
    /**
     * Constant for value 'GetValuation'
     * @return string 'GetValuation'
     */
    const VALUE_GETVALUATION = 'GetValuation';
    /**
     * Constant for value 'GetForecast'
     * @return string 'GetForecast'
     */
    const VALUE_GETFORECAST = 'GetForecast';
    /**
     * Constant for value 'GetRepairEstimation'
     * @return string 'GetRepairEstimation'
     */
    const VALUE_GETREPAIRESTIMATION = 'GetRepairEstimation';
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
     * @uses self::VALUE_GETVALUATION
     * @uses self::VALUE_GETFORECAST
     * @uses self::VALUE_GETREPAIRESTIMATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GETVALUATION,
            self::VALUE_GETFORECAST,
            self::VALUE_GETREPAIRESTIMATION,
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
