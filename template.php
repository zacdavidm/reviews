function reviews_node_view($node, $view_mode, $langcode) {
  drupal_set_message("type: ".$node->type);
  if (in_array($node->type, array("housing","landlord","tennant"))) {
    if (arg(0) != 'blog' || arg(1) != $node->uid) {
      $links['review'] = array(
        'title' => t("Review"),
        'href' => "node/add/review?field_reviewed_item=$node->nid",
        'attributes' => array('title' => t("Review")),
      );
      $node->content['links']['review'] = array(
        '#theme' => 'links__node__review',
        '#links' => $links,
        '#attributes' => array('class' => array('links', 'inline')),
      );
    }
  }
}
