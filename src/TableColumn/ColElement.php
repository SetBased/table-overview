<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\Table\TableColumn;

use SetBased\Abc\Helper\Html;
use SetBased\Abc\HtmlElement;

//----------------------------------------------------------------------------------------------------------------------
/**
 * Class for col elements.
 */
class ColElement extends HtmlElement
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the HTML code for this col element.
   */
  public function getHtmlCol()
  {
    return Html::generateVoidElement('col', $this->attributes);
  }

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
