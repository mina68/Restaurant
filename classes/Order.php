<?php

class Order
{
	private $order_id;
	private $price;
    private $tips;
    private $foreign_user_id;
    private $date;
    private $notes;
    
    private $foreign_item_id;
    private $count;
    private $size;

    public function set_order_id($order_id)
    {
        $this->order_id = $this->integer_filter($order_id);
    }
    public function set_foreign_user_id($foreign_user_id)
    {
        $this->foreign_user_id = $this->integer_filter($foreign_user_id);
    }
    public function set_foreign_item_id($foreign_item_id)
    {
        $this->foreign_item_id = $this->integer_filter($foreign_item_id);
    }
    public function set_date($date)
    {
        $this->date = $date;
    }
    public function set_size($size)
    {
        $this->size = $this->string_filter($size);
    }
    public function set_notes($notes)
    {
        $this->notes = $this->string_filter($notes);
    }
    public function set_price($price)
    {
        $this->price = $this->integer_filter($price);
    }
    public function set_tips($tips)
    {
        $this->tips = $this->integer_filter($tips);
    }
    public function set_count($count)
    {
        $this->count = $this->integer_filter($count);
    }

	public function create()
	{
        global $database;
        $stmt ="INSERT INTO orders(price , tips , foreign_user_id, notes) 
			 VALUES ({$this->price} , {$this->tips} , {$this->foreign_user_id}, '{$this->notes}')";
        $database->query($stmt);
        return $database->get_last_inserted_id();
	}

    public function get_order_by_id()
    {
        global $database;
        $sql = "SELECT * FROM orders WHERE order_id={$this->order_id}";
        return $database->query($sql)->fetch();
    }

    public function get_day_orders()
    {
        global $database;
        $min_date = $this->date . ' 00:00:00';
        $max_date = $this->date . ' 23:59:59';
        $sql = "SELECT * FROM orders WHERE created_at BETWEEN '{$min_date}' AND '{$max_date}' ORDER BY created_at";
        return $database->query($sql)->fetchAll();
    }

    public static function get_undone_orders()
    {
        global $database;
        $sql = "SELECT * FROM orders INNER JOIN users ON users.user_id = orders.foreign_user_id WHERE orders.done = 0 ORDER BY orders.created_at";
        return $database->query($sql)->fetchAll();
    }

    public function delete()
    {
        global $database;
        $sql = "DELETE FROM order_items WHERE foreign_order_id={$this->order_id}";
        if($database->query($sql))
        {
            $sql = "DELETE FROM orders WHERE order_id={$this->order_id}";
            return $database->query($sql) ? true : false;
        }
        else
            return false;
    }
    
    public function set_done(){
        global $database;
        $sql = "UPDATE orders SET done = 1 WHERE order_id={$this->order_id}";
        return $database->query($sql) ? true : false;
    }

    public function add_items_to_order(){
        global $database;
        $sql = "SELECT * FROM carts WHERE foreign_user_id = {$this->foreign_user_id}";
        $items = $database->query($sql)->fetchAll();

        for($i=0; $i<count($items); $i++)
        {
            $size = $items[$i]['size'];
            $item_id = $items[$i]['foreign_item_id'];
            $count = $items[$i]['count'];
            $stmt ="INSERT INTO order_items(size, count, foreign_order_id , foreign_item_id) 
            VALUES ('{$size}' , {$count} , {$this->order_id}, {$item_id})";
            $database->query($stmt);
        }

        $stmt = "DELETE FROM carts WHERE foreign_user_id={$this->foreign_user_id}";
        $database->query($stmt);
    }

    public function get_order_items(){
        global $database;
        $sql = "SELECT * FROM order_items INNER JOIN menu ON menu.item_id = order_items.foreign_item_id WHERE order_items.foreign_order_id = {$this->order_id}";
        return $database->query($sql)->fetchAll();
    }

    private function string_filter($string)
    {
        return filter_var($string , FILTER_SANITIZE_STRING , FILTER_FLAG_NO_ENCODE_QUOTES);
    }

    private function integer_filter($int)
    {
        return filter_var($int , FILTER_SANITIZE_NUMBER_INT , FILTER_FLAG_NO_ENCODE_QUOTES);
    }
}