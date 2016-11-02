<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // my_app_credi_wire_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_app_credi_wire_homepage')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/owner')) {
            // owner
            if (rtrim($pathinfo, '/') === '/owner') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'owner');
                }

                return array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::indexAction',  '_route' => 'owner',);
            }

            // owner_show
            if (preg_match('#^/owner/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'owner_show')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::showAction',));
            }

            // owner_new
            if ($pathinfo === '/owner/new') {
                return array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::newAction',  '_route' => 'owner_new',);
            }

            // owner_create
            if ($pathinfo === '/owner/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_owner_create;
                }

                return array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::createAction',  '_route' => 'owner_create',);
            }
            not_owner_create:

            // owner_edit
            if (preg_match('#^/owner/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'owner_edit')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::editAction',));
            }

            // owner_update
            if (preg_match('#^/owner/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_owner_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'owner_update')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::updateAction',));
            }
            not_owner_update:

            // owner_delete
            if (preg_match('#^/owner/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_owner_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'owner_delete')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::deleteAction',));
            }
            not_owner_delete:

        }

        if (0 === strpos($pathinfo, '/project')) {
            // project
            if (rtrim($pathinfo, '/') === '/project') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'project');
                }

                return array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::indexAction',  '_route' => 'project',);
            }

            // project_show
            if (preg_match('#^/project/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_show')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::showAction',));
            }

            // project_new
            if ($pathinfo === '/project/new') {
                return array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::newAction',  '_route' => 'project_new',);
            }

            // project_create
            if ($pathinfo === '/project/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_project_create;
                }

                return array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::createAction',  '_route' => 'project_create',);
            }
            not_project_create:

            // project_edit
            if (preg_match('#^/project/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_edit')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::editAction',));
            }

            // project_update
            if (preg_match('#^/project/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_project_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_update')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::updateAction',));
            }
            not_project_update:

            // project_delete
            if (preg_match('#^/project/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_project_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'project_delete')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::deleteAction',));
            }
            not_project_delete:

        }

        if (0 === strpos($pathinfo, '/logonhistory')) {
            // logonhistory
            if (rtrim($pathinfo, '/') === '/logonhistory') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'logonhistory');
                }

                return array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::indexAction',  '_route' => 'logonhistory',);
            }

            // logonhistory_show
            if (preg_match('#^/logonhistory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'logonhistory_show')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::showAction',));
            }

            // logonhistory_new
            if ($pathinfo === '/logonhistory/new') {
                return array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::newAction',  '_route' => 'logonhistory_new',);
            }

            // logonhistory_create
            if ($pathinfo === '/logonhistory/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_logonhistory_create;
                }

                return array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::createAction',  '_route' => 'logonhistory_create',);
            }
            not_logonhistory_create:

            // logonhistory_edit
            if (preg_match('#^/logonhistory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'logonhistory_edit')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::editAction',));
            }

            // logonhistory_update
            if (preg_match('#^/logonhistory/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_logonhistory_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'logonhistory_update')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::updateAction',));
            }
            not_logonhistory_update:

            // logonhistory_delete
            if (preg_match('#^/logonhistory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_logonhistory_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'logonhistory_delete')), array (  '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::deleteAction',));
            }
            not_logonhistory_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
