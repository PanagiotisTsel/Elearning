<?php

/**
 * A general class for the homepage to provide more info that the admin will later be able to edit/add/remove. 
 * 
 * @author Panagiotis Tsellos w20024460
 */
class TutorialVids extends Endpoint{
protected function endpointParams() {
    return ['id'];
 }

 protected function initialiseSQL() {
    $sql = "SELECT *
     FROM videotutorial";



        $this->setSQL($sql);
    }
   
}