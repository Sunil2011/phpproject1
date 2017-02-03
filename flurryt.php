<?php
require_once './bootstrap.php';
require_once './model.php';

$apps = getApps();


// isset Determines if a variable is set and is not NULL. Set Size Limit less then 10 MB=10485760 bytes. Extension must be CSV.
$errorMsg = "";
if (isset($_FILES['file']) && $_FILES['file']['size'] < 10485760) {
  $nameSplit = explode(".", basename($_FILES['file']['name']));
  $extension = end($nameSplit);
  if ($extension !== 'csv') {
    $errorMsg = "Please upload ony csv files";
  } else {

    $row = 0;
    $fields = array();
    $failed = array();

    $file = $_FILES['file']['tmp_name'];
    if (($handle = fopen($file, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $row++;
        if ($row == 1) {
          for ($i = 0; $i<8; $i++) {
            $fields[] = mapEventFields($data[$i]);
          }
          continue;
        }
        
        $event = array();
        for ($i = 0; $i<8; $i++) {
            $event[$fields[$i]] = $data[$i];
        }
        $event['created_at'] = date("Y-m-d H:i:s");
        $event['updated_at'] = date("Y-m-d H:i:s");
        $event['app_id'] = $_POST['app'];
        
        $eventId = insertEvent('event', array_keys($event), array_values($event));
        if ($eventId) {
            $params = parseParams($data[8]);
            if (!count($params)) {
                continue;
            }
            
            $eventDetailData = array();
            foreach ($params as $param) {
                $eventDetailData[] = array($eventId, $param['1'], $param['2']);
            }
            
            $eventDetailId = insertEventDetail($eventDetailData);
        } else {
            $failed[] = $row;
        }      
      }
      fclose($handle);
    } 
  }
}
?>
