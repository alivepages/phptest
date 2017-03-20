<?php
/**
 * User: jmexia
 * Date: 10/07/15
 */
class DisplayHook
{
    public function captureOutput()
    {
        $this->CI =& get_instance();
        $output = $this->CI->output->get_output();

        if (ENVIRONMENT != 'testing') {
            echo $output;
        }
    }
}