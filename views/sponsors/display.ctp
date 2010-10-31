<?php 
echo $this->element('sponsor/list', array('sponsors'=> $this->requestAction("/{$lang}/sponsors/random") )); 

