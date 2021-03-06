<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StatusRuangan extends CI_Controller {
	var $table_name = 'status_ruangan';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        	$response = $this->MyModel->auth();
		        	if($response['status'] == 200){
		        		$resp = $this->MyModel->get_all_rows_table($this->table_name);//GET SEMUA ROW TABEL
	    				json_output($response['status'],$resp);
		        	}
			}
		}
	}

	public function detail($id) //parameter didapet dari url
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET' || $this->uri->segment(3) == '' || is_numeric($this->uri->segment(3)) == FALSE){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        	$response = $this->MyModel->auth();
		        	if($response['status'] == 200){
		        		$resp = $this->MyModel->get_row_detail($this->table_name,$id);
						json_output($response['status'],$resp);
		        	}
			}
		}
	}

	public function statusRuanganByWaktu($waktu) //parameter didapet dari url
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET' || $this->uri->segment(3) == ''){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        	$response = $this->MyModel->auth();
		        	if($response['status'] == 200){
		        		$resp = $this->MyModel->statusRuanganByWaktu($waktu);
						json_output($response['status'],$resp);
		        	}
			}
		}
	}

	public function statusRuanganByTanggal($tanggalAwal, $tanggalAkhir) //parameter didapet dari url
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET' || $this->uri->segment(3) == ''){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        	$response = $this->MyModel->auth();
		        	if($response['status'] == 200){
		        		$resp = $this->MyModel->statusRuanganByTanggal($tanggalAwal, $tanggalAkhir);
						json_output($response['status'],$resp);
		        	}
			}
		}
	}

	public function statusRuanganByTanggalByWaktu($tanggalAwal, $tanggalAkhir, $waktu) //parameter didapet dari url
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET' || $this->uri->segment(3) == ''){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        	$response = $this->MyModel->auth();
		        	if($response['status'] == 200){
		        		$resp = $this->MyModel->statusRuanganByTanggalByWaktu($tanggalAwal, $tanggalAkhir, $waktu);
						json_output($response['status'],$resp);
		        	}
			}
		}
	}

	public function statusRuanganByTanggalByID($tanggalAwal, $tanggalAkhir, $idRuangan) //parameter didapet dari url
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET' || $this->uri->segment(3) == ''){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        	$response = $this->MyModel->auth();
		        	if($response['status'] == 200){
		        		$resp = $this->MyModel->statusRuanganByTanggalByID($tanggalAwal, $tanggalAkhir, $idRuangan);
						json_output($response['status'],$resp);
		        	}
			}
		}
	}

//	dirubahJo
	public function testData($IdRuangan){
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET' || $this->uri->segment(3) == ''  || $this->uri->segment(2) == '' || $this->uri->segment(1) == ''){
            json_output(400,array('status'=>400,'message'=>'Bad Request'));

        } else {
            $check_auth_client = $this->MyModel->check_auth_client();
            if($check_auth_client == true){
                $response = $this->MyModel->auth();
                if($response['status']==200){
                    $resp = $this->MyModel->testData($IdRuangan);
                    json_output($response['status'],$resp);
                }
            }
        }
    }

    public function getStatusShiftWaktu($IdRuangan, $Tanggal, $Waktu){
        $method = $_SERVER['REQUEST_METHOD'];
        if($method != 'GET' || $this->uri->segment(3) == ''  || $this->uri->segment(2) == '' || $this->uri->segment(1) == ''){
            json_output(400,array('status'=>400,'message'=>'Bad Request'));

        } else {
            $check_auth_client = $this->MyModel->check_auth_client();
            if($check_auth_client == true){
                $response = $this->MyModel->auth();
                if($response['status']==200){
                    $resp = $this->MyModel->getStatusShiftWaktu($IdRuangan, $Tanggal, $Waktu);
                    json_output($response['status'],$resp);
                }
            }
        }
    }

	public function statusRuanganByTanggalByIDByWaktu($tanggalAwal, $tanggalAkhir, $idRuangan, $waktu) //parameter didapet dari url
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET' || $this->uri->segment(3) == ''){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        	$response = $this->MyModel->auth();
		        	if($response['status'] == 200){
		        		$resp = $this->MyModel->statusRuanganByTanggalByIDByWaktu($tanggalAwal, $tanggalAkhir, $idRuangan, $waktu);
						json_output($response['status'],$resp);
		        	}
			}
		}
	}

    public function create()
	{
		// exit;
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'POST'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        	$response = $this->MyModel->auth();
		        	$respStatus = $response['status'];
		        	if($response['status'] == 200){
						$params = json_decode(file_get_contents('php://input'), TRUE);
						if (empty($params['id_ruangan']) || empty($params['id_ob'])  || empty($params['status_ob']) || empty($params['waktu']) || empty($params['tanggal']) ) {//ISI NAMA PARAMETER INPUT POST NYA
							$respStatus = 400;
							$resp = array('status' => 400,'message' =>  'Input form masih salah, silahkan coba lagi');
						} else {
								$resp = $this->MyModel->insert_to_table($this->table_name,$params);
						}
						// print_r('hahaha'); exit;
						json_output($respStatus,$resp);
		        	}
			}
		}
	}

    public function update($id)
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'PUT' || $this->uri->segment(3) == '' || is_numeric($this->uri->segment(3)) == FALSE){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        	$response = $this->MyModel->auth();
		        	$respStatus = $response['status'];
				if($response['status'] == 200){
					$params = json_decode(file_get_contents('php://input'), TRUE);
					$params['updated_at'] = date('Y-m-d H:i:s');
					if (empty($params['id_ruangan']) || empty($params['id_ob'])  || empty($params['status_ob']) || empty($params['waktu']) || empty($params['tanggal']) ) { //CEK PARAMETER INPUT NYA
						$respStatus = 400;
						$resp = array('status' => 400,'message' =>  'Input form masih salah, silahkan coba lagi');
					} else {
		        			$resp = $this->MyModel->update_data_table($this->table_name,$id,$params);
					}
					json_output($respStatus,$resp);
		       	}
			}
		}
	}

    public function delete($id)
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'DELETE' || $this->uri->segment(3) == '' || is_numeric($this->uri->segment(3)) == FALSE){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->MyModel->check_auth_client();
			if($check_auth_client == true){
		        	$response = $this->MyModel->auth();
		        	if($response['status'] == 200){
		        		$resp = $this->MyModel->delete_data_table($this->table_name,$id); //DELETE SINGLE ROW
					json_output($response['status'],$resp);
		        	}
			}
		}
	}
}