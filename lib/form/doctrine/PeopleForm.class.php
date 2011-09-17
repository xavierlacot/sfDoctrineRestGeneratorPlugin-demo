<?php

/**
 * People form.
 *
 * @package    sfDoctrineRestGeneratorPlugin-demo
 * @subpackage form
 * @author     Xavier Lacot <xavier@lacot.org>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PeopleForm extends BasePeopleForm
{
  public function configure()
  {
    unset($this['created_at']);
    unset($this['updated_at']);
  }
}
