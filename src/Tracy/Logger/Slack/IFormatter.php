<?php

namespace Contributte\Logging\Tracy\Logger\Slack;

use Exception;
use Throwable;

/**
 * @author Milan Felix Sulc <sulcmil@gmail.com>
 */
interface IFormatter
{

	/**
	 * @param SlackContext $context
	 * @param string|Exception|Throwable $message
	 * @param string $priority
	 * @return SlackContext
	 */
	public function format(SlackContext $context, $message, $priority);

}
