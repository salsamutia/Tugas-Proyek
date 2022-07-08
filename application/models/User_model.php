<?php

class User_model extends CI_Model{
    
    private $table = 'users';

    public function getAll(){
        //select * from user;
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        //select * from user where username = 'admin';
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function login($uname,$pass){
        $sql = "SELECT * FROM users WHERE username=? and password=MD5(?)";
        $data = [$uname,$pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }

    public function registrasi($data){
        $sql = "INSERT INTO users(username, password, email, created_at, last_login, status, role) values (?,MD5(?),?, now(), now(), 0,'public')";
        $this->db->query($sql, $data);
    }

    public function save ($data){
        $sql = "INSERT INTO users (id, username, password, email, created_at, last_login, status, role) VALUES (?,?,MD5(?),?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql = "UPDATE users SET id=?, username=?, password=MD5(?), email=?, created_at=?, last_login=?, status=?, role=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql, array($id));
    }
}
?>