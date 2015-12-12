<?php


class Controller_Main extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->model = new Model_Main();
    }
    //
    //default
    //
    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');

    }
    //
    //check data
    //
    function action_validate()
    {
        $data = $_POST;
        $validate = $this->model->validate($data);
        $answer = new Answer();
        //$result = $answer->jsonAnsw($validate); // return json
        $result = $answer->XMLAnsw($validate); //return XML if you want
        echo $result;
        if ($this->model->error->success) {
            $hash = $this->model->makeHash($data);
            $this->model->send($data, $hash);
        }

    }
}