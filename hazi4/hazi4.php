<?php

class ArrayManipulator {
    private $data = [];

    public function __construct($data) {
        $this->data = $data;
    }

    public function __get($key) {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        } else {
            return null;
        }
    }

    public function __set($key, $value) {
        $this->data[$key] = $value;
    }

    public function __isset($key) {
        return isset($this->data[$key]);
    }

    public function __unset($key) {
        unset($this->data[$key]);
    }

    public function __toString() {
        return implode(', ', $this->data);
    }

    public function __clone() {
        $this->data = array_map(function($value) {
            if (is_object($value)) {
                return clone $value;
            } else {
                return $value;
            }
        }, $this->data);
    }
}
