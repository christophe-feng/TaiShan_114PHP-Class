<?php

$source=file_get_contents('events.json');
$events=json_decode($source);

$data=[];
$data['title']=$events->title;
foreach($events->entry as $event){
    $data['entry'][]=['author'=>['name'=>$event->author->name],
                      'title'=>$event->title];
}

// echo "<pre>";
// print_r($data);
// echo "</pre>";

echo 