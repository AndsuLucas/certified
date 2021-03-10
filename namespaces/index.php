<?php
// namespace _validNamespace;
// namespace $invalidNamespace;
// namespace 1nvalidNamespace

namespace first;
	function get() {
		return __NAMESPACE__;
	}


namespace second;
	function get() {
		return __NAMESPACE__;
	}

	echo \first\get();
	echo '<br>';
	echo get();
