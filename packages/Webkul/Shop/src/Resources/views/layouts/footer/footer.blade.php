<div class="footer">
    <div class="footer-content">
        <div class="footer-list-container">

            <?php
                $categories = [];

                foreach (app('Webkul\Category\Repositories\CategoryRepository')->getVisibleCategoryTree(core()->getCurrentChannel()->root_category_id) as $category){
                    if ($category->slug)
                        array_push($categories, $category);
                }
            ?>

            @if (count($categories))
                <div class="list-container">
                    <span class="list-heading">Categories</span>

                    <ul class="list-group">
                        @foreach ($categories as $key => $category)
                            <li>
                                <a href="{{ route('shop.categories.index', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! DbView::make(core()->getCurrentChannel())->field('footer_content')->render() !!}

            <div class="list-container">
                <span class="list-heading">{{ __('shop::app.footer.subscribe-newsletter') }}</span>
                <div class="form-container">
                    <form action="{{ route('shop.subscribe') }}">
                        <div class="control-group" :class="[errors.has('subscriber_email') ? 'has-error' : '']">
                            <input type="email" class="control subscribe-field" name="subscriber_email" placeholder="Email Address" required><br/>

                            <button class="btn btn-md btn-primary">{{ __('shop::app.subscription.subscribe') }}</button>
                        </div>
                    </form>
                </div>

                <?php
                    $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
                    $searchTerm = explode("?", $query);

                    foreach($searchTerm as $term){
                        if (strpos($term, 'term') !== false) {
                            $serachQuery = $term;
                        }
                    }
                ?>
    
    
            </div>
        </div>
    </div>
</div>
