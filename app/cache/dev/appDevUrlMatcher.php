<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/bundles')) {
            if (0 === strpos($pathinfo, '/bundles/compiled/main')) {
                // _assetic_616b138
                if ($pathinfo === '/bundles/compiled/main.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '616b138',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_616b138',);
                }

                if (0 === strpos($pathinfo, '/bundles/compiled/main_part_1_')) {
                    // _assetic_616b138_0
                    if ($pathinfo === '/bundles/compiled/main_part_1_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '616b138',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_616b138_0',);
                    }

                    // _assetic_616b138_1
                    if ($pathinfo === '/bundles/compiled/main_part_1_etalage_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '616b138',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_616b138_1',);
                    }

                    // _assetic_616b138_2
                    if ($pathinfo === '/bundles/compiled/main_part_1_megamenu_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '616b138',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_616b138_2',);
                    }

                    // _assetic_616b138_3
                    if ($pathinfo === '/bundles/compiled/main_part_1_style_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '616b138',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_616b138_3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/bundles/js/core')) {
                // _assetic_d84feea
                if ($pathinfo === '/bundles/js/core.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd84feea',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d84feea',);
                }

                if (0 === strpos($pathinfo, '/bundles/js/core_part_1_')) {
                    if (0 === strpos($pathinfo, '/bundles/js/core_part_1_jquery')) {
                        if (0 === strpos($pathinfo, '/bundles/js/core_part_1_jquery-')) {
                            // _assetic_d84feea_0
                            if ($pathinfo === '/bundles/js/core_part_1_jquery-1.11.1.min_1.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd84feea',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d84feea_0',);
                            }

                            // _assetic_d84feea_1
                            if ($pathinfo === '/bundles/js/core_part_1_jquery-ui.min_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd84feea',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_d84feea_1',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/bundles/js/core_part_1_jquery.')) {
                            // _assetic_d84feea_2
                            if ($pathinfo === '/bundles/js/core_part_1_jquery.etalage.min_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd84feea',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_d84feea_2',);
                            }

                            // _assetic_d84feea_3
                            if ($pathinfo === '/bundles/js/core_part_1_jquery.jscrollpane.min_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd84feea',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_d84feea_3',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/bundles/js/core_part_1_me')) {
                        // _assetic_d84feea_4
                        if ($pathinfo === '/bundles/js/core_part_1_megamenu_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd84feea',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_d84feea_4',);
                        }

                        // _assetic_d84feea_5
                        if ($pathinfo === '/bundles/js/core_part_1_menu_jquery_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd84feea',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_d84feea_5',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

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

        if (0 === strpos($pathinfo, '/customer')) {
            // fos_registercustomer
            if ($pathinfo === '/customer') {
                return array (  '_controller' => 'Site\\UtilisateursBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_registercustomer',);
            }

            // fos_logincustomer
            if ($pathinfo === '/customerlogin') {
                return array (  '_controller' => 'Site\\UtilisateursBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_logincustomer',);
            }

        }

        if (0 === strpos($pathinfo, '/mediaspecials')) {
            // mediaspecials
            if (rtrim($pathinfo, '/') === '/mediaspecials') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mediaspecials');
                }

                return array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\MediaSpecialsController::indexAction',  '_route' => 'mediaspecials',);
            }

            // mediaspecials_show
            if (preg_match('#^/mediaspecials/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mediaspecials_show')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\MediaSpecialsController::showAction',));
            }

            // mediaspecials_new
            if ($pathinfo === '/mediaspecials/new') {
                return array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\MediaSpecialsController::newAction',  '_route' => 'mediaspecials_new',);
            }

            // mediaspecials_create
            if ($pathinfo === '/mediaspecials/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mediaspecials_create;
                }

                return array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\MediaSpecialsController::createAction',  '_route' => 'mediaspecials_create',);
            }
            not_mediaspecials_create:

            // mediaspecials_edit
            if (preg_match('#^/mediaspecials/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mediaspecials_edit')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\MediaSpecialsController::editAction',));
            }

            // mediaspecials_update
            if (preg_match('#^/mediaspecials/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_mediaspecials_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mediaspecials_update')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\MediaSpecialsController::updateAction',));
            }
            not_mediaspecials_update:

            // mediaspecials_delete
            if (preg_match('#^/mediaspecials/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_mediaspecials_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mediaspecials_delete')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\MediaSpecialsController::deleteAction',));
            }
            not_mediaspecials_delete:

        }

        if (0 === strpos($pathinfo, '/specials')) {
            // specials
            if (rtrim($pathinfo, '/') === '/specials') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'specials');
                }

                return array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\SpecialsController::indexAction',  '_route' => 'specials',);
            }

            // specials_show
            if (preg_match('#^/specials/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'specials_show')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\SpecialsController::showAction',));
            }

            // specials_new
            if ($pathinfo === '/specials/new') {
                return array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\SpecialsController::newAction',  '_route' => 'specials_new',);
            }

            // specials_create
            if ($pathinfo === '/specials/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_specials_create;
                }

                return array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\SpecialsController::createAction',  '_route' => 'specials_create',);
            }
            not_specials_create:

            // specials_edit
            if (preg_match('#^/specials/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'specials_edit')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\SpecialsController::editAction',));
            }

            // specials_update
            if (preg_match('#^/specials/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_specials_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'specials_update')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\SpecialsController::updateAction',));
            }
            not_specials_update:

            // specials_delete
            if (preg_match('#^/specials/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_specials_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'specials_delete')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\SpecialsController::deleteAction',));
            }
            not_specials_delete:

        }

        // site_back_office_homepage
        if (0 === strpos($pathinfo, '/test') && preg_match('#^/test/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_back_office_homepage')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\DefaultController::indexAction',));
        }

        // admin_products
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/products$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_products')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductsController::indexAction',));
        }

        // admin_products_show
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/products/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_products_show')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductsController::showAction',));
        }

        // admin_products_new
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/products/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_products_new')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductsController::newAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/products')) {
                // admin_products_create
                if ($pathinfo === '/admin/products/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_products_create;
                    }

                    return array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductsController::createAction',  '_route' => 'admin_products_create',);
                }
                not_admin_products_create:

                // admin_products_edit
                if (preg_match('#^/admin/products/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_products_edit')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductsController::editAction',));
                }

                // admin_products_update
                if (preg_match('#^/admin/products/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_products_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_products_update')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductsController::updateAction',));
                }
                not_admin_products_update:

                // admin_products_delete
                if (preg_match('#^/admin/products/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_products_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_products_delete')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductsController::deleteAction',));
                }
                not_admin_products_delete:

            }

            if (0 === strpos($pathinfo, '/admin/categories')) {
                // admin_categories
                if ($pathinfo === '/admin/categories') {
                    return array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'admin_categories',);
                }

                // admin_categories_show
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_show')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\CategoriesController::showAction',));
                }

                // admin_categories_new
                if ($pathinfo === '/admin/categories/new') {
                    return array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\CategoriesController::newAction',  '_route' => 'admin_categories_new',);
                }

                // admin_categories_create
                if ($pathinfo === '/admin/categories/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_categories_create;
                    }

                    return array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\CategoriesController::createAction',  '_route' => 'admin_categories_create',);
                }
                not_admin_categories_create:

                // admin_categories_edit
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_edit')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\CategoriesController::editAction',));
                }

                // admin_categories_update
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_categories_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_update')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\CategoriesController::updateAction',));
                }
                not_admin_categories_update:

                // admin_categories_delete
                if (preg_match('#^/admin/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_categories_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_categories_delete')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\CategoriesController::deleteAction',));
                }
                not_admin_categories_delete:

            }

            if (0 === strpos($pathinfo, '/admin/ProductDescription')) {
                // admin_ProductDescription
                if ($pathinfo === '/admin/ProductDescription') {
                    return array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductDescriptionController::indexAction',  '_route' => 'admin_ProductDescription',);
                }

                // admin_ProductDescription_show
                if (preg_match('#^/admin/ProductDescription/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ProductDescription_show')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductDescriptionController::showAction',));
                }

            }

        }

        // admin_ProductDescription_new
        if (preg_match('#^/(?P<_locale>[^/]++)/admin/ProductDescription/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ProductDescription_new')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductDescriptionController::newAction',));
        }

        if (0 === strpos($pathinfo, '/admin/ProductDescription')) {
            // admin_ProductDescription_create
            if ($pathinfo === '/admin/ProductDescription/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_ProductDescription_create;
                }

                return array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductDescriptionController::createAction',  '_route' => 'admin_ProductDescription_create',);
            }
            not_admin_ProductDescription_create:

            // admin_ProductDescription_edit
            if (preg_match('#^/admin/ProductDescription/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ProductDescription_edit')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductDescriptionController::editAction',));
            }

            // admin_ProductDescription_update
            if (preg_match('#^/admin/ProductDescription/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_ProductDescription_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ProductDescription_update')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductDescriptionController::updateAction',));
            }
            not_admin_ProductDescription_update:

            // admin_ProductDescription_delete
            if (preg_match('#^/admin/ProductDescription/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_ProductDescription_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ProductDescription_delete')), array (  '_controller' => 'Site\\BackOfficeBundle\\Controller\\ProductDescriptionController::deleteAction',));
            }
            not_admin_ProductDescription_delete:

        }

        // site_front_office_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'site_front_office_homepage');
            }

            return array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\PromoController::indexAction',  '_route' => 'site_front_office_homepage',);
        }

        // site_front_office_product
        if (0 === strpos($pathinfo, '/products') && preg_match('#^/products/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_front_office_product')), array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\DefaultController::productsAction',));
        }

        // site_front_office_detailproduct
        if (0 === strpos($pathinfo, '/details') && preg_match('#^/details/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_front_office_detailproduct')), array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\DefaultController::detailproductAction',));
        }

        // site_front_office_panier
        if ($pathinfo === '/checkout') {
            return array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\DefaultController::checkoutAction',  '_route' => 'site_front_office_panier',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // site_front_office_modipanier
            if (0 === strpos($pathinfo, '/ajouter') && preg_match('#^/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_front_office_modipanier')), array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\DefaultController::ajouterAction',));
            }

            // site_front_office_addpanier
            if (0 === strpos($pathinfo, '/add') && preg_match('#^/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_front_office_addpanier')), array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\DefaultController::addAction',));
            }

        }

        // site_front_office_deletepanier
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_front_office_deletepanier')), array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\DefaultController::deleteAction',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            // site_front_office_customer
            if ($pathinfo === '/customer') {
                return array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\DefaultController::customerAction',  '_route' => 'site_front_office_customer',);
            }

            if (0 === strpos($pathinfo, '/confirm')) {
                // site_confirme
                if ($pathinfo === '/confirm') {
                    return array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\DefaultController::confirmationAction',  '_route' => 'site_confirme',);
                }

                // site_confirmeEnd
                if ($pathinfo === '/confirmTwo') {
                    return array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\DefaultController::conftwoAction',  '_route' => 'site_confirmeEnd',);
                }

            }

        }

        // site_listPromo
        if (0 === strpos($pathinfo, '/promo') && preg_match('#^/promo/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'site_listPromo')), array (  '_controller' => 'Site\\FrontOfficeBundle\\Controller\\PromoController::listpromoAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
