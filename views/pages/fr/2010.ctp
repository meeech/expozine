<div class="yui3-u-1">
    <div class="content">
        <a name="exhibitors"></a>
        <?php 
        echo $this->element('exhibitor/list', array('exhibitors'=> $this->requestAction("/{$lang}/exhibitors/all") )); 
        ?>
    </div>
</div>

