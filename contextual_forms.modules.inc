<?php

/**
 * @file
 *   Implements content forms integration for core modules
 */

/**
 * Implements hook_contextual_forms_info() on behalf of the user module.
 */
function user_contextual_forms_info() {
  $forms['user_login'] = array(
    'title' => t('User Login'),
    'description' => t('User login form.'),
    'include' => array(
      'module' => 'user',
      'name' => 'user.pages',
      'type' => 'inc',
    ),
  );

  $forms['user_register_form'] = array(
    'title' => t('User Register Form'),
    'description' => t('User register form.'),
  );

  $forms['user_profile_form'] = array(
    'title' => t('User Profile Form'),
    'description' => t('Edit a user account or one of their profile categories'),
    'include' => array(
      'module' => 'user',
      'name' => 'user.pages',
      'type' => 'inc',
    ),
    'contexts' => array(
      array(
        'title' => t('User'),
        'keyword' => 'user',
      ),
      array(
        'title' => t('Category'),
        'keyword' => 'string',
        'required' => FALSE,
      ),
    ),
  );

  return $forms;
}
