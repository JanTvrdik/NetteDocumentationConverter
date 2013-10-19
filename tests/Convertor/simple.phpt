<?php
require __DIR__ . '/../bootstrap.php';

test(function () {
	$convertor = new Text\Convertor('doc', 'cs', 'page');
	$convertor->parse('

/--php
echo "Hello";
\--

');
	echo $convertor->html;
});
