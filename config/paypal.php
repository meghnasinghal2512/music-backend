<?php

return array(

/** set your paypal credential **/
'client_id' =>'AUIvAh_9Ebw-4rivT6a11qWAkKSaBNZRduh5Jf-WlDNQA1bPdi4TsQP489FJ3jjIkEk2VMk-dStaUlMO',
'secret' => 'EOQsjR6eSc9pb2dc99I7UPIfs0F5uMQ4OHbOEkftv5F90JN2mIuFXu77QeVov3CI6YGiRSx5vFlr5Tsm',
/**

* SDK configuration
*/
'settings' => array(
/**

* Available option 'sandbox' or 'live'
*/
'mode' => 'sandbox',
/**

* Specify the max request time in seconds
*/
'http.ConnectionTimeOut' => 1000,
/**

* Whether want to log to a file
*/
'log.LogEnabled' => true,
/**

* Specify the file that want to write on
*/
'log.FileName' => storage_path() . '/logs/paypal.log',
/**

* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
*
* Logging is most verbose in the 'FINE' level and decreases as you
* proceed towards ERROR
*/
'log.LogLevel' => 'FINE'
),
);
