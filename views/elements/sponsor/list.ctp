<ul class="sponsors">    
<?php
$sponsors = $this->requestAction("/{$lang}/sponsors/random");
foreach($sponsors as $sponsor) {
    // extract($sponsor['Sponsor']);

    // echo $title;
    $imgfile = (empty($sponsor['Sponsor']['image_'.$lang])) ? $sponsor['Sponsor']['image_'.$altlang] : $sponsor['Sponsor']['image_'.$lang];
    $imgfile = $this->Html->image("sponsors/{$sponsor['Sponsor']['id']}/$imgfile", array('alt'=>$sponsor['Sponsor']['title']));

    echo "<li><a href='http://{$sponsor['Sponsor']['web']}'>{$imgfile}</a></li>";

}
?>
</ul>