<?php

// Core App Class

class Core {
    // if there are no other Controllers, automatically load Pages
    protected $currentController = 'Pages';
    // method that will fetch URL when it changes
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        // prints the array into browser of requested params
        // print_r($this->getUrl());
        $url = $this->getUrl();

        // look in Controllers for virst value, ucwords will capitalize each letter
        if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            // will set a new controller
            $this->currentController = ucwords($url[0]);
            unset($url[0]);
        }

        // Require the controller
        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        // Check for second aprt of URL
        if(isset($url[1])) {
            if(method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        // Get paramaters
        $this->params = $url ? array_values($url) : [];
        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl() {
        // storing the requested URL into params array
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            // allows to filter variables as string/number + sanitizing URL
            $url = filter_var($url, FILTER_SANITIZE_URL);
            // dividing each param by /
            $url = explode('/', $url);
            return $url;
        }
    }
}

?>