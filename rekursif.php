<?php
function show_number($digit)
{
    if ($digit < 8) {
        echo "the number is $digit<br>";
        show_number($digit + 1);
    }
}

show_number(1);
