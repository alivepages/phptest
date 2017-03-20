<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tipocambio_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Automatically updates the exchange rate
     * @param
     * @return boolean
     */
    function checkXRates()
    {
        try {
            // tomar tc de banmexico
            $xRate = $this->xRateBanmexico();
            return true;
        } catch (SoapFault $exception) {
            // tomar tc del dof
            $xRate = $this->xRateDof();
        }
        return false;
    }

    /**
     * Updates the exchange rate from Banmexico
     * @param
     * @return array
     */
    public function xRateBanmexico()
    {
        return 10;
    }

    /**
     * Updates the exchange rate from DOF
     * @param
     * @return array
     */
    public function xRateDof()
    {
        return 11;
    }
}