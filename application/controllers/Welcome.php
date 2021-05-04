<?php defined('BASEPATH') OR exit('No direct script access allowed');

require VENDORPATH . '/autoload.php';

use Checkout\CheckoutApi;
use Checkout\Models\Tokens\Card;
use Checkout\Models\Payments\TokenSource;
use Checkout\Models\Payments\Payment;
use Checkout\Models\Payments\Customer;
use Checkout\Models\Payments\ThreeDs;
use Checkout\Models\Payments\Risk;

class Welcome extends CI_Controller
{
    /**
     * Constructor
     *
     * @access public
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library( [
            'user_agent'
        ] );

        $this->load->helper( [
            'url'
        ] );

        $this->vars[ 'asset_path' ] = '/assets';
        $this->vars[ 'is_mobile' ] = $this->agent->is_mobile();
    }

    // --------------------------------------------------------------------

    /**
     * Checkout Page.
     */
    public function checkout()
    {
        $this->load->view( 'checkout', $this->vars );
    }

    // --------------------------------------------------------------------

    /**
     * Do checkout.
     */
    public function do_checkout()
    {
        if ( ! $this->input->is_ajax_request() )
        {
            show_error(404);
        }

        $rules = [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'trim|required|max_length[225]'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|max_length[225]'
            ],
            [
                'field' => 'cko-token',
                'label' => 'Token',
                'rules' => 'trim|required'
            ]
        ];
        $config = [
            'error_prefix' => '',
            'error_suffix' => '',
        ];
        $this->load->library( 'form_validation', $config );
        $this->form_validation->set_rules( $rules );

        $error_text = 'Invalid mobile number';
        if ( $this->form_validation->run() === FALSE )
        {
            $error_msg = [
                'name'      => form_error( 'name' ),
                'email'     => form_error( 'email' ),
                'cko-token' => form_error( 'cko-token' ),
            ];
            $this->json_response( [ 'result' => 0, 'msg' => $error_msg ] );
            return FALSE;
        }

        $secret_key         = 'sk_test_92d9ea33-3fe3-4b66-bdd8-3dee0b1f6b19';
        $checkout           = new CheckoutApi( $secret_key );

        // Payment details
        $cko_token  = $this->input->post( 'cko-token', TRUE );
        $amount     = $this->input->post( 'amount', TRUE );

        $method             = new TokenSource( $cko_token );
        $payment            = new Payment( $method, 'GBP' );
        $payment->amount    = $amount * 100;
        $payment->reference = 'ORD-' . time();
        $payment->threeDs   = new ThreeDs( TRUE );
        $payment->risk      = new Risk( TRUE );
        $payment->setIdempotencyKey( 'ORD-' . time() );

        // User details
        $name   = $this->input->post( 'name', TRUE );
        $email  = $this->input->post( 'email', TRUE );

        $customer           = new Customer();
        $customer->email    = $email;
        $customer->name     = $name;
        $payment->customer  = $customer;

        try
        {
            $response       = $checkout->payments()->request( $payment );
            $redirection    = $response->getRedirection();

            $this->json_response( [ 'result' => 1, 'redirection' => $redirection ] );
            return TRUE;
        }
        catch ( CheckoutModelException $ex )
        {
            return $ex->getErrors();
        }
        catch ( CheckoutHttpException $ex )
        {
            return $ex->getErrors();
        }

        $this->json_response( [ 'result' => 1 ] );
        return TRUE;
    }

    // --------------------------------------------------------------------

    /**
     * Do checkout.
     */
    public function checkout_result()
    {
        $vars[ 'asset_path' ] = '/assets';
        $this->load->view( 'result', $this->vars );
    }

    // --------------------------------------------------------------------

    /**
     * Json response
     *
     * @access protected
     */
    protected function json_response( $json_arr = [], $is_html = FALSE )
    {
        if ( ENVIRONMENT !== 'testing' AND $is_html === FALSE )
        {
            header('Content-Type: application/json; charset=UTF-8');
            header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
            header("Pragma: no-cache"); // HTTP 1.0.
            header("Expires: 0"); // Proxies.
        }

        echo json_encode( $json_arr );
    }

}
