<?php

if (!isset($_SESSION)) {
    session_start();
}


if (isset($_POST['action'])) {
    switch ($_POST['action']) {





        case 'addClient':
            $name = $_POST['name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $customercontroller = new CustomerController();
            $customercontroller->addClient($name, $email, $password, $phonenumber);

            break;

        case 'removeClient':

            $clientId = $_POST['clientId'];
            $customercontroller = new CustomerController();
            $customercontroller->deleteClient($clientId);


            break;

        case 'updateClient':
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $clientId = $_POST['clientId'];
            $customercontroller = new CustomerController();
            $customercontroller->editClient($name, $email, $password, $phonenumber, $clientId);

            break;
    }
}




class CustomerController
{

    public  function get()
    {



        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
                'Cookie: XSRF-TOKEN=eyJpdiI6IlpkajlBUFMwQ0l1Mzd4Zi9ianF5b0E9PSIsInZhbHVlIjoia2RieVNsbXRveXdFdEFIR3ZmcktORkdIQ1dFNlZJSUVEN2J5RmJDbndTNW5UNENsNWRZVnltYlk4bU5QTnRTQjUwTGZkUVd4dzRVVDZQaEZzTFYxUG9qOTVPQUt3dzVVNnEwaFNXL2pUaS9YUElFOWFnaktDQzdsVXNzUVN1bmQiLCJtYWMiOiI1MDYzYWE3MDRlMWQ2OWM4NzcxZGU5OTUzNmM4MWRjMjc3YWIyODg5M2Y3MzFhMjVkMmM2NzllMzk1ZGY3MmMzIiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6InovSFNnVHdnYVhwMlpzRlhmQWJPV1E9PSIsInZhbHVlIjoiZW9NWjJuUitQTnBvcVU2T2p2ZSttZmRqM3FGV1JHL1BZekpiR1EzaSsyZmxiNjIvc1ZxRG0rRVZyQmw5U1ZQWDgzSnEyMTdGaUY0L3EvM3RSakJFSE11SXFWSlRyVHo0R2ZHWmViY0p0cmxqMGdOUXo1MG9ma0VSOTBmaWVjM2giLCJtYWMiOiI3ODQ2NmI2ZTliYzMwYjc1ZjgyMWFiYzZjOGQ2MGQwMDk1OWVmYjUyYzdlMWY0YjExOTJkYTg1OGQ4MWFiNjZkIiwidGFnIjoiIn0%3D'
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


    public function addClient($name, $email, $password, $phonenumber)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('name' => $name, 'email' => $email, 'password' => $password, 'phone_number' => $phonenumber, 'is_suscribed' => '1', 'level_id' => '1'),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
                'Cookie: XSRF-TOKEN=eyJpdiI6Im9QazJFb3RMenBkZGtpdTl1bWxlUVE9PSIsInZhbHVlIjoieHhYUDN1ZzBUREVUNkhPMXpFQzJSRVFqekZ6dDdvZ2JWalFScUFEMUc0UlBVQThxcXFCRlFIb3ozNFlkOHJEMjRzSGNXcHZuMzZaWjNKWGRYWVVVbFM1OTBKRjBLUXc0WnJTVkJNdnk1OTFjOTlIa0ZzMW8xdkZqbUhFS09TSVYiLCJtYWMiOiJkNWY1OWUxODcxNjg3ODNmNjI2MmIwZWQyYmM3YmIxYTRlYjJlMTI2MjMyNGEzNDc0NGI1ZmIwODUxMGE5YWEzIiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6IjJKdkxTMHFPL3JqTm96Q1RXMllIZ1E9PSIsInZhbHVlIjoiZHdtV2hlSmppOHF1eml2Y0hhK2ErcEtQR3d0dkxwN05Rb3k3V2tDR0FIZ3c0OHNwV0RDRnNhSVA0U3h6emtkY1E3cnFZcElVVDZSTTZwUndLbTFmeWdtUzlvMDlnQVF3VmFpcExiR2l4M0tYemlnYUZ5bkNqYm8yRkcrRW9kbWkiLCJtYWMiOiJkYjE0MGFmMjEwMTJjM2EwZDQwZWE0NWNmNWQ1ZDhhZWU2YjJjMTMzYzE0YmIwYmU5ZjFjZjdiZGE4MzcyMjcyIiwidGFnIjoiIn0%3D'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }



    public function editClient($name, $email, $password, $phonenumber, $clientId)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'name=' . $name . '&email=' . $email . '&password=' . $password . '&phone_number=' . $phonenumber . '&is_suscribed=1&level_id=1&id=' . $clientId,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
                'Cookie: XSRF-TOKEN=eyJpdiI6Im9QazJFb3RMenBkZGtpdTl1bWxlUVE9PSIsInZhbHVlIjoieHhYUDN1ZzBUREVUNkhPMXpFQzJSRVFqekZ6dDdvZ2JWalFScUFEMUc0UlBVQThxcXFCRlFIb3ozNFlkOHJEMjRzSGNXcHZuMzZaWjNKWGRYWVVVbFM1OTBKRjBLUXc0WnJTVkJNdnk1OTFjOTlIa0ZzMW8xdkZqbUhFS09TSVYiLCJtYWMiOiJkNWY1OWUxODcxNjg3ODNmNjI2MmIwZWQyYmM3YmIxYTRlYjJlMTI2MjMyNGEzNDc0NGI1ZmIwODUxMGE5YWEzIiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6IjJKdkxTMHFPL3JqTm96Q1RXMllIZ1E9PSIsInZhbHVlIjoiZHdtV2hlSmppOHF1eml2Y0hhK2ErcEtQR3d0dkxwN05Rb3k3V2tDR0FIZ3c0OHNwV0RDRnNhSVA0U3h6emtkY1E3cnFZcElVVDZSTTZwUndLbTFmeWdtUzlvMDlnQVF3VmFpcExiR2l4M0tYemlnYUZ5bkNqYm8yRkcrRW9kbWkiLCJtYWMiOiJkYjE0MGFmMjEwMTJjM2EwZDQwZWE0NWNmNWQ1ZDhhZWU2YjJjMTMzYzE0YmIwYmU5ZjFjZjdiZGE4MzcyMjcyIiwidGFnIjoiIn0%3D'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }


    public function deleteClient($clientId)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients/' . $clientId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
                'Cookie: XSRF-TOKEN=eyJpdiI6Im9QazJFb3RMenBkZGtpdTl1bWxlUVE9PSIsInZhbHVlIjoieHhYUDN1ZzBUREVUNkhPMXpFQzJSRVFqekZ6dDdvZ2JWalFScUFEMUc0UlBVQThxcXFCRlFIb3ozNFlkOHJEMjRzSGNXcHZuMzZaWjNKWGRYWVVVbFM1OTBKRjBLUXc0WnJTVkJNdnk1OTFjOTlIa0ZzMW8xdkZqbUhFS09TSVYiLCJtYWMiOiJkNWY1OWUxODcxNjg3ODNmNjI2MmIwZWQyYmM3YmIxYTRlYjJlMTI2MjMyNGEzNDc0NGI1ZmIwODUxMGE5YWEzIiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6IjJKdkxTMHFPL3JqTm96Q1RXMllIZ1E9PSIsInZhbHVlIjoiZHdtV2hlSmppOHF1eml2Y0hhK2ErcEtQR3d0dkxwN05Rb3k3V2tDR0FIZ3c0OHNwV0RDRnNhSVA0U3h6emtkY1E3cnFZcElVVDZSTTZwUndLbTFmeWdtUzlvMDlnQVF3VmFpcExiR2l4M0tYemlnYUZ5bkNqYm8yRkcrRW9kbWkiLCJtYWMiOiJkYjE0MGFmMjEwMTJjM2EwZDQwZWE0NWNmNWQ1ZDhhZWU2YjJjMTMzYzE0YmIwYmU5ZjFjZjdiZGE4MzcyMjcyIiwidGFnIjoiIn0%3D'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }


    public function getClientById($clientId)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients/' . $clientId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['user_data']->token,
                'Cookie: XSRF-TOKEN=eyJpdiI6Im9QazJFb3RMenBkZGtpdTl1bWxlUVE9PSIsInZhbHVlIjoieHhYUDN1ZzBUREVUNkhPMXpFQzJSRVFqekZ6dDdvZ2JWalFScUFEMUc0UlBVQThxcXFCRlFIb3ozNFlkOHJEMjRzSGNXcHZuMzZaWjNKWGRYWVVVbFM1OTBKRjBLUXc0WnJTVkJNdnk1OTFjOTlIa0ZzMW8xdkZqbUhFS09TSVYiLCJtYWMiOiJkNWY1OWUxODcxNjg3ODNmNjI2MmIwZWQyYmM3YmIxYTRlYjJlMTI2MjMyNGEzNDc0NGI1ZmIwODUxMGE5YWEzIiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6IjJKdkxTMHFPL3JqTm96Q1RXMllIZ1E9PSIsInZhbHVlIjoiZHdtV2hlSmppOHF1eml2Y0hhK2ErcEtQR3d0dkxwN05Rb3k3V2tDR0FIZ3c0OHNwV0RDRnNhSVA0U3h6emtkY1E3cnFZcElVVDZSTTZwUndLbTFmeWdtUzlvMDlnQVF3VmFpcExiR2l4M0tYemlnYUZ5bkNqYm8yRkcrRW9kbWkiLCJtYWMiOiJkYjE0MGFmMjEwMTJjM2EwZDQwZWE0NWNmNWQ1ZDhhZWU2YjJjMTMzYzE0YmIwYmU5ZjFjZjdiZGE4MzcyMjcyIiwidGFnIjoiIn0%3D'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}

?>