<?php

require_once 'dady.php';

class Users extends Dady
{
	protected $model_name = 'user';

	public function login()
	{		
		if ($this->is_post())
		{
			$user = $this->user->get_by($this->input->post());

			if ($user)
			{
				$username = $this->input->post('username');

				$this->session->username = $username;

				$this->session->message = "Dear $username, Welcome!";

				return redirect('/');
			}

			else $this->session->message = 'Xatolik mavjud.';
		}

		$this->go_to('login');
	}

	public function register()
	{
		if ($this->is_post())
		{
			$user = $this->user->add($this->input->post());

			if ($user)
			{
				$this->session->message = 'Royxatdan otdingiz. Endi login kiritish orqali tizimga kirishingiz mumkin.';

				return redirect('login');
			}

			$this->session->message = 'Xatolik';
		}

		$this->go_to('register');
	}

	public function logout()
	{
		$this->session->sess_destroy();

		return redirect('/');
	}
}