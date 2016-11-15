<?php

namespace Drupal\ebs\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;

/**
 *
 * @Block(
 * 	id = "nombres_bloc",
 * 	admin_label = @Translation("header_nbs")
 * )
 */
class nombresbloc extends BlockBase {
  public function build() {
	$db = \Drupal::database();
	$nb = $db->select('node','n')
	  ->fields('n', array('nid'))
	  ->condition('type', 'livre')
	  ->countQuery()
	  ->execute()
	  ->fetchField();
	$nbc = $db->select('taxonomy_term_data','n')
	  ->fields('n', array('tid'))
	  ->condition('vid', 'categorie')
	  ->countQuery()
	  ->execute()
	  ->fetchField();
	$nbt = $db->select('taxonomy_term_data','n')
	  ->fields('n', array('tid'))
	  ->condition('vid', 'theme')
	  ->countQuery()
	  ->execute()
	  ->fetchField();
	return array('#markup' => $this->t('trouvés <strong>@nb</strong> livres parmi nos <strong>@nbc</strong> catégories et <strong>@nbt</strong> thèmes',
	  array('@nb' => $nb, '@nbc' => $nbc, '@nbt' => $nbt)));
  }
}