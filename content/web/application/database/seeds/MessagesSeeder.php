<?php

class MessagesSeeder extends Seeder
{
    private $table = 'messages';

    public function clear_messages($order_id) {
        $this->db->delete($this->table, array('order_id' => $order_id));
    }

}