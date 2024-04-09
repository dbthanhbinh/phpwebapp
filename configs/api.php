<?php
include('./config.php');

$cur_url = CHATBOT_API_HOST . ':' . CHATBOT_API_PORT . '/chat';

if (isset($_POST['question'])) {
  $curl = curl_init();
  $str = $_POST['question'];
  $postdata = array(
    "model" => "text-davinci-003",
    "prompt" => $str,
    "temperature" => 0,
    "max_tokens" => 500
  );
  $postdata = json_encode($postdata);

  curl_setopt_array($curl, array(
    CURLOPT_URL => $cur_url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    // CURLOPT_POSTFIELDS => $postdata,
  ));

  $response = curl_exec($curl);
  curl_close($curl);
  // $result = json_decode($response, true);

  $newdate = date('Y-m-d');
  $botreply = array("answer" => $response, "recived_date" => $newdate);
  // Set parameters and execute
  $message_send = $_POST['question'];
  $message_recived = $botreply['answer'];
  $recived_date = $botreply['recived_date'];
?>
  <div class="message received">
    <div class="avatar"><img src="https://cdn-icons-png.flaticon.com/512/1698/1698535.png" alt="User Avatar"></div>
    <div class="text"><?= $message_recived ?></div>
    <div class="time"><?= $recived_date ?></div>
  </div>

<?php
}
?>