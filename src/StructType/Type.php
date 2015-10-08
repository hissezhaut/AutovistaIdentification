<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Type StructType
 * @subpackage Structs
 */
class Type extends AbstractStructBase
{
    /**
     * The NationalVehicleCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var long
     */
    public $NationalVehicleCode;
    /**
     * The InternationalVehicleCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InternationalVehicleCode;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The AlternativeName
     * Meta informations extracted from the WSDL
     * - documentation: This is customised description of the vehicle. The content may be different from the original descriptrion of the type
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AlternativeName;
    /**
     * The TrimLineName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TrimLineName;
    /**
     * The ManufacturerCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ManufacturerCode;
    /**
     * The ProductionPeriod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common data type for date range and exact value representation (YYYMM format)
     * @var \Autovista\Identification\StructType\ETGproductionPeriodType
     */
    public $ProductionPeriod;
    /**
     * The NewPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common data type for range and exact value representation (double values)
     * @var \Autovista\Identification\StructType\ETGpriceRangeType
     */
    public $NewPrice;
    /**
     * The SortCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $SortCode;
    /**
     * The OperationAllowed
     * Meta informations extracted from the WSDL
     * - documentation: ETG may have a list of intelligent operations available for this vehicle type. Note: This is suplimentary information, it does not gurantee the successful status of the operation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: A list of operations that may be available for a vehicle.
     * @var string
     */
    public $OperationAllowed;
    /**
     * The VATreclaimable
     * Meta informations extracted from the WSDL
     * - documentation: The value of the element indicates whether the VAT included in price(s) of a vehicle is reclaimable or not. If the value is "true", it means that the VAT is reclaimable. If the value is "false", it implies that VAT paid for the
     * vehicle is not reclaimable.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $VATreclaimable;
    /**
     * The RegistrationDate
     * Meta informations extracted from the WSDL
     * - documentation: The date when the vehicle with NationalVehicleCode is registered in vehicle registration authority of a country/region.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common data type for date representation
     * @var \Autovista\Identification\StructType\ETGdateType
     */
    public $RegistrationDate;
    /**
     * Constructor method for Type
     * @uses Type::setNationalVehicleCode()
     * @uses Type::setInternationalVehicleCode()
     * @uses Type::setName()
     * @uses Type::setAlternativeName()
     * @uses Type::setTrimLineName()
     * @uses Type::setManufacturerCode()
     * @uses Type::setProductionPeriod()
     * @uses Type::setNewPrice()
     * @uses Type::setSortCode()
     * @uses Type::setOperationAllowed()
     * @uses Type::setVATreclaimable()
     * @uses Type::setRegistrationDate()
     * @param long $nationalVehicleCode
     * @param string $internationalVehicleCode
     * @param string $name
     * @param string $alternativeName
     * @param string $trimLineName
     * @param string $manufacturerCode
     * @param \Autovista\Identification\StructType\ETGproductionPeriodType
     * $productionPeriod
     * @param \Autovista\Identification\StructType\ETGpriceRangeType $newPrice
     * @param int $sortCode
     * @param string $operationAllowed
     * @param boolean $vATreclaimable
     * @param \Autovista\Identification\StructType\ETGdateType $registrationDate
     */
    public function __construct($nationalVehicleCode = null, $internationalVehicleCode = null, $name = null, $alternativeName = null, $trimLineName = null, $manufacturerCode = null, \Autovista\Identification\StructType\ETGproductionPeriodType $productionPeriod = null, \Autovista\Identification\StructType\ETGpriceRangeType $newPrice = null, $sortCode = null, $operationAllowed = null, $vATreclaimable = null, \Autovista\Identification\StructType\ETGdateType $registrationDate = null)
    {
        $this
            ->setNationalVehicleCode($nationalVehicleCode)
            ->setInternationalVehicleCode($internationalVehicleCode)
            ->setName($name)
            ->setAlternativeName($alternativeName)
            ->setTrimLineName($trimLineName)
            ->setManufacturerCode($manufacturerCode)
            ->setProductionPeriod($productionPeriod)
            ->setNewPrice($newPrice)
            ->setSortCode($sortCode)
            ->setOperationAllowed($operationAllowed)
            ->setVATreclaimable($vATreclaimable)
            ->setRegistrationDate($registrationDate);
    }
    /**
     * Get NationalVehicleCode value
     * @return long|null
     */
    public function getNationalVehicleCode()
    {
        return $this->NationalVehicleCode;
    }
    /**
     * Set NationalVehicleCode value
     * @param long $nationalVehicleCode
     * @return \Autovista\Identification\StructType\Type
     */
    public function setNationalVehicleCode($nationalVehicleCode = null)
    {
        $this->NationalVehicleCode = $nationalVehicleCode;
        return $this;
    }
    /**
     * Get InternationalVehicleCode value
     * @return string|null
     */
    public function getInternationalVehicleCode()
    {
        return $this->InternationalVehicleCode;
    }
    /**
     * Set InternationalVehicleCode value
     * @param string $internationalVehicleCode
     * @return \Autovista\Identification\StructType\Type
     */
    public function setInternationalVehicleCode($internationalVehicleCode = null)
    {
        $this->InternationalVehicleCode = $internationalVehicleCode;
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
     * @return \Autovista\Identification\StructType\Type
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get AlternativeName value
     * @return string|null
     */
    public function getAlternativeName()
    {
        return $this->AlternativeName;
    }
    /**
     * Set AlternativeName value
     * @param string $alternativeName
     * @return \Autovista\Identification\StructType\Type
     */
    public function setAlternativeName($alternativeName = null)
    {
        $this->AlternativeName = $alternativeName;
        return $this;
    }
    /**
     * Get TrimLineName value
     * @return string|null
     */
    public function getTrimLineName()
    {
        return $this->TrimLineName;
    }
    /**
     * Set TrimLineName value
     * @param string $trimLineName
     * @return \Autovista\Identification\StructType\Type
     */
    public function setTrimLineName($trimLineName = null)
    {
        $this->TrimLineName = $trimLineName;
        return $this;
    }
    /**
     * Get ManufacturerCode value
     * @return string|null
     */
    public function getManufacturerCode()
    {
        return $this->ManufacturerCode;
    }
    /**
     * Set ManufacturerCode value
     * @param string $manufacturerCode
     * @return \Autovista\Identification\StructType\Type
     */
    public function setManufacturerCode($manufacturerCode = null)
    {
        $this->ManufacturerCode = $manufacturerCode;
        return $this;
    }
    /**
     * Get ProductionPeriod value
     * @return \Autovista\Identification\StructType\ETGproductionPeriodType|null
     */
    public function getProductionPeriod()
    {
        return $this->ProductionPeriod;
    }
    /**
     * Set ProductionPeriod value
     * @param \Autovista\Identification\StructType\ETGproductionPeriodType
     * $productionPeriod
     * @return \Autovista\Identification\StructType\Type
     */
    public function setProductionPeriod(\Autovista\Identification\StructType\ETGproductionPeriodType $productionPeriod = null)
    {
        $this->ProductionPeriod = $productionPeriod;
        return $this;
    }
    /**
     * Get NewPrice value
     * @return \Autovista\Identification\StructType\ETGpriceRangeType|null
     */
    public function getNewPrice()
    {
        return $this->NewPrice;
    }
    /**
     * Set NewPrice value
     * @param \Autovista\Identification\StructType\ETGpriceRangeType $newPrice
     * @return \Autovista\Identification\StructType\Type
     */
    public function setNewPrice(\Autovista\Identification\StructType\ETGpriceRangeType $newPrice = null)
    {
        $this->NewPrice = $newPrice;
        return $this;
    }
    /**
     * Get SortCode value
     * @return int|null
     */
    public function getSortCode()
    {
        return $this->SortCode;
    }
    /**
     * Set SortCode value
     * @param int $sortCode
     * @return \Autovista\Identification\StructType\Type
     */
    public function setSortCode($sortCode = null)
    {
        $this->SortCode = $sortCode;
        return $this;
    }
    /**
     * Get OperationAllowed value
     * @return string|null
     */
    public function getOperationAllowed()
    {
        return $this->OperationAllowed;
    }
    /**
     * Set OperationAllowed value
     * @uses \Autovista\Identification\EnumType\ETGoperationType::valueIsValid()
     * @uses \Autovista\Identification\EnumType\ETGoperationType::getValidValues()
     * @param string $operationAllowed
     * @return \Autovista\Identification\StructType\Type
     */
    public function setOperationAllowed($operationAllowed = null)
    {
        if (!\Autovista\Identification\EnumType\ETGoperationType::valueIsValid($operationAllowed)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $operationAllowed, implode(', ', \Autovista\Identification\EnumType\ETGoperationType::getValidValues())), __LINE__);
        }
        $this->OperationAllowed = $operationAllowed;
        return $this;
    }
    /**
     * Get VATreclaimable value
     * @return boolean|null
     */
    public function getVATreclaimable()
    {
        return $this->VATreclaimable;
    }
    /**
     * Set VATreclaimable value
     * @param boolean $vATreclaimable
     * @return \Autovista\Identification\StructType\Type
     */
    public function setVATreclaimable($vATreclaimable = null)
    {
        $this->VATreclaimable = $vATreclaimable;
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return \Autovista\Identification\StructType\ETGdateType|null
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param \Autovista\Identification\StructType\ETGdateType $registrationDate
     * @return \Autovista\Identification\StructType\Type
     */
    public function setRegistrationDate(\Autovista\Identification\StructType\ETGdateType $registrationDate = null)
    {
        $this->RegistrationDate = $registrationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\Type
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
