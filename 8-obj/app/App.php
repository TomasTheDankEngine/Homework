<?php

namespace Bank;

class App
{
    public static function start()
    {
        ob_start();
        self::router();
        ob_end_flush();
    }

    public static function view($file, $data = [])
    {
        extract($data);
        require DIR.'views/'.$file.'.php';
    }

    public static function redirect($path = '')
    {
        header('Location: ' . URL . $path);
        die;
    }

    function newAccNo($accs)
    {
        if ($accs == null) {
            $accno = 'LT01';
            $accno .= rand(1000000000000000, 9999999999999999);
            return $accno;
        }
        $accno = 'LT01';
        $accno .= rand(1000000000000000, 9999999999999999);
        foreach ($accs as $acc) {
            if ($accno == $acc['accNo']) {
                return newAccNo($accs);
            }
            return $accno;
        }
    }

    public static function getMsg()
    {
        if (!isset($_SESSION['msg'])) {
            return false;
        }
        $msg = $_SESSION['msg'];
        unset($_SESSION['msg']);
        return $msg;
    }

    public static function setMsg(string $msg)
    {
        $_SESSION['msg'] = $msg;
    }

    private static function router()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('/', $uri);
        array_shift($uri);

        if ('create-acc' == $uri[0]) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->create();
            } else {
                return (new BankController)->save();
            }
        }

        if ('add' == $uri[0] && isset($uri[1])) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->add($uri[1]);
            } else {
                return (new BankController)->doAdd($uri[1]);
            }
        }

        if ('rem' == $uri[0] && isset($uri[1])) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new BankController)->remove($uri[1]);
            } else {
                return (new BankController)->doRem($uri[1]);
            }
        }

        if ('delete' == $uri[0] && isset($uri[1]) && 'POST' == $_SERVER['REQUEST_METHOD']) {
            return (new BankController)->delete($uri[1]);
        }

        if ($uri[0] === '' && count($uri) === 1) {
            return (new BankController)->index();
        }

        self::view('404');
        http_response_code(404);
    }
}
