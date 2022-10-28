<?php
include ('../path.php');
if (isset($_POST['redjsonNo']))
{
  //echo $_POST['jsonNo'];
  $data = file_get_contents(ROOT_PATH .'/assets/api/QuestionsData.json');
  $json_arr = json_decode($data, true);

  foreach ($json_arr as $key => $value)
  {
    if ($value['QuestionNo'] == $_POST['redjsonNo'])
    {
      $json_arr[$key]['RedNumberofClicks'] = $json_arr[$key]['RedNumberofClicks']+1;
    }
  }
  file_put_contents(ROOT_PATH .'/assets/api/QuestionsData.json', json_encode($json_arr));
}
elseif (isset($_POST['bluejsonNo']))
{
  //echo $_POST['bluejsonNo'];
  $data = file_get_contents(ROOT_PATH .'/assets/api/QuestionsData.json');
  $json_arr = json_decode($data, true);

  foreach ($json_arr as $key => $value)
  {
    if ($value['QuestionNo'] == $_POST['bluejsonNo'])
    {
      $json_arr[$key]['BlueNumberofClicks'] = $json_arr[$key]['BlueNumberofClicks']+1;
    }
    file_put_contents(ROOT_PATH .'/assets/api/QuestionsData.json', json_encode($json_arr));

  }

}

 ?>
