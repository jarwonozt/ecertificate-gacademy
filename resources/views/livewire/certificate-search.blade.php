<div wire:init="loadPosts">
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
                <h2 class="wow fadeInUp">Cek sertifikat kamu sekarang !</h2>
                <p class="wow fadeInUp" data-wow-delay="0.2s">Masukan kode serifikat/nama kelas/nama kamu di sini</p>
                <form class="header_search_form">
                    <div class="header_search_form_info">
                        <div class="form-group">
                            <div class="input-wrapper">
                                <i class="icon_search"></i>
                                <input type='text' id="searchbox" wire:model="search"
                                    placeholder="Cth : DI131AA" />

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
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="doc_features_area">
        <div class="container">
            @if ($data == 0)
                <div class="doc_features_inner p-4">
                        Data not found!
                </div>
            @endif

            @if (empty($data) || $data == null)
                <div class="doc_features_inner mt-2 p-4">
                    <div class="media wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.8s">
                        <img src="{{asset('assets')}}/img/new/icon8.png" alt="" style="margin-right:10px;">
                        <h6>Sertifikat yang tercantum di sini adalah sertifikat resmi yang diperoleh setelah menyelesaikan kelas premium di g-academy. Silakan periksa untuk memastikan keaslian sertifikat.</h4>
                    </div>
                </div>
            @else
                @if(isset($data))
                    @forelse ($data['data'] as $k=>$v)

                        <div class="doc_features_inner p-4 mt-1">
                            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="0.5s">
                                <img src="{{asset('assets')}}/img/new/icon1.png" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h4>{{ $v['certificate']['user']['name'] }}</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                                <img src="{{asset('assets')}}/img/new/icon2.png" alt="">
                                <div class="media-body">
                                    <a href="#">
                                        <h4>{{ strtoupper($v['certificate']['class']['name']) }}</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.7s">
                                <img src="{{asset('assets')}}/img/new/icon3.png" alt="">
                                <div class="media-body">
                                    <a class="btn action_btn thm_btn"  href="{{ $v['certificate']['download'] }}">
                                        Download
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No users</p>
                    @endforelse

                @endif
            @endif
        </div>
    </section>
</div>
