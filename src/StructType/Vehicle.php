<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vehicle StructType
 * @subpackage Structs
 */
class Vehicle extends AbstractStructBase
{
    /**
     * The VehicleType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\VehicleType
     */
    public $VehicleType;
    /**
     * The Make
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\Make
     */
    public $Make;
    /**
     * The Model
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\Model
     */
    public $Model;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\Type
     */
    public $Type;
    /**
     * The MarketSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\MarketSegmentType
     */
    public $MarketSegment;
    /**
     * The Body
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\Body
     */
    public $Body;
    /**
     * The Transmission
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\Transmission
     */
    public $Transmission;
    /**
     * The Engine
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\Engine
     */
    public $Engine;
    /**
     * The Miscellaneous
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Autovista\Identification\StructType\Miscellaneous
     */
    public $Miscellaneous;
    /**
     * Constructor method for Vehicle
     * @uses Vehicle::setVehicleType()
     * @uses Vehicle::setMake()
     * @uses Vehicle::setModel()
     * @uses Vehicle::setType()
     * @uses Vehicle::setMarketSegment()
     * @uses Vehicle::setBody()
     * @uses Vehicle::setTransmission()
     * @uses Vehicle::setEngine()
     * @uses Vehicle::setMiscellaneous()
     * @param \Autovista\Identification\StructType\VehicleType $vehicleType
     * @param \Autovista\Identification\StructType\Make $make
     * @param \Autovista\Identification\StructType\Model $model
     * @param \Autovista\Identification\StructType\Type $type
     * @param \Autovista\Identification\StructType\MarketSegmentType $marketSegment
     * @param \Autovista\Identification\StructType\Body $body
     * @param \Autovista\Identification\StructType\Transmission $transmission
     * @param \Autovista\Identification\StructType\Engine $engine
     * @param \Autovista\Identification\StructType\Miscellaneous $miscellaneous
     */
    public function __construct(\Autovista\Identification\StructType\VehicleType $vehicleType = null, \Autovista\Identification\StructType\Make $make = null, \Autovista\Identification\StructType\Model $model = null, \Autovista\Identification\StructType\Type $type = null, \Autovista\Identification\StructType\MarketSegmentType $marketSegment = null, \Autovista\Identification\StructType\Body $body = null, \Autovista\Identification\StructType\Transmission $transmission = null, \Autovista\Identification\StructType\Engine $engine = null, \Autovista\Identification\StructType\Miscellaneous $miscellaneous = null)
    {
        $this
            ->setVehicleType($vehicleType)
            ->setMake($make)
            ->setModel($model)
            ->setType($type)
            ->setMarketSegment($marketSegment)
            ->setBody($body)
            ->setTransmission($transmission)
            ->setEngine($engine)
            ->setMiscellaneous($miscellaneous);
    }
    /**
     * Get VehicleType value
     * @return \Autovista\Identification\StructType\VehicleType|null
     */
    public function getVehicleType()
    {
        return $this->VehicleType;
    }
    /**
     * Set VehicleType value
     * @param \Autovista\Identification\StructType\VehicleType $vehicleType
     * @return \Autovista\Identification\StructType\Vehicle
     */
    public function setVehicleType(\Autovista\Identification\StructType\VehicleType $vehicleType = null)
    {
        $this->VehicleType = $vehicleType;
        return $this;
    }
    /**
     * Get Make value
     * @return \Autovista\Identification\StructType\Make|null
     */
    public function getMake()
    {
        return $this->Make;
    }
    /**
     * Set Make value
     * @param \Autovista\Identification\StructType\Make $make
     * @return \Autovista\Identification\StructType\Vehicle
     */
    public function setMake(\Autovista\Identification\StructType\Make $make = null)
    {
        $this->Make = $make;
        return $this;
    }
    /**
     * Get Model value
     * @return \Autovista\Identification\StructType\Model|null
     */
    public function getModel()
    {
        return $this->Model;
    }
    /**
     * Set Model value
     * @param \Autovista\Identification\StructType\Model $model
     * @return \Autovista\Identification\StructType\Vehicle
     */
    public function setModel(\Autovista\Identification\StructType\Model $model = null)
    {
        $this->Model = $model;
        return $this;
    }
    /**
     * Get Type value
     * @return \Autovista\Identification\StructType\Type|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param \Autovista\Identification\StructType\Type $type
     * @return \Autovista\Identification\StructType\Vehicle
     */
    public function setType(\Autovista\Identification\StructType\Type $type = null)
    {
        $this->Type = $type;
        return $this;
    }
    /**
     * Get MarketSegment value
     * @return \Autovista\Identification\StructType\MarketSegmentType|null
     */
    public function getMarketSegment()
    {
        return $this->MarketSegment;
    }
    /**
     * Set MarketSegment value
     * @param \Autovista\Identification\StructType\MarketSegmentType $marketSegment
     * @return \Autovista\Identification\StructType\Vehicle
     */
    public function setMarketSegment(\Autovista\Identification\StructType\MarketSegmentType $marketSegment = null)
    {
        $this->MarketSegment = $marketSegment;
        return $this;
    }
    /**
     * Get Body value
     * @return \Autovista\Identification\StructType\Body|null
     */
    public function getBody()
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param \Autovista\Identification\StructType\Body $body
     * @return \Autovista\Identification\StructType\Vehicle
     */
    public function setBody(\Autovista\Identification\StructType\Body $body = null)
    {
        $this->Body = $body;
        return $this;
    }
    /**
     * Get Transmission value
     * @return \Autovista\Identification\StructType\Transmission|null
     */
    public function getTransmission()
    {
        return $this->Transmission;
    }
    /**
     * Set Transmission value
     * @param \Autovista\Identification\StructType\Transmission $transmission
     * @return \Autovista\Identification\StructType\Vehicle
     */
    public function setTransmission(\Autovista\Identification\StructType\Transmission $transmission = null)
    {
        $this->Transmission = $transmission;
        return $this;
    }
    /**
     * Get Engine value
     * @return \Autovista\Identification\StructType\Engine|null
     */
    public function getEngine()
    {
        return $this->Engine;
    }
    /**
     * Set Engine value
     * @param \Autovista\Identification\StructType\Engine $engine
     * @return \Autovista\Identification\StructType\Vehicle
     */
    public function setEngine(\Autovista\Identification\StructType\Engine $engine = null)
    {
        $this->Engine = $engine;
        return $this;
    }
    /**
     * Get Miscellaneous value
     * @return \Autovista\Identification\StructType\Miscellaneous|null
     */
    public function getMiscellaneous()
    {
        return $this->Miscellaneous;
    }
    /**
     * Set Miscellaneous value
     * @param \Autovista\Identification\StructType\Miscellaneous $miscellaneous
     * @return \Autovista\Identification\StructType\Vehicle
     */
    public function setMiscellaneous(\Autovista\Identification\StructType\Miscellaneous $miscellaneous = null)
    {
        $this->Miscellaneous = $miscellaneous;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\Vehicle
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
