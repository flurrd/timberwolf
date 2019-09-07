<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timberwolf
 */

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main site-max-width">
            <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.1/css/jquery.dataTables.css">
            <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.1/js/jquery.dataTables.js"></script>
            <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/505bef35b56/sorting/date-eu.js"></script>
            <script type="text/javascript"> $(document).ready(function() {$('table.display').dataTable({"paging":   false, columnDefs: [{ type: 'date-eu', targets: 1 }] }); }); </script>




            <?php
                $url = 'https://staging.puzzlexperts.com/OnSaleDates/dates/aus-nz'; 
                $title = "Australia and New Zealand Titles";
                $country = "AU";
                $rows = json_decode(file_get_contents($url), true);
            ?>

            <div class="on-sale-dates-wrapper">

                <h1> Australia & New Zealand On Sale Dates</h1>

                <p>
                Lorem ipsum dolor sit amet, ex mea diam partem vivendo, id scribentur complectitur mea. Amet quodsi diceret vim at, per tincidunt pertinacia assueverit at. Vis ea repudiare eloquentiam, luptatum referrentur mea te, sed ei aliquam apeirian. Eum ei dicant offendit partiendo, cu sit iudico docendi mediocrem, et mel adhuc numquam vituperata. Nulla nullam consequat ius id, sed ad tibique ponderum, ea dolorum civibus prodesset cum.
                </p>


                <table width="100%" class="display" id="">
                <thead>
                <tr>
                    <th><?php echo $title; ?> (click to order by title)</th>
                    <th>On Sale Date (click to order by date)</th>
                </tr>
                </thead>

                <tbody>
                    <?php
                        foreach ($rows as $row)
                        {
                            if (
                                strpos($row['publicationName'], 'SUPER SUDOKU') === false && 
                                strpos($row['publicationName'], 'HOLIDAY COLLECTION') === false &&
                                strpos($row['publicationName'], 'BIG') === false
                            ) 
                            {
                                echo "<tr>";
                                echo "<td>" . $row['publicationName'] . "</td>";
                                echo "<td>" . date_format(new DateTime($row['onSaleDate']), 'd.m.Y') . "</td>";
                                echo "</tr>";
                            }
                            if (strpos($row['publicationName'], 'HOLIDAY COLLECTION') === 0) {
                                echo "<tr>";
                                echo "<td>" . 'CROSSWORD & PUZZLE COLLECTION' . substr($row['publicationName'], 18) . "</td>";
                                echo "<td>" . date_format(new DateTime($row['onSaleDate']), 'd.m.Y') . "</td>";
                                echo "</tr>";
                            }
                            if (strpos($row['publicationName'], 'BIG') === 0) {
                                echo "<tr>";
                                echo "<td>" . substr($row['publicationName'], 0, -18) . "</td>";
                                echo "<td>" . date_format(new DateTime($row['onSaleDate']), 'd.m.Y') . "</td>";
                                echo "</tr>";
                            }                        
                        }
                    ?>
                </tbody>
                </table>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/* get_sidebar(); */
get_footer();
