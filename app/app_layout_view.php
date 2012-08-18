<?php
class AppLayoutView extends View
{
    public $layout = 'default';
    public static $ext = '.php';

    public function render($action = null)
    {
        // render content
        $action = is_null($action) ? $this->controller->action : $action;
        if (strpos($action, '/') === false) {
            $view_filename = VIEWS_DIR . $this->controller->name . '/' . $action . self::$ext;
        } else {
            $view_filename = VIEWS_DIR . $action . self::$ext;
        }
        $content = static::extract($view_filename, $this->vars);

        // render layout
        $layout_filename = VIEWS_DIR . 'layouts/' . $this->layout . self::$ext;
        $vars = array(
            '_content_' => $content,
        );
        $this->controller->output .= static::extract($layout_filename, array_merge($this->vars, $vars));
    }

    public static function extract($_filename, &$_vars)
    {
        if (!file_exists($_filename)) {
            throw new DCException("{$_filename} is not found");
        }

        extract($_vars, EXTR_SKIP);
        ob_start();
        ob_implicit_flush(0);

        include $_filename;

        $vars = get_defined_vars();
        unset($vars['_filename']);
        unset($vars['_vars']);
        $_vars = $vars;

        return ob_get_clean();
    }
}
