<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Helpers\Any_Helper;
use App\Models\Adt_Model;
use App\Models\Cars;
use App\Models\Driver_Model;
use App\Models\Reviews_Model;
use App\Models\Users;
use App\Models\Users_Model;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
class BaseController extends Controller
{
	protected $anyHelpers;
	protected $AdtModel;
	protected $Reviews;
	protected $cars;
	protected $users;
	protected $drivers;
	/**
	 * Instance of the main Request object.
	 *
	 * @var CLIRequest|IncomingRequest
	 */
	protected $request;
	protected $response;
	protected $session;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [
		"url",
		"custom",
		"session",
		"text",
		"filesystem"
	];

	/**
	 * Constructor.
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		// Preload any models, libraries, etc, here.

		$this->session = session();
		$this->request = $request;
		$this->response = $response;
		$this->anyHelpers = new Any_Helper;
		$this->AdtModel = new Adt_Model();
		$this->Reviews = new Reviews_Model();
		$this->cars = new Cars();
		$this->users = new Users_Model();
		$this->drivers = new Driver_Model();
	}
}
