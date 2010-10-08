<?php
/**
 * Tidize 
 *
 * Component to generate new ids for a model.
 * usually useful with importing old data
 *
 * @package default
 * @author Mitchell Amihod
 */
class TidizeComponent extends Object {

    /**
     * Generate uuid for the field on the originals. 
     *
     * @return void
     **/
    function tidize($modelName) {
        $Model = ClassRegistry::init($modelName);
        $Model->recursive = -1;

        //Find all, even the stuff that might only be in draft. 
        $results = $Model->find('all', array(
            'fields' => 'id',
            'group' => $modelName.'.id'
        ));

        foreach ($results as $item) {
            $id = $item[$modelName]['id'];
            $translation_id = String::uuid();

            $Model->updateAll(
                array($modelName.'.id' => "'{$translation_id}'"),
                array($modelName.'.id' => $id)
            );
        }
        return true;
    }
    


}