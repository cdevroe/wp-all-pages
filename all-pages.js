(function (win,doc) {
  'use strict';

  // Wait for the document to be ready.
  doc.addEventListener("DOMContentLoaded", function(e) {

    var sub_menu_links = doc.querySelectorAll('a[href*="edit.php?post_type=page&page="]'),
    i = 0,
    href = '';

    for (i=0; i<sub_menu_links.length; i++) {
      href = sub_menu_links[i].getAttribute('href').replace('edit.php?post_type=page&page=','post.php?action=edit&post=');
      sub_menu_links[i].setAttribute("href", href)
    }

  });

}(this, this.document));
