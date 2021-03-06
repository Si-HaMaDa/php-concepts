<?php

// namespace Helpers;

class Validations
{
    protected $value;
    protected $error = false;
    protected $messages = [];
    protected $rules = '';

    public function __construct($value, $rules = '')
    {
        $this->value = $this->startFilltering($value);
        $this->rules = $rules;
        $this->validateRules();
    }

    public function startFilltering($value)
    {
        if (isset($value["tmp_name"]) || is_array($value)) return $value;
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }

    public function validateRules()
    {
        if (empty($this->rules)) return;

        $rules = explode('|', $this->rules);
        foreach ($rules as $rule) {
            $method = explode(':', $rule)[0];
            $params = explode(':', $rule)[1] ?? NULL;
            $this->$method($params);
        }
    }

    public function notEmpty()
    {
        if (empty($this->value)) {
            $this->error = true;
            $this->messages[] = "Value is Empty!";
        }
        return $this;
    }

    public function isIsset()
    {
        if (!isset($this->value)) {
            $this->error = true;
            $this->messages[] = "Value is not set!";
        }
        return $this;
    }

    public function isName()
    {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $this->value)) {
            $this->error = true;
            $this->messages[] = "Only letters and white space allowed!";
        }
        return $this;
    }

    public function isEmail()
    {
        if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            $this->error = true;
            $this->messages[] = "Invalid Email!";
        }
        return $this;
    }

    public function isInteger()
    {
        if (!filter_var($this->value, FILTER_VALIDATE_INT)) {
            $this->error = true;
            $this->messages[] = "Value is not Integer!";
        }
        return $this;
    }

    public function isString()
    {
        if (!preg_match("/^[a-zA-Z0-9-' ]*$/", $this->value)) {
            $this->error = true;
            $this->messages[] = "Value is not String!";
        }
        return $this;
    }

    public function isIn($in = [])
    {
        $in = !is_array($in) ? explode(',', $in) : $in;
        if (!in_array($this->value, $in)) {
            $this->error = true;
            $this->messages[] = "Value is not in allowed values!";
        }
        return $this;
    }

    public function min($number = 6)
    {
        if (strlen($this->value) < $number) {
            $this->error = true;
            $this->messages[] = "Value must be More than $number!";
        }
        return $this;
    }

    public function max($number = 225)
    {
        if (strlen($this->value) > $number) {
            $this->error = true;
            $this->messages[] = "Value must be Less than $number!";
        }
        return $this;
    }

    public function confirmed($confirmation)
    {
        if ($this->value != $this->startFilltering($confirmation)) {
            $this->error = true;
            $this->messages[] = "Value must be confirmed!";
        }
        return $this;
    }

    public function isNullable()
    {
        if (
            !isset($this->value)
            || empty($this->value)
            || (isset($this->value["tmp_name"]) && empty($this->value["tmp_name"]))
        ) {
            $this->value = null;
            $this->error = false;
            $this->messages[] = "Value is nullable!";
        }
        return $this;
    }

    public function isArray()
    {
        if (!is_array($this->value)) {
            $this->error = true;
            $this->messages[] = "Value must be Array!";
        }
        return $this;
    }

    public function arrayValues($is)
    {
        foreach ($this->value as $value) {
            $val = (new Validations($value))->$is();
            if ($val->error) {
                $this->error = true;
                $this->messages = array_merge($this->messages, $val->messages);
            }
        }
        return $this;
    }


    protected function checkFile($file = null)
    {
        $file = $this->value["tmp_name"] ?? $file;
        return is_file($file);
    }

    public function isFile()
    {
        if ($this->checkFile() == false) {
            $this->error = true;
            $this->messages[] = "Input is not a File.";
        }
        return $this;
    }

    public function fileSize($size = 500)
    {
        $ckSize = $size * 1000; // Convert to kb
        if ($this->checkFile() == true) {
            $fileSize = filesize($this->value["tmp_name"]);
            if ($fileSize > $ckSize) {
                $this->error = true;
                $this->messages[] = "File size is more than $size KB!";
            }
        }
        return $this;
    }

    public function isImage()
    {
        $check = $this->checkFile() ? getimagesize($this->value["tmp_name"]) : false;
        if ($check == false) {
            $this->error = true;
            $this->messages[] = "Input is not an image.";
        }
        return $this;
    }

    public function extensionIn($in = [])
    {
        $extension = isset($this->value['name']) ? strtolower(pathinfo($this->value['name'], PATHINFO_EXTENSION)) : null;
        if (!$extension || !in_array($extension, $in)) {
            $this->error = true;
            $this->messages[] = "Value is not in allowed extensions!";
        }
        return $this;
    }

    public function checkErrors()
    {
        return $this->error;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function getValue()
    {
        return $this->value;
    }
}
