<?php

class Tipocambio_test extends TestCase
{
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        $CI =& get_instance();
    }

    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('tipocambio/tipocambio_model');
        $this->obj = $this->CI->tipocambio_model;
    }


    public function test_result_xrate()
    {
        $result = $this->obj->checkXRates();
        $this->assertTrue($result);
    }

}