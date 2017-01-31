<?php

namespace Webmull\Helloworld\Block;


class Helloworld extends \Magento\Framework\View\Element\Template
{
  	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}

	public function sayhello()
	{
		return 'Hello world';
	}
	public function message()
	{
		return 'Hello Kaka';
	}
}
