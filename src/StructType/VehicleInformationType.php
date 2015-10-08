<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleInformationType StructType
 * @subpackage Structs
 */
class VehicleInformationType extends AbstractStructBase
{
    /**
     * The CertificateID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CertificateID;
    /**
     * The RegistrationDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Common data type for date representation
     * @var \Autovista\Identification\StructType\ETGdateType
     */
    public $RegistrationDate;
    /**
     * Constructor method for VehicleInformationType
     * @uses VehicleInformationType::setCertificateID()
     * @uses VehicleInformationType::setRegistrationDate()
     * @param string $certificateID
     * @param \Autovista\Identification\StructType\ETGdateType $registrationDate
     */
    public function __construct($certificateID = null, \Autovista\Identification\StructType\ETGdateType $registrationDate = null)
    {
        $this
            ->setCertificateID($certificateID)
            ->setRegistrationDate($registrationDate);
    }
    /**
     * Get CertificateID value
     * @return string|null
     */
    public function getCertificateID()
    {
        return $this->CertificateID;
    }
    /**
     * Set CertificateID value
     * @param string $certificateID
     * @return \Autovista\Identification\StructType\VehicleInformationType
     */
    public function setCertificateID($certificateID = null)
    {
        $this->CertificateID = $certificateID;
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
     * @return \Autovista\Identification\StructType\VehicleInformationType
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
     * @return \Autovista\Identification\StructType\VehicleInformationType
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
