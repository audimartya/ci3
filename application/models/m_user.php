<?php
class M_user extends CI_Model{
   public function register($enc_password){
       // Array data user
       $data = array(
           'nama' => $this->input->post('nama'),
           'email' => $this->input->post('email'),
           'username' => $this->input->post('username'),
           'password' => $enc_password
           'fk_level_id_user' => $this->input->post('member')
       );
       // Insert user
       return $this->db->insert('users', $data);
   }
   public function login($username, $password){
       // Validasi
       $this->db->where('username', $username);
       $this->db->where('password', $password);
       $result = $this->db->get('users');
       if($result->num_rows() == 1){
           return $result->row(0)->user_id;
       } else {
           return false;
       }
   }
      public function get_user_level($id_user) {
      $this->db->select('fk_level_id_cat');
       $this->db->where('id_user', $id_user);
       $result = $this->db->get('user');

       if ($result->num_rows() == 1) {
           return $result->row(0)->fk_level_id_user;
       } else {
           return false;
       }
   }

}
?>