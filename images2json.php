<?php
  if (count($argv) < 2)
    return;
  $varName = "images";
  if( count($argv) >= 4 )
    $varName = $argv[3];
    
  $dir = $argv[1];
  $output = "";
  $files = scandir($dir);
  $result = array();
  foreach ($files as $file)
  {
    if ($file == '.' || $file == '..')
      continue;
    $pieces = explode("_", $file);
    if (count($pieces) < 4) {
      echo $file."\n";
      //continue;
    }
    
    $year = $pieces[0];
    $brand = $pieces[1];
    list($model) = explode(".",isset($pieces[2]) ? $pieces[2] : '');
    list($trim) = explode(".",isset($pieces[3]) ? $pieces[3] : '');
    
    if (!isset($result[$brand]))
      $result[$brand] = array();
    if (!isset($result[$brand][$year]))
      $result[$brand][$year] = array();
    $result[$brand][$year][$model] = array('file'=>$file, 'name' => $model, 'alt' => $brand." ".$model." ".$trim);
  }
  $output .= 
"<?php\n".
'$'.$varName.' = array('."\n";
  foreach ($result as $brand => $years) {
  $output .=
"   '".strtolower($brand)."' => array (\n";
    foreach ($years as $year => $models) {
      $output .=
"     '".$year."' => array (\n";
      foreach ($models as $model => $data) {
        $output .=
"       '".strtolower($model)."' => array(\n".
"         'file' => '".$data['file']."',\n".
"         'name' => '".$data['name']."',\n".
"         'alt' => '".$data['alt']."',\n".
"       ),\n";

      }
      $output .=
"     ),\n";
    }     
    $output .=
" ),\n";
  }
  $output .= ");\n?>";
  
  if( count($argv) >= 3 )
    file_put_contents ($argv[2], $output);
  else
    echo $output;

?>