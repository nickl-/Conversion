<?php

namespace Respect\Conversion\Operators\Collection\First;

use Respect\Conversion\Selectors\Collection\ItemSelectInterface;
use Respect\Conversion\Operators\Collection\Item\Append as ItemAppend;

class Append extends ItemAppend implements ItemSelectInterface
{
	public function transform($target)
	{
		reset($target);
		$this->selector->items = array(key($target));
		return parent::transform($target);
	}
}