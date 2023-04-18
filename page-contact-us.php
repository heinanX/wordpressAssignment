<?php get_header();  ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                <?php while (have_posts()) : the_post(); ?>
  
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                        
                    <?php endwhile; ?>
                    <form>
                        <label>Name</label>
                        <input type="text" />
                        <label>E-mail</label>
                        <input type="email" />
                        <label>Messsage</label>
                        <textarea></textarea>
                        <input type="submit" value="Skicka" />
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

</body>
</html>