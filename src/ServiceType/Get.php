<?php

namespace Autovista\Identification\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the ETGHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Autovista\Identification\StructType\ETGHeaderType $eTGHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderETGHeader(\Autovista\Identification\StructType\ETGHeaderType $eTGHeader, $nameSpace = 'http://www.eurotax.com/Webservices/Identification/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'ETGHeader', $eTGHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetVersion
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetVersion $inputmsg
     * @return \Autovista\Identification\StructType\GetVersionResponse|bool
     */
    public function GetVersion(\Autovista\Identification\StructType\GetVersion $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetVersion($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListMake
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListMake $inputmsg
     * @return \Autovista\Identification\StructType\GetListMakeResponse|bool
     */
    public function GetListMake(\Autovista\Identification\StructType\GetListMake $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListMake($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListVehicleType
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListVehicleType $inputmsg
     * @return \Autovista\Identification\StructType\GetListVehicleTypeResponse|bool
     */
    public function GetListVehicleType(\Autovista\Identification\StructType\GetListVehicleType $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListVehicleType($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListModel
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListModel $inputmsg
     * @return \Autovista\Identification\StructType\GetListModelResponse|bool
     */
    public function GetListModel(\Autovista\Identification\StructType\GetListModel $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListModel($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListType
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListType $inputmsg
     * @return \Autovista\Identification\StructType\GetListTypeResponse|bool
     */
    public function GetListType(\Autovista\Identification\StructType\GetListType $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListType($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListTypeEx
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListTypeEx $inputmsg
     * @return \Autovista\Identification\StructType\GetListTypeExResponse|bool
     */
    public function GetListTypeEx(\Autovista\Identification\StructType\GetListTypeEx $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListTypeEx($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListTypeByCertificateID
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListTypeByCertificateID $inputmsg
     * @return
     * \Autovista\Identification\StructType\GetListTypeByCertificateIDResponse|bool
     */
    public function GetListTypeByCertificateID(\Autovista\Identification\StructType\GetListTypeByCertificateID $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListTypeByCertificateID($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListTypeByManufacturerCode
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListTypeByManufacturerCode
     * $inputmsg
     * @return
     * \Autovista\Identification\StructType\GetListTypeByManufacturerCodeResponse|bool
     */
    public function GetListTypeByManufacturerCode(\Autovista\Identification\StructType\GetListTypeByManufacturerCode $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListTypeByManufacturerCode($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListBodyType
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListBodyType $inputmsg
     * @return \Autovista\Identification\StructType\GetListBodyTypeResponse|bool
     */
    public function GetListBodyType(\Autovista\Identification\StructType\GetListBodyType $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListBodyType($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListGearBoxType
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListGearBoxType $inputmsg
     * @return \Autovista\Identification\StructType\GetListGearBoxTypeResponse|bool
     */
    public function GetListGearBoxType(\Autovista\Identification\StructType\GetListGearBoxType $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListGearBoxType($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListDriveType
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListDriveType $inputmsg
     * @return \Autovista\Identification\StructType\GetListDriveTypeResponse|bool
     */
    public function GetListDriveType(\Autovista\Identification\StructType\GetListDriveType $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListDriveType($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListFuelType
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListFuelType $inputmsg
     * @return \Autovista\Identification\StructType\GetListFuelTypeResponse|bool
     */
    public function GetListFuelType(\Autovista\Identification\StructType\GetListFuelType $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListFuelType($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListFuelTypeEx
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * - documentation: This is an alternative facility to the "GetListFuelType". The GetListFuelTypeEx returns the extended list of fuels available whereas the GetListFuelType returns the list of Fuels for which a vehicle can be searched.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListFuelTypeEx $inputmsg
     * @return \Autovista\Identification\StructType\GetListFuelTypeExResponse|bool
     */
    public function GetListFuelTypeEx(\Autovista\Identification\StructType\GetListFuelTypeEx $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListFuelTypeEx($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListImmatriculationYear
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListImmatriculationYear $inputmsg
     * @return
     * \Autovista\Identification\StructType\GetListImmatriculationYearResponse|bool
     */
    public function GetListImmatriculationYear(\Autovista\Identification\StructType\GetListImmatriculationYear $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListImmatriculationYear($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetListCertificateID
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Autovista\Identification\StructType\GetListCertificateID $param
     * @return \Autovista\Identification\StructType\GetListCertificateIDResponse|bool
     */
    public function GetListCertificateID(\Autovista\Identification\StructType\GetListCertificateID $param)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListCertificateID($param));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetListVehicleByRegistrationNumberPlate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param
     * \Autovista\Identification\StructType\GetListVehicleByRegistrationNumberPlate
     * $inputmsg
     * @return
     * \Autovista\Identification\StructType\VehicleListByRegistrationNumberPlate|bool
     */
    public function GetListVehicleByRegistrationNumberPlate(\Autovista\Identification\StructType\GetListVehicleByRegistrationNumberPlate $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListVehicleByRegistrationNumberPlate($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * GetListCertificateIDByRegistrationNumberPlate
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : ETGHeader
     * - SOAPHeaderNamespaces : http://www.eurotax.com/Webservices/Identification/
     * - SOAPHeaderTypes : \Autovista\Identification\StructType\ETGHeaderType
     * - SOAPHeaders : required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param
     * \Autovista\Identification\StructType\GetListCertificateIDByRegistrationNumberPla
     * te $inputmsg
     * @return
     * \Autovista\Identification\StructType\CertificateIDByRegistrationNumberPlate|bool
     */
    public function GetListCertificateIDByRegistrationNumberPlate(\Autovista\Identification\StructType\GetListCertificateIDByRegistrationNumberPlate $inputmsg)
    {
        try {
            $this->setResult(self::getSoapClient()->GetListCertificateIDByRegistrationNumberPlate($inputmsg));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return
     * \Autovista\Identification\StructType\CertificateIDByRegistrationNumberPlate|\Autovista\Identification\StructType\GetListBodyTypeResponse|\Autovista\Identification\StructType\GetListCertificateIDResponse|\Autovista\Identification\StructType\GetListDri
     * veTypeResponse|\Autovista\Identification\StructType\GetListFuelTypeExResponse|\Autovista\Identification\StructType\GetListFuelTypeResponse|\Autovista\Identification\StructType\GetListGearBoxTypeResponse|\Autovista\Identification\StructType\GetListImm
     * atriculationYearResponse|\Autovista\Identification\StructType\GetListMakeResponse|\Autovista\Identification\StructType\GetListModelResponse|\Autovista\Identification\StructType\GetListTypeByCertificateIDResponse|\Autovista\Identification\StructType\G
     * etListTypeByManufacturerCodeResponse|\Autovista\Identification\StructType\GetListTypeExResponse|\Autovista\Identification\StructType\GetListTypeResponse|\Autovista\Identification\StructType\GetListVehicleTypeResponse|\Autovista\Identification\StructT
     * ype\GetVersionResponse|\Autovista\Identification\StructType\VehicleListByRegistrationNumberPlate
     */
    public function getResult()
    {
        return parent::getResult();
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
