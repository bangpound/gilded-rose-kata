<?php

namespace GildedRose;


class AgedBrieBehavior extends BaseBehavior implements BehaviorInterface
{
	public function UpdateQuality(Item $item)
	{
		$qualityDelta = $this->isConjured($item) ? 2 : 1;

		if ($item->quality < 50) {
			$item->quality = $item->quality + $qualityDelta;
		}

		$item->sellIn = $item->sellIn - 1;

		if ($item->sellIn < 0) {
			if ($item->quality < 50) {
				$item->quality = $item->quality + $qualityDelta;
			}
		}
	}
}