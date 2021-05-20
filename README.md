# lyon-martin

Custom development in themes/lyon-martin
Based on twentytwentyone as a child theme

So far customizations include:

Custom ACF Gutenberg Block for form download link
- template in template-parts/form-download-link.php
- registered in functions.php with acf_register_block_type
- created in the UI under Custom Fields

Custom JS to make the Yoast FAQ Block collapsible
- Enqueued custom js file in functions.php from /assets/js/faq-collapse.js
- Added styles like display:none in style.css

Latest news area added to hompage
- Added template-parts/content/content-page (general page template, copy/pasted from parent) with including news area from template-parts/widgets/latest-news.php if isfrontpage

Had to include certain stylesheets in assets/css from parent
- Make editor style background color always white in style-editor.css
- Copy the dark-mode style sheet over (? not sure why TODO)

Overall style edits and small tweaks to style.css
