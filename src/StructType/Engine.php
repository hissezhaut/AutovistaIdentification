<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Engine StructType
 * @subpackage Structs
 */
class Engine extends AbstractStructBase
{
    /**
     * The Fuel
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common type to represent different lookup data
     * @var \Autovista\Identification\StructType\ETGlookupType
     */
    public $Fuel;
    /**
     * The Layout
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common type to represent different lookup data
     * @var \Autovista\Identification\StructType\ETGlookupType
     */
    public $Layout;
    /**
     * The Power
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Identification\StructType\ETGmeasurement
     */
    public $Power;
    /**
     * The Displacement
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Identification\StructType\ETGmeasurement
     */
    public $Displacement;
    /**
     * The CylindersNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $CylindersNumber;
    /**
     * The ValvesPerCylinder
     * Meta informations extracted from the WSDL
     * - documentation: Number of valves per cylinder.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ValvesPerCylinder;
    /**
     * The RoundedDisplacement
     * Meta informations extracted from the WSDL
     * - documentation: This is the volume of the engine rounded and converted to Litre from total displacement in ccm. This conversion is done for marketing and other purposes.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common value/unit data type (double value type)
     * @var \Autovista\Identification\StructType\ETGmeasurement
     */
    public $RoundedDisplacement;
    /**
     * Constructor method for Engine
     * @uses Engine::setFuel()
     * @uses Engine::setLayout()
     * @uses Engine::setPower()
     * @uses Engine::setDisplacement()
     * @uses Engine::setCylindersNumber()
     * @uses Engine::setValvesPerCylinder()
     * @uses Engine::setRoundedDisplacement()
     * @param \Autovista\Identification\StructType\ETGlookupType $fuel
     * @param \Autovista\Identification\StructType\ETGlookupType $layout
     * @param \Autovista\Identification\StructType\ETGmeasurement $power
     * @param \Autovista\Identification\StructType\ETGmeasurement $displacement
     * @param int $cylindersNumber
     * @param int $valvesPerCylinder
     * @param \Autovista\Identification\StructType\ETGmeasurement $roundedDisplacement
     */
    public function __construct(\Autovista\Identification\StructType\ETGlookupType $fuel = null, \Autovista\Identification\StructType\ETGlookupType $layout = null, \Autovista\Identification\StructType\ETGmeasurement $power = null, \Autovista\Identification\StructType\ETGmeasurement $displacement = null, $cylindersNumber = null, $valvesPerCylinder = null, \Autovista\Identification\StructType\ETGmeasurement $roundedDisplacement = null)
    {
        $this
            ->setFuel($fuel)
            ->setLayout($layout)
            ->setPower($power)
            ->setDisplacement($displacement)
            ->setCylindersNumber($cylindersNumber)
            ->setValvesPerCylinder($valvesPerCylinder)
            ->setRoundedDisplacement($roundedDisplacement);
    }
    /**
     * Get Fuel value
     * @return \Autovista\Identification\StructType\ETGlookupType|null
     */
    public function getFuel()
    {
        return $this->Fuel;
    }
    /**
     * Set Fuel value
     * @param \Autovista\Identification\StructType\ETGlookupType $fuel
     * @return \Autovista\Identification\StructType\Engine
     */
    public function setFuel(\Autovista\Identification\StructType\ETGlookupType $fuel = null)
    {
        $this->Fuel = $fuel;
        return $this;
    }
    /**
     * Get Layout value
     * @return \Autovista\Identification\StructType\ETGlookupType|null
     */
    public function getLayout()
    {
        return $this->Layout;
    }
    /**
     * Set Layout value
     * @param \Autovista\Identification\StructType\ETGlookupType $layout
     * @return \Autovista\Identification\StructType\Engine
     */
    public function setLayout(\Autovista\Identification\StructType\ETGlookupType $layout = null)
    {
        $this->Layout = $layout;
        return $this;
    }
    /**
     * Get Power value
     * @return \Autovista\Identification\StructType\ETGmeasurement|null
     */
    public function getPower()
    {
        return $this->Power;
    }
    /**
     * Set Power value
     * @param \Autovista\Identification\StructType\ETGmeasurement $power
     * @return \Autovista\Identification\StructType\Engine
     */
    public function setPower(\Autovista\Identification\StructType\ETGmeasurement $power = null)
    {
        $this->Power = $power;
        return $this;
    }
    /**
     * Get Displacement value
     * @return \Autovista\Identification\StructType\ETGmeasurement|null
     */
    public function getDisplacement()
    {
        return $this->Displacement;
    }
    /**
     * Set Displacement value
     * @param \Autovista\Identification\StructType\ETGmeasurement $displacement
     * @return \Autovista\Identification\StructType\Engine
     */
    public function setDisplacement(\Autovista\Identification\StructType\ETGmeasurement $displacement = null)
    {
        $this->Displacement = $displacement;
        return $this;
    }
    /**
     * Get CylindersNumber value
     * @return int|null
     */
    public function getCylindersNumber()
    {
        return $this->CylindersNumber;
    }
    /**
     * Set CylindersNumber value
     * @param int $cylindersNumber
     * @return \Autovista\Identification\StructType\Engine
     */
    public function setCylindersNumber($cylindersNumber = null)
    {
        $this->CylindersNumber = $cylindersNumber;
        return $this;
    }
    /**
     * Get ValvesPerCylinder value
     * @return int|null
     */
    public function getValvesPerCylinder()
    {
        return $this->ValvesPerCylinder;
    }
    /**
     * Set ValvesPerCylinder value
     * @param int $valvesPerCylinder
     * @return \Autovista\Identification\StructType\Engine
     */
    public function setValvesPerCylinder($valvesPerCylinder = null)
    {
        $this->ValvesPerCylinder = $valvesPerCylinder;
        return $this;
    }
    /**
     * Get RoundedDisplacement value
     * @return \Autovista\Identification\StructType\ETGmeasurement|null
     */
    public function getRoundedDisplacement()
    {
        return $this->RoundedDisplacement;
    }
    /**
     * Set RoundedDisplacement value
     * @param \Autovista\Identification\StructType\ETGmeasurement $roundedDisplacement
     * @return \Autovista\Identification\StructType\Engine
     */
    public function setRoundedDisplacement(\Autovista\Identification\StructType\ETGmeasurement $roundedDisplacement = null)
    {
        $this->RoundedDisplacement = $roundedDisplacement;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\Engine
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
