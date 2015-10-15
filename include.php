<?php

/* There are four options to include another file
include something means that if PHP can't find the file, it throws a warning
require somethine means that if PHP can't find the file, it stops execution

_once means that PHP will ignore multiple attempts to include/require a file
(e.g. files A, B include file C, so if you inlcude files A, B, then PHP won't include
file C twice

The functions:

include();

include_once();

require();

require_once();

These are essentially equivalent to copy/pasting the file in, but it provides
code MODULARITY.

*/

require_once('function.php');

?>