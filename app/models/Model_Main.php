<?php


class model_main extends Model
{
    public $error;

    public function validate($data)
    {
        $this->error = new Error();
        $this->error->email = $this->validateEmail($data['email']);
        $this->error->phone = $this->validatePhone($data['phone']);
        $this->error->card_number = $this->validateCardNumber($data['card_number']);
        $this->error->expiry_date = $this->validateExpiryDate($data['expiry_month'], $data['expiry_year']);
        $this->error->cvv2 = $this->validateCvv2($data['cvv2']);
        $result = $this->error->getErrorMes();

        return $result;

    }

    private function validateEmail($email)
    {
        if (!$email) return false;
        if (!preg_match("/^([a-zA-Z0-9])+([\\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\\.[a-zA-Z0-9_-]+)*\\.([a-zA-Z]{2,6})$/", $email)) return false;
        return true;
    }

    private function validatePhone($phone)
    {
        if (!$phone) return false;
        if (!preg_match('/^(\+?\d+)?\s*(\(\d+\))?[\s-]*([\d-]*)$/', $phone)) return false;
        return true;
    }

    private function validateCardNumber($card_number)
    {
        if (!$card_number) return false;
        //check wrong symbol in number
        if (!preg_match('/^[\s\d]*$/', $card_number)) return false;
        //delete spaces
        $card_number = preg_replace('/\D/', '', $card_number);
        //not empty
        if ($card_number == '') return false;
        //check length
        if (strlen($card_number) > 20 || strlen($card_number) < 13) return false;
        //luhn algoritm
        $luhn = new Luhn();
        if (!$luhn->check($card_number)) return false;
        return true;
    }

    private function validateExpiryDate($month, $year)
    {
        //init time
        if (!ini_get('date.timezone')) {
            date_default_timezone_set('GMT');
        }
        $timezoneMonth = date('n');//day
        $timezoneYear = date('Y');//year
        if ($month == 'Month' || $year == 'Year') return false;
        if ($year < $timezoneYear || ($year == $timezoneYear && $month < $timezoneMonth)) return false;
        return true;
    }

    private function validateCvv2($cvv2)
    {
        if (!$cvv2) return false;
        if (!preg_match('/^[\d]*$/', $cvv2)) return false;
        if (strlen($cvv2) != 3) return false;
        return true;

    }

    public function makeHash($data)
    {
        $key = file_get_contents('key.txt');
        $hash = md5($data['email'] . $data['phone'] . $data['card_number'] . $data['expiry_month'] . $data['expiry_year'] . $data['cvv2'] . $key . time());
        return $hash;
    }

    public function send($data, $hash)
    {
        //here is send to bank server or another organization
    }

}