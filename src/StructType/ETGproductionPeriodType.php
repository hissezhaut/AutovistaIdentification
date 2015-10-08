<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ETGproductionPeriodType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Common data type for date range and exact value representation (YYYMM format)
 * @subpackage Structs
 */
class ETGproductionPeriodType extends AbstractStructBase
{
    /**
     * The ProductionStartDate
     * Meta informations extracted from the WSDL
     * - documentation: Date lower boundary
     * - minOccurs: 0
     * - documentation: Common data type for date representation
     * @var \Autovista\Identification\StructType\ETGdateType
     */
    public $ProductionStartDate;
    /**
     * The ProductionEndDate
     * Meta informations extracted from the WSDL
     * - documentation: Date upper boundary
     * - minOccurs: 0
     * - documentation: Common data type for date representation
     * @var \Autovista\Identification\StructType\ETGdateType
     */
    public $ProductionEndDate;
    /**
     * The RequestedProductionDate
     * Meta informations extracted from the WSDL
     * - documentation: Exact date value within "start-end" range
     * - minOccurs: 0
     * - documentation: Common data type for date representation
     * @var \Autovista\Identification\StructType\ETGdateType
     */
    public $RequestedProductionDate;
    /**
     * Constructor method for ETGproductionPeriodType
     * @uses ETGproductionPeriodType::setProductionStartDate()
     * @uses ETGproductionPeriodType::setProductionEndDate()
     * @uses ETGproductionPeriodType::setRequestedProductionDate()
     * @param \Autovista\Identification\StructType\ETGdateType $productionStartDate
     * @param \Autovista\Identification\StructType\ETGdateType $productionEndDate
     * @param \Autovista\Identification\StructType\ETGdateType $requestedProductionDate
     */
    public function __construct(\Autovista\Identification\StructType\ETGdateType $productionStartDate = null, \Autovista\Identification\StructType\ETGdateType $productionEndDate = null, \Autovista\Identification\StructType\ETGdateType $requestedProductionDate = null)
    {
        $this
            ->setProductionStartDate($productionStartDate)
            ->setProductionEndDate($productionEndDate)
            ->setRequestedProductionDate($requestedProductionDate);
    }
    /**
     * Get ProductionStartDate value
     * @return \Autovista\Identification\StructType\ETGdateType|null
     */
    public function getProductionStartDate()
    {
        return $this->ProductionStartDate;
    }
    /**
     * Set ProductionStartDate value
     * @param \Autovista\Identification\StructType\ETGdateType $productionStartDate
     * @return \Autovista\Identification\StructType\ETGproductionPeriodType
     */
    public function setProductionStartDate(\Autovista\Identification\StructType\ETGdateType $productionStartDate = null)
    {
        $this->ProductionStartDate = $productionStartDate;
        return $this;
    }
    /**
     * Get ProductionEndDate value
     * @return \Autovista\Identification\StructType\ETGdateType|null
     */
    public function getProductionEndDate()
    {
        return $this->ProductionEndDate;
    }
    /**
     * Set ProductionEndDate value
     * @param \Autovista\Identification\StructType\ETGdateType $productionEndDate
     * @return \Autovista\Identification\StructType\ETGproductionPeriodType
     */
    public function setProductionEndDate(\Autovista\Identification\StructType\ETGdateType $productionEndDate = null)
    {
        $this->ProductionEndDate = $productionEndDate;
        return $this;
    }
    /**
     * Get RequestedProductionDate value
     * @return \Autovista\Identification\StructType\ETGdateType|null
     */
    public function getRequestedProductionDate()
    {
        return $this->RequestedProductionDate;
    }
    /**
     * Set RequestedProductionDate value
     * @param \Autovista\Identification\StructType\ETGdateType $requestedProductionDate
     * @return \Autovista\Identification\StructType\ETGproductionPeriodType
     */
    public function setRequestedProductionDate(\Autovista\Identification\StructType\ETGdateType $requestedProductionDate = null)
    {
        $this->RequestedProductionDate = $requestedProductionDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\ETGproductionPeriodType
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
