<<?Php

Defined('BASEPATH') OR Exit('No Direct Script Access Allowed');

Class model_mahasiswa Extends CI_Model {
    public Function GetDataMahasiswa() 
    {
        $query = $this->db->get('17190091_junarti');
        return $query->result();   
          // return  $this->db->Get('17190091_junarti')->result_array();
       
    }
   public  Function insertDataMahasiswa($data) {
        $this->db->Insert('17190091_junarti', $data);
    }

    public function getdataMahasiswaDetail($nim)
    {
        $this->db->where('nim',$nim);
        $query = $this->db->get('17190091_junarti');
        return $query->row();
    }
    public function updateDataMahasiswa($nim, $data){
        $this->db->where('nim', $nim);
        $this->db->update('17190091_junarti', $data);
    }

    public Function DeleteDataMahasiswa($Nim) {
        $this->db->where('nim', $Nim);
        $this->db->delete('17190091_junarti');
    }
}