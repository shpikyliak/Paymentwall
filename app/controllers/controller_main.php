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
        if ($_GET['type'] == 'json') {
            /*set json headers*/
            $result = $answer->jsonAnsw($validate); // return json
        } elseif ($_GET['type'] == 'xml') {
            /*set xml headers*/
            $result = $answer->XMLAnsw($validate); //return XML if you want
        } else {
            /*set bad request status headers*/
            $result = 'unsupported type';
        }
        echo $result;
        if ($this->model->error->success) {
            $hash = $this->model->makeHash($data);
            $this->model->send($data, $hash);
        }

    }
}