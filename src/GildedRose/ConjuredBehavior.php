<?php
/**
 * Created by PhpStorm.
 * User: bdoherty
 * Date: 3/7/17
 * Time: 5:45 PM
 */

namespace GildedRose;


class ConjuredBehavior implements BehaviorInterface
{
	public function UpdateQuality(Item $item)
	{
		if ($item->quality > 0) {
			$item->quality = $item->quality - 2;
		}

		$item->sellIn = $item->sellIn - 1;

		if ($item->sellIn < 0) {
			if ($item->quality > 0) {
				$item->quality = $item->quality - 2;
			}
		}

	}
}