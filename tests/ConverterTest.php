<?php

namespace VW2PX\Tests;

use PHPUnit\Framework\TestCase;
use VW2PX\Converter;

class ConverterTest extends TestCase
{
	public function testInstanceCanBeCreated()
	{
		$converter = new Converter(800);
		$this->assertInstanceOf(Converter::class, $converter);
	}

	public function testConvertVwToPx()
	{
		$converter = new Converter(800);
		$css = 'font-size: 4.5vw;';
		$expected = 'font-size: 36px;';
		$this->assertEquals($expected, $converter->convert($css));
	}
}
