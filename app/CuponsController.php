<?php

if (!isset($_SESSION)) {
    session_start();
}


if (isset($_POST['action'])) {
    switch ($_POST['action']) {

        case 'createCupons':
            $name = $_POST['name'];
            $code = $_POST['code'];
            $percentage_discount = $_POST['percentage_discount'];
            $min_amount_required = $_POST['min_amount_required'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $max_uses = $_POST['max_uses'];
            $count_uses = $_POST['count_uses'];
            $min_product_required = $_POST['min_product_required'];
            $cuponsController = new CuponsController();
            $cuponsController->createCupons($name, $code, $percentage_discount, $min_amount_required, $start_date, $end_date, $max_uses, $count_uses, $min_product_required);
            break;
        case 'deleteCupons':
            $idCupon = $_POST['idCupon'];
            $cuponsController = new CuponsController();
            $cuponsController->deleteCupons($idCupon);
            break;

        case 'updateCupons':
            $idCupon = $_POST['idCupon'];
            $name = $_POST['name'];
            $code = $_POST['code'];
            $percentage_discount = $_POST['percentage_discount'];
            $min_amount_required = $_POST['min_amount_required'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $max_uses = $_POST['max_uses'];
            $count_uses = $_POST['count_uses'];
            $min_product_required = $_POST['min_product_required'];
            $cuponsController = new CuponsController();
            $cuponsController->updateCupons($idCupon, $name, $code, $percentage_discount, $min_amount_required, $start_date, $end_date, $max_uses, $count_uses, $min_product_required);
            break;
    }
}


class CuponsController
{

    public function createCupons($name, $code, $percentage_discount, $min_amount_required, $start_date, $end_date, $max_uses, $count_uses, $min_product_required)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('name' => $name, 'code' => $code, 'percentage_discount' => $percentage_discount, 'amount_discount' => '', 'min_amount_required' => $min_amount_required, 'min_product_required' => $min_product_required, 'start_date' => $start_date, 'end_date' => $end_date, 'max_uses' => $max_uses, 'count_uses' => $count_uses, 'valid_only_first_purchase' => '1', 'status' => '1'),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function deleteCupons($idCupon)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons/' . $idCupon,
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

    public function updateCupons($idCupon, $name, $code, $percentage_discount, $min_amount_required, $start_date, $end_date, $max_uses, $count_uses, $min_product_required)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'name=' . $name . '&code=' . $code . '&percentage_discount=' . $percentage_discount . '&min_amount_required=' . $min_amount_required . '&min_product_required=' . $min_product_required . '&start_date=' . $start_date . '&end_date=' . $end_date . '4&max_uses=' . $max_uses . '&count_uses=' . $count_uses . '&valid_only_first_purchase=1&status=1&id=' . $idCupon,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token
            ),
        ));

        $response = curl_exec($curl);
        $curl_error = curl_error($curl);

        curl_close($curl);

        if ($curl_error) {

            return false;
        } else {
            $decoded_response = json_decode($response, true);
            if (isset($decoded_response['success']) && $decoded_response['success'] === true) {

                return true;
            } else {

                return false;
            }
        }
    }

    public function getCupons()
    {


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons',
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


    public function getCouponById($idCupon)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/coupons/'.$idCupon,
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





public function getWidgetTotalDiscounts($orders)
{
    $widgetDiscounts = [];
    foreach ($orders as $order) {
        foreach ($order['products'] as $product) {
            $productId = $product['id'];
            
            $productDiscount = $product['price'] * ($order['coupon']['percentage_discount'] / 100);
            if (!isset($widgetDiscounts[$productId])) {
                $widgetDiscounts[$productId] = 0;
            }
            $widgetDiscounts[$productId] += $productDiscount;
        }
    }
    return $widgetDiscounts;
    
}

// Ejemplo de uso:
}
