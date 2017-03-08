<?php
/**
 * Created by PhpStorm.
 * User: bdoherty
 * Date: 3/7/17
 * Time: 6:24 PM
 */

namespace GildedRose;


class BaseBehavior
{
	public function isConjured(Item $item)
	{
		return strpos($item->name, 'Conjured') === 0;
	}
}