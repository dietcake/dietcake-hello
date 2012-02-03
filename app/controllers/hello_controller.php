<?php
class HelloController extends AppController
{
    public function index()
    {
        $message = Hello::getMessage();
        $this->set(get_defined_vars());
    }
}
