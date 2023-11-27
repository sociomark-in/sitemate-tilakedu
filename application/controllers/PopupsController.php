<?php

class PopupsController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('data/PopupModel', 'PopupModel');
	}

	public function list()
	{
		$data['active_popups'] = $this->PopupModel->select();
		$this->load->view('panel/marketing/popups/list', $data);
	}

	// Helping Functions

	public $folderUpload = "./uploads/popups/";
	
	public function upload()
	{
		if (!empty($_FILES)) {
			if (!is_dir($this->folderUpload)) {
				mkdir($this->folderUpload, 0777, TRUE);
			}
			$config['upload']['upload_path']        = $this->folderUpload;
			$config['upload']['allowed_types']      = 'jpg|png';
			// $config['upload']['max_size']           = 3000;
			$config['upload']['file_name']			= random_string('alnum', 16);



			$this->load->library('upload', $config['upload']);


			if (!$this->upload->do_upload('files')) {
				$error = array('error' => $this->upload->display_errors());
				return false;
			} else {
				$data = $this->upload->data();
				$fileURL = ltrim($this->folderUpload, $this->folderUpload[0]) . $data['raw_name'] . $data['file_ext'];
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
		$upload = $this->upload();
		if ($upload) {
			$data = [
				'title' => $this->input->post('popup_title'),
				'destination' => $this->input->post('popup_url'),
				'target_url' => ($this->input->post('popup_target_url') == ""? base_url() : $this->input->post('popup_target_url')),
				'visible_from' => $this->input->post('visible_from'),
				'visible_upto' => $this->input->post('visible_to'),
			];
			$data['file_url'] = $upload['file'];
			if ($this->PopupModel->insert($data)) {
				redirect(base_url('popups/all'));
			}
		} else {
			print_r("Upload Error");
		}
	}

	public function update($id)
	{
		$data = $this->input->post();
		$upload = $this->upload();
		if ($upload !== false) {
			// Fetch & Delete Old file
			$get_single = $this->PopupModel->select_only(['file_url'], ['id' => $id]);
			$this->delete_from_server($get_single['file_url']);

			$data['file_url'] = $upload['file'];
			if ($this->PopupModel->update($data, $id)) {
				redirect("");
			}
		}
	}

	public function delete()
	{
		$id = $this->input->post('id');
		$get_single = $this->PopupModel->select_only(['file_url'], ['id' => $id])[0];
		$this->delete_from_server($get_single['file_url']);
		if ($this->PopupModel->delete($id)) {
			// Fetch & Delete Old file
			redirect(base_url('popups/all'));
		}
	}
}
