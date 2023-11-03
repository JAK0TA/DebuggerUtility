<?php

// Copyright JAKOTA Design Group GmbH. All rights reserved.
declare(strict_types=1);

namespace JAKOTA\Typo3ToolBox\ViewHelpers;

use JAKOTA\Typo3ToolBox\Utility\DateUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class RelativeDateViewHelper extends AbstractViewHelper {
  /**
   * Initialize arguments.
   */
  public function initializeArguments(): void {
    parent::initializeArguments();
    $this->registerArgument('value', 'DateTime', 'datetime to format');
  }

  /**
   * @return null|string
   */
  public function render() {
    /** @var \DateTime $date */
    $date = $this->arguments['value'];

    return DateUtility::calculateRelativeDate($date);
  }
}
