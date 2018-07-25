<?php
/**
 *
 * Topic Prefixes extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbb\topicprefixes\tests\dbal;

class manager_get_active_prefixes_test extends manager_base
{
	/**
	 * Data for test_get_active_prefixes
	 *
	 * @return array
	 */
	public function data_get_active_prefixes()
	{
		return array(
			array(null, array('[TAG 1]', '[TAG 2]', '[TAG 3]')),
			array('', array('[TAG 1]', '[TAG 2]', '[TAG 3]')),
			array(0, array('[TAG 1]', '[TAG 2]', '[TAG 3]')),
			array(2, array('[TAG 1]', '[TAG 2]')),
			array(3, array('[TAG 3]')),
			array(9, array()),
		);
	}

	/**
	 * Test the get_active_prefixes() method
	 *
	 * @dataProvider data_get_active_prefixes
	 * @param $forum_id
	 * @param $expected
	 */
	public function test_get_active_prefixes($forum_id, $expected)
	{
		$prefixes = $this->manager->get_active_prefixes($forum_id);

		$this->assertEquals($expected, array_column($prefixes, 'prefix_tag'));
	}
}
