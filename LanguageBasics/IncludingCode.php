<?php

    // The require construct is less forgiving and is more suited to loading code libraries, where the page cannot be displayed
    // if the libraries do not load. You can silence the warning by prepending the call with the silence operator (@)—for example, @include.

    // If the allow_url_fopen option is enabled through PHP’s configuration file, php.ini, you can include files from a remote site by
    // providing a URL instead of a simple local path:    include "http://www.example.com/codelib.php";  

    // If a program uses include or require to include the same file twice (mistakenly done in a loop, for example), the file is loaded and the
    // code is run, or the HTML is printed twice. This can result in errors about the redefinition of functions, or multiple copies of headers or
    // HTML being sent. To prevent these errors from occurring, use the include_once and require_once constructs.

    //Use the get_included_files() function to learn which files your script has included or required.

?>