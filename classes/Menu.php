<?php

class Menu
{
	private $item_id;
	private $item_name;
    private $item_type;
    private $price;
    private $content;
    private $image_url;

    public function set_item_id($item_id)
    {
        $this->item_id = $this->integer_filter($item_id);
    }
    public function set_item_name($item_name)
    {
        $this->item_name = $this->string_filter($item_name);
    }
    public function set_item_type($item_type)
    {
        $this->item_type = $this->string_filter($item_type);
    }
    public function set_price($price)
    {
        $this->price = $this->integer_filter($price);
    }
    public function set_content($content)
    {
        $this->content = $this->string_filter($content);
    }
    public function set_image_url($image_url)
    {
        $this->image_url = $this->string_filter($image_url);
    }

	public function add_item()
	{
        global $database;
        $stmt ="INSERT INTO menu(item_type , item_name , content , price, image_url) 
			    VALUES ('{$this->item_type}' , '{$this->item_name}' , '{$this->content}' , {$this->price}, '{$this->image_url}')";
        return $database->query($stmt) ? true : false;
	}

    public static function get_item_by_id($id)
    {
        global $database;
        $sql = "SELECT * FROM menu WHERE item_id=" . $id;
        return $database->query($sql)->fetch();
    }

    public function get_items_by_type()
    {
        global $database;
        $sql = "SELECT * FROM menu WHERE item_type= '{$this->item_type}'";
        return $database->query($sql)->fetchAll();
    }

    public function delete_item()
    {
        global $database;
        $sql = "DELETE * FROM menu WHERE item_id=" . $this->item_id;
        return $database->query($sql) ? true : false;
    }
    
    public function update_item()
    {
        global $database;

        $stmt = "UPDATE menu SET item_type = '{$this->item_type}' , item_name='{$this->item_name}', content='{$this->content}', price={$this->price}, image_url = '{$this->image_url}' WHERE item_id = {$this->item_id}";
        return $database->query($stmt);
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