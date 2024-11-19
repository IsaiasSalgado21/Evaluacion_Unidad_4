<?php

if (!isset($_SESSION)) {
    session_start();
}


if (isset($_POST['action'])) {
    switch ($_POST['action']) {

        case 'addPresentation':
            $description = $_POST['description'];
            $code = $_POST['code'];
            $weight_in_grams = $_POST['weight_in_grams'];
            $status = $_POST['status'];
            $cover = $_POST['cover'];
            $stock = $_POST['stock'];
            $stock_min = $_POST['stock_min'];
            $stock_max = $_POST['stock_max'];
            $amount = $_POST['amount'];
            $presentationcontroller = new PresentationsController();
            $presentationcontroller->addPresentation($description, $code, $weight_in_grams, $status, $cover, $stock, $stock_min, $stock_max, $amount);

            break;


        case 'removePresentation':

            $idPresentation = $_POST['presentationId'];
            $presentationcontroller = new PresentationsController();
            $presentationcontroller->deletePresentation($idPresentation);
            break;

        case  'updatePresentation':

            $description = $_POST['description'];
            $code = $_POST['code'];
            $weight_in_grams = $_POST['weight_in_grams'];
            $status = $_POST['status'];
            $cover = $_POST['cover'];
            $stock = $_POST['stock'];
            $stock_min = $_POST['stock_min'];
            $stock_max = $_POST['stock_max'];
            $amount = $_POST['amount'];
            $productId = $_POST['productId'];
            $idPresentation = $_POST['idPresentation'];
            $presentationcontroller = new PresentationsController();
            $presentationcontroller->updatePresentation($description, $code, $weight_in_grams, $status,  $stock, $stock_min, $stock_max, $amount, $productId, $idPresentation);
            break;

        case 'getPresentationProduct':
            $idProduct = $_POST['idProduct'];
            $presentationcontroller = new PresentationsController();
            $presentationcontroller->getPresentationProduct($idProduct);
            break;


        case 'getPresentation':

            $idPresentation = $_POST['idPresentation'];
            $presentationcontroller = new PresentationsController();
            $presentationcontroller->getPresentation($idPresentation);
            break;

        case 'updatePrice':

            $idPresentation= $_POST['idPresentation'];
            $amount = $_POST['amount'];
            $presentationcontroller = new PresentationsController();
            $presentationcontroller->updatePrice($idPresentation,$amount);


            break;
    }
}



class PresentationsController
{

    public function addPresentation($description, $code, $weight_in_grams, $status, $cover, $stock, $stock_min, $stock_max, $amount)
    {

        $curl = curl_init();

        if ($cover && $cover['error'] === UPLOAD_ERR_OK) {
            $imagePath = $cover['tmp_name'];
            $imageName = $cover['name'];
            $imageType = $cover['type'];
        } else {
            $imagePath = null;
            $imageName = null;
            $imageType = null;
        }

        $postData = array(
            'description' => $description,
            'code' => $code,
            'wedight_in_gram' => $weight_in_grams,
            'status' => $status,
            'cover' => $cover,
            'stock' => $stock,
            'stock_min' => $stock_min,
            'stock_max' => $stock_max,
            'amount' => $amount
        );

        if ($imagePath) {
            $postData['cover'] = new CURLFile($imagePath, $imageType, $imageName);
        }


        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
                'Cookie: XSRF-TOKEN=eyJpdiI6IjhwVUFYSWFvNkZOaE55a0VtcjlLQUE9PSIsInZhbHVlIjoiaGFMd2RBeDRnbEJZbHJqa2ZFLzNZeFdiRE8yUGVLY0tCRGdMV2FaME0wd2hvWDVlazlaeWFJZWc0ZmZJWmQ2R3hibEg1eDRzZEp2ZlMzOFRUcWh6K0VZa00yRm9yM2xvUHFKVm1wQzV0ZTZJSXZRbUNabDF5aVE0MzBsbFV2TmMiLCJtYWMiOiJmODgyMTA2MjNiZGUyZmUxMWIzMDgyMzNiM2U0MGE5OTExOWVmY2UyZWFjMDkzOWFiZmE3OGFkZTMxOGNmOWQwIiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6IlNBeDVwenJ2TG8zckdRUDVZY2RvK1E9PSIsInZhbHVlIjoiVVBtTGJGZzVRY2l5bzZFSUF5ck1NTkNyWnFqR001enRoenhBVWdab1NnUVZWdTRSMkp6THFZRjI4SWdna2lubzhOK2xzb2ZmUVRiaEhSdzFvSll6OTZ3dnpCK2lxZEs3T2p2cEF1ZCszZEZORWVKOFV3VmlvUlV6QWFJU0JFVUYiLCJtYWMiOiI5MTFkN2QxYmMzMzM3ZWMzOGU5OTBkMzhiY2ZiZmU1ZjI4MTcwNDBkMjdkZGI0NDczNGIwYTQxMTdmZmI4NmQ3IiwidGFnIjoiIn0%3D'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function deletePresentation($idPresentation)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/' . $idPresentation,
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


    public function getPresentation($idPresentation)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/' . $idPresentation,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
                'Cookie: XSRF-TOKEN=eyJpdiI6IjhwVUFYSWFvNkZOaE55a0VtcjlLQUE9PSIsInZhbHVlIjoiaGFMd2RBeDRnbEJZbHJqa2ZFLzNZeFdiRE8yUGVLY0tCRGdMV2FaME0wd2hvWDVlazlaeWFJZWc0ZmZJWmQ2R3hibEg1eDRzZEp2ZlMzOFRUcWh6K0VZa00yRm9yM2xvUHFKVm1wQzV0ZTZJSXZRbUNabDF5aVE0MzBsbFV2TmMiLCJtYWMiOiJmODgyMTA2MjNiZGUyZmUxMWIzMDgyMzNiM2U0MGE5OTExOWVmY2UyZWFjMDkzOWFiZmE3OGFkZTMxOGNmOWQwIiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6IlNBeDVwenJ2TG8zckdRUDVZY2RvK1E9PSIsInZhbHVlIjoiVVBtTGJGZzVRY2l5bzZFSUF5ck1NTkNyWnFqR001enRoenhBVWdab1NnUVZWdTRSMkp6THFZRjI4SWdna2lubzhOK2xzb2ZmUVRiaEhSdzFvSll6OTZ3dnpCK2lxZEs3T2p2cEF1ZCszZEZORWVKOFV3VmlvUlV6QWFJU0JFVUYiLCJtYWMiOiI5MTFkN2QxYmMzMzM3ZWMzOGU5OTBkMzhiY2ZiZmU1ZjI4MTcwNDBkMjdkZGI0NDczNGIwYTQxMTdmZmI4NmQ3IiwidGFnIjoiIn0%3D'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }


    public function updatePresentation($description, $code, $weight_in_grams, $status,  $stock, $stock_min, $stock_max, $amount, $productId, $idPresentation)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'description=' . $description . '&code=' . $code . '&weight_in_grams=' . $weight_in_grams . '&status=' . $status . '&stock=' . $stock . '&stock_min=' . $stock_min . '&stock_max=' . $stock_max . '&product_id=' . $productId . '&id=' . $idPresentation . '&amount=' . $amount,
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



    public function getPresentationProduct($idProduct)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/product/' . $idProduct,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
                'Cookie: XSRF-TOKEN=eyJpdiI6IjhwVUFYSWFvNkZOaE55a0VtcjlLQUE9PSIsInZhbHVlIjoiaGFMd2RBeDRnbEJZbHJqa2ZFLzNZeFdiRE8yUGVLY0tCRGdMV2FaME0wd2hvWDVlazlaeWFJZWc0ZmZJWmQ2R3hibEg1eDRzZEp2ZlMzOFRUcWh6K0VZa00yRm9yM2xvUHFKVm1wQzV0ZTZJSXZRbUNabDF5aVE0MzBsbFV2TmMiLCJtYWMiOiJmODgyMTA2MjNiZGUyZmUxMWIzMDgyMzNiM2U0MGE5OTExOWVmY2UyZWFjMDkzOWFiZmE3OGFkZTMxOGNmOWQwIiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6IlNBeDVwenJ2TG8zckdRUDVZY2RvK1E9PSIsInZhbHVlIjoiVVBtTGJGZzVRY2l5bzZFSUF5ck1NTkNyWnFqR001enRoenhBVWdab1NnUVZWdTRSMkp6THFZRjI4SWdna2lubzhOK2xzb2ZmUVRiaEhSdzFvSll6OTZ3dnpCK2lxZEs3T2p2cEF1ZCszZEZORWVKOFV3VmlvUlV6QWFJU0JFVUYiLCJtYWMiOiI5MTFkN2QxYmMzMzM3ZWMzOGU5OTBkMzhiY2ZiZmU1ZjI4MTcwNDBkMjdkZGI0NDczNGIwYTQxMTdmZmI4NmQ3IiwidGFnIjoiIn0%3D'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }



    public function updatePrice($idPresentation,$amount)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/set_new_price',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'id='.$idPresentation.'&amount='.$amount,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}
