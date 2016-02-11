<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // product_invoice_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_invoice_default_index')), array (  '_controller' => 'Product\\InvoiceBundle\\Controller\\DefaultController::indexAction',));
        }

        // report
        if ($pathinfo === '/report') {
            return array (  '_controller' => 'Product\\InvoiceBundle\\Controller\\InvoiceReportController::reportAction',  '_route' => 'report',);
        }

        // report_product_list_from_client_id
        if ($pathinfo === '/product-list') {
            return array (  '_controller' => 'Product\\InvoiceBundle\\Controller\\InvoiceReportController::getProductFromClientIdAction',  '_route' => 'report_product_list_from_client_id',);
        }

        // report_product_list
        if ($pathinfo === '/get-report') {
            return array (  '_controller' => 'Product\\InvoiceBundle\\Controller\\InvoiceReportController::getProductsAction',  '_route' => 'report_product_list',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
