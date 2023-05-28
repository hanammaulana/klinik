<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
	  parent::__construct();
	  $this->load->model('MainModel');
	}
	public function index(){
		$this->load->view('header');
		$this->load->view('dashboard');
	}
	public function pasienbaru(){
		$this->load->view('header');
		$this->load->view('addpasien');
	}
	public function datadokter(){
		$this->load->view('header');
		$this->load->view('inputdokter');
	}
	public function daftarperiksa(){
		$data['dokter'] = $this->MainModel->getdokter();
		$data['petugas'] = $this->MainModel->getpetugas();
		$data['periksa'] = $this->MainModel->getperiksa();
		$this->load->view('header');
		$this->load->view('pemeriksaan',$data);
	}
	public function hasilperiksa(){
		$data['dokter'] = $this->MainModel->getdokter();
		$data['petugas'] = $this->MainModel->getpetugas();
		$data['periksa'] = $this->MainModel->getperiksa();
		$this->load->view('header');
		$this->load->view('hasilperiksa',$data);
	}
	public function input_pemeriksaan(){
		$nomor_rm = $this->input->post("nomor_rm");
		$dokter = $this->input->post("dokter");
		$petugas = $this->input->post("petugas");
		$data = array(
			'nomor_rm' => $nomor_rm,
			'id_dokter' => $dokter,
			'id_petugas' => $petugas
		);
		$this->MainModel->input_periksa($data, 'pemeriksaan');
		redirect("Welcome/index");
	}
	public function add_dokter(){
		$data=array(
			'nama' => $this->input->post('nama'),
			'tanggal_lahir' => $this->input->post('tgl_lahir'),
			'spesialisasi' => $this->input->post('spesial'),
			'nomor_STR' => $this->input->post('nomorstr'),
		);
		$this->MainModel->adddokter($data, 'dokter');
		redirect("Welcome/datadokter");
	}
	public function add_pasien(){
		$data=array(
			'nama'=> $this->input->post("nama"),
			'tanggal_lahir'=> $this->input->post("tgl_lahir"),
			'gender'=> $this->input->post("gender"),
			'asuransi'=> $this->input->post("asuransi")
		);
		$this->MainModel->addpasien($data,'passien');
		redirect("Welcome/index");

	}
	public function detail_periksa(){
		$data = array(
			'id_pemeriksaan' => $this->input->post("id_periksa"),
			'subjective' => $this->input->post("subjective"),
			'objective' => $this->input->post("objective"),
			'assesment' => $this->input->post("assesment"),
			'plan' => $this->input->post("plan"),
			'biaya' => $this->input->post("biaya")
		);
		$this->MainModel->detailperiksa($data,'hasil_pemeriksaan');
		redirect("Welcome/index");
	}
}
