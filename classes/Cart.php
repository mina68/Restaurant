<?php

class Cart
{
    private $foreign_user_id;    
    private $foreign_item_id;
    private $count;
    private $size;

    public function set_foreign_user_id($foreign_user_id)
    {
        $this->foreign_user_id = $this->integer_filter($foreign_user_id);
    }
    public function set_foreign_item_id($foreign_item_id)
    {
        $this->foreign_item_id = $this->integer_filter($foreign_item_id);
    }
    public function set_size($size)
    {
        $this->size = $this->string_filter($size);
    }
    public function set_count($count)
    {
        $this->count = $this->integer_filter($count);
    }

    public function delete()
    {
        global $database;
        $sql = "DELETE FROM carts WHERE foreign_user_id={$this->foreign_user_id}";
        return $database->query($sql);
    }

    public function delete_item()
    {
        global $database;
        $sql = "DELETE FROM carts WHERE foreign_user_id={$this->foreign_user_id} AND foreign_item_id = {$this->foreign_item_id}";
        return $database->query($sql);
    }
    
    public function add_item_to_cart(){
        global $database;
        $stmt ="INSERT INTO carts(size, count, foreign_user_id , foreign_item_id) 
             VALUES ('{$this->size}' , {$this->count} , {$this->foreign_user_id}, {$this->foreign_item_id})";
        return $database->query($stmt) ? true : false;
    }

    public function edit_item_count(){
        global $database;
        $stmt ="UPDATE carts SET count = {$this->count} WHERE foreign_item_id = {$this->foreign_item_id} AND foreign_user_id = {$this->foreign_user_id}";
        return $database->query($stmt) ? true : false;
    }

    public function get_cart_items(){
        global $database;
        $sql = "SELECT * FROM carts INNER JOIN menu ON menu.item_id = carts.foreign_item_id WHERE carts.foreign_user_id = {$this->foreign_user_id}";
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