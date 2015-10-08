<?php

/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://webservices.eurotaxglass.com/wsdl/identification-v2.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://webservices.eurotaxglass.com/wsdl/identification-v2.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Autovista\Identification\ClassMap::get(),
);

/**
 * Samples for Get ServiceType
 */
$get = new \Autovista\Identification\ServiceType\Get($options);
$get->setSoapHeaderETGHeader($ETGHeader);
/**
 * Sample call for GetVersion operation/method
 */
if ($get->GetVersion(new \Autovista\Identification\StructType\GetVersion()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListMake operation/method
 */
if ($get->GetListMake(new \Autovista\Identification\StructType\GetListMake()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListVehicleType operation/method
 */
if ($get->GetListVehicleType(new \Autovista\Identification\StructType\GetListVehicleType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListModel operation/method
 */
if ($get->GetListModel(new \Autovista\Identification\StructType\GetListModel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListType operation/method
 */
if ($get->GetListType(new \Autovista\Identification\StructType\GetListType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListTypeEx operation/method
 */
if ($get->GetListTypeEx(new \Autovista\Identification\StructType\GetListTypeEx()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListTypeByCertificateID operation/method
 */
if ($get->GetListTypeByCertificateID(new \Autovista\Identification\StructType\GetListTypeByCertificateID()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListTypeByManufacturerCode operation/method
 */
if ($get->GetListTypeByManufacturerCode(new \Autovista\Identification\StructType\GetListTypeByManufacturerCode()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListBodyType operation/method
 */
if ($get->GetListBodyType(new \Autovista\Identification\StructType\GetListBodyType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListGearBoxType operation/method
 */
if ($get->GetListGearBoxType(new \Autovista\Identification\StructType\GetListGearBoxType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListDriveType operation/method
 */
if ($get->GetListDriveType(new \Autovista\Identification\StructType\GetListDriveType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListFuelType operation/method
 */
if ($get->GetListFuelType(new \Autovista\Identification\StructType\GetListFuelType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListFuelTypeEx operation/method
 */
if ($get->GetListFuelTypeEx(new \Autovista\Identification\StructType\GetListFuelTypeEx()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListImmatriculationYear operation/method
 */
if ($get->GetListImmatriculationYear(new \Autovista\Identification\StructType\GetListImmatriculationYear()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListCertificateID operation/method
 */
if ($get->GetListCertificateID(new \Autovista\Identification\StructType\GetListCertificateID()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListVehicleByRegistrationNumberPlate operation/method
 */
if ($get->GetListVehicleByRegistrationNumberPlate(new \Autovista\Identification\StructType\GetListVehicleByRegistrationNumberPlate()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetListCertificateIDByRegistrationNumberPlate operation/method
 */
if ($get->GetListCertificateIDByRegistrationNumberPlate(new \Autovista\Identification\StructType\GetListCertificateIDByRegistrationNumberPlate()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
