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
            App::setMsg("$amount EUR successfully deposited.");
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
            App::setMsg("$amount EUR successfully withdrawn.");
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
        if ($_POST['pId'] == null || $_POST['name'] == null || $_POST['surname'] == null) {
            App::setMsg('Fields cannot be empty.');
            App::redirect('create-acc');
        }
        if (!is_numeric($_POST['pId']) || strlen($_POST['pId']) != 11) {
            App::setMsg('Personal ID must bet 11 digits.');
            App::redirect('create-acc');
        }
        if (!is_string($_POST['name']) || strlen($_POST['name']) < 3) {
            App::setMsg('Name must consist of no less than 3 letters.');
            App::redirect('create-acc');
        }
        if (!is_string($_POST['surname']) || strlen($_POST['surname']) < 3) {
            App::setMsg('Surname must consist of no less than 3 letters.');
            App::redirect('create-acc');
        } else {
            $acc = ['id' => $tmpId, 'pId' => $_POST['pId'], 'accNo' => $tmpAcc, 'name' => $_POST['name'], 'surname' => $_POST['surname'], 'amount' => 0];
            App::setMsg('Account created successfully.');
            Json::getJson()->create($acc);
            App::redirect();
        }
    }
}
