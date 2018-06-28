<?php
namespace Magefox\SSOIntegration\Block\Account;

/**
 * Class AuthorizationLink
 * @package Magefox\SSOIntegration\Block\Account
 */
class AuthorizationLink extends \Magento\Customer\Block\Account\AuthorizationLink
{
    /**
     * @var \Magefox\SSOIntegration\Model\Auth0\Config
     */
    protected $config;

    /**
     * @var \Magento\Framework\Data\Form\FormKey
     */
    protected $formKey;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Http\Context $httpContext,
        \Magento\Customer\Model\Url $customerUrl,
        \Magento\Framework\Data\Helper\PostHelper $postDataHelper,
        \Magefox\SSOIntegration\Model\Auth0\Config $config,
        \Magento\Framework\Data\Form\FormKey $formKey,
        array $data = []
    ) {
        $this->config = $config;
        $this->formKey = $formKey;

        parent::__construct($context, $httpContext, $customerUrl, $postDataHelper, $data);
    }

    /**
     * @return \Magefox\SSOIntegration\Model\Auth0\Config
     */
    public function getConfig() {
        return $this->config;
    }

    /**
     * Get form key
     *
     * @return string
     */
    public function getFormKey() {
        return $this->formKey->getFormKey();
    }

    /**
     * Get logo src
     *
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getLogoSrc() {
        return $this->getLayout()->getBlock('logo')->getLogoSrc();
    }
}