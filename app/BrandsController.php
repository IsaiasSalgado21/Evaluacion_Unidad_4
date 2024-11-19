<?php
if (!isset($_SESSION)) {
	session_start();
}

if (isset($_POST['action'])) {
	switch ($_POST['action']) {
		case 'addBrand':
			$name = $_POST['name'];
			$description = $_POST['description'];
			$slug = $_POST['slug'];
			$brandcontroller = new BrandsController();
			$brandcontroller->addBrand($name, $description, $slug);


			break;

		case 'removeBrand':
			$idBrand = $_POST['idBrand'];
			$brandcontroller = new BrandsController();
			$brandcontroller->removeBrand($idBrand);
			break;

		case 'updateBrand':
			$idBrand = $_POST['idBrand'];
			$name = $_POST['name'];
			$description= $_POST['description'];
			$slug = $_POST['slug'];
			$brandcontroller = new BrandsController();
			$brandcontroller->updateBrand($idBrand, $name, $description, $slug);
			
			break;
	}
}



class BrandsController
{


	public function get()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $_SESSION['user_data']->token
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		$response = json_decode($response);

		if (isset($response->code) && $response->code > 0) {

			return $response->data;
		} else {
			return [];
		}
	}


	public function addBrand($name, $description, $slug)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array('name' => $name, 'description' => $description, 'slug' => $slug),
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $_SESSION['user_data']->token
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}


	public function removeBrand($idBrand)
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands/' . $idBrand,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'DELETE',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $_SESSION['user_data']->token
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}

	public function updateBrand($idBrand, $name, $description, $slug)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'PUT',
			CURLOPT_POSTFIELDS => 'name=' . $name . '&description=' . $description . '&slug=' . $slug . '&id=' . $idBrand,
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/x-www-form-urlencoded',
				'Authorization: Bearer ' . $_SESSION['user_data']->token
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}


	public function getBrand($idBrand)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands/'.$idBrand,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Authorization: Bearer ' . $_SESSION['user_data']->token
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		echo $response;
	}
}
