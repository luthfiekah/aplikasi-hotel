<?php
  class Tamu extends CI_Controller 
	{
    public function __construct()
    {
			parent::__construct();
			$this->load->model('M_Tamu');
      $this->load->model('M_Reservasi');
    }

		public function index()
		{
			if($this->session->userdata('login')!= TRUE)
			{
				redirect('login');
			}

			$data['title'] = "Data Tamu";
			$data['tamu'] = $this->M_Tamu->data_tamu();
			$this->template->load_admin('index','tamu',$data);
		}

    public function tambah()
    {
      if($this->session->userdata('login')!= TRUE)
      {
        redirect('login');
      }

      $data['title'] = "Data Tamu";
      $data['subtitle'] = "Tambah Data Tamu";
      $this->template->load_admin('index','tamu_tambah',$data);
    }

    public function simpan()
    {
    
      $this->M_Reservasi->simpan();
      $this->M_Tamu->simpan();
      redirect('');
    }

    public function ubah()
    {
      if($this->session->userdata('login')!= TRUE)
      {
        redirect('login');      
      }

      $data['title'] = "Data Tamu";
      $data['subtitle'] = "Edit Data Tamu";

      $id = $this->uri->segment(3);
      $data['tamu'] = $this->M_Tamu->data_tamu_by_id($id);
      $this->template->load_admin('index','tamu_ubah',$data);
    }

    public function update()
    {
      if($this->session->userdata('login')!= TRUE)
      {
        redirect('login');
      }

      $this->M_Tamu->update();
      redirect('tamu');
    }

    public function hapus()
    {
      if($this->session->userdata('login')!= TRUE)
      {
        redirect('login');
      }

      $id = $this->uri->segment(3);
      $this->M_Tamu->hapus_data_tamu($id);
      redirect('tamu');
    }
  }
?>