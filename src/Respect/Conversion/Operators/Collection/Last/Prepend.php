<?php

namespace Respect\Conversion\Operators\Collection\Last;

use Respect\Conversion\Selectors\Collection\ItemSelectInterface;
use Respect\Conversion\Operators\Collection\Item\Prepend as ItemPrepend;

class Prepend extends ItemPrepend implements ItemSelectInterface
{
	public function transform($target)
	{
		end($target);
		$this->selector->items = array(key($target));
		return parent::transform($target);
	}
}