<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListCertificateIDResponse StructType
 * @subpackage Structs
 */
class GetListCertificateIDResponse extends AbstractStructBase
{
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Settings for country, language, response format etc.
     * @var \Autovista\Identification\StructType\ETGsettingType
     */
    public $Settings;
    /**
     * The NationalVehicleCode
     * @var long
     */
    public $NationalVehicleCode;
    /**
     * The RegistrationNumberPlate
     * @var string
     */
    public $RegistrationNumberPlate;
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
     * The CertificateID
     * Meta informations extracted from the WSDL
     * - documentation: A vehicle may be identified by several certificate ID (one to many relation).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string
     */
    public $CertificateID;
    /**
     * Constructor method for GetListCertificateIDResponse
     * @uses GetListCertificateIDResponse::setSettings()
     * @uses GetListCertificateIDResponse::setNationalVehicleCode()
     * @uses GetListCertificateIDResponse::setRegistrationNumberPlate()
     * @uses GetListCertificateIDResponse::setRegistrationDate()
     * @uses GetListCertificateIDResponse::setCertificateID()
     * @param \Autovista\Identification\StructType\ETGsettingType $settings
     * @param long $nationalVehicleCode
     * @param string $registrationNumberPlate
     * @param \Autovista\Identification\StructType\ETGdateType $registrationDate
     * @param string $certificateID
     */
    public function __construct(\Autovista\Identification\StructType\ETGsettingType $settings = null, $nationalVehicleCode = null, $registrationNumberPlate = null, \Autovista\Identification\StructType\ETGdateType $registrationDate = null, $certificateID = null)
    {
        $this
            ->setSettings($settings)
            ->setNationalVehicleCode($nationalVehicleCode)
            ->setRegistrationNumberPlate($registrationNumberPlate)
            ->setRegistrationDate($registrationDate)
            ->setCertificateID($certificateID);
    }
    /**
     * Get Settings value
     * @return \Autovista\Identification\StructType\ETGsettingType
     */
    public function getSettings()
    {
        return $this->Settings;
    }
    /**
     * Set Settings value
     * @param \Autovista\Identification\StructType\ETGsettingType $settings
     * @return \Autovista\Identification\StructType\GetListCertificateIDResponse
     */
    public function setSettings(\Autovista\Identification\StructType\ETGsettingType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
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
     * @return \Autovista\Identification\StructType\GetListCertificateIDResponse
     */
    public function setNationalVehicleCode($nationalVehicleCode = null)
    {
        $this->NationalVehicleCode = $nationalVehicleCode;
        return $this;
    }
    /**
     * Get RegistrationNumberPlate value
     * @return string|null
     */
    public function getRegistrationNumberPlate()
    {
        return $this->RegistrationNumberPlate;
    }
    /**
     * Set RegistrationNumberPlate value
     * @param string $registrationNumberPlate
     * @return \Autovista\Identification\StructType\GetListCertificateIDResponse
     */
    public function setRegistrationNumberPlate($registrationNumberPlate = null)
    {
        $this->RegistrationNumberPlate = $registrationNumberPlate;
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
     * @return \Autovista\Identification\StructType\GetListCertificateIDResponse
     */
    public function setRegistrationDate(\Autovista\Identification\StructType\ETGdateType $registrationDate = null)
    {
        $this->RegistrationDate = $registrationDate;
        return $this;
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
     * @return \Autovista\Identification\StructType\GetListCertificateIDResponse
     */
    public function setCertificateID($certificateID = null)
    {
        $this->CertificateID = $certificateID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\GetListCertificateIDResponse
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
