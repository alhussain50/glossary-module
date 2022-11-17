<?php

namespace Harriswebworks\Glossary\Block;

use Magento\Framework\View\Element\Template;
use Harriswebworks\Glossary\Model\ResourceModel\Glossary\Glossary;
use Harriswebworks\Glossary\Model\ResourceModel\Glossary\CollectionFactory;

class Hello extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Mastering\SampleModule\Model\Item[]
     */
    public function getItems()
    {
        return $this->collectionFactory->create()->getItems();
    }
}