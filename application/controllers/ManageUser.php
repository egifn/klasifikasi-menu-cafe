<?php
defined('BASEPATH')  or exit('No Direct Script Allowed');

/**
 * 
 */
class ManageUser extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelManageUser');

		$this->load->library('session');

		if ($this->session->userdata('status') != "login") {
			redirect("Login");
		}
	}

	function index()
	{
		$dt["tblUser"] = $this->ModelManageUser->getAllData("tblUser");

		$data['tittle'] = "Data User";
		$this->load->view('template/sidebar', $data);
		$this->load->view('view_manageuser', $dt);
		$this->load->view('template/footbar');
	}

	function addNewData()
	{
		$vUserName = $this->input->post('txUsername');
		$vPassword = $this->input->post('txPassword');

		echo $vUserName;
		echo $vPassword;

		if ($vPassword == "" || $vUserName == "") {
?>
			<script type="text/javascript">
				alert("Data Harus Lengkap");
				window.location = "<?php echo base_url("ManageUser") ?>";
			</script>
<?php
		} else {
			$data = array(
				'Username' => $vUserName,
				'Password' => md5($vPassword)
			);

			$this->ModelManageUser->savetoDB('tblUser', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan!</div>');

			redirect('ManageUser');
		}
	}

	function removeData($ID)
	{
		$data = array('Username' => $ID);
		$this->ModelManageUser->delfromDB('tblUser', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Berhasil Dihapus!</div>');

		redirect('ManageUser');
	}

	function updateData()
	{
		$vPassword = $this->input->post('txPassword');
		$vUserName = $this->input->post('txUsername');

		$data = array('Password' => md5($vPassword));
		$where = array('Username' => $vUserName);
		$this->ModelManageUser->delfromDB('tblUser', $data, $where);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah!</div>');

		redirect('ManageUser');
	}
}
?>