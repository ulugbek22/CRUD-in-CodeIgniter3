<?php

require_once 'dady.php';

class Posts extends Dady
{
	protected $model_name = 'post';

	public function index()
	{
		$data['posts'] = $this->post->get();

		$this->go_to('home', $data);
	}

	public function post($id)
	{
		$data['post'] = $this->post->get_by(['id' => $id])[0];

		$this->go_to('post', $data);
	}

	public function add()
	{
		$data = [];
		
		if ($this->is_post())
		{
			if ($this->post->add($this->input->post())) {
				$this->session->message = 'Post added successfuly!';
			} else $this->session->message = 'Problem occured during the process.';
		}

		$this->go_to('post-add', $data);
	}

	public function delete($id)
	{
		$this->post->delete('id', $id);

		$this->session->message = 'Post deleted successfuly.';

		return redirect('/');
	}

	public function edit($id)
	{
		if ($this->is_post())
		{
			$post = $this->input->post();

			$this->post->update('id', $post['id'], $post);

			$this->session->message = 'Post updated successfuly.';

			return redirect("post-edit/{$post['id']}");
		}

		$data['post'] = $this->post->get_by(['id' => $id])[0];
		
		$this->go_to('edit', $data);
	}
}