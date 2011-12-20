<?php

/**
 * Implements hook_contextual_forms_info().
 * 
 * Keys you may implement are:
 * - title: The human-readable name
 * - description: A short description of what the form does.
 * - function: (optional) Specify the function name that is the form builder,
 *   defaults to the machine name.
 * - category: (optional) Place the form in a specified content category in
 *   Page Manager.
 * - includes: (optional) Specify the file to include for the form builder, as
 *   is expected by $form_state['build_info']['files'].
 *   @see form_load_include(). Keys required are:
 *     - module: (optional) The module owning the include file. Auto-derived.
 *     - name: The name of file to load, without extension
 *     - type: (optional) The type of include file, defaults to 'inc'
 * - arguments: (optional) A keyed array of arguments to pass into the form
 *   builder. These actually are converted to Ctools contexts. The keys must
 *   represent existing Ctools contexts, and each item in the array should
 *   provide the following keys:
 *     - title: The label for the context
 *     - type: the type of Ctools context class to use for generating the
 *       context. Allowed values are "optional" or "required"
 *     Alternatively, you can also just provide a string value for the label,
 *     which will then use the default type of "required"
 */
function hook_contextual_forms_info() {
  $forms['mymod_subscribe'] = array(
    'title' => 'MyMod Subscription Form',
    'description' => 'A form for requesting information from subscribers.',
    'category' => t('My Module'),
    'include' => array(      
      // The form resides in mymod.admin.inc
      'module' => 'mymod',
      'name' => 'mymod.admin',
      'type' => 'inc',
    ),
    'function' => 'mymod_subscribe',
    'arguments' => array(
      'node' => t('Node'),
      'string' = array(
        'title' => t('Operation'),
        'type' => 'optional',
      ),
    ),
  );
  
  return $forms;
}
