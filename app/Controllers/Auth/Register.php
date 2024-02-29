<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

use App\Models\UserModel;

class Register extends BaseController
{

  public $title = 'Register Form';
   


  public function index()
  {
      return view('admin/auth/register', );
  }

	public function save()
	{
		postAllowed();

		$id = (new UserModel)->create([
			'role' => 2,
			'name' => post('name'),
			'username' => post('username'),
			'email' => post('email'),
			'phone' => post('phone'),
			'address' => post('address'),
			'status' => (int) post('status'),
			'password' => hash( "sha256", post('password') ),
		]);

		if (!empty($_FILES['image']['name'])) {
			$img = $this->request->getFile('image');
			$ext = $img->getExtension();
			$upload = $img->move( FCPATH.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.'users', $id.'.'.$ext, true );
			$data['img_type'] = $ext;
			if(!$upload){
				copy(FCPATH.'uploads/users/default.png', 'uploads/users/'.$id.'.png');
				$data['img_type'] = "png";
			}

			(new UserModel)->update($id, ['img_type' => $ext]);
		}else{
			copy(FCPATH.'uploads/users/default.png', 'uploads/users/'.$id.'.png');

		}

		// model('App\Models\ActivityLogModel')->add('New User $'.$id.' Created by User:'.logged('name'), logged('id'));
		
		return redirect()->to('users')->with('notifySuccess', 'New User Created Successfully');
	}

  public function checkEmail()
	{
		$email = !empty(get('email')) ? get('email') : false;
		$username = !empty(get('username')) ? get('username') : false;
		$notId = !empty(get('notId')) ? get('notId') : 0;

		if($email)
			$exists = count((new UserModel)->getByWhere([
					'email' => $email,
					'id !=' => $notId,
				])) > 0 ? true : false;

		if($username)
			$exists = count((new UserModel)->getByWhere([
					'username' => $username,
					'id !=' => $notId,
				])) > 0 ? true : false;

		
			echo $exists ? 'false' : 'true';
	}

	
    

}
