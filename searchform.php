<form class="p-form-box" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input class="p-form-box__input" type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="注文内容を検索できます">
        <button class="p-form-box__submit" type="submit" name="s">検索</button>
      </form>