<?php

class LoginModel extends CI_Model
{
    // public function login_user($username, $password)
    // {
    //   $this->db->where('username', $username);
    //   $this->db->where('password', $password);

    //   $result = $this->db->get('user_login');
    //   if ($result->num_rows() == 1) {
    //     return $result->row(0);
    //   } else {
    //     return false;
    //   }
    // }

    function validate($username, $password)
    {
        $this->db->where('id_petugas', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('petugas', 1);
        return $result;
    }
}
