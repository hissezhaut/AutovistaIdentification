<?php

namespace Autovista\Identification\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleHomologationType StructType
 * @subpackage Structs
 */
class VehicleHomologationType extends AbstractStructBase
{
    /**
     * The CertificateID
     * Meta informations extracted from the WSDL
     * - documentation: For CH (ISO 639 Country Code) typenschein. For DE -- HSN number, or complete KBA number (HSN+TSN)
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CertificateID;
    /**
     * The CertificatePart2
     * Meta informations extracted from the WSDL
     * - documentation: Only for DE. Instance document can provide 2-nd part(TSN), if only HSN was provided in CertifcateID. Instance document should not include this element if complete KBA was provided in element CertificateID
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CertificatePart2;
    /**
     * The EUhomologationID
     * Meta informations extracted from the WSDL
     * - documentation: For future usage.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EUhomologationID;
    /**
     * Constructor method for VehicleHomologationType
     * @uses VehicleHomologationType::setCertificateID()
     * @uses VehicleHomologationType::setCertificatePart2()
     * @uses VehicleHomologationType::setEUhomologationID()
     * @param string $certificateID
     * @param string $certificatePart2
     * @param string $eUhomologationID
     */
    public function __construct($certificateID = null, $certificatePart2 = null, $eUhomologationID = null)
    {
        $this
            ->setCertificateID($certificateID)
            ->setCertificatePart2($certificatePart2)
            ->setEUhomologationID($eUhomologationID);
    }
    /**
     * Get CertificateID value
     * @return string
     */
    public function getCertificateID()
    {
        return $this->CertificateID;
    }
    /**
     * Set CertificateID value
     * @param string $certificateID
     * @return \Autovista\Identification\StructType\VehicleHomologationType
     */
    public function setCertificateID($certificateID = null)
    {
        $this->CertificateID = $certificateID;
        return $this;
    }
    /**
     * Get CertificatePart2 value
     * @return string|null
     */
    public function getCertificatePart2()
    {
        return $this->CertificatePart2;
    }
    /**
     * Set CertificatePart2 value
     * @param string $certificatePart2
     * @return \Autovista\Identification\StructType\VehicleHomologationType
     */
    public function setCertificatePart2($certificatePart2 = null)
    {
        $this->CertificatePart2 = $certificatePart2;
        return $this;
    }
    /**
     * Get EUhomologationID value
     * @return string|null
     */
    public function getEUhomologationID()
    {
        return $this->EUhomologationID;
    }
    /**
     * Set EUhomologationID value
     * @param string $eUhomologationID
     * @return \Autovista\Identification\StructType\VehicleHomologationType
     */
    public function setEUhomologationID($eUhomologationID = null)
    {
        $this->EUhomologationID = $eUhomologationID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Autovista\Identification\StructType\VehicleHomologationType
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
