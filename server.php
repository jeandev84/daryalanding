<?php
echo "Server run on port :8888\n";
echo "Open to your browser http://localhost:8888 \n";

shell_exec('php -S localhost:8888 -t public -d display_errors=1');