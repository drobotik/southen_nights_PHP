<?php

namespace Lex\Validation;

use Lex\Watchman;
use Illuminate\Contracts\Validation\Rule;

class Product extends Watchman implements Rule {
	public function passes($attribute, $value) {
		return $this->search('product', $value);
	}
	public function message() {
		return 'The product not found.';
	}
}
