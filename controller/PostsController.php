<?php
require_once(__DIR__."/../model/User.php");
require_once(__DIR__."/../core/ViewManager.php");
require_once(__DIR__."/../core/I18n.php");
require_once(__DIR__."/../database/UserDAO.php");
require_once(__DIR__."/../controller/BaseController.php");
/**
 * Class UsersController
 * 
 * Controller to login, logout and user registration
 * 
 * @author lipido <lipido@gmail.com>
 */
class PostsController extends BaseController {
  
  /**
   * Reference to the UserDAO to interact
   * with the database
   * 
   * @var UserMapper
   */  
  private $userDAO;    
  
  public function __construct() {    
    parent::__construct();
    
    $this->userDAO = new UserDAO(); 
    // Users controller operates in a "welcome" layout
    // different to the "default" layout where the internal
    // menu is displayed
    //   
  }
  
  
  
 //ADRI DEJA ESTE METODO TAL COMO ESTA PARA QUE PUEDA SEGUIR HACIENDO PRUEBAS CON EL!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  public function posts() { 
    $this->view->render("posts", "inicio");    
  }
  
}