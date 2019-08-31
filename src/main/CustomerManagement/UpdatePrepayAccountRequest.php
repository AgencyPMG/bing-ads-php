<?php

namespace PMG\BingAds\CustomerManagement;

class UpdatePrepayAccountRequest
{

    /**
     * @var AdvertiserAccount $Account
     */
    protected $Account = null;

    /**
     * @param AdvertiserAccount $Account
     */
    public function __construct($Account = null)
    {
    $this->Account = $Account;
    }

    /**
     * @return AdvertiserAccount
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param AdvertiserAccount $Account
     * @return \PMG\BingAds\CustomerManagement\UpdatePrepayAccountRequest
     */
    public function setAccount($Account)
    {
        $this->Account = $Account;
        return $this;
    }

}
