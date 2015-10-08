<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Model StructType
 * @subpackage Structs
 */
class Model extends AbstractStructBase
{
    /**
     * The ModelCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ModelCode;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The NameExtended
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NameExtended;
    /**
     * The ManufacturerSeriesCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ManufacturerSeriesCode;
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
     * The SortCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $SortCode;
    /**
     * Constructor method for Model
     * @uses Model::setModelCode()
     * @uses Model::setName()
     * @uses Model::setNameExtended()
     * @uses Model::setManufacturerSeriesCode()
     * @uses Model::setProductionPeriod()
     * @uses Model::setSortCode()
     * @param int $modelCode
     * @param string $name
     * @param string $nameExtended
     * @param string $manufacturerSeriesCode
     * @param \Autovista\Identification\StructType\ETGproductionPeriodType
     * $productionPeriod
     * @param int $sortCode
     */
    public function __construct($modelCode = null, $name = null, $nameExtended = null, $manufacturerSeriesCode = null, \Autovista\Identification\StructType\ETGproductionPeriodType $productionPeriod = null, $sortCode = null)
    {
        $this
            ->setModelCode($modelCode)
            ->setName($name)
            ->setNameExtended($nameExtended)
            ->setManufacturerSeriesCode($manufacturerSeriesCode)
            ->setProductionPeriod($productionPeriod)
            ->setSortCode($sortCode);
    }
    /**
     * Get ModelCode value
     * @return int|null
     */
    public function getModelCode()
    {
        return $this->ModelCode;
    }
    /**
     * Set ModelCode value
     * @param int $modelCode
     * @return \Autovista\Identification\StructType\Model
     */
    public function setModelCode($modelCode = null)
    {
        $this->ModelCode = $modelCode;
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
     * @return \Autovista\Identification\StructType\Model
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get NameExtended value
     * @return string|null
     */
    public function getNameExtended()
    {
        return $this->NameExtended;
    }
    /**
     * Set NameExtended value
     * @param string $nameExtended
     * @return \Autovista\Identification\StructType\Model
     */
    public function setNameExtended($nameExtended = null)
    {
        $this->NameExtended = $nameExtended;
        return $this;
    }
    /**
     * Get ManufacturerSeriesCode value
     * @return string|null
     */
    public function getManufacturerSeriesCode()
    {
        return $this->ManufacturerSeriesCode;
    }
    /**
     * Set ManufacturerSeriesCode value
     * @param string $manufacturerSeriesCode
     * @return \Autovista\Identification\StructType\Model
     */
    public function setManufacturerSeriesCode($manufacturerSeriesCode = null)
    {
        $this->ManufacturerSeriesCode = $manufacturerSeriesCode;
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
     * @return \Autovista\Identification\StructType\Model
     */
    public function setProductionPeriod(\Autovista\Identification\StructType\ETGproductionPeriodType $productionPeriod = null)
    {
        $this->ProductionPeriod = $productionPeriod;
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
     * @return \Autovista\Identification\StructType\Model
     */
    public function setSortCode($sortCode = null)
    {
        $this->SortCode = $sortCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\Model
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
