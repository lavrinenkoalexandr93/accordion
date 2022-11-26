<?php

function ac_register_blocks() {
    register_block_type(
        AC_PLUGIN_DIR . 'build/block.json'
    );
}