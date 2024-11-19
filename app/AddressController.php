<?php

if (!isset($_SESSION)) {
    session_start();
}



if (isset($_POST['action'])) {
    switch ($_POST['action']) {





        case 'addAdress':
            $firs_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $street_and_use_number = $_POST['street_and_use_number'];
            $postal_code = $_POST['postal_code'];
            $city = $_POST['city'];
            $province = $_POST['provicy'];
            $phone_number = $_POST['phone_number'];
            $client_id = $_POST['client_id'];
            $addresscontroller = new AddressController();
            $addresscontroller->addAdress($firs_name, $last_name, $street_and_use, $postal_code, $city, $province, $phone_number, $client_id);

            break;


        case 'removeAdress':
            $address_id = $_POST['address_id'];
            $addresscontroller = new AddressController();
            $addresscontroller->removeAdress($address_id);

            break;

        case  'updateAdress':
            $address_id = $_POST['address_id'];
            $firs_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $street_and_use_number = $_POST['street_and_use_number'];
            $postal_code = $_POST['postal_code'];
            $city = $_POST['city'];
            $province = $_POST['provicy'];
            $phone_number = $_POST['phone_number'];
            $client_id = $_POST['client_id'];
            $addresscontroller = new AddressController();
            $addresscontroller->updateAddress($address_id, $firs_name, $last_name, $street_and_use_number, $postal_code, $city, $province, $phone_number, $client_id);

            break;

        case 'getAdress':

            $address_id = $_POST['address_id'];
            $addresscontroller = new AddressController();
            $addresscontroller->getAdresses($address_id);

            break;
    }
}



class AddressController
{


    public function getAdresses($address_id)
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses/' . $address_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }





    public function addAdress($firs_name, $last_name, $street_and_use_number, $postal_code, $city, $province, $phone_number, $client_id)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('first_name' => $firs_name, 'last_name' => $last_name, 'street_and_use_number' => $street_and_use_number, 'postal_code' => $postal_code, 'city' => $city, 'province' => $province, 'phone_number' => $phone_number, 'is_billing_address' => '1', 'client_id' => $client_id),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }




    public function removeAdress($address_id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses/' . $address_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
                'Cookie: XSRF-TOKEN=eyJpdiI6IjhwVUFYSWFvNkZOaE55a0VtcjlLQUE9PSIsInZhbHVlIjoiaGFMd2RBeDRnbEJZbHJqa2ZFLzNZeFdiRE8yUGVLY0tCRGdMV2FaME0wd2hvWDVlazlaeWFJZWc0ZmZJWmQ2R3hibEg1eDRzZEp2ZlMzOFRUcWh6K0VZa00yRm9yM2xvUHFKVm1wQzV0ZTZJSXZRbUNabDF5aVE0MzBsbFV2TmMiLCJtYWMiOiJmODgyMTA2MjNiZGUyZmUxMWIzMDgyMzNiM2U0MGE5OTExOWVmY2UyZWFjMDkzOWFiZmE3OGFkZTMxOGNmOWQwIiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6IlNBeDVwenJ2TG8zckdRUDVZY2RvK1E9PSIsInZhbHVlIjoiVVBtTGJGZzVRY2l5bzZFSUF5ck1NTkNyWnFqR001enRoenhBVWdab1NnUVZWdTRSMkp6THFZRjI4SWdna2lubzhOK2xzb2ZmUVRiaEhSdzFvSll6OTZ3dnpCK2lxZEs3T2p2cEF1ZCszZEZORWVKOFV3VmlvUlV6QWFJU0JFVUYiLCJtYWMiOiI5MTFkN2QxYmMzMzM3ZWMzOGU5OTBkMzhiY2ZiZmU1ZjI4MTcwNDBkMjdkZGI0NDczNGIwYTQxMTdmZmI4NmQ3IiwidGFnIjoiIn0%3D'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }


    public function updateAddress($address_id, $firs_name, $last_name, $street_and_use_number, $postal_code, $city, $province, $phone_number, $client_id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'first_name=' . $firs_name . '&last_name=' . $last_name . '&street_and_use_number=' . $street_and_use_number . '&postal_code=' . $postal_code . '&city=' . $city . '&province=' . $province . '&phone_number=' . $phone_number . '&is_billing_address=1&client_id=' . $client_id . 'id=' . $address_id,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
                'Cookie: XSRF-TOKEN=eyJpdiI6IjhwVUFYSWFvNkZOaE55a0VtcjlLQUE9PSIsInZhbHVlIjoiaGFMd2RBeDRnbEJZbHJqa2ZFLzNZeFdiRE8yUGVLY0tCRGdMV2FaME0wd2hvWDVlazlaeWFJZWc0ZmZJWmQ2R3hibEg1eDRzZEp2ZlMzOFRUcWh6K0VZa00yRm9yM2xvUHFKVm1wQzV0ZTZJSXZRbUNabDF5aVE0MzBsbFV2TmMiLCJtYWMiOiJmODgyMTA2MjNiZGUyZmUxMWIzMDgyMzNiM2U0MGE5OTExOWVmY2UyZWFjMDkzOWFiZmE3OGFkZTMxOGNmOWQwIiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6IlNBeDVwenJ2TG8zckdRUDVZY2RvK1E9PSIsInZhbHVlIjoiVVBtTGJGZzVRY2l5bzZFSUF5ck1NTkNyWnFqR001enRoenhBVWdab1NnUVZWdTRSMkp6THFZRjI4SWdna2lubzhOK2xzb2ZmUVRiaEhSdzFvSll6OTZ3dnpCK2lxZEs3T2p2cEF1ZCszZEZORWVKOFV3VmlvUlV6QWFJU0JFVUYiLCJtYWMiOiI5MTFkN2QxYmMzMzM3ZWMzOGU5OTBkMzhiY2ZiZmU1ZjI4MTcwNDBkMjdkZGI0NDczNGIwYTQxMTdmZmI4NmQ3IiwidGFnIjoiIn0%3D'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}
