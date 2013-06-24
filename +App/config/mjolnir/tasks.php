<?php return array
	(
		'log:access' => array
			(
				'category' => 'Inspection',
				'description' => array
					(
						'Short log of access queries.',
						'Requires short.log and profile module.'
					),
				'flags' => array
					(
						'erase' => array
							(
								'description' => 'Erase log before opening.',
								'short' => 'e',
							)
					),
			),

		'log:cache' => array
			(
				'category' => 'Inspection',
				'description' => array
					(
						'Short log of cache access.',
						'Requires short.log and profile module.'
					),
				'flags' => array
					(
						'erase' => array
							(
								'description' => 'Erase log before opening.',
								'short' => 'e',
							)
					),
			),

		'log:cache:get' => array
			(
				'category' => 'Inspection',
				'description' => array
					(
						'Short log of cache get access',
						'Requires short.log and profile module.'
					),
				'flags' => array
					(
						'erase' => array
							(
								'description' => 'Erase log before opening.',
								'short' => 'e',
							)
					),
			),

		'log:queries' => array
			(
				'category' => 'Inspection',
				'description' => array
					(
						'Short log of database queries.',
						'Requires short.log and profile module.'
					),
				'flags' => array
					(
						'erase' => array
							(
								'description' => 'Erase log before opening.',
								'short' => 'e',
							)
					),
			),

	); # config