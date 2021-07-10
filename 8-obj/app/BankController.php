<?php

namespace Bank;

class BankController
{

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
        return App::view('add', ['id' => $id, 'acc' => Json::getJson()->show($id)]);
    }

    public function doAdd($id)
    {
        $id = (int) $id;
        $acc = Json::getJson()->show($id);
        $amount = $_POST['amount'];
        if ($amount <= 0 || !is_numeric($amount)) {
            App::setMsg('You can only deposit positive number amounts!');
            App::redirect("add/$id");
        } else {
            $acc['amount'] += $amount;
            App::setMsg('Amount successfully deposited.');
            Json::getJson()->update($id, $acc);
            App::redirect();
        }
    }

    public function remove($id)
    {
        return App::view('remove', ['id' => $id, 'acc' => Json::getJson()->show($id)]);
    }

    public function doRem($id)
    {
        $id = (int) $id;
        $acc = Json::getJson()->show($id);
        $amount = $_POST['amount'];
        if ($amount <= 0 || !is_numeric($amount)) {
            App::setMsg('You can only withdraw positive number amounts!');
            App::redirect("add/$id");
        }
        if ($amount > $acc['amount']) {
            App::setMsg('Insufficient funds!');
            App::redirect("rem/$id");
        } else {
            $acc['amount'] -= $amount;
            App::setMsg('Amount successfully withdrawn.');
            Json::getJson()->update($id, $acc);
            App::redirect();
        }
    }

    public function delete($id)
    {
        App::setMsg('Account successfully deleted.');
        Json::getJson()->delete($id);
        App::redirect();
    }

    public function create()
    {
        return App::view('createAcc');
    }

    public function save()
    {
        $tmpAcc = App::newAccNo();
        $tmpId = App::genId($tmpAcc, 12);
        $acc = ['id' => $tmpId, 'pId' => $_POST['pId'], 'accNo' => $tmpAcc, 'name' => $_POST['name'], 'surname' => $_POST['surname'], 'amount' => 0];
        App::setMsg('Account created successfully.');
        Json::getJson()->create($acc);
        App::redirect();
    }
}
