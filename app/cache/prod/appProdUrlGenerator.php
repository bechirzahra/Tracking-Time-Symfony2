<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'my_app_credi_wire_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'owner' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/owner/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'owner_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/owner',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'owner_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/owner/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'owner_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/owner/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'owner_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/owner',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'owner_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/owner',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'owner_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\OwnerController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/owner',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/project/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/project/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/project/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'project_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\ProjectController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/project',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logonhistory' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logonhistory/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logonhistory_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/logonhistory',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logonhistory_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logonhistory/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logonhistory_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logonhistory/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logonhistory_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/logonhistory',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logonhistory_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/logonhistory',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logonhistory_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MyApp\\CrediWireBundle\\Controller\\LogonHistoryController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/logonhistory',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
