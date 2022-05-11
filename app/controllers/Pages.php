<?php
class Pages extends Controller
{

    public function __construct()
    {
        //$this->userModel = $this->model('User');
    }

    public function index()
    {
        $data = [
            'title' => 'Home page'
            //'name' =>'maryem'
            //'users' => $users
        ];
        $this->view('index', $data);
    }

    public function about()
    {
        $this->view('about');
    }
}
