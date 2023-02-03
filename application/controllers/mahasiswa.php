<?Php

//Defined('BASEPATH') OR Exit('No Direct Script Access Allowed');

Class mahasiswa Extends CI_Controller {

    Public Function __construct() 
    {
        Parent::__construct();
        $this->load->model('model_mahasiswa');
        //$data['uher_17190091']   = $this->model_mahasiswa->get_data();
    }
    
    Public Function Index()
    {
       $queryAllMahasiswa = $this->model_mahasiswa->GetDataMahasiswa();
        //echo "<pre>";
        //print_r($queryAllMahasiswa);
        //echo"</pre>";
        $DATA = Array('queryAllMhs' => $queryAllMahasiswa);
       //$this->load->model('model_mahasiswa');
        //$data['mahasiswa']   = $this->model_mahasiswa->get_data();

          $this->load->View('form_mahasiswa',$DATA);
    }

   
   public function halaman_tambah()
   {
     $this->load->model(['model_mahasiswa']);
        $this->load->view('halaman_tambah_mhs','$data');
    }

    public function halaman_edit($nim)
    {
        $queryMahasiswaDetail =$this->model_mahasiswa->getDataMahasiswaDetail($nim);
        $DATA = array ('queryMhsDetail'=>$queryMahasiswaDetail);
        echo "<pre>";
        print_r($queryMahasiswaDetail);
        echo"</pre>";
        $this->load->view('halaman_edit',$data);
    }

    Public Function FungsiTambah()
{
   $nim = $this->input->post('nim');
   $nama = $this->input->post('nama');
   $kelas = $this->input->post('kelas');
   $prodi = $this->input->post('prodi');
   $email = $this->input->post('email');

   $ArrInsert = array(
    'nim'=>$nim,
    'nama'=>$nama,
    'kelas'=>$kelas,
    'prodi'=>$prodi,
    'email'=>$email
   );

   $this->model_mahasiswa->InsertDataMahasiswa($ArrInsert);
   redirect (base_url('mahasiswa/'));
   //$this->load->view('halaman_tambah_mhs',$data);

}

Public Function fungsiEdit()
{
    $nim = $this->input->post('nim');
    $nama = $this->input->post('nama');
    $kelas = $this->input->post('kelas');
    $prodi = $this->input->post('prodi');
    $email = $this->input->post('email');

    $ArrUpdate = array(
        'nama'=>$nama,
    'kelas'=>$kelas,
    'prodi'=>$prodi,
    'email'=>$email
    );
 
    $this->model_mahasiswa->updateDataMahasiswa($nim, $ArrUpdate);
    redirect(base_url(''));
}

    Public Function fungsiDelete($nim)
{
    $this->model_mahasiswa->DeleteDataMahasiswa($nim);
    Redirect(Base_url(''));
}

}
