<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <form id="searchform" class="searchform">
                    <div>

                    <?php get_search_form(); ?> <!-- Wp built in function for search form -->

                    </div>
                    
                </form>
            </li>
        </ul>
        <ul role="navigation">
            <?php dynamic_sidebar('sidebar') ?>  <!-- gets sidebar widget -->
        </ul>
    </div>
</aside>