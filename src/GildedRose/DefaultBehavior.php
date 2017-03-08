<?php

namespace GildedRose;

class DefaultBehavior extends BaseBehavior implements BehaviorInterface
{
	public function UpdateQuality(Item $item)
	{
		if ($item->quality > 0) {
			$item->quality = $item->quality - 1;
		}

		$item->sellIn = $item->sellIn - 1;

		if ($item->sellIn < 0) {
			if ($item->quality > 0) {
				$item->quality = $item->quality - 1;
			}
		}
	}
}