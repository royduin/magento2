<?php

namespace Mollie\Payment;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    const STATUS_PENDING_BANKTRANSFER = 'payment/mollie_methods_banktransfer/order_status_pending';
    const STATUS_NEW_PAYMENT_LINK = 'payment/mollie_methods_paymentlink/order_status_new';
    const PAYMENT_KLARNAPAYLATER_PAYMENT_SURCHARGE = 'payment/mollie_methods_klarnapaylater/payment_surcharge';
    const PAYMENT_KLARNAPAYLATER_PAYMENT_SURCHARGE_TAX_CLASS = 'payment/mollie_methods_klarnapaylater/payment_surcharge_tax_class';
    const PAYMENT_KLARNASLICEIT_PAYMENT_SURCHARGE = 'payment/mollie_methods_klarnasliceit/payment_surcharge';
    const PAYMENT_KLARNASLICEIT_PAYMENT_SURCHARGE_TAX_CLASS = 'payment/mollie_methods_klarnasliceit/payment_surcharge_tax_class';

    /**
     * @var ScopeConfigInterface
     */
    private $config;

    public function __construct(
        ScopeConfigInterface $config
    ) {
        $this->config = $config;
    }

    private function getPath($path, $storeId)
    {
        return $this->config->getValue($path, ScopeInterface::SCOPE_STORE, $storeId);
    }

    public function statusPendingBanktransfer($storeId = null)
    {
        return $this->getPath(static::STATUS_PENDING_BANKTRANSFER, $storeId);
    }

    public function statusNewPaymentLink($storeId = null)
    {
        return $this->getPath(static::STATUS_NEW_PAYMENT_LINK, $storeId);
    }

    public function klarnaPaylaterPaymentSurcharge($storeId = null)
    {
        return $this->getPath(static::PAYMENT_KLARNAPAYLATER_PAYMENT_SURCHARGE, $storeId);
    }

    public function klarnaPaylaterPaymentSurchargeTaxClass($storeId = null)
    {
        return $this->getPath(static::PAYMENT_KLARNAPAYLATER_PAYMENT_SURCHARGE_TAX_CLASS, $storeId);
    }

    public function klarnaSliceitPaymentSurcharge($storeId = null)
    {
        return $this->getPath(static::PAYMENT_KLARNASLICEIT_PAYMENT_SURCHARGE, $storeId);
    }

    public function klarnaSliceitPaymentSurchargeTaxClass($storeId = null)
    {
        return $this->getPath(static::PAYMENT_KLARNASLICEIT_PAYMENT_SURCHARGE_TAX_CLASS, $storeId);
    }
}
