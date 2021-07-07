<?php

namespace Bank;

use App\DB\DataBase;

class Json implements DataBase {

    private $data;
    private static $obj;

    public static function getJson()
    {
        return self::$obj ?? self::$obj = new self;
    }

    public function __construct()
    {
        if (!file_exists(DIR.'/accs.json')) {
            file_put_contents(DIR.'/accs.json', json_encode([]));
        }
        $this->data = json_decode(file_get_contents(DIR.'/accs.json'), 1);
    }

    public function __destruct()
    {
        file_put_contents(DIR.'/accs.json', json_encode($this->data));
    }



    public function create(array $userData): void
    {
        $this->data[] = $userData;
    }

    public function update(int $userId, array $userData): void
    {
        foreach ($this->data as $index => $acc) {
            if ($acc['id'] == $userId) {
                $this->data[$index] == $userData;
                return;
            }
        }
    }

    public function delete(int $userId): void
    {
        foreach ($this->data as $index => $acc) {
            if ($acc['id'] == $userId) {
                unset($this->data[$index]);
                return;
            }
        }
    }

    public function show(int $userId): array
    {
        foreach ($this->data as $index => $acc) {
            if ($acc['id'] == $userId) {
                return $this->data[$index];
            }
        }
    }

    public function showAll(): array
    {
        return $this->data;
    }

}