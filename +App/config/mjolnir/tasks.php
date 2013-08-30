<?php return array
	(
		'log:access' => array
			(
				'category' => 'Inspection',
				'description' => array
					(
						'Short log of access queries.',
						'Requires short.log and profile module.',
						'If the log is not working then your module order may be wrong. The mjolnir\profile module must be placed on top of all other modules so as to be able to overwrite the functionality in question and inject profiling code.'
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
						'Requires short.log and profile module.',
						'If the log is not working then your module order may be wrong. The mjolnir\profile module must be placed on top of all other modules so as to be able to overwrite the functionality in question and inject profiling code.'
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
						'Requires short.log and profile module.',
						'If the log is not working then your module order may be wrong. The mjolnir\profile module must be placed on top of all other modules so as to be able to overwrite the functionality in question and inject profiling code.'
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
						'Requires short.log and profile module.',
						'If the log is not working then your module order may be wrong. The mjolnir\profile module must be placed on top of all other modules so as to be able to overwrite the functionality in question and inject profiling code.'
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