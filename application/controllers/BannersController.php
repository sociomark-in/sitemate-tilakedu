<?php

class BannersController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data/BannerModel', 'BannerModel');
	}

	public function list()
	{
		$data['active_banners'] = $this->BannerModel->select();
		$this->load->view('panel/marketing/banners/list', $data);
	}

	// Helping Functions

	public $folderUpload = FILE_PATH . "./uploads/banners/";
	
	public function upload()
	{
		if (!empty($_FILES)) {
			if (!is_dir($this->folderUpload)) {
				mkdir($this->folderUpload, 0777, TRUE);
			}
			$config['upload']['upload_path']        = $this->folderUpload;
			$config['upload']['allowed_types']      = 'jpg|png';
			$config['upload']['max_size']           = 3000;
			$config['upload']['file_name']			= random_string('alnum', 16);



			$this->load->library('upload', $config['upload']);


			if (!$this->upload->do_upload('files')) {
				$error = array('error' => $this->upload->display_errors());
				return false;
			} else {
				$data = $this->upload->data();
				$fileURL = $data['raw_name'] . $data['file_ext'];
				$fileURL = $data['orig_name'];
				return array(
					'file' => $fileURL,
				);
			}
		}
	}

	/**
	 * 
	 */
	public function delete_from_server($fileURL)
	{
		return unlink(FCPATH . "."  . $fileURL);
	}


	/**
	 * POST api Endpoints
	 * add
	 * update/{id} $_POST Data
	 * delete/{id}
	 */
	public function add()
	{
		// print_r([$data, $upload]);
		// die;
		$upload = $this->upload();
		if ($upload) {
			$data['title'] = $this->input->post('banner_title');
			$data['file_url'] = $upload['file'];
			if ($this->BannerModel->insert($data)) {
				redirect(base_url('banners/all'));
			}
		}
	}

	public function update()
	{
		$id = $this->input->post('id');
		
		$data = $this->input->post();
		$upload = $this->upload();
		if ($upload) {
			// Fetch & Delete Old file
			$get_single = $this->BannerModel->select_only(['file_url'], ['id' => $id]);
			$this->delete_from_server($get_single['file_url']);

			$data['file_url'] = $upload['file'];
			if ($this->BannerModel->update($data, $id)) {
				redirect("");
			}
		}
	}

	public function delete()
	{
		$id = $this->input->post('id');

		$get_single = $this->BannerModel->select_only(['file_url'], ['id' => $id])[0];
		$this->delete_from_server($get_single['file_url']);
		if ($this->BannerModel->delete($id)) {
			// Fetch & Delete Old file
			redirect(base_url('banners/all'));
		}
	}
}
