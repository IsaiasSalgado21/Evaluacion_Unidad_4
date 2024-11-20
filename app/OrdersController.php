<?php

if (!isset($_SESSION)) {
    session_start();
}


if (isset($_POST['action'])) {
    switch ($_POST['action']) {

        case 'createOrder':
            $total=$_POST['total'];
            $client_id=$_POST['client_id'];
            $order_status=$_POST['order_status'];
            $coupon_id=$_POST['coupon_id'];
            $presentations=json_decode($_POST['presentations'],true);

            $ordercontroller=new OrdersController();
            $ordercontroller->createOrder($total, $client_id, $address_id, $order_status, $coupon_id, $presentations);
            break;

        case 'updateOrder':
            break;

            case 'deleteOrder':
                $idOrder=$_POST['idOrder'];
                $ordercontroller=new OrdersController();
                $ordercontroller->removeOrder($idOrder);
            break;

    }
}


class OrdersController
{

    public function createOrder($total, $client_id, $address_id, $order_status, $coupon_id, $presentations)
    {

        if (!is_numeric($total) || !is_numeric($client_id) || !is_numeric($address_id) || !is_numeric($order_status) || !is_numeric($coupon_id)) {
            throw new InvalidArgumentException('Invalid data types for order creation. Numbers expected for total, client_id, address_id, order_status, and coupon_id.');
        }

        if (!is_array($presentations)) {
            throw new InvalidArgumentException('Presentations data must be an array.');
        }


        $postData = [
            'folio' => 'A55023422',
            'total' => $total,
            'is_paid' => '1',
            'client_id' => $client_id,
            'address_id' => $address_id,
            'order_status_id' => $order_status,
            'payment_type_id' => '1',
            'coupon_id' => $coupon_id,
        ];

        foreach ($presentations as $index => $presentation) {
            if (!isset($presentation['id']) || !is_numeric($presentation['id']) || !isset($presentation['quantity']) || !is_numeric($presentation['quantity'])) {
                throw new InvalidArgumentException('Invalid presentations data format. Each presentation must have an "id" (numeric) and "quantity" (numeric) property.');
            }
            $postData["presentations[{$index}][id]"] = $presentation['id'];
            $postData["presentations[{$index}][quantity]"] = $presentation['quantity'];
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query($postData),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl);
        $curlError = curl_error($curl);

        curl_close($curl);

        if ($curlError) {
            throw new Exception("cURL Error: $curlError");
        }

        return $response;
    }

    public function getOrders()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
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


    public function getOrder($idOrder)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/details/' . $idOrder,
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


    public function removeOrder($idOrder)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/' . $idOrder,
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


    public function updateOrder($idOrder,$orderstatus)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'id='.$idOrder.'&order_status_id='.$orderstatus,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}
