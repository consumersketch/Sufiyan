<?php

namespace Product\InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class InvoiceReportController extends Controller
{
    /**
     * @Route("/report", name="report")
     * @Template()
     */
    public function reportAction()
    {
    	//EntityManager
    	$em = $this->getDoctrine()->getManager();
    	//Connection
		$connection = $em->getConnection();

		//Prepare Query
    	$statement = $connection->prepare("SELECT * FROM clients");
		$statement->execute();
		$clientsData = $statement->fetchAll();

        return array('clients' => $clientsData);
    }

    /**
     * 
     * @Route("/product-list", name="report_product_list_from_client_id",options={"expose"=true}))
     * @Template()
     */
    public function getProductFromClientIdAction() {

    	//EntityManager
    	$em = $this->getDoctrine()->getManager();
    	//Connection
		$connection = $em->getConnection();

		$clientId = $this->get('request')->get('client_id');

		//Prepare Query
    	$statement = $connection->prepare("SELECT * FROM products where client_id =:client_id ");
    	$statement->bindValue('client_id', $clientId);
		$statement->execute();
		$products = $statement->fetchAll();

 		$response = new Response(json_encode($products));
    	$response->headers->set('Content-Type', 'application/json');
    	return $response;
    }


    /**
     *
     * @Route("/get-report", name="report_product_list",options={"expose"=true}))
     * @Template()
     */
    public function getProductsAction() {

    	//EntityManager
    	$em = $this->getDoctrine()->getManager();
    	//Connection
		$connection = $em->getConnection();

		$clientId = $this->get('request')->get('client_id');
		$productId = $this->get('request')->get('product_id');
		$selectedDate = $this->get('request')->get('date');

		$query = '';
		$current_date=date("Y-m-d");

    	if ($selectedDate == 'last_month_to_date') {
    		# code...
    		$ts = mktime(0, 0, 0, date("n") - 1, 1);

    		$start = date("Y-m-d", $ts);
    		$end = date('Y-m-d');
    	}
    	if ($selectedDate == 'this_month') {
    		# code...
    		$start = date('Y-m-01'); //date('d-m-Y', strtotime(date('Y-m-1')));
    		$end = date('Y-m-d');
    	}
    	if ($selectedDate == 'this_year') {
    		# code...
    		$start = date('Y-01-01'); //date('l',strtotime(date('Y-01-01')));
    		$end = date('Y-m-d');
    	} 
    	if ($selectedDate == 'last_year') {
    		# code...
    		$strtotime=strtotime($current_date);
			$last_year=strtotime("-1 year",$strtotime);

    		$start = date("Y-m-d",$last_year);
    		$end = date('Y',$last_year) . '-12-31';
    	}


		$productQuery ='';
    	if ($productId != '') {
    		$productQuery = 'AND pro.product_id ="'.$productId.'" AND invi.product_id ="'.$productId.'"';
    	}
    	

		$query = "SELECT inv.invoice_num,inv.invoice_date,pro.product_id,invi.product_id,pro.product_description,invi.qty,invi.price,(invi.qty*invi.price) as total FROM invoices inv
                    INNER JOIN invoicelineitems invi on inv.invoice_num = invi.invoice_num
                    INNER JOIN products pro on pro.product_id = invi.product_id and inv.invoice_num = invi.invoice_num
					where inv.client_id = :client_id and inv.invoice_date BETWEEN :start AND :end ". $productQuery
                    ;

    	$statement = $connection->prepare($query);

    	$statement->bindValue('client_id', $clientId);
    	
    	$statement->bindValue('start', $start);
    	$statement->bindValue('end', $end);
    	
		$statement->execute();
		$products = $statement->fetchAll();

 		$response = new Response(json_encode($products));
    	$response->headers->set('Content-Type', 'application/json');
    	return $response;
    }
}
