

<?php

class StrUtils {
    private $str;

    public function __construct($newStr) {
        $this->str = $newStr;
    }

    public function bold() {
        return '<strong>'.$this->str.'</strong>';
    }

    public function italic() {
        return '<i>'.$this->str.'</i>';
    }

    public function underline() {
        return '<u>'.$this->str.'</u>';
    }

    public function capitalize() {
        return strtoupper($this->str);
    }

    public function uglify() {
        $uglify = $this->str;
        $this->str = $this->bold();
        $this->str = $this->italic();
        $this->str = $this->underline();
        $result = $this->str;
        $this->str = $uglify;
        return $result;
    }
}