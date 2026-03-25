<?php

class SneakersController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mooiste Sneakers'
        ];

        $this->view('sneakers/index', $data);
    }
}