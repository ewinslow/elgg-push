<?php

function push_init() {
	elgg_extend_view('extensions/channel', 'push/channel');

	elgg_register_plugin_hook_handler('add', 'river', array('PuSH', 'updateRiverHandler'));

	elgg_view_register_simplecache('push/channel');
}

elgg_register_event_handler('init', 'system', 'push_init');
