<?php

class API_Endpoint{

 /** Hook WordPress
 *  @return void
 */
 public function __construct(){
    //Ensure the $wp_rewrite global is loaded

    add_filter('query_vars', array($this, 'add_query_vars'), 0);
    add_action('parse_request', array($this, 'sniff_requests'), 0);
    add_action('init', array($this, 'add_endpoints'), 0);
}   

  /**
      * Add public query vars
  * @param array $vars List of current public query vars
  * @return array $vars 
  */
 public function add_query_vars($vars){
    $vars[] = '__api';
    return $vars;
 }

 /** 
     * Add API Endpoints
 *  Regex for rewrites - these are all your endpoints
 *  @return void
 */
 public function add_endpoints(){
    //Get videos by category - as an example
    add_rewrite_rule('^api/videos/?([0-9]+)?/?','index.php?__api=1&videos_cat=$matches[1]','top');

    //Get products - as an example
    add_rewrite_rule('^api/product/?([0-9]+)?/?','index.php?__api=1&product=$matches[1]','top');
 }

  /**   Sniff Requests
  * This is where we hijack all API requests
  *     If $_GET['__api'] is set, we kill WP and serve up rss
  * @return die if API request
  */
 public function sniff_requests(){
    global $wp;

    if(isset($wp->query_vars['__api'])){
        $this->handle_api_request();
        exit;
    }

 }

/** Handle API Requests
 *  This is where we handle off API requests
 *  and return proper responses
 *  @return void
 */
 protected function handle_api_request(){
    global $wp;
    /**
    *
    * Do your magic here ie: fetch from DB etc
    * then get your $result
    */

    $this->send_response($result);
 }



 /** Response Handler
 *  This sends a JSON response to the browser
 */
 protected function send_response(array $data){
    header('content-type: application/json; charset=utf-8');
    echo json_encode($data);
    exit;
 }



}
new API_Endpoint();