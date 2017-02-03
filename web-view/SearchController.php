<?php
// getting web content from a website 

//Location to work properly :- var/www/html/hcl_fs/application/modules/api/controller/SearchController.php
// url to call :-  http://localhost/hcl_fs/public/api/search 

class Api_SearchController extends Custom_Controller_Action_Abstract
{

    public function indexAction()
    {
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);

        $uri = 'http://www.hcltech.com/search/apachesolr_search/partnerships';


        $client = new Zend_Http_Client($uri);
        $response = $client->request();
        $content = $response->getBody();
        //var_dump($cont); exit;
        $dom = new Zend_Dom_Query($content);

        $classname = '.pane-content section article';
        $articals = $dom->query($classname);
        // $count = count($articals);

        $art = array();
        foreach ($articals as $a) {
            $data = array();
           
            $data['title'] = $a->getElementsByTagName('h3')->item(0)->nodeValue;
            //  $data['hrf'] = $a ;
            // $data['desc'] = $a->nodeValue ;
            $data['desc'] = $a->getElementsByTagName('p')->item(0)->nodeValue;
           
            
            $art[] = $data ;
        }

        var_dump( $art) ; 
        exit;
    }

}
