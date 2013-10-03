<?php
	$out = [];
	$commits = exec('git log --graph master | sed -n \'/^*/p\'', $out);
	print_r($out);
	if (in_array('* commit d13e40202835e6d132a22696b0d96648945a3e77', $out)) {
		echo "is secure";
	} else {
		echo "isn't secure";
	}
?>
