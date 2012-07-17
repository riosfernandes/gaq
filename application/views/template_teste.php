<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php
        echo '<title>' . $titulo . '</title>';
        foreach ($styles as $style) {
            echo link_tag(CSSPATH . $style . '.css');
        }
        if (isset($css_files)) {
            foreach ($css_files as $css) {
                echo link_tag($css);
            }
        }
        if (isset($css_files_aditional)) {
            foreach ($css_files_aditional as $css) {
                echo link_tag(CSSPATH . $css . '.css');
            }
        }

        if (!isset($js_files))
            $js_files = array();
        
        if (isset($js_files_jquery))
            $js_files = array_merge($js_files, array_diff($js_files_jquery, $js_files));
        
        if (isset($js_files_aditional))
            $js_files = array_merge($js_files, array_diff($js_files_aditional, $js_files));

        if (isset($js_files)) {
            foreach ($js_files as $js_crud) {
                echo script_tag($js_crud);
            }
        }
        ?>
    </head>
    <body>
        <div id="page">
            <div id="hyper_header"><?php include_once('hyper_header.php') ?></div>
            <div id="header"><?php include_once('header.php') ?></div>
            <div id="navigator"><?php include_once('navigator.php') ?></div>
            <div id="contents">
                <?php
                if (isset($subtitle))
                    echo '<h1>' . $subtitle . '</h1>';
                echo($contents)
                ?>
            </div>
            <div id="footer"><?php include_once('footer.php') ?></div>
        </div>        
    </body>
</html>