<?php
/**
 * APA Style citation with BibTeX generation
 * Copyright (C) 2015  Arie Nugraha (dicarve@gmail.com)
 * Author: Erwan Setyo Budi (erwans818@gmail.com)
 */

// Set pre-processor variables
$author_list = [];
$authors_string = '';

// Iterate some author data
foreach ($authors as $order => $data) {
    $chunk_name = explode(' ', $data['author_name']);
    $last_chunkname_order = array_key_last($chunk_name);
    $last_name = $chunk_name[$last_chunkname_order];
    $first_name = $chunk_name[0] ?? '';

    // Handle name formatting
    unset($chunk_name[$last_chunkname_order]);
    if ($order > 0 && count($authors) > 2) continue;
    
    $author_list[] = $last_name . ', ' . implode(', ', array_map(fn($name) => ucfirst(substr($name, 0,1)) . '.', $chunk_name));
}

$authors_string = implode(', ', $author_list) . (count($authors) > 2 ? ' et al.' : '');

function generateBibTeX($authors_string, $title, $publish_year, $edition, $language_name, $publish_place, $publisher_name, $isbn_issn = '', $collation = '', $notes = '') {
    $bibtex = "@book{bibtex_entry,
        author = {" . $authors_string . "},
        title = {" . $title . "},
        year = {" . $publish_year . "},
        edition = {" . $edition . "},
        language = {" . $language_name . "},
        address = {" . $publish_place . "},
        publisher = {" . $publisher_name . "}";

    
    
    if (!empty($isbn_issn)) {
        $bibtex .= ",
        isbn = {" . $isbn_issn . "}";
    }
    if (!empty($collation)) {
        $bibtex .= ",
        pages = {" . $collation . "}";
    }
    if (!empty($notes)) {
        $bibtex .= ",
        abstract = {" . $notes . "}";
    }
    
    $bibtex .= "
    }";
    
    return $bibtex;
}

// Generate BibTeX string
$bibtex_string = generateBibTeX($authors_string, $title, $publish_year, $edition, $language_name, $publish_place, $publisher_name, $isbn_issn, $collation, $notes);
?>

<!-- Add a download link for BibTeX -->
<br>
<a href="data:application/x-bibtex;charset=utf-8,<?php echo rawurlencode($bibtex_string); ?>" download="citation.bib">
    <button class="s-btn btn btn-primary">Download BibTeX</button>
</a>


<p class="citation text-justify">
  <h3><?php echo __('APA Style'); ?></h3>
  <?php if ($authors_string) : ?>
    <span class="authors"><?php print $authors_string ?></span> <span class="year">(<?php print $publish_year ?>).</span>
    <span class="title"><em><?php print $title ?></em> <?php if ($edition) : ?>(<span class="edition"><?php print $edition ?>)</span><?php endif; ?>.</span>
  <?php else : ?>
    <span class="title"><em><?php print $title ?></em>.</span> <span class="year">(<?php print $publish_year ?>).</span>
  <?php endif; ?>
  <span class="publish_place"><?php print $publish_place ?>:</span>
  <span class="publisher"><?php print $publisher_name ?>.</span>
  
</p>