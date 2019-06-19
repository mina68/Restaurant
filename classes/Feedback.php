<?php

class Feedback
{
	private $feedback_id;
	private $body;
    private $foreign_user_id;
    private $name;
    private $stars;
    private $date;

    private $count;
    private $page;

    public function set_feedback_id($feedback_id)
    {
        $this->feedback_id = $this->integer_filter($feedback_id);
    }
    public function set_date($date)
    {
        $this->date = $date;
    }
    public function set_body($body)
    {
        $this->body = $this->string_filter($body);
    }
    public function set_name($name)
    {
        $this->name = $this->string_filter($name);
    }
    public function set_foreign_user_id($foreign_user_id)
    {
        $this->foreign_user_id = $this->integer_filter($foreign_user_id);
    }
    public function set_stars($stars)
    {
        $this->stars = $this->integer_filter($stars);
    }
    public function set_count($count)
    {
        $this->count = $this->integer_filter($count);
    }
    public function set_page($page)
    {
        $this->page = $this->integer_filter($page);
    }

	public function add()
	{
        global $database;
        $stmt ="INSERT INTO feedbacks(body , stars , foreign_user_id , name, pending) 
			 VALUES ('{$this->body}' , {$this->stars} , {$this->foreign_user_id} , '{$this->name}', 1)";
        return $database->query($stmt) ? true : false;
	}

    public function get_feedback_by_id()
    {
        global $database;
        $sql = "SELECT * FROM feedbacks WHERE feedback_id={$this->feedback_id}";
        return $database->query($sql)->fetch();
    }

    public function get_approved_feedbacks()
    {
        global $database;
        $offset = $this->count * ($this->page - 1) ;
        $sql = "SELECT * FROM feedbacks WHERE pending=0 ORDER BY created_at DESC LIMIT {$this->count} OFFSET {$offset}";
        return $database->query($sql)->fetchAll();
    }

    public function get_pending_feedbacks()
    {
        global $database;
        $sql = "SELECT * FROM feedbacks WHERE pending=1 ORDER BY created_at DESC LIMIT {$this->count}";
        return $database->query($sql)->fetchAll();
    }

    public function approve()
    {
        global $database;
        $sql = "UPDATE feedbacks SET pending=0 WHERE feedback_id={$this->feedback_id}";
        return $database->query($sql) ? true : false;
    }

    public function delete()
    {
        global $database;
        $sql = "DELETE FROM feedbacks WHERE feedback_id={$this->feedback_id}";
        return $database->query($sql) ? true : false;
    }
    
    public function update()
    {
        global $database;

        $stmt = "UPDATE feedbacks SET body = '{$this->body}' , name='{$this->name}', stars={$this->stars} WHERE feedback_id = {$this->feedback_id}";
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