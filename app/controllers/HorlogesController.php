<?php

class Horloges extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Duurste Horloges'
        ];

        $this->view('horloges/index', $data);
    }
}