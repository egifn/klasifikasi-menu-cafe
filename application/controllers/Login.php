<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * 
 */
class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->model('ModelManageUser');
	}

	function index()
	{
		$this->load->view('view_login');
	}

	function doLogin()
	{
		$validasi = $this->ModelManageUser->getAllData('tbluser');
		$vUsername = $this->input->post('txUsername');
		$vPassword = $this->input->post('txPassword');

		foreach ($validasi as $val) {

			if ($vUsername == $val['Username'] && md5($vPassword) == $val['Password']) {
				# code...
				$data_session = array(
					'nama' => $vUsername,
					'status' => "login"
				);

				$this->session->set_userdata($data_session);
				redirect('Home');
			} else {
?>
				<script type="text/javascript">
					alert("Incorect Username or Password");
					window.location = "<?php echo base_url("Home") ?>";
				</script>
<?php
				// redirect(base_url("Login"));
				// echo "Username dan password salah !";
			}
		}
	}

	function doLogout()
	{
		$this->session->sess_destroy();
		redirect(('login'));
	}
}

?>