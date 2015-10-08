<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Make StructType
 * @subpackage Structs
 */
class Make extends AbstractStructBase
{
    /**
     * The MakeCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MakeCode;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Company
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Company;
    /**
     * The Importer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Importer;
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
     * Constructor method for Make
     * @uses Make::setMakeCode()
     * @uses Make::setName()
     * @uses Make::setCompany()
     * @uses Make::setImporter()
     * @uses Make::setProductionPeriod()
     * @uses Make::setSortCode()
     * @param int $makeCode
     * @param string $name
     * @param string $company
     * @param string $importer
     * @param \Autovista\Identification\StructType\ETGproductionPeriodType
     * $productionPeriod
     * @param int $sortCode
     */
    public function __construct($makeCode = null, $name = null, $company = null, $importer = null, \Autovista\Identification\StructType\ETGproductionPeriodType $productionPeriod = null, $sortCode = null)
    {
        $this
            ->setMakeCode($makeCode)
            ->setName($name)
            ->setCompany($company)
            ->setImporter($importer)
            ->setProductionPeriod($productionPeriod)
            ->setSortCode($sortCode);
    }
    /**
     * Get MakeCode value
     * @return int|null
     */
    public function getMakeCode()
    {
        return $this->MakeCode;
    }
    /**
     * Set MakeCode value
     * @param int $makeCode
     * @return \Autovista\Identification\StructType\Make
     */
    public function setMakeCode($makeCode = null)
    {
        $this->MakeCode = $makeCode;
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
     * @return \Autovista\Identification\StructType\Make
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param string $company
     * @return \Autovista\Identification\StructType\Make
     */
    public function setCompany($company = null)
    {
        $this->Company = $company;
        return $this;
    }
    /**
     * Get Importer value
     * @return string|null
     */
    public function getImporter()
    {
        return $this->Importer;
    }
    /**
     * Set Importer value
     * @param string $importer
     * @return \Autovista\Identification\StructType\Make
     */
    public function setImporter($importer = null)
    {
        $this->Importer = $importer;
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
     * @return \Autovista\Identification\StructType\Make
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
     * @return \Autovista\Identification\StructType\Make
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
     * @return \Autovista\Identification\StructType\Make
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
