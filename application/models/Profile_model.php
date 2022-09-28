<?php 

class Profile_model extends CI_Model{

    public function __construct(){

        $this->load->database();
    }

    function createUser() {
        $data = array (
            'PASS' => $this->input->post('regPass'),
            'NAME' => $this->input->post('regName'),
            'CONTACT' => $this->input->post('regNum'),
            'EMAIL' => $this->input->post('regEmail'),
            'ADDRESS' => $this->input->post('regAdd'),
            'SCHOOL' => $this->input->post('regSchool'),
            'COURSE' => $this->input->post('regCourse'),
        );
        $this->db->insert('tbl_account', $data);
    
    }


    // checking users
    public function checkUser($user){
        $sql = "SELECT * FROM tbl_account WHERE EMAIL = ?";
        $query = $this->db->query($sql, array($user));
        $row = $query->row();
        if ($row == NULL){
            return 0;
        }else{
            $data = [
                'user' => $row->EMAIL,
                'pass' => $row->PASS,
            ];
        }
        return $data;

    }

}