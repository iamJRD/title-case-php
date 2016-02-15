<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $lower_case = strtolower($input_title);
            return ucwords($lower_case);
        }
    }

?>
