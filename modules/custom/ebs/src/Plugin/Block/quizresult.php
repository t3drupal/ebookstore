<?php

namespace Drupal\ebs\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;

/**
 *
 * @Block(
 * 	id = "quiz_res",
 * 	admin_label = @Translation("quiz_resultats")
 * )
 */
class quizresult extends BlockBase {
  public function build() {
	$db = \Drupal::database();
	$current_id = \Drupal::currentUser()->id();
	$res = $db->select('quiz_result', 'n')
	  ->fields('n', array('name', 'created'))
	  ->condition('user_id', $current_id)
	  ->execute()
	  ->fetchAll();
	if (empty($res)) {
	  return array(
		'#markup' => $this->t('Vous n\'avez pas encore fait de quiz')
	  );
	}
	else {
	  foreach ($res as $row) {
		$content[] = array($row->name, date('m/d/Y - H:i:s', $row->created));
	  }
	  $headers = array("Quiz", "Date");
	  return array(
		'#theme' => 'table',
		'#header' => $headers,
		'#rows' => $content
	  );
	}
  }
}