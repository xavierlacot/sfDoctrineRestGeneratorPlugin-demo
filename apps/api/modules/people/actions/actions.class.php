<?php

/**
 * people actions.
 *
 * @package    sfDoctrineRestGeneratorPlugin-demo
 * @subpackage people
 * @author     Xavier Lacot <xavier@lacot.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z xavier $
 * @see        class::autopeopleActions
 */
class peopleActions extends autopeopleActions
{
  public function getCreateValidators()
  {
    // make created_at and updated_at fields non-required
    $validators = parent::getCreateValidators();
    $validators['created_at'] = new sfValidatorDateTime(array('required' => false));
    $validators['updated_at'] = new sfValidatorDateTime(array('required' => false));
    return $validators;
  }
}
