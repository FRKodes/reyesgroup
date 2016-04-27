<?php

return [
	'mandrill' => [
		'secret' => $_ENV['MANDRILL_SECRET']
	],

	'mailgun' => [
	    'domain' => $_ENV['MAILGUN_DOMAIN'],
	    'secret' => $_ENV['MAILGUN_KEY'],
	]
];