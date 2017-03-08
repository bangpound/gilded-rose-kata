<?php
/**
 * Created by PhpStorm.
 * User: bdoherty
 * Date: 3/7/17
 * Time: 5:45 PM
 */

namespace GildedRose;


class BackstageBehavior extends BaseBehavior implements BehaviorInterface
{

	public function UpdateQuality(Item $item)
	{
		$qualityDelta = $this->isConjured($item) ? 2 : 1;

		if ($item->quality < 50) {
			$item->quality = $item->quality + $qualityDelta;

			if ($item->sellIn < 11) {
				if ($item->quality < 50) {
					$item->quality = $item->quality + $qualityDelta;
				}
			}

			if ($item->sellIn < 6) {
				if ($item->quality < 50) {
					$item->quality = $item->quality + $qualityDelta;
				}
			}
		}

		$item->sellIn = $item->sellIn - 1;

		if ($item->sellIn < 0) {
			$item->quality = $item->quality - $item->quality;
		}
	}
}