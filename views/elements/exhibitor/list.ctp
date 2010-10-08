<ul class="exhibitors">
    <?php 
    foreach ($exhibitors as $exhib):
        $display = $exhib['Exhibitor']['title'];
        $link = false;
        if((bool)$exhib['Exhibitor']['publish_web'] && !empty($exhib['Exhibitor']['web'])) {
            //clean up urls. maybe move this to when someone submits url?
            $link = str_replace('http://', '',$exhib['Exhibitor']['web']);
            $display = "<a href='http://{$link}'>{$display}</a>";
        }
     ?>
    <li>
    <?= $display ?></li>
    <?php endforeach ?>
</ul>