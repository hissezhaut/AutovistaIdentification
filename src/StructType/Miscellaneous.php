<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Miscellaneous StructType
 * @subpackage Structs
 */
class Miscellaneous extends AbstractStructBase
{
    /**
     * The TotalWeight
     * Meta informations extracted from the WSDL
     * - documentation: TODO: To be completed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Identification\StructType\ETGmeasurement
     */
    public $TotalWeight;
    /**
     * The PayLoad
     * Meta informations extracted from the WSDL
     * - documentation: TODO: To be completed.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Identification\StructType\ETGmeasurement
     */
    public $PayLoad;
    /**
     * The Wheelbase
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Identification\StructType\ETGmeasurement
     */
    public $Wheelbase;
    /**
     * The Wheelbase2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Identification\StructType\ETGmeasurement
     */
    public $Wheelbase2;
    /**
     * The SeatsNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $SeatsNumber;
    /**
     * The CurbWeight
     * Meta informations extracted from the WSDL
     * - documentation: The weight of an empty vehicle without passenger or payload, but including oil, gas, coolant and other standard equipment
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Identification\StructType\ETGmeasurement
     */
    public $CurbWeight;
    /**
     * The ManufacturerProductID
     * Meta informations extracted from the WSDL
     * - documentation: This is the code of the vehicle that manufacurer uses for selling the car to the market. This is the code the manufacturer assign after configuring the car with equipment.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $ManufacturerProductID;
    /**
     * The TaxHorsePower
     * Meta informations extracted from the WSDL
     * - documentation: Fiscal horse power
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Identification\StructType\ETGmeasurement
     */
    public $TaxHorsePower;
    /**
     * Constructor method for Miscellaneous
     * @uses Miscellaneous::setTotalWeight()
     * @uses Miscellaneous::setPayLoad()
     * @uses Miscellaneous::setWheelbase()
     * @uses Miscellaneous::setWheelbase2()
     * @uses Miscellaneous::setSeatsNumber()
     * @uses Miscellaneous::setCurbWeight()
     * @uses Miscellaneous::setManufacturerProductID()
     * @uses Miscellaneous::setTaxHorsePower()
     * @param \Autovista\Identification\StructType\ETGmeasurement $totalWeight
     * @param \Autovista\Identification\StructType\ETGmeasurement $payLoad
     * @param \Autovista\Identification\StructType\ETGmeasurement $wheelbase
     * @param \Autovista\Identification\StructType\ETGmeasurement $wheelbase2
     * @param int $seatsNumber
     * @param \Autovista\Identification\StructType\ETGmeasurement $curbWeight
     * @param string $manufacturerProductID
     * @param \Autovista\Identification\StructType\ETGmeasurement $taxHorsePower
     */
    public function __construct(\Autovista\Identification\StructType\ETGmeasurement $totalWeight = null, \Autovista\Identification\StructType\ETGmeasurement $payLoad = null, \Autovista\Identification\StructType\ETGmeasurement $wheelbase = null, \Autovista\Identification\StructType\ETGmeasurement $wheelbase2 = null, $seatsNumber = null, \Autovista\Identification\StructType\ETGmeasurement $curbWeight = null, $manufacturerProductID = null, \Autovista\Identification\StructType\ETGmeasurement $taxHorsePower = null)
    {
        $this
            ->setTotalWeight($totalWeight)
            ->setPayLoad($payLoad)
            ->setWheelbase($wheelbase)
            ->setWheelbase2($wheelbase2)
            ->setSeatsNumber($seatsNumber)
            ->setCurbWeight($curbWeight)
            ->setManufacturerProductID($manufacturerProductID)
            ->setTaxHorsePower($taxHorsePower);
    }
    /**
     * Get TotalWeight value
     * @return \Autovista\Identification\StructType\ETGmeasurement|null
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    /**
     * Set TotalWeight value
     * @param \Autovista\Identification\StructType\ETGmeasurement $totalWeight
     * @return \Autovista\Identification\StructType\Miscellaneous
     */
    public function setTotalWeight(\Autovista\Identification\StructType\ETGmeasurement $totalWeight = null)
    {
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    /**
     * Get PayLoad value
     * @return \Autovista\Identification\StructType\ETGmeasurement|null
     */
    public function getPayLoad()
    {
        return $this->PayLoad;
    }
    /**
     * Set PayLoad value
     * @param \Autovista\Identification\StructType\ETGmeasurement $payLoad
     * @return \Autovista\Identification\StructType\Miscellaneous
     */
    public function setPayLoad(\Autovista\Identification\StructType\ETGmeasurement $payLoad = null)
    {
        $this->PayLoad = $payLoad;
        return $this;
    }
    /**
     * Get Wheelbase value
     * @return \Autovista\Identification\StructType\ETGmeasurement|null
     */
    public function getWheelbase()
    {
        return $this->Wheelbase;
    }
    /**
     * Set Wheelbase value
     * @param \Autovista\Identification\StructType\ETGmeasurement $wheelbase
     * @return \Autovista\Identification\StructType\Miscellaneous
     */
    public function setWheelbase(\Autovista\Identification\StructType\ETGmeasurement $wheelbase = null)
    {
        $this->Wheelbase = $wheelbase;
        return $this;
    }
    /**
     * Get Wheelbase2 value
     * @return \Autovista\Identification\StructType\ETGmeasurement|null
     */
    public function getWheelbase2()
    {
        return $this->Wheelbase2;
    }
    /**
     * Set Wheelbase2 value
     * @param \Autovista\Identification\StructType\ETGmeasurement $wheelbase2
     * @return \Autovista\Identification\StructType\Miscellaneous
     */
    public function setWheelbase2(\Autovista\Identification\StructType\ETGmeasurement $wheelbase2 = null)
    {
        $this->Wheelbase2 = $wheelbase2;
        return $this;
    }
    /**
     * Get SeatsNumber value
     * @return int|null
     */
    public function getSeatsNumber()
    {
        return $this->SeatsNumber;
    }
    /**
     * Set SeatsNumber value
     * @param int $seatsNumber
     * @return \Autovista\Identification\StructType\Miscellaneous
     */
    public function setSeatsNumber($seatsNumber = null)
    {
        $this->SeatsNumber = $seatsNumber;
        return $this;
    }
    /**
     * Get CurbWeight value
     * @return \Autovista\Identification\StructType\ETGmeasurement|null
     */
    public function getCurbWeight()
    {
        return $this->CurbWeight;
    }
    /**
     * Set CurbWeight value
     * @param \Autovista\Identification\StructType\ETGmeasurement $curbWeight
     * @return \Autovista\Identification\StructType\Miscellaneous
     */
    public function setCurbWeight(\Autovista\Identification\StructType\ETGmeasurement $curbWeight = null)
    {
        $this->CurbWeight = $curbWeight;
        return $this;
    }
    /**
     * Get ManufacturerProductID value
     * @return string|null
     */
    public function getManufacturerProductID()
    {
        return $this->ManufacturerProductID;
    }
    /**
     * Set ManufacturerProductID value
     * @param string $manufacturerProductID
     * @return \Autovista\Identification\StructType\Miscellaneous
     */
    public function setManufacturerProductID($manufacturerProductID = null)
    {
        $this->ManufacturerProductID = $manufacturerProductID;
        return $this;
    }
    /**
     * Get TaxHorsePower value
     * @return \Autovista\Identification\StructType\ETGmeasurement|null
     */
    public function getTaxHorsePower()
    {
        return $this->TaxHorsePower;
    }
    /**
     * Set TaxHorsePower value
     * @param \Autovista\Identification\StructType\ETGmeasurement $taxHorsePower
     * @return \Autovista\Identification\StructType\Miscellaneous
     */
    public function setTaxHorsePower(\Autovista\Identification\StructType\ETGmeasurement $taxHorsePower = null)
    {
        $this->TaxHorsePower = $taxHorsePower;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\Miscellaneous
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
