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

        if (0 === strpos($pathinfo, '/admin/utilisateurs')) {
            // adminUtilisateurs
            if (rtrim($pathinfo, '/') === '/admin/utilisateurs') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminUtilisateurs');
                }

                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::indexAction',  '_route' => 'adminUtilisateurs',);
            }

            // adminAdressesUtilisateurs
            if (preg_match('#^/admin/utilisateurs/(?P<id>[^/]++)/adresses$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminAdressesUtilisateurs')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::utilisateurAction',));
            }

            // adminFacturesUtilisateurs
            if (preg_match('#^/admin/utilisateurs/(?P<id>[^/]++)/factures$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminFacturesUtilisateurs')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::utilisateurAction',));
            }

        }

        // villes
        if (0 === strpos($pathinfo, '/villes') && preg_match('#^/villes/(?P<cp>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'villes')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::villesAction',));
        }

        if (0 === strpos($pathinfo, '/profile/factures')) {
            // factures
            if ($pathinfo === '/profile/factures') {
                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::facturesAction',  '_route' => 'factures',);
            }

            // facturesPDF
            if (0 === strpos($pathinfo, '/profile/factures/pdf') && preg_match('#^/profile/factures/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facturesPDF')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::facturesPDFAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin/pages')) {
            // adminPages
            if (rtrim($pathinfo, '/') === '/admin/pages') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminPages');
                }

                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::indexAction',  '_route' => 'adminPages',);
            }

            // adminPages_show
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_show')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::showAction',));
            }

            // adminPages_new
            if ($pathinfo === '/admin/pages/new') {
                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::newAction',  '_route' => 'adminPages_new',);
            }

            // adminPages_create
            if ($pathinfo === '/admin/pages/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_adminPages_create;
                }

                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::createAction',  '_route' => 'adminPages_create',);
            }
            not_adminPages_create:

            // adminPages_edit
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_edit')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::editAction',));
            }

            // adminPages_update
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_adminPages_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_update')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::updateAction',));
            }
            not_adminPages_update:

            // adminPages_delete
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_adminPages_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_delete')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::deleteAction',));
            }
            not_adminPages_delete:

        }

        // page
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesController::pageAction',));
        }

        if (0 === strpos($pathinfo, '/reclamation')) {
            // reclamation
            if (rtrim($pathinfo, '/') === '/reclamation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reclamation');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ReclamationController::indexAction',  '_route' => 'reclamation',);
            }

            // reclamation_show
            if (preg_match('#^/reclamation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reclamation_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ReclamationController::showAction',));
            }

            // my_app_reclamation_succ
            if ($pathinfo === '/reclamation/succ') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ReclamationController::indexAction',  '_route' => 'my_app_reclamation_succ',);
            }

            // my_app_reclamation_form
            if ($pathinfo === '/reclamation/reclamation') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ReclamationController::newAction',  '_route' => 'my_app_reclamation_form',);
            }

            // my_app_reclamation_sendpage
            if ($pathinfo === '/reclamation/sendreclamation') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ReclamationController::sendReclamationAction',  '_route' => 'my_app_reclamation_sendpage',);
            }

        }

        if (0 === strpos($pathinfo, '/favoris')) {
            // favoris
            if (rtrim($pathinfo, '/') === '/favoris') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'favoris');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\FavorisController::indexAction',  '_route' => 'favoris',);
            }

            // favoris_show
            if (preg_match('#^/favoris/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\FavorisController::showAction',));
            }

            // favoris_new
            if ($pathinfo === '/favoris/new') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\FavorisController::newAction',  '_route' => 'favoris_new',);
            }

            // favoris_create
            if (preg_match('#^/favoris/(?P<id>[^/]++)/(?P<produit>[^/]++)/create$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_create')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\FavorisController::createAction',));
            }

            // favoris_remove
            if (preg_match('#^/favoris/(?P<id>[^/]++)/(?P<produit>[^/]++)/remove$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_remove')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\FavorisController::removeAction',));
            }

            // favoris_edit
            if (preg_match('#^/favoris/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\FavorisController::editAction',));
            }

            // favoris_update
            if (preg_match('#^/favoris/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\FavorisController::updateAction',));
            }

            // favoris_delete
            if (preg_match('#^/favoris/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'favoris_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\FavorisController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/com')) {
            if (0 === strpos($pathinfo, '/commentaireProduit')) {
                // commentaire_edit
                if (preg_match('#^/commentaireProduit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommentaireController::editAction',));
                }

                // commentaire_update
                if (preg_match('#^/commentaireProduit/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_commentaire_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommentaireController::updateAction',));
                }
                not_commentaire_update:

                // commentaire_delete
                if (preg_match('#^/commentaireProduit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommentaireController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/comentaireSujet')) {
                // commentairesujet
                if (rtrim($pathinfo, '/') === '/comentaireSujet') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'commentairesujet');
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommentairesujetController::indexAction',  '_route' => 'commentairesujet',);
                }

                // commentairesujet_show
                if (preg_match('#^/comentaireSujet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentairesujet_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommentairesujetController::showAction',));
                }

                // commentairesujet_create
                if (preg_match('#^/comentaireSujet/(?P<sujet>[^/]++)/create$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentairesujet_create')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommentairesujetController::AjouterCommentaireSujetAction',));
                }

                // commentairesujet_edit
                if (preg_match('#^/comentaireSujet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentairesujet_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommentairesujetController::editAction',));
                }

                // commentairesujet_update
                if (preg_match('#^/comentaireSujet/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_commentairesujet_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentairesujet_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommentairesujetController::updateAction',));
                }
                not_commentairesujet_update:

                // commentairesujet_delete
                if (preg_match('#^/comentaireSujet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentairesujet_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommentairesujetController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/forum')) {
            // sujet
            if (rtrim($pathinfo, '/') === '/forum') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sujet');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SujetController::indexAction',  '_route' => 'sujet',);
            }

            // detail_sujet
            if (preg_match('#^/forum/(?P<sujet>[^/]++)/detail$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_sujet')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SujetController::DetailSujetAction',));
            }

            // sujet_show-All
            if ($pathinfo === '/forum/showAll') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SujetController::showAllAction',  '_route' => 'sujet_show-All',);
            }

            // sujet_create
            if ($pathinfo === '/forum/create') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SujetController::createAction',  '_route' => 'sujet_create',);
            }

            // sujet_edit
            if (preg_match('#^/forum/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sujet_edit')), array (  '_controller' => 'PiDevClientBundle:Sujet:edit',));
            }

            // sujet_update
            if (preg_match('#^/forum/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_sujet_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sujet_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SujetController::updateAction',));
            }
            not_sujet_update:

            // sujet_image
            if (preg_match('#^/forum/(?P<id>[^/]++)/image$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sujet_image')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SujetController::AfficheImageAction',));
            }

            // sujet_delete
            if (preg_match('#^/forum/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sujet_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SujetController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/contact')) {
            // mail
            if (rtrim($pathinfo, '/') === '/contact') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mail');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ContactController::indexAction',  '_route' => 'mail',);
            }

            // mail_show
            if (preg_match('#^/contact/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mail_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ContactController::showAction',));
            }

            // my_app_mail_succ
            if ($pathinfo === '/contact/succ') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ContactController::indexAction',  '_route' => 'my_app_mail_succ',);
            }

            // my_app_mail_form
            if ($pathinfo === '/contact/mail') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ContactController::newAction',  '_route' => 'my_app_mail_form',);
            }

            // my_app_mail_sendpage
            if ($pathinfo === '/contact/sendmail') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ContactController::sendMailAction',  '_route' => 'my_app_mail_sendpage',);
            }

        }

        // admin
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::commandesAction',  '_route' => 'admin',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/panier')) {
                // supprimer
                if (0 === strpos($pathinfo, '/panier/supprimer') && preg_match('#^/panier/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::supprimerAction',));
                }

                // ajouter
                if (0 === strpos($pathinfo, '/panier/ajouter') && preg_match('#^/panier/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::ajouterAction',));
                }

                // panier
                if (rtrim($pathinfo, '/') === '/panier') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'panier');
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::panierAction',  '_route' => 'panier',);
                }

                // livraison
                if ($pathinfo === '/panier/livraison') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::livraisonAction',  '_route' => 'livraison',);
                }

                // validation
                if ($pathinfo === '/panier/validation') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::validationAction',  '_route' => 'validation',);
                }

                // livraisonAdresseSuppression
                if (0 === strpos($pathinfo, '/panier/livraison/adresse/suppression') && preg_match('#^/panier/livraison/adresse/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraisonAdresseSuppression')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::adresseSuppressionAction',));
                }

            }

            // produits
            if ($pathinfo === '/produits') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::produitsAction',  '_route' => 'produits',);
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::indexAction',  '_route' => 'index',);
        }

        // presentation
        if (0 === strpos($pathinfo, '/produit') && preg_match('#^/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::presentationAction',));
        }

        // categorieProduits
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorieProduits')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::produitsAction',));
        }

        // rechercheProduits
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::rechercheTraitementAction',  '_route' => 'rechercheProduits',);
        }

        // catalogue
        if ($pathinfo === '/catalogue') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::catalogueAction',  '_route' => 'catalogue',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/produits')) {
                    // adminProduits
                    if (rtrim($pathinfo, '/') === '/admin/produits') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminProduits');
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::indexAction',  '_route' => 'adminProduits',);
                    }

                    // adminProduits_show
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::showAction',));
                    }

                    // adminProduits_new
                    if ($pathinfo === '/admin/produits/new') {
                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::newAction',  '_route' => 'adminProduits_new',);
                    }

                    // adminProduits_create
                    if ($pathinfo === '/admin/produits/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_adminProduits_create;
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::createAction',  '_route' => 'adminProduits_create',);
                    }
                    not_adminProduits_create:

                    // adminProduits_edit
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::editAction',));
                    }

                    // adminProduits_update
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_adminProduits_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::updateAction',));
                    }
                    not_adminProduits_update:

                    // adminProduits_delete
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_adminProduits_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::deleteAction',));
                    }
                    not_adminProduits_delete:

                    // adminProduits_catalogue
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/catalogue$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_catalogue')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::addCatalogueAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/c')) {
                    if (0 === strpos($pathinfo, '/admin/categories')) {
                        // adminCategories
                        if (rtrim($pathinfo, '/') === '/admin/categories') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'adminCategories');
                            }

                            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::indexAction',  '_route' => 'adminCategories',);
                        }

                        // adminCategories_show
                        if (preg_match('#^/admin/categories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::showAction',));
                        }

                        // adminCategories_new
                        if ($pathinfo === '/admin/categories/new') {
                            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::newAction',  '_route' => 'adminCategories_new',);
                        }

                        // adminCategories_create
                        if ($pathinfo === '/admin/categories/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_adminCategories_create;
                            }

                            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::createAction',  '_route' => 'adminCategories_create',);
                        }
                        not_adminCategories_create:

                        // adminCategories_edit
                        if (preg_match('#^/admin/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::editAction',));
                        }

                        // adminCategories_update
                        if (preg_match('#^/admin/categories/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_adminCategories_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::updateAction',));
                        }
                        not_adminCategories_update:

                        // adminCategories_delete
                        if (preg_match('#^/admin/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_adminCategories_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::deleteAction',));
                        }
                        not_adminCategories_delete:

                    }

                    if (0 === strpos($pathinfo, '/admin/commandes')) {
                        // adminCommande
                        if (rtrim($pathinfo, '/') === '/admin/commandes') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'adminCommande');
                            }

                            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::commandesAction',  '_route' => 'adminCommande',);
                        }

                        // adminShowFacture
                        if (0 === strpos($pathinfo, '/admin/commandes/facture') && preg_match('#^/admin/commandes/facture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminShowFacture')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::showFactureAction',));
                        }

                    }

                }

            }

            // validationCommande
            if (0 === strpos($pathinfo, '/api/banque') && preg_match('#^/api/banque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validationCommande')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesController::validationCommandeAction',));
            }

            // statistique
            if (rtrim($pathinfo, '/') === '/admin/statistique') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'statistique');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\StatistiqueController::chartLineAction',  '_route' => 'statistique',);
            }

        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
