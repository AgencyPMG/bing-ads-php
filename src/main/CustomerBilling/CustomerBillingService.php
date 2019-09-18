<?php

namespace PMG\BingAds\CustomerBilling;

class CustomerBillingService extends \PMG\BingAds\BingSoapClient
{
    const WSDL_NAMESPACE = 'https://bingads.microsoft.com/Billing/v13';
    const WSDL_PROD = 'https://clientcenter.api.bingads.microsoft.com/Api/Billing/v13/CustomerBillingService.svc?singleWsdl';
    const WSDL_SANDBOX = 'https://clientcenter.api.sandbox.bingads.microsoft.com/Api/Billing/v13/CustomerBillingService.svc?singleWsdl';


    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetBillingDocumentsInfoRequest' => 'PMG\\BingAds\\CustomerBilling\\GetBillingDocumentsInfoRequest',
      'GetBillingDocumentsInfoResponse' => 'PMG\\BingAds\\CustomerBilling\\GetBillingDocumentsInfoResponse',
      'GetBillingDocumentsRequest' => 'PMG\\BingAds\\CustomerBilling\\GetBillingDocumentsRequest',
      'GetBillingDocumentsResponse' => 'PMG\\BingAds\\CustomerBilling\\GetBillingDocumentsResponse',
      'AddInsertionOrderRequest' => 'PMG\\BingAds\\CustomerBilling\\AddInsertionOrderRequest',
      'AddInsertionOrderResponse' => 'PMG\\BingAds\\CustomerBilling\\AddInsertionOrderResponse',
      'UpdateInsertionOrderRequest' => 'PMG\\BingAds\\CustomerBilling\\UpdateInsertionOrderRequest',
      'UpdateInsertionOrderResponse' => 'PMG\\BingAds\\CustomerBilling\\UpdateInsertionOrderResponse',
      'SearchInsertionOrdersRequest' => 'PMG\\BingAds\\CustomerBilling\\SearchInsertionOrdersRequest',
      'SearchInsertionOrdersResponse' => 'PMG\\BingAds\\CustomerBilling\\SearchInsertionOrdersResponse',
      'GetAccountMonthlySpendRequest' => 'PMG\\BingAds\\CustomerBilling\\GetAccountMonthlySpendRequest',
      'GetAccountMonthlySpendResponse' => 'PMG\\BingAds\\CustomerBilling\\GetAccountMonthlySpendResponse',
      'ArrayOflong' => 'PMG\\BingAds\\CustomerBilling\\ArrayOflong',
      'ArrayOfBillingDocumentInfo' => 'PMG\\BingAds\\CustomerBilling\\ArrayOfBillingDocumentInfo',
      'BillingDocumentInfo' => 'PMG\\BingAds\\CustomerBilling\\BillingDocumentInfo',
      'ArrayOfBillingDocument' => 'PMG\\BingAds\\CustomerBilling\\ArrayOfBillingDocument',
      'BillingDocument' => 'PMG\\BingAds\\CustomerBilling\\BillingDocument',
      'InsertionOrder' => 'PMG\\BingAds\\CustomerBilling\\InsertionOrder',
      'InsertionOrderPendingChanges' => 'PMG\\BingAds\\CustomerBilling\\InsertionOrderPendingChanges',
      'ArrayOfPredicate' => 'PMG\\BingAds\\CustomerBilling\\ArrayOfPredicate',
      'Predicate' => 'PMG\\BingAds\\CustomerBilling\\Predicate',
      'ArrayOfOrderBy' => 'PMG\\BingAds\\CustomerBilling\\ArrayOfOrderBy',
      'OrderBy' => 'PMG\\BingAds\\CustomerBilling\\OrderBy',
      'Paging' => 'PMG\\BingAds\\CustomerBilling\\Paging',
      'ArrayOfInsertionOrder' => 'PMG\\BingAds\\CustomerBilling\\ArrayOfInsertionOrder',
      'ArrayOfAdApiError' => 'PMG\\BingAds\\CustomerBilling\\ArrayOfAdApiError',
      'AdApiError' => 'PMG\\BingAds\\CustomerBilling\\AdApiError',
      'ApiBatchFault' => 'PMG\\BingAds\\CustomerBilling\\ApiBatchFault',
      'ArrayOfOperationError' => 'PMG\\BingAds\\CustomerBilling\\ArrayOfOperationError',
      'OperationError' => 'PMG\\BingAds\\CustomerBilling\\OperationError',
      'ArrayOfBatchError' => 'PMG\\BingAds\\CustomerBilling\\ArrayOfBatchError',
      'BatchError' => 'PMG\\BingAds\\CustomerBilling\\BatchError',
      'ApplicationFault' => 'PMG\\BingAds\\CustomerBilling\\ApplicationFault',
      'ApiFault' => 'PMG\\BingAds\\CustomerBilling\\ApiFault',
      'AdApiFault' => 'PMG\\BingAds\\CustomerBilling\\AdApiFault',
      'AdApiFaultDetail' => 'PMG\\BingAds\\CustomerBilling\\AdApiFault',
    );

    /**
     * @param PMG\BingAds\BingSession $session A session object with credentials, etc
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @param PMG\BingAds\ServiceDescriptor $sd The services descriptor for the service
     */
    public function __construct(\PMG\BingAds\BingSession $session, string $wsdl, array $options=array(), \PMG\BingAds\ServiceDescriptor $sd=null)
    {
    $options["classmap"] = array_replace(self::$classmap, $options["classmap"] ?? []);
    parent::__construct($session, $wsdl, $options, $sd);
    }

    /**
     * @param GetBillingDocumentsInfoRequest $parameters
     * @return GetBillingDocumentsInfoResponse
     */
    public function getBillingDocumentsInfo(GetBillingDocumentsInfoRequest $parameters)
    {
        return $this->__soapCall("GetBillingDocumentsInfo", [$parameters]);
    }

    /**
     * @param GetBillingDocumentsRequest $parameters
     * @return GetBillingDocumentsResponse
     */
    public function getBillingDocuments(GetBillingDocumentsRequest $parameters)
    {
        return $this->__soapCall("GetBillingDocuments", [$parameters]);
    }

    /**
     * @param AddInsertionOrderRequest $parameters
     * @return AddInsertionOrderResponse
     */
    public function addInsertionOrder(AddInsertionOrderRequest $parameters)
    {
        return $this->__soapCall("AddInsertionOrder", [$parameters]);
    }

    /**
     * @param UpdateInsertionOrderRequest $parameters
     * @return UpdateInsertionOrderResponse
     */
    public function updateInsertionOrder(UpdateInsertionOrderRequest $parameters)
    {
        return $this->__soapCall("UpdateInsertionOrder", [$parameters]);
    }

    /**
     * @param SearchInsertionOrdersRequest $parameters
     * @return SearchInsertionOrdersResponse
     */
    public function searchInsertionOrders(SearchInsertionOrdersRequest $parameters)
    {
        return $this->__soapCall("SearchInsertionOrders", [$parameters]);
    }

    /**
     * @param GetAccountMonthlySpendRequest $parameters
     * @return GetAccountMonthlySpendResponse
     */
    public function getAccountMonthlySpend(GetAccountMonthlySpendRequest $parameters)
    {
        return $this->__soapCall("GetAccountMonthlySpend", [$parameters]);
    }

}
