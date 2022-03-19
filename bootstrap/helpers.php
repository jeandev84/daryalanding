<?php


if (! function_exists('view')) {

    /**
     * @param string $template
     * @param array $data
     * @return void
    */
    function view(string $template, array $data = []): \Framework\Http\Response
    {
        extract($data, EXTR_SKIP);

        $template = sprintf('%s/views/%s', \Framework\App::$app->root, trim($template, '\\/'));

        if (! is_file($template)) {
             exit("File {$template} does not exist.");
        }


        ob_start();

        @require realpath($template);

        $output = ob_get_clean();

        return new \Framework\Http\Response($output);
    }
}