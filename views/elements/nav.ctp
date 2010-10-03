<!-- Main Name -->
<ul>
    <li><?php echo $this->Html->link(__('Home', true), '/'.$lang ); ?></li>
    <li><?php echo $this->Html->link(__('Register', true), array('controller'=>'exhibitors', 'action'=>'register') ); ?></li>
</ul>

<!-- Other historical pages-->
<ul>
    <li><?php echo $this->Html->link(__('Home', true), '/'.$lang ); ?></li>
    <li><?php echo $this->Html->link(__d('nav','other_lang', true),  '/'.$altlang  ); ?></li>
</ul>

