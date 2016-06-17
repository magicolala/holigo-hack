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

        // sejour_new
        if (0 === strpos($pathinfo, '/sejour') && preg_match('#^/sejour\\.(?P<_format>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_sejour_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sejour_new')), array (  '_controller' => 'SejourBundle\\Controller\\DefaultController::createSejourAction',));
        }
        not_sejour_new:

        // get_users
        if (0 === strpos($pathinfo, '/users') && preg_match('#^/users\\.(?P<_format>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_get_users;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_users')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::getUsersAction',));
        }
        not_get_users:

        // get_user
        if (preg_match('#^/(?P<id>[^/\\.]++)\\.(?P<_format>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_get_user;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::getUserAction',));
        }
        not_get_user:

        // user_new
        if (0 === strpos($pathinfo, '/new') && preg_match('#^/new\\.(?P<_format>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_new')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::createUserAction',));
        }
        not_user_new:

        // user_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>[^/\\.]++)\\.(?P<_format>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_user_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::editUserAction',));
        }
        not_user_edit:

        // user_delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/\\.]++)\\.(?P<_format>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_user_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'UserBundle\\Controller\\DefaultController::deleteUserAction',));
        }
        not_user_delete:

        // holigo_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'holigo_homepage');
            }

            return array (  '_controller' => 'holigoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'holigo_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
