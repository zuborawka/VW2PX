<?php

namespace VW2PX;

class Converter
{
	/**
	 * @var int
	 */
	private $baseWidth;

	/**
	 * @return int|mixed
	 */
	public function getBaseWidth()
	{
		return $this->baseWidth;
	}

	/**
	 * @param int|mixed $baseWidth
	 */
	public function setBaseWidth($baseWidth)
	{
		$this->baseWidth = $baseWidth;
	}

	public function __construct($baseWidth = 800)
	{
		$this->baseWidth = $baseWidth;
	}

	public function convert($css)
	{
		// 非常に単純な例: 4.5vw → 36px（4.5 * 800 / 100）
		return preg_replace_callback('/([\d.]+)vw/', function ($matches) {
			$vw = (float) $matches[1];
			$px = round($vw * $this->baseWidth / 100, 2);
			return "{$px}px";
		}, $css);
	}
}

