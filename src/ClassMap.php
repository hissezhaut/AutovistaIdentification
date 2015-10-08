<?php

namespace Autovista\Identification;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'ETGpriceType' => 'Autovista\Identification\StructType\ETGpriceType',
            'ETGpriceRangeType' => 'Autovista\Identification\StructType\ETGpriceRangeType',
            'ETGdateType' => 'Autovista\Identification\StructType\ETGdateType',
            'ETGlookupType' => 'Autovista\Identification\StructType\ETGlookupType',
            'ETGproductionPeriodType' => 'Autovista\Identification\StructType\ETGproductionPeriodType',
            'ETGmeasurement' => 'Autovista\Identification\StructType\ETGmeasurement',
            'ETGsettingType' => 'Autovista\Identification\StructType\ETGsettingType',
            'ETGversionInformationType' => 'Autovista\Identification\StructType\ETGversionInformationType',
            'LoginDataType' => 'Autovista\Identification\StructType\LoginDataType',
            'OriginatorType' => 'Autovista\Identification\StructType\OriginatorType',
            'FailureType' => 'Autovista\Identification\StructType\FailureType',
            'SuccessType' => 'Autovista\Identification\StructType\SuccessType',
            'ResponseType' => 'Autovista\Identification\StructType\ResponseType',
            'StatisticsType' => 'Autovista\Identification\StructType\StatisticsType',
            'ETGStatus' => 'Autovista\Identification\StructType\ETGStatus',
            'ETGHeaderType' => 'Autovista\Identification\StructType\ETGHeaderType',
            'VehicleType' => 'Autovista\Identification\StructType\VehicleType',
            'Make' => 'Autovista\Identification\StructType\Make',
            'Model' => 'Autovista\Identification\StructType\Model',
            'Type' => 'Autovista\Identification\StructType\Type',
            'MarketSegmentType' => 'Autovista\Identification\StructType\MarketSegmentType',
            'Body' => 'Autovista\Identification\StructType\Body',
            'GearBox' => 'Autovista\Identification\StructType\GearBox',
            'Transmission' => 'Autovista\Identification\StructType\Transmission',
            'Engine' => 'Autovista\Identification\StructType\Engine',
            'Miscellaneous' => 'Autovista\Identification\StructType\Miscellaneous',
            'Vehicle' => 'Autovista\Identification\StructType\Vehicle',
            'VehicleListType' => 'Autovista\Identification\StructType\VehicleListType',
            'VehicleHomologationType' => 'Autovista\Identification\StructType\VehicleHomologationType',
            'VehicleImmatriculationYearListType' => 'Autovista\Identification\StructType\VehicleImmatriculationYearListType',
            'VehicleInformationType' => 'Autovista\Identification\StructType\VehicleInformationType',
            'GetVersion' => 'Autovista\Identification\StructType\GetVersion',
            'GetVersionResponse' => 'Autovista\Identification\StructType\GetVersionResponse',
            'GetListMake' => 'Autovista\Identification\StructType\GetListMake',
            'GetListMakeResponse' => 'Autovista\Identification\StructType\GetListMakeResponse',
            'GetListVehicleType' => 'Autovista\Identification\StructType\GetListVehicleType',
            'GetListVehicleTypeResponse' => 'Autovista\Identification\StructType\GetListVehicleTypeResponse',
            'GetListModel' => 'Autovista\Identification\StructType\GetListModel',
            'GetListModelResponse' => 'Autovista\Identification\StructType\GetListModelResponse',
            'GetListType' => 'Autovista\Identification\StructType\GetListType',
            'GetListTypeResponse' => 'Autovista\Identification\StructType\GetListTypeResponse',
            'GetListTypeEx' => 'Autovista\Identification\StructType\GetListTypeEx',
            'GetListTypeExResponse' => 'Autovista\Identification\StructType\GetListTypeExResponse',
            'GetListTypeByCertificateID' => 'Autovista\Identification\StructType\GetListTypeByCertificateID',
            'GetListTypeByCertificateIDResponse' => 'Autovista\Identification\StructType\GetListTypeByCertificateIDResponse',
            'GetListTypeByManufacturerCode' => 'Autovista\Identification\StructType\GetListTypeByManufacturerCode',
            'GetListTypeByManufacturerCodeResponse' => 'Autovista\Identification\StructType\GetListTypeByManufacturerCodeResponse',
            'GetListBodyType' => 'Autovista\Identification\StructType\GetListBodyType',
            'GetListBodyTypeResponse' => 'Autovista\Identification\StructType\GetListBodyTypeResponse',
            'GetListGearBoxType' => 'Autovista\Identification\StructType\GetListGearBoxType',
            'GetListGearBoxTypeResponse' => 'Autovista\Identification\StructType\GetListGearBoxTypeResponse',
            'GetListDriveType' => 'Autovista\Identification\StructType\GetListDriveType',
            'GetListDriveTypeResponse' => 'Autovista\Identification\StructType\GetListDriveTypeResponse',
            'GetListFuelType' => 'Autovista\Identification\StructType\GetListFuelType',
            'GetListFuelTypeResponse' => 'Autovista\Identification\StructType\GetListFuelTypeResponse',
            'GetListFuelTypeEx' => 'Autovista\Identification\StructType\GetListFuelTypeEx',
            'GetListFuelTypeExResponse' => 'Autovista\Identification\StructType\GetListFuelTypeExResponse',
            'GetListImmatriculationYear' => 'Autovista\Identification\StructType\GetListImmatriculationYear',
            'GetListImmatriculationYearResponse' => 'Autovista\Identification\StructType\GetListImmatriculationYearResponse',
            'GetListCertificateID' => 'Autovista\Identification\StructType\GetListCertificateID',
            'GetListCertificateIDResponse' => 'Autovista\Identification\StructType\GetListCertificateIDResponse',
            'GetListVehicleByRegistrationNumberPlate' => 'Autovista\Identification\StructType\GetListVehicleByRegistrationNumberPlate',
            'VehicleListByRegistrationNumberPlate' => 'Autovista\Identification\StructType\VehicleListByRegistrationNumberPlate',
            'GetListCertificateIDByRegistrationNumberPlate' => 'Autovista\Identification\StructType\GetListCertificateIDByRegistrationNumberPlate',
            'CertificateIDByRegistrationNumberPlate' => 'Autovista\Identification\StructType\CertificateIDByRegistrationNumberPlate',
        );
    }
}
