<div>
    <section class="doc_banner_area banner_creative1">
        <ul class="list-unstyled banner_shap_img">
            <li><img src="{{asset('assets')}}/img/new/banner_shap1.png" alt=""></li>
            <li><img src="{{asset('assets')}}/img/new/banner_shap4.png" alt=""></li>
            <li><img src="{{asset('assets')}}/img/new/banner_shap3.png" alt=""></li>
            <li><img src="{{asset('assets')}}/img/new/banner_shap2.png" alt=""></li>
            <li><img data-parallax='{"x": -180, "y": 80, "rotateY":2000}' src="{{asset('assets')}}/img/new/plus1.png" alt=""></li>
            <li><img data-parallax='{"x": -50, "y": -160, "rotateZ":200}' src="{{asset('assets')}}/img/new/plus2.png" alt=""></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="doc_banner_content">
                <h2 class="wow fadeInUp">How can we help you?</h2>
                <p class="wow fadeInUp" data-wow-delay="0.2s">Enter the certificate code here</p>
                <form class="header_search_form">
                    <div class="header_search_form_info">
                        <div class="form-group">
                            <div class="input-wrapper">
                                <i class="icon_search"></i>
                                <input type='search' id="searchbox" wire:model="search" autocomplete="off"
                                    placeholder="Search the Doc" />

                                {{-- <select class="search-expand-types custom-select" name="post_type"
                                    id="search_post_type">
                                    <option value="">All Docs </option>
                                    <option value="manual_kb">Knowledge Base</option>
                                    <option value="manual_documentation">Documentation</option>
                                    <option value="manual_faq">FAQs</option>
                                    <option value="forum">Forums</option>
                                    <option value="manual_portfolio">Portfolio</option>
                                    <option value="product">Products</option>
                                </select> --}}
                            </div>
                            <button type="submit" class="header_form_submit">Search</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="doc_features_area">
        <img class="doc_features_shap" src="{{asset('assets')}}/img/new/shap_white.png" alt="">
        <div class="container">
            @if ($data == 0)
                <div class="doc_features_inner p-4">
                        Data not found!
                </div>
            @endif

            @if (empty($data))
                <div class="doc_features_inner mt-2">
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="0.5s">
                        <img src="{{asset('assets')}}/img/new/icon1.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Knowledge Base</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                        <img src="{{asset('assets')}}/img/new/icon2.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Community Forums</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.7s">
                        <img src="{{asset('assets')}}/img/new/icon3.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Documentation</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
                        <img src="{{asset('assets')}}/img/new/icon4.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Working with Docs</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
                        <img src="{{asset('assets')}}/img/new/icon5.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Getting Started</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                        <img src="{{asset('assets')}}/img/new/icon6.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Account Management</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">
                        <img src="{{asset('assets')}}/img/new/icon7.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Productivity</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.8s">
                        <img src="{{asset('assets')}}/img/new/icon8.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Docs in Help Scout</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
                        <img src="{{asset('assets')}}/img/new/icon9.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Formatting Content</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="see_more_item collapse-wrap">
                        <div class="media doc_features_item">
                            <img src="{{asset('assets')}}/img/new/icon7.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Productivity</h4>
                                </a>
                                <p>245 Posts</p>
                            </div>
                        </div>
                        <div class="media doc_features_item">
                            <img src="{{asset('assets')}}/img/new/icon8.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Docs in Help Scout</h4>
                                </a>
                                <p>245 Posts</p>
                            </div>
                        </div>
                        <div class="media doc_features_item">
                            <img src="{{asset('assets')}}/img/new/icon9.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Formatting Content</h4>
                                </a>
                                <p>245 Posts</p>
                            </div>
                        </div>
                    </div>
                    <a href="#more-features" class="collapse-btn see_btn">
                        <i class="arrow_carrot-down_alt2"></i>
                        <span class="text">Show More</span>
                    </a>
                </div>
            @else
                <div class="doc_features_inner p-4">
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="0.5s">
                        <img src="{{asset('assets')}}/img/new/icon1.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>{{ $data['data']['certificate']['user']['name'] }}</h4>
                            </a>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                        <img src="{{asset('assets')}}/img/new/icon2.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>{{ strtoupper($data['data']['certificate']['class']['name']) }}</h4>
                            </a>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.7s">
                        <div class="media-body">
                            <a class="btn action_btn thm_btn"  href="{{ $data['data']['certificate']['download'] }}">
                                Download
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</div>
