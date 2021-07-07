<?php

namespace Bank;

class BankController {

    public function bankTest($whatToSay)
    {
        $hello = 'Hello there';
        return App::view('test', compact('whatToSay', 'hello'));
    }

    public function index()
    {
        return App::view('index', ['accs' => Json::getJson()->showAll()]);
    }

    public function add($id)
    {
        return App::view('add', ['id' => $id]);
    }

    public function doAdd($id) {
        //need to change id to pId !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        $id = (int) $id;
        ///////
        $acc = Json::getJson()->show($id);
        $acc['amount'] += (int) $_POST['amount'];
        Json::getJson()->update($id, $acc);
        App::redirect();
    }

    public function remove($id)
    {
        return App::view('remove', ['id' => $id]);
    }

    public function doRem($id) {
        //need to change id to pId !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        $id = (int) $id;
        ///////
        $acc = Json::getJson()->show($id);
        $acc['amount'] -= (int) $_POST['amount'];
        Json::getJson()->update($id, $acc);
        App::redirect();
    }

    public function delete($id) 
    {
        Json::getJson()->delete($id);
        App::redirect();
    }

    public function create()
    {
        return App::view('create_acc'); ///////////////
    }

    public function save()
    {
        $acc = ['id' => 0, 'amount' => 0];
        Json::getJson()->create($acc);
        App::redirect();
    }
}