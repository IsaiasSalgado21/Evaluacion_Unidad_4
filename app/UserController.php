<?php

if (!isset($_SESSION)) {
    session_start();
}

class UserController
{

    public function get()
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['user_data']->token,
                'Cookie: XSRF-TOKEN=eyJpdiI6IlpkajlBUFMwQ0l1Mzd4Zi9ianF5b0E9PSIsInZhbHVlIjoia2RieVNsbXRveXdFdEFIR3ZmcktORkdIQ1dFNlZJSUVEN2J5RmJDbndTNW5UNENsNWRZVnltYlk4bU5QTnRTQjUwTGZkUVd4dzRVVDZQaEZzTFYxUG9qOTVPQUt3dzVVNnEwaFNXL2pUaS9YUElFOWFnaktDQzdsVXNzUVN1bmQiLCJtYWMiOiI1MDYzYWE3MDRlMWQ2OWM4NzcxZGU5OTUzNmM4MWRjMjc3YWIyODg5M2Y3MzFhMjVkMmM2NzllMzk1ZGY3MmMzIiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6InovSFNnVHdnYVhwMlpzRlhmQWJPV1E9PSIsInZhbHVlIjoiZW9NWjJuUitQTnBvcVU2T2p2ZSttZmRqM3FGV1JHL1BZekpiR1EzaSsyZmxiNjIvc1ZxRG0rRVZyQmw5U1ZQWDgzSnEyMTdGaUY0L3EvM3RSakJFSE11SXFWSlRyVHo0R2ZHWmViY0p0cmxqMGdOUXo1MG9ma0VSOTBmaWVjM2giLCJtYWMiOiI3ODQ2NmI2ZTliYzMwYjc1ZjgyMWFiYzZjOGQ2MGQwMDk1OWVmYjUyYzdlMWY0YjExOTJkYTg1OGQ4MWFiNjZkIiwidGFnIjoiIn0%3D'
            ),
        ));

        $response = curl_exec($curl);
		curl_close($curl);  
		$response = json_decode($response);
     
		

		if (isset($response->code) && $response->code > 0) {
			
			return $response->data;

		}else{
			return [];
		}
    }
}

?>